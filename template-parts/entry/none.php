<div class="content__wrapper">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="entry__header" role="article">
    <?php if( function_exists( 'dfw_page_title' ) ) : dfw_page_title( 'Nothing Found!' ); endif; ?>
    <section class="entry__content">
      <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
        <p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dfw' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
      <?php elseif ( is_search() ) : ?>
        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dfw' ); ?></p>
        <?php get_search_form(); ?>
      <?php else : ?>
        <p><?php esc_html_e( 'It seems we can\'t find what you&rsquo;re looking for. Perhaps searching can help.', 'dfw' ); ?></p>
        <?php get_search_form(); ?>
      <?php endif; ?>
    </section>
  </article>
</div>