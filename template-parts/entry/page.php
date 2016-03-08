<div class="content__wrapper">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="entry__header" role="article">
    <section class="entry__content">
      <?php the_content(); ?>
    </section>
  </article>
</div>