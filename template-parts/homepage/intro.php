<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    $wu_homepage_titile = dfw_get_field( 'wu_homepage_titile' );
    the_post();
    ?>
    <section class="intro">
      <?php if( $wu_homepage_titile ) : ?>
        <heading>
          <h1 class="intro__title proxima-bold">
            <?php echo $wu_homepage_titile; ?>
          </h1>
        </heading>
      <?php endif; ?>
      <?php the_content(); ?>
    </section>
    <?php
  endwhile; 
endif; 
wp_reset_postdata();