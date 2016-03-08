<?php
$parent_field = 'wu_about_content';
if( have_rows( $parent_field ) ):
    echo '<section class="about__content content__wrapper">';
    while ( have_rows( $parent_field ) ) : the_row();
      $wu_about_heading             = dfw_get_sub_field( $parent_field, 'wu_about_heading' );
      $wu_about_content             = dfw_get_sub_field( $parent_field, 'wu_about_content' );
      $wu_about_content_button_text = dfw_get_sub_field( $parent_field, 'wu_about_content_button_text' );
      $wu_about_content_button_url  = dfw_get_sub_field( $parent_field, 'wu_about_content_button_url' );
      ?>
      <article>
        <header class="about__content-heading">
          <h1 class="content-heading__header section__heading">
            <?php echo $wu_about_heading; ?>
          </h1>
        </header>
        <section class="about__content-copy">
          <?php echo $wu_about_content; ?>
        </section>
        <a href="<?php echo $wu_about_content_button_url; ?>" class="about__content-button button__round button__black">
          <?php echo $wu_about_content_button_text; ?>
        </a>
      </article>
      <?php
    endwhile;
  echo '</section>';
endif;