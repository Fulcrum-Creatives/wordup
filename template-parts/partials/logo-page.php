<?php
$wu_page_logo        = dfw_get_field( 'wu_page_logo', true );
$wu_page_logo_retina = dfw_get_field( 'wu_page_logo_retina', true );
$wu_page_logo_svg    = dfw_get_field( 'wu_page_logo_svg', true );
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <?php
      $logo_paths = array(
        'image'  => $wu_page_logo['url'],
        'retina' => $wu_page_logo_retina['url'],
        'svg'    => $wu_page_logo_svg['url']
      ); 
      dfw_svg_fallback( $logo_paths, $wu_page_logo['alt'], 'logo', 'svg logo__svg' );
    ?>
  </a>
  <span class="ir">
    <?php echo bloginfo('name'); ?>
  </span>
</h1>