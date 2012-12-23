<?php get_header(); ?>

	<div id="product-categories-section" class="section flexslider">
		<ul class="slides">
		<?php

			$category_query = new WP_Query( array( 
				'post_type' => 'lanni_products',
				'cat' => get_query_var("cat")
			));

			while( $category_query->have_posts() ) : $category_query->the_post();
			$categories = get_the_category( get_the_ID() );
			$price = get_post_meta(get_the_ID(), 'price', true); 
		?>
		<li class="product-item">
			<div class="boxes">
				<header class="product-header">
					<h2>
						<a href="<?php echo the_permalink(); ?>">
							<span><?php the_title(); ?><span>
						</a>
					</h2>
				</header>
				<section class="product-content">
					<div class="price-block">
						<span>&pound;<?php echo $price; ?></span>
					</div>
					<?php the_content(); ?>
				</section>
			</div>
		</li>
		<?php endwhile ?>
	</div>
<?php get_footer(); ?>