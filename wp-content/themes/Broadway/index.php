<?php get_header(); ?>

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
		<?php 
		
			//query to get the most popular product (random for now)
			$popular_query = new WP_Query( 
				array ( 
					'orderby' => 'rand',
					'posts_per_page' => '2',
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
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
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
	</div>
</div>

<?php get_footer(); ?>