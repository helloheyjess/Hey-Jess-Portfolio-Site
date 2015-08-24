<?php

/*
	Template Name: About Page
*/

get_header('page');  ?>

<div class="main about">
  <div class="about-container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      		<div class="about-description">
      			<?php $image =  the_post_thumbnail('full'); ?>
      			<h2><?php the_field('sub_title'); ?></h2>
      			<div class="line"></div>
      			<h3><?php the_field('tagline'); ?></h3>
      			<?php the_content(); ?>
      		</div>
	      	<div class="skills-container">
	      		<div class="skills">
	      			<h2>Skills</h2>
		      		<div class="line"></div>
		      		<?php 
		      		  while(has_sub_field('skills')){
		      		?>
		      		<div class="skill">
			      			<h4><?php the_sub_field('skill_name'); ?></h4>
			      			<?php the_sub_field('skill_desc'); ?>
		      		</div>
					<?php
					  } //End While
					?>
	      		</div>
	      	</div>
      	</div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>