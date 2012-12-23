<?php

/** Add theme supports **/
add_theme_support( 'post-thumbnails' );

/** Add Menus that we wish to use **/
function registerMenus() {
  register_nav_menus(
  	array( 
  		'mainmenu' => __( 'Main Menu' ),
    	'design-menu' => __( 'Design Menu' ) 
    )
  );
}
add_action( 'init', 'registerMenus' );

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
		'rewrite' => false,
		'has_archive' => true,
		'hierarchical' => true,
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
function customerDetailsShortcode( $atts ){
	$output = "<label for='customer_name'>Fullname</label>"
				. "<input type='text' name='customer_name' id='customer_name' class='cd_textbox' />"
				. "<label for='customer_address'>Address</label>"
				. "<textarea rows='4' name='customer_address' id='customer_address' class='cd_textarea'></textarea>"
				. "<label for='customer_email'>Email Address</label>"
				. "<input type='email' name='customer_email' id='customer_email' class='cd_textbox' />"
				. "<label for='customer_telephone'>Telephone</label>"
				. "<input type='text' name='customer_telephone' id='customer_telephone' class='cd_textbox' />";
	return $output;
}
add_shortcode( 'customerDetails', 'customerDetailsShortcode' );

function bangleSizeShortcode( $atts ){
	$output = "<div class='row'>"
				. "<label for='bangle_size' class='left'>Size</label>"
				. "<select name='bangle_size' id='bangle_size'>"
					. "<option value=''>Select Size</option>"
					. "<option value='S'>Small</option>"
					. "<option value='M'>Medium</option>"
					. "<option value='L'>Large</option>"
					. "<option value='XL'>Extra Large</option>"
				. "</select>"
			. "</div>";
	return $output;
}
add_shortcode( 'bangleSize', 'bangleSizeShortcode' );

function giftRecipientShortcode( $atts ){
	$output = "<label for='gift_name'>Name (if different)</label>"
				. "<input type='text' name='gift_name' id='gift_name' class='gift_textbox' />"
				. "<label for='gift_initals'>Initals to Engrave</label>"
				. "<input type='text' name='gift_initals' id='gift_initals' class='gift_textbox' />"
				. "<label for='gift_time'>Time (24 hours)</label>"
				. "<input type='text' name='gift_type' id='gift_type' class='gift_textbox' />"
				. "<label for='gift_place'>Place of Birth</label>"
				. "<input type='text' name='gift_place' id='gift_place' class='gift_textbox' />"
				. "<label for='gift_gender' class='left'>Gender</label>"
				. "<select name='gift_gender' id='gift_gender'>"
					."<option value='Female'>Female</option>"
					."<option value='Male'>Male</option>"
				. "</select>";
	return $output;
}
add_shortcode( 'giftRecipient', 'giftRecipientShortcode' );

function colourShortcode( $atts ){

	//check to see which drop down list needs to be included
	switch($atts['type']){
		case "glass":
			$output = "<div class='row'>"
						 ."<label for='colour' class='left'>Glass Colour</label>"
						 ."<select name='colour' id='colourOption'>"
						 	 ."<option value=''>Select Colour</option>"
						 	 ."<option value='Multi-Coloured'>Multi-Coloured</option>"
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
			break;
	}
	return $output;
}
add_shortcode( 'colourOptions', 'colourShortcode' );

/** Register Homepage Sidebars **/
register_sidebar(array(
  'name' => __( 'Homepage Left Sidebar' ),
  'id' => 'left-sidebar',
  'description' => __( 'Widgets in this area will be shown in the left hand column on the homepage.' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

?>