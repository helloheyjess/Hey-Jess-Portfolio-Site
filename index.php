<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header('blog'); ?>

<div class="main blog">
  <div class="container clearfix">
    <div class="content">
		<div class="post">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();  ?>

	            <div class="post-image">
	                <?php $image = the_post_thumbnail('wide'); ?>
	                <img src="<?php $image ?>" alt="">
	            </div>
	            <div class="post-lower">
	                <div class="post-date">
	                    <p class="date"><?php the_time('d'); ?></p>
	                    <p class="month"><?php the_time('M'); ?></p>
	                </div>
	                <div class="post-info">
	        		    <h2><?php the_title(); ?></h2>
	                    <p>Posted by <?php the_author_link() ?> // in <?php the_category(' ') ?></p>
	                </div>
	                <div class="post-content">
	                    <p class="intro"><?php the_field('intro'); ?></p>
	                    <?php the_excerpt(); ?>
	                </div>
	            </div>
		   	<?php endwhile; ?>
	        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
	        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

	        <?php else : ?>
	        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	        <?php endif; ?>
		</div>

    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>