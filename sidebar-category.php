<div>
	<!-- 
	<div>
		<div>自出版Kindle电子书</div>
		<a target="_blank" href="https://www.amazon.com/%E5%87%8C%E6%B3%A2%E6%8E%A1%E6%9C%88%E7%99%BD-Traditional-Chinese-%E8%8E%AB%E6%87%B7%E9%81%A0-ebook/dp/B08B33VLWY/ref=sr_1_1?dchild=1&keywords=%E5%87%8C%E6%B3%A2%E6%8E%A1%E6%9C%88%E7%99%BD&qid=1607493353&sr=8-1">
			<img style="width:100%;height:auto;" src="<?php echo getAttachUrl(BOOK_IMAGE_ID, true);?>" />
		</a>
	</div>
	 -->
	<ol class="sidebar-left">
		<div class="sidebar-image">
		<!-- 
<?php if ( is_category("3")) : ?>	
			<p><img src="<?php echo getAttachUrl(160, true);?>" /></p>
<?php elseif ( is_category("4")) : ?>	
			<p><img src="<?php echo getAttachUrl(162, true);?>" /></p>
<?php elseif ( is_category("6")) : ?>	
			<p><img src="<?php echo getAttachUrl(161, true);?>" /></p>
<?php elseif ( is_category("7")) : ?>	
			<p><img src="<?php echo getAttachUrl(163, true);?>" /></p>
<?php else : ?>
			<p>&nbsp;</p>
<?php endif;?>
        -->
            <div>
    			<div>自出版Kindle电子书</div>
    			<a target="_blank" href="https://www.amazon.com/%E5%87%8C%E6%B3%A2%E6%8E%A1%E6%9C%88%E7%99%BD-Traditional-Chinese-%E8%8E%AB%E6%87%B7%E9%81%A0-ebook/dp/B08B33VLWY/ref=sr_1_1?dchild=1&keywords=%E5%87%8C%E6%B3%A2%E6%8E%A1%E6%9C%88%E7%99%BD&qid=1607493353&sr=8-1">
    				<img style="width:100%;height:auto;" src="<?php echo getAttachUrl(BOOK_IMAGE_ID, true);?>" />
    			</a>
    		</div>
		</div>
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