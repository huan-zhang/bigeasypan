<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xm-12">
			<div id="breadcrumb">
				<ol class="breadcrumb">
  					<li class="breadcrumb-item"><a href="<?php bloginfo( 'wpurl' );?>">大易盘</a></li>
  					<li class="breadcrumb-item active"><a href="<?php echo get_category_link(get_current_cat()->cat_ID);?>"><?php echo get_current_cat()->name; ?></a></li> 
  					<!-- <li class="breadcrumb-item active"><?php $category->cat_name;?></li>-->
				</ol>
			</div>
		</div>
	</div> <!-- /.row -->
<div class="row">
	<div class="col-md-8">
<?php if ( is_category("3")) : ?>	
		<img src="<?php echo getAttachUrl(55, true);?>" width="595" height="350" />
<?php elseif ( is_category("4")) : ?>	
		<img src="<?php echo getAttachUrl(57, true);?>" width="595" height="350"  />
<?php elseif ( is_category("6")) : ?>	
		<img src="<?php echo getAttachUrl(56, true);?>" width="595" height="350"  />
<?php elseif ( is_category("7")) : ?>	
		<img src="<?php echo getAttachUrl(58, true);?>" width="595" height="350"  />
<?php else : ?>
		<p> it is not category </p>
<?php endif;?>
	</div> <!-- /.col-md-8 -->
</section>
<aside id="sidebar" class="hidden-xs hidden-sm">
	<div class="col-md-4">
		<?php get_sidebar("category"); ?>
	</div>
</aside>
</div> <!-- /.container -->
<?php get_footer(); ?>