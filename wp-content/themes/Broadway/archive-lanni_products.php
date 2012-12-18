<?php get_header(); ?>

<div class="flexslider">
	<ul class="slides">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php 
			//get featured image
			if( has_post_thumbnail() ){
				$url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
			}else{ $url = ""; }
		?>

		<li <?php echo ($url != "") ? "style='background-image: url($url);'" : ""; ?>>
			<?php 
				//get the categories
				$categories = get_the_category( get_the_ID() );

				//get custom post data
				$options_meta = get_post_meta(get_the_ID(), 'options', true); 
				$price = get_post_meta(get_the_ID(), 'price', true);
			?>


			<div id="product<?php the_ID(); ?>" class="category-view product-details">

				<header class="product-header">
					<h2>
						<span class="title"><?php the_title(); ?></span>
						<span class="category"><?php echo $categories[0]->name; ?></span>
					</h2>

					<div class="price-block">
						<span class="price">&pound;<?php echo $price; ?></span>
					</div>
				</header>

				<article class="product-content">
					<?php the_content(); ?>
				</article>

				<footer class="product-footer">
					<a href="<?php echo get_permalink( get_the_ID() ); ?>">
						<span>Customise & Buy</span>
					</a>
				</footer>
			</div>
		</li>
	<?php endwhile; ?>
	</ul>
</div>

<?php get_footer(); ?>