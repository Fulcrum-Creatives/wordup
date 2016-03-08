<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $wu_header_sub_heading = dfw_get_field( 'wu_header_sub_heading' );
  endwhile;
endif; 
wp_reset_postdata();
?>
<header id="header" class="header header__home" role="banner">
  <div class="header__wrapper">
    <?php get_template_part( 'template-parts/menu/primary' ); ?>
    <div id="header__logo" class="header__logo logo__full">
      <?php get_template_part( 'template-parts/partials/logo', 'home' ); ?>
    </div>
    <div id="header__logo" class="header__logo logo__mobile">
      <?php get_template_part( 'template-parts/partials/logo', 'homemobile' ); ?>
    </div>
    <div class="header__sub-heading proxima-extrabold">
      <?php echo $wu_header_sub_heading; ?>
    </div>
  </div>
</header>