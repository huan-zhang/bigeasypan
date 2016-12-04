<?php get_header(); ?>
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  			<!-- Indicators -->
				<ol class="carousel-indicators">
				<?php //$counter = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php for($i = 0; $i < 4; $i++ ) : ?>
	<?php if ($i == 0) : ?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
	<?php else : ?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" ></li>
	<?php endif; ?>
<?php endfor;?>
				</ol>
				<div class="carousel-inner" role="listbox">
<?php for($i = 0; $i < 4; $i++ ) : ?>
	<?php if ($i == 0) :  ?>
					<div class="item active">
	<?php else : ?>
					<div class="item">
	<?php endif; $post = get_carousel_post($i); setup_postdata($post); ?>
						<img src="<?php echo getAttachUrl(get_the_ID()); ?>" class="current" alt="<?php echo get_the_Title();?>" />	
						<div class="carousel-caption">
							<h3><?php echo the_title(); ?></h3>
							<p><?php echo the_content("更多...", TRUE); ?></p>
						</div>
					</div>	
<?php endfor;?>
				</div>		
	  			
				<!-- Wrapper for slides -->
	
	  			<!-- Left and right controls -->
	  			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    			<span class="sr-only">Previous</span>
	  			</a>
	  			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    			<span class="sr-only">Next</span>
	  			</a>
			</div>
		</div>
		<div class="row">
<?php get_template_part( 'index-categories'); ?>	
		</div> <!-- /.row -->

<?php get_footer(); ?>