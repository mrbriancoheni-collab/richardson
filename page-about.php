<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "about".
 * Also selectable via Page Attributes → Template in WP admin.
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 55vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Sacramento's Preferred Fire Sprinkler Sub for Developers &amp; GCs
        </div>
        <h1 class="hero-title reveal-up">
          About <span class="hero-title--accent">Richardson</span><br />Fire Protection
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Family-owned and Sacramento-based, Richardson Fire Protection has been the fire sprinkler sub general contractors and developers call first — because we show up, hit our phases, and pass inspection.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn--ghost btn--lg">
            Get a Quote
          </a>
        </div>
      </div>
    </section>

    <!-- ========== STORY ========== -->
    <section class="section about">
      <div class="container about-container">
        <div class="about-visual reveal-left">
          <div class="about-img-wrap">
            <div class="about-img-card about-img-card--1">
              <img
                src="<?php echo esc_url( rfp_truck_img_url() ); ?>"
                alt="Richardson Fire Protection service truck"
                style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit; display: block;"
                loading="lazy"
              />
            </div>
            <div class="about-img-card about-img-card--2">
              <img
                src="<?php echo esc_url( rfp_bg_img_url() ); ?>"
                alt="Richardson Fire Protection team at work"
                style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit; display: block;"
                loading="lazy"
              />
            </div>
            <div class="about-float-card">
              <div class="float-card-icon"><i class="fa-solid fa-award"></i></div>
              <div class="float-card-content">
                <strong>Trusted Since 1994</strong>
                <span>Sacramento's #1 fire protection firm</span>
              </div>
            </div>
          </div>
        </div>
        <div class="about-content reveal-right">
          <div class="section-badge">Our Story</div>
          <h2 class="section-title">30 Years of Protecting <span class="text-accent">Northern California</span></h2>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( get_the_content() ) : ?>
              <div class="entry-content"><?php the_content(); ?></div>
            <?php else : ?>
              <p class="about-lead">Richardson Fire Protection was founded in Sacramento in 1994 with one mission: deliver code-compliant, reliable fire protection for the businesses and residents of Northern California.</p>
              <p class="about-body">What started as a small installation crew has grown into one of the region's most trusted full-service fire protection contractors — handling everything from design and permitting to installation, inspection, and 24/7 emergency service. Today we serve commercial property owners, general contractors, industrial operators, and multifamily housing providers across Sacramento and 15+ surrounding counties.</p>
              <p class="about-body">We are still family-owned and operated. Every job gets the same level of attention whether it's a single-tenant retail suite or a 200,000 sq ft distribution center.</p>
            <?php endif; ?>
          <?php endwhile; endif; ?>

          <div class="about-pillars" style="margin-top: 2rem;">
            <div class="pillar">
              <div class="pillar-icon"><i class="fa-solid fa-fire-flame-curved"></i></div>
              <div class="pillar-content">
                <strong>Built to Code. Built to Last.</strong>
                <span>Every system meets or exceeds NFPA standards and local AHJ requirements — no shortcuts, no exceptions.</span>
              </div>
            </div>
            <div class="pillar">
              <div class="pillar-icon"><i class="fa-solid fa-bolt"></i></div>
              <div class="pillar-content">
                <strong>24/7 Emergency Response</strong>
                <span>Fire emergencies don't follow business hours. Neither do we — call us any time, day or night.</span>
              </div>
            </div>
            <div class="pillar">
              <div class="pillar-icon"><i class="fa-solid fa-handshake"></i></div>
              <div class="pillar-content">
                <strong>Family-Owned &amp; Accountable</strong>
                <span>We stand behind every job with our name and reputation, not a corporate call center.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== STATS ========== -->
    <section class="stats-ticker">
      <div class="ticker-track">
        <div class="ticker-items" id="tickerItems">
          <div class="ticker-item"><span class="ticker-num" data-target="30">0</span><span>+</span><span class="ticker-label">Years Experience</span></div>
          <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
          <div class="ticker-item"><span class="ticker-num" data-target="5000">0</span><span>+</span><span class="ticker-label">Systems Installed</span></div>
          <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
          <div class="ticker-item"><span class="ticker-num" data-target="98">0</span><span>%</span><span class="ticker-label">Client Satisfaction</span></div>
          <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
          <div class="ticker-item"><span class="ticker-num" data-target="500">0</span><span>+</span><span class="ticker-label">Commercial Clients</span></div>
          <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
          <div class="ticker-item"><span class="ticker-num" data-target="15">0</span><span>+</span><span class="ticker-label">Counties Served</span></div>
          <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
        </div>
      </div>
    </section>

    <!-- ========== CERTIFICATIONS ========== -->
    <section class="section" style="background: #fafafa;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Credentials</div>
          <h2 class="section-title">Licensed, Certified &amp; <span class="text-accent">Insured</span></h2>
          <p class="section-desc">Our team holds the licenses and certifications required to design and install fire protection systems across California.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-certificate"></i></div>
            <h3 class="service-card__title">CSLB Licensed</h3>
            <p class="service-card__desc">California Contractors State License Board — C-16 Fire Protection classification.</p>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-shield-halved"></i></div>
            <h3 class="service-card__title">NICET Certified</h3>
            <p class="service-card__desc">National Institute for Certification in Engineering Technologies — fire alarm &amp; sprinkler.</p>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-star"></i></div>
            <h3 class="service-card__title">UL Listed</h3>
            <p class="service-card__desc">Underwriters Laboratories listed materials and equipment on every installation.</p>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-fire"></i></div>
            <h3 class="service-card__title">NFPA Member</h3>
            <p class="service-card__desc">Active member — current on all NFPA 13, 25, 72 standards and code cycles.</p>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-check-double"></i></div>
            <h3 class="service-card__title">OSHA Compliant</h3>
            <p class="service-card__desc">All field crews trained and certified in OSHA 10/30 safety standards.</p>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-building-shield"></i></div>
            <h3 class="service-card__title">Fully Insured</h3>
            <p class="service-card__desc">General liability and workers' comp insurance on every project — certificates available on request.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICE AREA ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Coverage</div>
          <h2 class="section-title">Serving Sacramento &amp; <span class="text-accent">Northern California</span></h2>
          <p class="section-desc">We serve commercial, industrial, and residential clients across 15+ counties in Northern California.</p>
        </div>
        <div class="residential-layout reveal-up">
          <div class="residential-content" style="flex: 1;">
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-location-dot"></i></div>
              <div>
                <h3>Primary Service Areas</h3>
                <p>Sacramento, Placer, El Dorado, Yolo, Solano, San Joaquin, Stanislaus, Amador, Calaveras, Shasta, Tehama, Glenn, Colusa, Sutter, and Yuba counties.</p>
              </div>
            </div>
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-truck-fast"></i></div>
              <div>
                <h3>24/7 Emergency Response</h3>
                <p>Emergency service available throughout our service area at any hour. Call <a href="tel:+19168496441" style="color: #C41230; font-weight: 600;">(916) 849-6441</a> for immediate response.</p>
              </div>
            </div>
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-phone"></i></div>
              <div>
                <h3>Outside Our Area?</h3>
                <p>Call us anyway — for large projects we regularly travel outside our standard service area.</p>
              </div>
            </div>
          </div>
          <div class="residential-visual" style="flex: 1;">
            <div style="background: #1a1a1a; border-radius: 16px; padding: 2.5rem; color: #fff;">
              <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.5rem; margin-bottom: 1.5rem; color: #C41230;">Key Cities We Serve</h3>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem 1.5rem; font-size: 0.9rem;">
                <?php
                $cities = [
                  'Sacramento', 'Elk Grove', 'Roseville', 'Folsom',
                  'Rocklin', 'Lincoln', 'Auburn', 'Davis',
                  'Woodland', 'Stockton', 'Modesto', 'Lodi',
                  'Rancho Cordova', 'Citrus Heights', 'Chico', 'Redding',
                ];
                foreach ( $cities as $city ) : ?>
                  <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fa-solid fa-check" style="color: #C41230; font-size: 0.75rem;"></i>
                    <?php echo esc_html( $city ); ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: #C41230; color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; margin-bottom: 1rem;">Ready to Work With Us?</h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">Get a free consultation from Sacramento's most trusted fire protection team.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Request a Quote
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
