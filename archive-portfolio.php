<?php get_header('portfolio'); ?>

<div class="main">
  <div class="portfolio-container clearfix">
    <div class="content">

      <?php
          $archive_args = array(
            post_type => 'portfolio',
            'posts_per_page'=> -1
          );

          $archive_query = new WP_Query( $archive_args );
      ?>
        <div class="portfolio-archive">
            <?php while ( $archive_query->have_posts() ) : $archive_query->the_post();?>
              <div class="portfolio-archive-item">
                <div class="portfolio-archive-img">
                  <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large');
                  } 
                  ?>
                </div>
                <div class="portfolio-archive-info">
                  <h2 class="responsive_headline"><?php the_title(); ?></h2>
                  <h4><?php the_field('client_name'); ?></h4>
                  <?php the_field('brief_desc') ?>
                  <a href="<?php the_field('link_to_full_page'); ?>" class="btn">View Details</a>
                </div>
              </div>
            <?php endwhile; // end the custom loop ?>
          </div>

          <?php wp_reset_postdata(); // always reset post data after a custom query ?>

        </div>
    </div><!--/content-->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>