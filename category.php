<?php get_header(); ?>
<div class="row">
	<div class="col-xm-12">
		<div id="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo bloginfo("name");?></a></li>
				<li class="breadcrumb-item active"><a href="<?php echo get_category_link(get_current_cat()->cat_ID);?>"><?php echo get_current_cat()->name; ?></a></li> 
				<!-- <li class="breadcrumb-item active"><?php $category->cat_name;?></li>-->
			</ol>
		</div>
	</div>
</div> <!-- /.row -->
	<!-- <div class="row">-->
<div class="row">
	<div class="col-md-9 grid">
<?php 
global $post;
$curQuery = $wp_query;
$curPost = $post;
$cid = get_current_cat()->cat_ID;
$args  = array (
	'posts_per_page' => -1,
	'cat' => $cid,
);
$myquery = new WP_Query($args);
if ($myquery->have_posts()) : while ($myquery->have_posts()) : $myquery->the_post(); $tag = wp_get_post_tags($post->ID)[0];
?>
		<div class="<?php if ($cid == 6) echo "col-md-5"; else echo "col-md-3";?> category-post-block grid-item <?php if ($tag->term_id == "9") echo "category-post-essential"; ?>"  data-toggle="modal" data-target="#modal_post_<?php echo $post->ID; ?>">
			<h3><?php echo $post->post_title ;?></h3>
			<p><?php echo the_content(" ", TRUE); ?></p> 
		</div>
		<div class="modal fade category-post-detail" id="modal_post_<?php echo $post->ID; ?>" role="dialog">
    		<div class="modal-dialog">
    			<div class="modal-content">
        			<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h3 class="modal-title"><?php echo $post->post_title; ?></h3>
        			</div>
        			<div class="modal-body">
        			<?php //echo wpautop(the_content(" "), true);
                        $content_arr = get_extended ( $post->post_content );
                        echo $content_arr["main"] . $content_arr["extended"];
                    ?>
        			</div>
        			<div class="modal-footer">
          				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        			</div>
      			</div>
   			</div>
		</div>
<?php endwhile; endif; ?>
<?php $wp_query = $curQuery; $post = $curPost; wp_reset_postdata();?>
	</div> <!-- /.col-md-9 -->
	<aside id="sidebar" class="hidden-xs hidden-sm">
		<div class="col-md-3">
<?php get_sidebar("category"); ?>
		</div>
	</aside>
</div>
<?php get_footer(); ?>