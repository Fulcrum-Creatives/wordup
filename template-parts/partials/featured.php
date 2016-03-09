<?php
$parent_field = 'wu_featured_content';
if( have_rows( $parent_field ) ):
    echo '<section class="homepage__featured">';
    while ( have_rows( $parent_field ) ) : the_row();
      $wu_featured_type          = dfw_get_sub_field( $parent_field, 'wu_featured_type' );
      $wu_featured_use_latest    = dfw_get_sub_field( $parent_field, 'wu_featured_use_latest' );
      $wu_featured_section_title = dfw_get_sub_field( $parent_field, 'wu_featured_section_title' );
      $wu_featured_entry         = dfw_get_sub_field( $parent_field, 'wu_featured_entry' );
      $wu_featured_subheading    = dfw_get_sub_field( $parent_field, 'wu_featured_subheading' );
      $post_id                   = $wu_featured_entry->ID;
      $html                      = 
        '<article>
          <a class="button__violet button__featured" href="' . get_permalink( $post_id ) . '">
            <span class="button__featured-type">' . $wu_featured_section_title . '</span>
            <span class="button__featured-heading">' .  get_the_title( $post_id ) . '</span>
            <span class="button__featured-sub-heading">' . $wu_featured_subheading . '</span>
          </a>
        </article>';
      if( $wu_featured_use_latest == true ) :
        $query = new WP_Query( array(
            'post_type'      => $wu_featured_type,
            'posts_per_page' => '1',
            'no_found_rows'  => true
        ) );
        if( have_posts() ) : 
          while( $query->have_posts() ) : 
            $query->the_post();
            $post_id = get_the_ID();
            echo '<article>
          <a class="button__violet button__featured" href="' . get_permalink( $post_id ) . '">
            <span class="button__featured-type">' . $wu_featured_section_title . '</span>
            <span class="button__featured-heading">' .  get_the_title( $post_id ) . '</span>
            <span class="button__featured-sub-heading">' . $wu_featured_subheading . '</span>
          </a>
        </article>';
          endwhile; 
        endif; 
        wp_reset_postdata();
      else :  
        echo '<article>
          <a class="button__violet button__featured" href="' . get_permalink( $post_id ) . '">
            <span class="button__featured-type">' . $wu_featured_section_title . '</span>
            <span class="button__featured-heading">' .  get_the_title( $post_id ) . '</span>
            <span class="button__featured-sub-heading">' . $wu_featured_subheading . '</span>
          </a>
        </article>';
      endif;
    endwhile;
  echo '</section>';
endif;