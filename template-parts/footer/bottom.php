<?php 
$wu_bottom_text     = dfw_get_field( 'wu_bottom_text', true );
$wu_bottom_text_url = dfw_get_field( 'wu_bottom_text_url', true );
?>
<section class="bottom proxima-extrabold">
  <a href="<?php echo $wu_bottom_text_url; ?>" class="button__black">
    <?php echo $wu_bottom_text; ?>
  </a>
</section>