<?php

/** Add theme supports **/
add_theme_support( 'post-thumbnails' );

/** Custom Type for Products **/
add_action( 'init', 'create_product_posts' );
function create_product_posts() {
	register_post_type( 'lanni_products',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'products'),
		'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
				'tags',
				'categories'
			),
		'taxonomies' => array('category', 'post_tag')
		)
		
	);
}

/** Add Taxonomies for Custom Post Products **/
add_action('init', 'add_product_taxonomies');
function add_product_taxonomies() {
    register_taxonomy_for_object_type('category', 'lanni_products');
    register_taxonomy_for_object_type('post_tag', 'lanni_products');
}

/** Add Shortcodes to Post Pages for Options **/
function colourShortcode( $atts ){

	$output = "<div class='row options'>"
			 ."<select name='colour' id='colourOption'>"
				 ."<option value='Red'>Red</option>"
				 ."<option value='Pink'>Pink</option>"
				 ."<option value='Orange'>Orange</option>"
				 ."<option value='Silver'>Silver</option>"
				 ."<option value='Gold'>Gold</option>"
				 ."<option value='Dark Blue'>Dark Blue</option>"
				 ."<option value='Light Blue'>Light Blue</option>"
				 ."<option value='Red'>Red</option>"
				 ."<option value='Dark Mauve'>Dark Mauve</option>"
				 ."<option value='Dark Green'>Dark Green</option>"
				 ."<option value='Turquoise'>Turquoise</option>"
				 ."<option value='Green'>Green</option>"
				 ."<option value='Black'>Black</option>"
			 ."</select>"
			 ."</div>";

	return $output;
}
add_shortcode( 'colourOptions', 'colourShortcode' );

?>