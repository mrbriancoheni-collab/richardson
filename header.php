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
        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" width="64" height="64">
          <path d="M40 4 L70 18 L70 45 Q70 65 40 76 Q10 65 10 45 L10 18 Z" fill="#1a1a1a" stroke="#C41230" stroke-width="2"/>
          <text x="40" y="52" text-anchor="middle" font-family="Oswald,sans-serif" font-size="36" font-weight="700" fill="#C41230">R</text>
        </svg>
      </div>
      <div class="preloader-bar"><span></span></div>
    </div>
  </div>

  <!-- ========== NAVIGATION ========== -->
  <nav id="navbar" class="navbar">
    <div class="container nav-container">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
        <div class="logo-shield">
          <svg viewBox="0 0 100 110" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
            <path d="M50 5 L88 22 L88 58 Q88 88 50 105 Q12 88 12 58 L12 22 Z" fill="#1a1a1a"/>
            <path d="M50 8 L85 24 L85 58 Q85 86 50 102 Q15 86 15 58 L15 24 Z" fill="white" opacity="0.08"/>
            <text x="50" y="68" text-anchor="middle" font-family="Oswald,sans-serif" font-size="52" font-weight="700" fill="#C41230">R</text>
            <path d="M28 76 L72 76" stroke="#C41230" stroke-width="1.5" opacity="0.6"/>
          </svg>
        </div>
        <div class="logo-wordmark">
          <span class="logo-name">RICHARDSON</span>
          <span class="logo-sub">— FIRE PROTECTION —</span>
          <span class="logo-tagline">PROTECTION FOR YOUR FAMILY &amp; INVESTMENT</span>
        </div>
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
