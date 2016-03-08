<?php
if( is_page('blog') ) :
  $post_type = 'post';
elseif( is_page('work') ) :
  $post_type = 'portfolio';
elseif( is_page('workshop') ) :
  $post_type = 'workshops';
endif;
$listings_query = new WP_Query( array(
  'post_type' => $post_type,
  'paged'     => $paged
) );
$paged     = (get_query_var('paged')) ? get_query_var('paged') : 1;
$tmp_query = $wp_query;
$wp_query  = null;
$wp_query = $listings_query;
if (have_posts()) : 
  echo '<section class="listings content__wrapper">';
  while ( $listings_query->have_posts()) : 
    $listings_query->the_post();
    ?>
      <article>
        <div class="listings__divider"></div>
        <h2 class="listings__title proxima-bold">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </article>
    <?php
  endwhile;
  dfw_pagination();
  echo '</section>';
endif;
wp_reset_postdata();
$wp_query = null;
$wp_query = $tmp_query;