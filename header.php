<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Choose_Design
 */

/************************************************************************/
// Theme data from admin panel
/***************************************************************************/
$cb_options = get_option( '_choose-design' );
$cb_mainlogo = $cb_options['main-logo']['url'];
$cb_favicon = $cb_options['main-favicon']['url'];

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://combrokers.no">
	<meta charset="UTF-8">
	<meta name="description" content="<?php bloginfo( 'description' )?>" />
	<meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean" />
	<meta name="author" content="Espen-Holmstrand" />
	<meta name="website" content="choosedesign.no" />
	<meta name="email" content="post@combrokers.no" />
	<meta name="version" content="1.0.0" />
	<!-- Custom Favicons -->
	<link rel="shortcut icon" href="<?php echo esc_url($cb_favicon); ?>"/>
	<link rel="apple-touch-icon" href="<?php echo esc_url($cb_favicon); ?>">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <?php if( !empty($cb_mainlogo) ) : ?>
      <a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?php echo esc_url($cb_mainlogo); ?>" alt="<?php bloginfo('title'); ?>"></a>
    <?php else : ?>
      <a href="<?php echo get_site_url(); ?>" class="logo"><img src="https://www.choosedesign.no/wp-content/uploads/2020/03/cropped-Untitled-1-165x55.png" alt="<?php bloginfo('title'); ?>"></a>
    <?php endif; ?>

      <nav id="navbar" class="navbar">
          <?php 
            wp_nav_menu( array(
              'menu'              => 'Primary',
              'theme_location'    => 'Primary',
              'depth'             => 2,
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'nav-link scrollto',   
              'nav_menu_css_class' =>  'nav-link scrollto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ));
          ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->	