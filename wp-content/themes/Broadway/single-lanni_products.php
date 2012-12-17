<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php $options_meta = get_post_meta(get_the_ID(), 'options', false); ?>

		<?php the_content(); ?>

		<?php 
			foreach($options_meta as $options) : 
				echo do_shortcode( "[" . $options . "]" );
			endforeach;
		?>

	<?php endwhile; ?>

<?php get_footer(); ?>