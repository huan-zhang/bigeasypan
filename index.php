<?php get_header(); ?>
		<div class="row">
			<?php echo wp_get_attachment_image(HOMEPAGE_IMAGE_ID, array('600', '600'), "", array( "class" => "img-responsive center-block" ) );?>
		</div>
		<div class="row">
<?php get_template_part( 'index-categories'); ?>	
		</div> <!-- /.row -->

<?php get_footer(); ?>