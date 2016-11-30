<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  			<!-- Indicators -->
				<ol class="carousel-indicators">
				
				<?php $counter = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
				<?php echo "in category 2 ? " . in_category( '2', $post ); ?>
				<?php if ( in_category( '2', $post ) ) : ?>
		
	 				<?php if ($counter == 0) : ?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $counter; ?>" class="active"></li>
					<?php else : ?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $counter; ?>" ></li>
					<?php endif; ?>
	 			<?php else : continue; endif; ?>
				<?php $counter++; endwhile; endif;?>
				</ol>
	  			<div class="carousel-inner" role="listbox">
	  		  	<?php $counter = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  				<?php if ( in_category( '2' ) ) : ?>
	  					<?php if ($counter == 0) : ?>
	  				<div class="item active">	
						<?php else : ?>
					<div class="item">
						<?php endif; ?>
						<img src="<?php echo getAttachUrl(get_the_ID()); ?>" class="current" alt="<?php echo get_the_Title();?>" />	
						<div class="carousel-caption">
							<h3><?php echo the_title(); ?></h3>
							<p><?php echo the_content("更多...", TRUE); ?></p>
						</div>
		  			</div>			
				
		 			<?php else : continue; endif; ?>
				<?php $counter++; endwhile; endif;?>
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
		<?php 
			get_template_part( 'index-categories');
		?>	
		</div> <!-- /.row -->
	</div> <!-- /.container -->

<?php get_footer(); ?>