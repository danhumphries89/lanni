<?php get_header(); ?>

<div id="main-content">

	<div class="left-items">
		<?php $page_query = new WP_Query( array('post_type' => 'page')); ?>
		<?php while ( $page_query->have_posts() ) : $page_query->the_post(); ?>
		
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

</div>

<?php get_footer(); ?>