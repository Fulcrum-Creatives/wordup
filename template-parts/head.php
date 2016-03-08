<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta http-equiv="Content-Type" content="<?php get_bloginfo('html_type'); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() );?> "/js/vendor/html5.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<a href="#main" class="skip-nav screen-reader-text" tabindex="0"><?php _e('Skip to main Content', 'dfw'); ?></a>