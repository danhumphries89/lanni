<?php get_header(); ?>

<div id="main-content" class="single-page">
	<div class="left-items">
		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="page items">
			<header class="page-header">
				<h2><?php the_title(); ?></h2>
			</header>

			<article class="page-article">
				<?php the_content(); ?>
			</article>
		</div>

		<?php endwhile; ?>
	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>