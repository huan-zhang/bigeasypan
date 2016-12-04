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
		<div class="blog-post">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<hr />
			<div>
<?php the_content(); ?>
			</div>
			<div class="last-update">
				Last update: <?php  the_date("Y-m-d"); ?>
			</div>
		</div><!-- /.blog-post -->
	</div>
	<div class="col-md-4">
		<?php get_sidebar("post"); ?>
	</div>
</div> <!-- /.row -->
