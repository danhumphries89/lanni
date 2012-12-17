<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php $options_meta = get_post_meta(get_the_ID(), 'options', true); ?>

		<?php the_content(); ?>


		<?php 
			
			//split the options by the comma
			$optionsList = explode(",", $options_meta);

			//loop through the list and execute the shortcodes
			foreach($optionsList as $options) : 

				//explode to get the attributes
				$option_explode = explode(":", $options);

				//execute the shortcode
				echo do_shortcode( "[" . trim($option_explode[0]) . " " . trim($option_explode[1]) . "]" );

			endforeach;
		?>

	<?php endwhile; ?>

<?php get_footer(); ?>