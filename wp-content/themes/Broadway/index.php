<?php get_header(); ?>

<div id="main-content">
	<div class="left-items">

		<?php while ( have_posts() ) : the_post(); ?>

			<header class="left-page-header">
				<h2><?php the_title(); ?></h2>
			</header>

			<article class="left-page-article">
				<?php the_content(); ?>
			</article>

		<?php endwhile; ?>

	</div>

	<div class="columns left-column">
		<div class="widgets">
			<div class="widget gallery-list">
				<h3 class="gallery widget-title">Gallery</h3>
				<ul class="gallery-area">
					<?php $categories = get_categories( array(
								'type' => 'lanni_products',
								'orderby' => 'ASC',
								'child_of' => 5,
								'hide_empty' => 0,
							)
						);
						foreach($categories as $key => $category) : 
					?>
					<li class="<?php echo $category->category_nicename; echo ($key == 0) ? ' visible' : ''; ?>">
						<span><?php echo $category->cat_name; ?></span>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<?php 
			
				//query to get the most popular product (random for now)
				$popular_query = new WP_Query( 
					array ( 
						'orderby' => 'rand',
						'posts_per_page' => '1',
						'category_name' => 'designs',
						'post_type' => 'lanni_products'
					) 
				);
				while( $popular_query->have_posts() ) : $popular_query->the_post(); 
				
				$featured_image_url = ( has_post_thumbnail() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : "";
				$categories = get_the_category( get_the_ID() );
				$price = get_post_meta(get_the_ID(), 'price', true); 

			?>

				<div class="widget popular-products">
					<h3 class="popular widget-title">Popular</h3>
					<section class="content" <?php echo ($featured_image_url) ? "style='background-image: url($featured_image_url);'" : ""; ?> >
						<h3>
							<a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php the_title(); ?></a>
							<a href="<?php echo get_category_link( $categories[1]->cat_ID ); ?>" class="category"><?php echo $categories[1]->name; ?></a>
						</h3>

						<div class="price-block">
							<span>&pound;<?php echo $price; ?></span>
						</div>

						<?php the_content(); ?>
					</section>
				</div>
				<?php endwhile; ?>

				<div class="widget testimonial-area">
					<h3 class="testimonials widget-title">Testimonials</h3>
					<div id="testimonial-slideshow" class="flexslider">
						<ul class="slides">
							<?php 
								wp_reset_query();
								$testimonial_query = new WP_Query( array( 'category_name' => 'testimonials', 'post_type' => 'post' ) );
								while($testimonial_query->have_posts()) : $testimonial_query->the_post();
							?>
							<li> <?php the_content();?> <span><?php the_title(); ?></span> </li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
		</div>
	</div>

	<div class="columns right-column">
		<div class="widgets">
			<div class="widget design-list">
				<h3 class="designs widget-title">Designs</h3>
				<ul class="category-list">
					<?php wp_list_categories( array(
								'orderby' => 'ASC',
								'use_desc_for_title' => 0,
								'child_of' => 5,
								'title_li' => '',
								'show_count' => 0,
								'hide_empty' => 0
							)
						); 
					?>
				</ul>
			</div>

			<div class="widget contact-details" id="contact">
				<h3 class="contact widget-title">Contact</h3>
				<p>If you would prefer to fill out an order form; <a href="/orderform.pdf">download</a>, complete & send it to the address below: </p>
				<p>
					<span>P.O Box 470</span>
					<span>Ashford</span>
					<span>Kent</span>
					<span>TN23 9PL</span>
				</p>
			</div>

			<div class="widget telephone-details">
				<h3 class="telephone widget-title">Telephone</h3>
				<p>If you have any questions, or would like to discuss an order; please contact me: </p>
				<p class="numbers">
					<span>07952 483705</span>
					<span>01233 333481</span>
				</p>
				<p class="days">(Monday - Friday)</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>