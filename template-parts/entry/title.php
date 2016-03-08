<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $wu_listings_page_title = dfw_get_field( 'wu_listings_page_title' );
    if( function_exists( 'dfw_page_title' ) ) : dfw_page_title( $wu_listings_page_title ); endif;
  endwhile;
endif;
wp_reset_postdata();