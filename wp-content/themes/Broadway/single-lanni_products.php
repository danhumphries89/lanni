<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php 
			//get the categories
			$categories = get_the_category( get_the_ID() );

			//get custom post data
			$options_meta = get_post_meta(get_the_ID(), 'options', true); 
			$price = get_post_meta(get_the_ID(), 'price', true);
		?>


		<div id="product<?php the_ID(); ?>" class="product-details">

			<header class="product-header">
				<h2 class="product-title"><?php the_title(); ?></h2>

				<div class="price-block">
					<span class="price">&pound;<?php echo $price; ?></span>
				</div>
			</header>

			<article class="product-content">
				<?php the_content(); ?>
			</article>

			<section class="product-options">
				<?php 
					//split the options by the comma
					$optionsList = explode(",", $options_meta);

					//loop through the list and execute the shortcodes
					foreach($optionsList as $options) : 

						//explode to get the attributes
						$option_explode = explode(":", $options);

						//execute the shortcode
						echo do_shortcode( "[" . trim($option_explode[0]) . " " . trim($option_explode[1])	 . "]" );

					endforeach;
				?>
			</section>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>