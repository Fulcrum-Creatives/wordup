<?php
$wu_social_heading   = dfw_get_field( 'wu_social_heading', true );
$wu_social_instagram = dfw_get_field( 'wu_social_instagram', true );
$wu_social_facebook  = dfw_get_field( 'wu_social_facebook', true );
$wu_social_twitter   = dfw_get_field( 'wu_social_twitter', true );
?>
<section class="social">
  <h3 class="social__heading proxima-extrabold">
    <?php echo $wu_social_heading; ?>
  </h3>
  <a href="<?php echo $wu_social_instagram; ?>" class="social__icons">
    <i class="fa fa-instagram">
      <span class="ir"><?php _e( 'Instagram', 'fcwp' ); ?></span>
    </i>
  </a>
  <a href="<?php echo $wu_social_facebook; ?>" class="social__icons">
    <i class="fa fa-facebook">
      <span class="ir"><?php _e( 'FaceBook', 'fcwp' ); ?></span>
    </i>
  </a>
  <a href="<?php echo $wu_social_twitter; ?>" class="social__icons">
    <i class="fa fa-twitter">
      <span class="ir"><?php _e( 'Twitter', 'fcwp' ); ?></span>
    </i>
  </a>
</section>