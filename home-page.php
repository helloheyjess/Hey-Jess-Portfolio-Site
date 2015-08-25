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
	  			<div class="about-section-container" id="about">
	  				<div class="about-img about-item">
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
						<div class="third portfolio-info">
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
							<a href="<?php echo the_field('live_website'); ?>">View Live</a>
						</div>
						<div class="third portfolio-desc">
							<h4><?php the_field('client_name'); ?></h4>
							<?php the_field('brief_desc'); ?>
							<a href="<?php the_field('link_to_full_page'); ?>" class="btn">View Details</a>
						</div>
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
							<div class="third portfolio-img" style="background: url('<?php echo $thumb['0']; ?>') center bottom no-repeat; background-size: cover;">
					  		</div>


					</div>

			<?php endwhile; wp_reset_query(); ?>
			<a href="http://localhost:8888/HackerYou/Projects/portfolio-site/portfolio/" class="btn">See Full Portfolio</a>
			</div>
    <?php endwhile; // end the loop?>
    <div class="contact" id="contact">
		<div class="footer-container ">
	  	 <div class="footer-half">
		  	 <h2>Let's Work Together!</h2>
		  	 <div class="line"></div>
		  	 <p>Are you looking for a passionate front-end web developer for your project or team? I'd love to hear from you!</p>
		  	 <p>Get in touch through the contact form or if you'd prefer, send me an e-mail at hello@heyjess.ca</p>
	  	 </div>
	  		<div class="footer-half">
		  	 <form action="">
		  	 	<label for="name" class="visually-hidden">Name</label>
		  	 	<input type="text" id="name" placeholder="Name">
		  	 	<label for="email" class="visually-hidden">Email</label>
		  	 	<input type="text" id="email" placeholder="Email">
		  	 	<label for="message" class="visually-hidden">Message</label>
		  	 	<textarea name="message" id="message" placeholder="Message"></textarea>
		  	 	<input type="submit" value="Send" class="btn">
		  	 </form>
	  		</div>
  		</div>
    </div>
</div> <!-- /.main -->

<?php get_footer(); ?>