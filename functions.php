<?php 
// Add scripts and stylesheets
function bigeasypan_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/bigeasypan.js', array(), "1.0", true );
}

add_action( 'wp_enqueue_scripts', 'bigeasypan_scripts' );

// WordPress Titles
//add_theme_support( 'title-tag' );

function getAttachUrl ($postId, $itself = false) {
	
	if (!$itself) { // get attachment from a post
		$args = array(
				'numberposts' => -1,
				'post_mime_type' => 'image',
				'post_parent'    => $postId,
				'post_status'    => null,
				'post_type'      => 'attachment',
		);
		$attachments = get_posts( $args );
		if ( $attachments ) {
			$attachment = wp_get_attachment_image_src( $attachments[0]->ID, 'large' );
			return $attachment[0];
		} 
	} else { 
		$post = get_post($postId);
		if ($post)		return $post->guid;
	}
	return "";
}
/*
function get_current_cat() {
	$categories = get_the_category();
	$category = $categories[0];
	return $category;
}
*/
add_filter('the_content', 'strip_images',2);
function strip_images($content) {
	if (in_category('2'))
		return preg_replace('/<img[^>]+./','',$content);
	else 
		return $content;
}

function disable_embeds_init() {

	// Remove the REST API endpoint.
	remove_action('rest_api_init', 'wp_oembed_register_route');

	// Turn off oEmbed auto discovery.
	// Don't filter oEmbed results.
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

	// Remove oEmbed discovery links.
	remove_action('wp_head', 'wp_oembed_add_discovery_links');

	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action('wp_head', 'wp_oembed_add_host_js');
}

add_action('init', 'disable_embeds_init', 9999);

function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

?>