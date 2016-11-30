<div>
	<ol>
<?php if(have_posts()) : while (have_posts()) : the_post();?>
		<li><a href="<?php echo get_permalink($post);?>"><?php echo $post->post_title;?></a></li>
<?php endwhile; endif;?>
	</ol>
</div>