</main>
<div class="footer__break"></div>
<footer id="footer" class="footer" role="contentinfo">
  <div class="content__wrapper">
    <?php
      get_template_part( 'template-parts/footer/newsletter' );
      get_template_part( 'template-parts/footer/social' );
    ?>
  </div>
  <?php get_template_part( 'template-parts/footer/copyright' ); ?>
</footer>
<?php get_template_part( 'template-parts/footer/bottom' ); ?>
<?php wp_footer(); ?>
</body>
</html>