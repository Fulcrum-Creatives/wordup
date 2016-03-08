<?php
$wu_home_logo_mobile        = dfw_get_field( 'wu_home_logo_mobile', true );
$wu_home_logo_mobile_retina = dfw_get_field( 'wu_home_logo_mobile_retina', true );
$wu_home_logo_mobile_svg    = dfw_get_field( 'wu_home_logo_mobile_svg', true );
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <?php
      $logo_paths = array(
        'image'  => $wu_home_logo_mobile['url'],
        'retina' => $wu_home_logo_mobile_retina['url'],
        'svg'    => $wu_home_logo_mobile_svg['url']
      ); 
      dfw_svg_fallback( $logo_paths, $wu_home_logo_mobile['alt'], 'logo', 'svg logo__svg' );
    ?>
  </a>
  <span class="ir">
    <?php echo bloginfo('name'); ?>
  </span>
</h1>