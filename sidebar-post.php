<div>
	<ol class="sidebar-left">
		<div class="sidebar-title">近期更新</div>

<?php 

$tmp = $wp_query;
$curPost = $post;
$cid = get_current_cat()->cat_ID;

$btpgid=get_queried_object_id();
$btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
$paged = (get_query_var('page')) ? get_query_var('page') : 1;

$args = array(
	'posts_per_page' => 10,
	'cat' => $cid,
	'paged' => $paged, 
	//'meta_key' => 'post_seq',
	//'orderby' => 'meta_value_num',
	//'order' => 'ASC',
);
$wp_query = $myquery = new WP_Query($args); 
$count = 0; 
if ($myquery->have_posts()) : while($myquery->have_posts()) : $myquery->the_post(); ?>
		<div class="sidebar-wrapper">
			<li class="sidebar-item-title" id="sidebar-item-title-<?php echo $count;?>">
				<span><img src="<?php echo getAttachUrl(108, true);?>" width="9" height="9" />&nbsp;&nbsp;<a href="<?php echo get_permalink($post);?>"><?php echo $post->post_title ;?></a></span>
			</li>
			<div class="sidebar-item-content" id="sidebar-item-content-<?php echo $count; ?>">
				<p><?php $short = explode("<!--more-->", $post->post_content); echo $short[0];?></p
			</div>
		</div>
		<?php $count++; endwhile; ?> 

		<?php for (; $count < 10 ; $count++  ) : ?>
			<div class="sidebar-wrapper">
				<li class="sidebar-item-title" > &nbsp;&nbsp;</li>
			</div>
		<?php endfor;?>
	</ol>
	<div class="pagination">
		<?php if (function_exists(custom_pagination)) : custom_pagination($the_query->max_num_pages,"",$paged, $curPost); endif; ?>
	</div>
	<?php endif; $wp_query = $tmp; ?>
	</div>
</div>