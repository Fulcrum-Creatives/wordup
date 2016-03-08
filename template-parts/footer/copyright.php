<?php
$wu_footer_logo        = dfw_get_field( 'wu_footer_logo', true );
$wu_footer_logo_retina = dfw_get_field( 'wu_footer_logo_retina', true );
$wu_footer_logo_svg    = dfw_get_field( 'wu_footer_logo_svg', true );
$wu_copyright          = dfw_get_field( 'wu_copyright', true );
?>
<section class="footer__copyright">
  <span class="copyright__text proxima-bold">
    <?php echo '&copy;' . $wu_copyright . ', ' . date('Y'); ?>
  </span>
    <a href="<?php echo home_url(); ?>" class="footer__logo">
      <?php
        $logo_paths = array(
          'image'  => $wu_footer_logo['url'],
          'retina' => $wu_footer_logo_retina['url'],
          'svg'    => $wu_footer_logo_svg['url']
        ); 
        dfw_svg_fallback( $logo_paths, $wu_footer_logo['alt'], 'logo', 'svg logo__svg' );
      ?>
    </a>
</section>