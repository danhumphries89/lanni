<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title> <?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?> </title>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/normalize.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/flexslider/flexslider.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
</head>
<?php 
	global $post;
	$current_home = (is_front_page()) ? "home" : ""; 
	$post_type = get_post( $post )->post_type;
?>
<body <?php echo (isset($post_type)) ? "class='$post_type $current_home'" : ''; ?>>

	<div id="design_navigation">
		<a href="http://localhost:8888/lanni" title="Go to the Homepage">
			<span class="home-icon navigation-title">Home</span>
		</a>
		<span class="designs navigation-title">Designs</span>
		<ul class="design-list">
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

	<div class="content">
		<div id="main-header">

			<h1 class="title">
				<a href="#" class="home-link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_black.png" width="200" height="200" alt="Logo" />
					<span>Lanni's Birthchart Bangles</span>
				</a>
			</h1>

		</div>

		<div id="mainmenu">
			<?php wp_nav_menu( array('menu' => 'mainmenu' )); ?>
		</div>
