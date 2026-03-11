<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ========== PRELOADER ========== -->
  <div id="preloader">
    <div class="preloader-inner">
      <div class="preloader-logo">
        <img
          src="<?php echo esc_url( rfp_logo_url() ); ?>"
          alt="Richardson Fire Protection"
          style="height: 38px; width: auto; filter: brightness(0) invert(1);"
        />
      </div>
      <div class="preloader-bar"><span></span></div>
    </div>
  </div>

  <!-- ========== NAVIGATION ========== -->
  <nav id="navbar" class="navbar">
    <div class="container nav-container">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
        <img
          src="<?php echo esc_url( rfp_logo_url() ); ?>"
          alt="Richardson Fire Protection"
          class="nav-logo__img"
          style="height: 48px; width: auto; display: block; object-fit: contain;"
          loading="eager"
        />
      </a>

      <!-- Primary navigation (manage via Appearance → Menus in WP admin) -->
      <?php
      wp_nav_menu( [
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav-links',
          'menu_id'        => 'navLinks',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'fallback_cb'    => 'rfp_fallback_nav',
      ] );
      ?>

      <!-- Phone — always visible in nav -->
      <a href="tel:+19168496441" class="nav-link nav-phone">
        <i class="fa-solid fa-phone"></i> (916) 849-6441
      </a>

      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>

    </div>
  </nav>
