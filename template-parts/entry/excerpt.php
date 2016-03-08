<div class="content__wrapper">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="entry__header" role="article">
    <?php if( function_exists( 'dfw_page_title' ) ) : dfw_page_title(); endif; ?>
    <section id="entry__meta" class="entry__meta">

    </section>
    <section class="entry__content">
      <?php if( function_exists( 'dfw_custom_excerpt' ) ) : dfw_custom_excerpt(); endif; ?>
    </section>
    <footer id="entry__footer" class="entry__footer">

    </footer>
  </article>
</div>