<?php 
get_template_part( 'template-parts/head' );
if( is_home() || is_front_page() ) :
  get_template_part( 'template-parts/header/header', 'home' );
else:
  get_template_part( 'template-parts/header/header', 'page' );
endif; 
?>
<main id="main" class="main" role="main">