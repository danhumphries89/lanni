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
function customerDetailsShortcode( $atts ){
	$output = "<div class='customerDetails'>"
			. "<h4>Customer Details</h4>"
			. "<input type='text' placeholder='Fullname' name='customer_name' id='customer_name' class='cd_textbox' />"
			. "<textarea text' palceholder='Address' name='customer_address' id='customer_address' class='cd_textarea'></textarea>"
			. "<input type='email' placeholder='Email Address' name='customer_email' id='customer_email' class='cd_textbox' />"
			. "<input type='text' placeholder='Telephone' name='customer_telephone' id='customer_telephone' class='cd_textbox' />"
			. "</div>";
	return $output;
}
add_shortcode( 'customerDetails', 'customerDetailsShortcode' );

function bangleSizeShortcode( $atts ){
	$output = "<div class='row options'>"
			. "<label for='bangle_size'>Bangle Size'</label>"
			. "<select name='bangle_size' id='bangle_size'>"
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
	$output = "<div class='row options'>"
			. "<h4>Gift Recipient</h4>"
			. "<label for='gift_name'>Name (if different to above)</label>"
			. "<input type='text' name='gift_name' id='gift_name' class='gift_textbox' />"
			. "<label for='gift_initals'>Initals to Engrave</label>"
			. "<input type='text' name='gift_initals' id='gift_initals' class='gift_textbox' />"
			. "<label for='gift_gender'>Gender</label>"
			. "<select name='gift_gender' id='gift_gender'>"
				."<option value='Male'>Male</option>"
				."<option value='Female'>Female</option>"
			. "</select>"
			. "<label for='gift_time'>Time (24 hours)</label>"
			. "<input type='text' name='gift_type' id='gift_type' class='gift_textbox' />"
			. "<label for='gift_place'>Place of Birth</label>"
			. "<input type='text' name='gift_place' id='gift_place' class='gift_textbox' />"
			. "</div>";
	return $output;
}
add_shortcode( 'giftRecipient', 'giftRecipientShortcode' );

function colourShortcode( $atts ){

	//check to see which drop down list needs to be included
	switch($atts['type']){
		case "glass":
			$output = "<div class='row options'>"
					 ."<label for='colour'>Glass Background Colour</label>"
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

?>