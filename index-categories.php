<div class="col-xs-12">
	<div class="section-info">
		<h2>郑智化的歌</h2>
		<hr />
		<p>这里分享一些关于郑智化的作品</p>
	</div>
</div> <!-- /.col-xs-12 -->
<section>
<?php 
	$arg = array(
		"parent" => "5", // category: "contents"
		"hide_empty" => false
	);
	$categories = get_categories($arg);
?>
<?php if (sizeof($categories) > 0) : ?>
	<?php foreach($categories as $cat) : ?>
	<div class="col-lg-3 col-sm-6">
		<div class="index-category">
			<a href="<?php echo esc_url(get_category_link($cat->cat_ID)); ?>" >
				<div class="icon">
					<?php echo $cat->name; ?>
				</div>
			</a>
			<p><?php $short = explode("<!--more-->", $cat->description); echo wpautop($short[0]);?></p>
			<br />
			<a href="<?php echo esc_url(get_category_link($cat->cat_ID)); ?>" ><?php echo $cat->ID; ?>更多 ...</a>	
		</div>
	</div>
	<?php endforeach;?>
<?php endif; ?>	
</section>