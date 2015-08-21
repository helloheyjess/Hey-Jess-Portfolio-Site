<?php

/*
  Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
	
    <?php // Start the loop ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    	<!-- About Section -->
		<?php $loop = new WP_Query( array( 'post_type' => 'about' ) ); ?>
	  		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	  			<div class="about-container" id="about">
	  				<div class="about-item about-img">
		  				<div class="square">
		  					<div class="inner-outline"></div>
		  				</div>
	  					<div class="outline"></div>
		  				<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('medium');
						} 
						?>
	  				</div>
	  				<div class="about-item">
						<h2><?php the_title(); ?></h2>
						<h3><?php the_field('tagline'); ?></h3>
						<?php the_content(); ?>
						<a href="<?php the_field('about_page_link'); ?>" class="btn">Learn more</a>
	  				</div>
	  			</div>
			<?php endwhile; wp_reset_query(); ?>
	
  </div> <!-- /.container -->
		<!-- Portfolio Section -->
		<div class="portfolio-container" id="portfolio">

		<?php $loop = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="portfolio-item" >
						<div class="quarter portfolio-info">
							<!-- Display portfolio item title -->
							<h2><?php the_title(); ?></h2>
							<div class="line"></div>
							<!-- Display technology list -->
							<ul class="technologies">
							  <?php 
							    while(has_sub_field('technologies')){
							  ?>
							    <li><h3><?php the_sub_field('technology'); ?></h3></li>
							  <?php
							    } //End While
							  ?>
							</ul>
							
						</div>
						<div class="quarter portfolio-desc">
							<h4><?php the_field('client_name'); ?></h4>
							<?php the_field('brief_desc'); ?>
							<a href="<?php the_field('link_to_full_page'); ?>" class="btn">View Details</a>
						</div>
						<?php while(has_sub_field('gallery')){?>
							<div class="quarter">
						  		<img src="<?php the_sub_field('gallery_item'); ?>">
					  		</div>

						<?php
						  } //End While
						?>

					</div>

			<?php endwhile; wp_reset_query(); ?>
					
		<?php echo do_shortcode('[ajax_load_more post_type="portfolio" posts_per_page="3" pause="true" scroll="false" button_label="Load More" offset="3" css_classes="portfolio-item" destroy_after="2"]') ?>
			</div>
    <?php endwhile; // end the loop?>
</div> <!-- /.main -->

<?php get_footer(); ?>