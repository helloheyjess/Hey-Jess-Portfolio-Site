<?php get_header('page'); ?>

<div class="main single-portfolio">
  <div class="clearfix">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="single-portfolio-item">
          
          <div class="single-portfolio-content">
            <h2>Overview</h2>
              <div class="entry-content">
                <h4><?php the_field('client_name'); ?></h4>
                <?php the_content(); ?>
                <h4>Scope</h4>
                <!-- Display technology list -->
                <ul class="technologies">
                  <?php 
                    while(has_sub_field('technologies')){
                  ?>
                    <li><?php the_sub_field('technology'); ?></li>
                  <?php
                    } //End While
                  ?>
                </ul>
                
                
                <!-- Nav Links -->
                <?php wp_link_pages(array(
                  'before' => '<div class="page-link"> Pages: ',
                  'after' => '</div>'
                )); ?>
              </div><!-- .entry-content -->
          </div>
          <div class="single-portfolio-img">
            <?php 
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('portfolio');
              } 
           ?>
           <!-- Link to Live Site and Github -->
               
                <a href="<?php echo the_field('live_website'); ?>" class="btn view-live" target="_blank">View Live</a>
                <a href="<?php echo the_field('link_to_repo'); ?>" class="btn view-live" target="_blank"><i class="fa fa-github"></i> Github</a>
          </div>
        </div>

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php next_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php previous_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php //comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>