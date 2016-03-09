<?php 
$author_id = get_the_author_meta('ID');
$author_avatar = ( get_avatar( $author_id ) ) ? get_avatar( $author_id ) : '';
$author_profile = ( get_field( 'wu_user_profile_image', 'user_'. $author_id ) ) ? get_field( 'wu_user_profile_image', 'user_'. $author_id ) : '';
$author_image = ( $author_profile ) ? '<img src="' . $author_profile['url'] . '" alt="' . $author_name . '" />' : $author_avatar ;
$author_name = get_the_author();
$author_title = get_field( 'wu_user_profile_title', 'user_'. $author_id );
if( get_post_type() == 'post' ) : 
?>
  <footer class="entry__footer">
    <div class="footer__divider">
      <div class="divider__dot"></div>
      <div class="divider__dot"></div>
      <div class="divider__dot last-child"></div>
    </div>
    <?php if( $author_image ) : ?>
      <span class="author-image"><?php echo $author_image; ?></span>
    <?php
    endif;
    if( $author_name ) :
    ?>
      <span class="author-name merriweather-bold"><?php echo $author_name; ?></span>
    <?php 
    endif;
    if( $author_title ) :
    ?>
      <span class="author-title merriweather-light"><?php echo $author_title; ?></span>
    <?php endif; ?>
  </footer>
<?php endif; ?>