<div class="content__wrapper">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry'); ?> aria-labelledby="entry__header" role="article">
    <?php 
    get_template_part( 'template-parts/partials/thumbnail' );
    if( function_exists( 'dfw_entry_title' ) ) : dfw_entry_title(); endif;
    ?>
    <section class="entry__content">
      <?php the_content(); ?>
    </section>
    <?php get_template_part( 'template-parts/entry/author' ); ?>
  </article>
</div>