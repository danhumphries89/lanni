<?php get_header(); ?>

<div class="left-items">

	<?php while ( have_posts() ) : the_post(); ?>

		<header class="left-page-header">
			<h2><?php the_title(); ?></h2>
		</header>

		<article class="left-page-article">
			<?php the_content(); ?>
		</article>

		<footer class="left-page-footer">
			<span></span>
		</footer>

	<?php endwhile; ?>

</div>

<div class="columns left-column">
	<ul class="widgets">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</ul>
</div>

<?php get_footer(); ?>