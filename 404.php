<?php
/**
 * Richardson Fire Protection — 404.php
 * Page not found template.
 */
get_header();
?>

  <main class="site-main">

    <section class="hero" style="min-height: 70vh; display: flex; align-items: center;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="text-align: center;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          404 — Page Not Found
        </div>
        <h1 class="hero-title reveal-up">
          This Page Doesn't <span class="hero-title--accent">Exist.</span>
        </h1>
        <p class="hero-desc reveal-up">
          Looks like something went wrong. The page you're looking for may have moved or been removed.<br />
          Let us point you in the right direction.
        </p>
        <div class="hero-actions reveal-up">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-house"></i>
            Back to Home
          </a>
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
        </div>
      </div>
    </section>

    <!-- Quick Links -->
    <section class="section services" style="padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header" style="margin-bottom: 2.5rem;">
          <h2 class="section-title">Where Would You Like to <span class="text-accent">Go?</span></h2>
        </div>
        <div class="services-grid services-grid--6">
          <a href="<?php echo esc_url( home_url( '/#commercial' ) ); ?>" class="service-card service-card--sm" style="text-decoration: none; cursor: pointer;">
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <h3 class="service-card__title">Commercial</h3>
          </a>
          <a href="<?php echo esc_url( home_url( '/#industrial' ) ); ?>" class="service-card service-card--sm" style="text-decoration: none;">
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <h3 class="service-card__title">Industrial</h3>
          </a>
          <a href="<?php echo esc_url( home_url( '/#residential' ) ); ?>" class="service-card service-card--sm" style="text-decoration: none;">
            <div class="service-card__icon"><i class="fa-solid fa-building-user"></i></div>
            <h3 class="service-card__title">Multifamily</h3>
          </a>
          <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="service-card service-card--sm" style="text-decoration: none;">
            <div class="service-card__icon"><i class="fa-solid fa-clipboard-list"></i></div>
            <h3 class="service-card__title">Inspections</h3>
          </a>
          <a href="<?php echo esc_url( home_url( '/#blog' ) ); ?>" class="service-card service-card--sm" style="text-decoration: none;">
            <div class="service-card__icon"><i class="fa-solid fa-newspaper"></i></div>
            <h3 class="service-card__title">Blog</h3>
          </a>
          <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="service-card service-card--sm service-card--featured" style="text-decoration: none;">
            <div class="service-card__icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="service-card__title">Contact Us</h3>
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
