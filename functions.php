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

function get_current_cat() {
	$categories = get_the_category();
	for($i = 0; $i < sizeof($categories); $i++ ) 
		if (in_array($categories[$i]->cat_ID, array(3, 4, 6, 7)))
			return $categories[$i];
	
	$category = $categories[0];
	return $category;
}

function get_carousel_post ($count = 0) {
	$args = array(
		'category' => 2,
		'numberposts' => 4
	);
	$posts = get_posts($args);
	return $posts[$count];
}

add_filter('the_content', 'strip_images',2);
function strip_images($content) {
	if (in_category('2'))
		return preg_replace('/<img[^>]+./','',$content);
	else 
		return $content;
}

function custom_pagination($numpages = '', $pagerange = '', $paged = '', $postvar = null) {

	if (empty($pagerange)) {
		$pagerange = 2;
	}

	/**
	 * This first part of our function is a fallback
	 * for custom pagination inside a regular loop that
	 * uses the global $paged and global $wp_query variables.
	 *
	 * It's good because we can now override default pagination
	 * in our theme, and use this function in default quries
	 * and custom queries.
	 */
	if (empty($paged)) {
		$paged = 1;
	}
	if ($numpages == '') {
		global $wp_query;
		$numpages = $wp_query->max_num_pages;
		if(!$numpages) {
			$numpages = 1;
		}
	}
	
	/**
	 * We construct the pagination arguments to enter into our paginate_links
	 * function.
	 */
	$curUrl = get_permalink();
	if (!empty($postvar)) 
		$curUrl = get_permalink($postvar);

	$pagination_args = array(
			'base'            => $curUrl . '%_%',
			'format'          => '%#%',
			'total'           => $numpages,
			'current'         => $paged,
			'show_all'        => False,
			'end_size'        => 1,
			'mid_size'        => $pagerange,
			'prev_next'       => True,
			'prev_text'       => __('&lt;&lt;'),
			'next_text'       => __('&gt;&gt;'),
			'type'            => 'plain',
			'add_args'        => false,
			'add_fragment'    => ''
	);
	
	$paginate_links = paginate_links($pagination_args);
	
	if ($paginate_links) {
		echo "<nav class='custom-pagination'>";
		//echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
		echo $paginate_links;
		echo "</nav>";
	}

}
?>