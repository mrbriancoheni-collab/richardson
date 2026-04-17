<?php
/**
 * Template Name: Locations Hub
 * Template Post Type: page
 *
 * Hub at /locations/ listing all 7 service cities.
 * Auto-applied to any page with slug "locations".
 */
get_header();
$cities = rfp_all_locations();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 42vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Fire Sprinkler Contractor — Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          Our <span class="hero-title--accent">Service Areas</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 600px;">
          Richardson Fire Protection serves GCs and developers throughout Northern California. Select your city for local AHJ requirements, permit timelines, and project-specific guidance.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

    <!-- ========== CITY GRID ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">All Locations</div>
          <h2 class="section-title">Select Your <span class="text-accent">City</span></h2>
          <p class="section-desc">Each page includes local AHJ info, permit timelines, building type guidance, and FAQs for GCs and developers.</p>
        </div>
        <div class="services-grid reveal-up">
          <?php foreach ( $cities as $loc ) : ?>
            <a href="<?php echo esc_url( home_url( '/locations/' . $loc['slug'] . '/' ) ); ?>"
               class="service-card" style="text-decoration: none; display: block; cursor: pointer;">
              <div class="service-card__icon"><i class="fa-solid fa-location-dot"></i></div>
              <h3 class="service-card__title"><?php echo esc_html( $loc['name'] ); ?></h3>
              <p class="service-card__desc" style="font-size: 0.82rem;"><?php echo esc_html( $loc['county'] ); ?></p>
              <ul class="service-card__features" style="margin-top: 0.75rem;">
                <?php foreach ( array_slice( $loc['building_types'], 0, 3 ) as $bt ) : ?>
                  <li><i class="fa-solid fa-check"></i> <?php echo esc_html( $bt ); ?></li>
                <?php endforeach; ?>
              </ul>
              <span class="service-card__link" style="margin-top: 1rem; display: inline-flex; align-items: center; gap: 0.4rem;">
                View <?php echo esc_html( $loc['name'] ); ?> <i class="fa-solid fa-arrow-right"></i>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Why Richardson</div>
          <h2 class="section-title">One Sub, <span class="text-accent">Every City</span></h2>
          <p class="section-desc">One contractor. Seven markets. Zero gaps in accountability.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $points = [
            [ 'fa-solid fa-map-location-dot', 'Local AHJ Knowledge',   'We know every fire department in the Sacramento Valley — their preferences, timelines, and review requirements.' ],
            [ 'fa-solid fa-file-lines',        '24–48 hr Bids',         'No matter which city your project is in, we return a complete bid within two business days of receiving plans.' ],
            [ 'fa-solid fa-drafting-compass',  'Design-Build Turnkey',  'Stamped drawings, permits, and AHJ final coordination — across every jurisdiction we serve.' ],
            [ 'fa-solid fa-calendar-check',    'Schedule Driven',       'Rough-in, above-ceiling, and trim-out on your timeline. We show up when your super needs us.' ],
            [ 'fa-solid fa-circle-check',      'First-Pass Inspections','Clean AHJ finals every time — no re-inspection fees, no CO delays.' ],
            [ 'fa-solid fa-truck-fast',        '24/7 Emergency',        'Emergency response available around the clock across all seven service markets.' ],
          ];
          foreach ( $points as $p ) : ?>
            <div class="service-card service-card--sm reveal-up">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $p[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo esc_html( $p[1] ); ?></h3>
              <p class="service-card__desc"><?php echo esc_html( $p[2] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Start a Project Anywhere We Serve
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Call or send your plans — we return a complete bid in 24–48 hours, regardless of city.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
