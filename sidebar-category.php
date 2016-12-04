<div>
	<ol class="sidebar-left">
		<div class="sidebar-title">近期更新</div>
<?php  $count = 0; ?>
<?php if(have_posts()) : while (have_posts()) : the_post();?>
		<div class="sidebar-wrapper">
			<li class="sidebar-item-title" id="sidebar-item-title-<?php echo $count;?>">
				<span><img src="<?php echo getAttachUrl(108, true);?>" width="9" height="9" />&nbsp;&nbsp;<a href="<?php echo get_permalink($post);?>"><?php echo $post->post_title;?></a></span>
			</li>
			<div class="sidebar-item-content" id="sidebar-item-content-<?php echo $count; ?>">
				<p><?php $short = explode("<!--more-->", $post->post_content); echo $short[0];?></p
			</div>
		</div>
<?php $count++; endwhile;?> 
	<?php for (; $count < 10 ; $count++  ) : ?>
		<div class="sidebar-wrapper">
			<li class="sidebar-item-title" > &nbsp;&nbsp;</li>
		</div>
	<?php endfor;?>
<?php endif;?>
	</ol>
	<div class="pagination">
<?php the_posts_pagination( array(
	'mid_size'  => 2,
	'prev_text' => __( '<<', 'textdomain' ),
	'next_text' => __( '>>', 'textdomain' ),
	'screen_reader_text' => __('' , 'textdomain'),
) );?>
	</div>
</div>