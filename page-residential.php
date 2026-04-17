<?php
/**
 * Template Name: Residential / Multifamily Fire Protection
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "residential" or "multifamily".
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
          NFPA 13R Fire Sprinkler Sub for Multifamily Developers &amp; GCs — Sacramento
        </div>
        <h1 class="hero-title reveal-up">
          Multifamily Fire <span class="hero-title--accent">Sprinkler Systems</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Building apartments, condos, or mixed-use in Sacramento? We're the fire sprinkler sub multifamily developers and GCs trust for NFPA 13R design-build, permit coordination, and phased installation that hits your construction schedule.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Request a Property Assessment
          </a>
          <a href="#residential-services" class="btn btn--ghost btn--lg">
            Our Services
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">We Work to These Standards</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-building"></i> NFPA 13R</div>
            <div class="cert-item"><i class="fa-solid fa-house"></i> NFPA 13D</div>
            <div class="cert-item"><i class="fa-solid fa-bell"></i> NFPA 72</div>
            <div class="cert-item"><i class="fa-solid fa-magnifying-glass"></i> NFPA 25</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== INTRO ========== -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php if ( get_the_content() ) : ?>
        <div class="container" style="padding-top: 4rem; padding-bottom: 2rem; max-width: 800px;">
          <div class="entry-content"><?php the_content(); ?></div>
        </div>
      <?php endif; ?>
    <?php endwhile; endif; ?>

    <!-- ========== CORE SERVICES ========== -->
    <section id="residential-services" class="section residential">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Multifamily Services</div>
          <h2 class="section-title">Complete Protection for <span class="text-accent">Every Resident</span></h2>
          <p class="section-desc">From new construction ground-up to occupied retrofits, we deliver fire protection that meets code and protects the people who call your property home.</p>
        </div>
        <div class="residential-layout">
          <div class="residential-content reveal-left">
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-building"></i></div>
              <div>
                <h3>NFPA 13R Sprinkler Systems</h3>
                <p>Fully engineered NFPA 13R sprinkler systems for low- and mid-rise multifamily buildings — from new construction to retrofit projects on occupied properties. We handle permits, coordination, and AHJ final inspection.</p>
              </div>
            </div>
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-house"></i></div>
              <div>
                <h3>NFPA 13D Single-Family &amp; Townhome</h3>
                <p>NFPA 13D residential sprinkler systems for single-family homes and townhomes — required by many California cities for new construction under CBC Chapter 9.</p>
              </div>
            </div>
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-bell"></i></div>
              <div>
                <h3>Building-Wide Fire Alarm Systems</h3>
                <p>Addressable fire alarm systems with apartment-level notification, common area coverage, corridor detection, and AHJ-compliant monitoring — designed to NFPA 72 standards.</p>
              </div>
            </div>
            <div class="res-feature">
              <div class="res-feature__icon"><i class="fa-solid fa-clipboard-check"></i></div>
              <div>
                <h3>Annual Inspection &amp; Compliance</h3>
                <p>Annual inspection and testing programs to keep your property continuously code-compliant. Critical for insurance renewals, lender requirements, and regulatory compliance.</p>
              </div>
            </div>
            <a href="tel:+19168496441" class="btn btn--primary">
              <i class="fa-solid fa-phone"></i> Request a Property Assessment
            </a>
          </div>
          <div class="residential-visual reveal-right">
            <div class="res-stat-cards">
              <div class="res-stat-card">
                <div class="res-stat-icon"><i class="fa-solid fa-building"></i></div>
                <div class="res-stat-num">NFPA 13R</div>
                <div class="res-stat-label">The governing standard for multifamily sprinkler systems — we design and install to full code compliance for every jurisdiction in our service area.</div>
              </div>
              <div class="res-stat-card res-stat-card--accent">
                <div class="res-stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="res-stat-num">AHJ Ready</div>
                <div class="res-stat-label">We handle permits, plan check coordination, and final inspection with the Authority Having Jurisdiction — your job is done when we pull the permit.</div>
              </div>
              <div class="res-stat-card">
                <div class="res-stat-icon"><i class="fa-solid fa-file-contract"></i></div>
                <div class="res-stat-num">Turnkey</div>
                <div class="res-stat-label">Design, engineering, installation, testing, and certificate of completion — single point of accountability from groundbreak to occupancy.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHO WE SERVE ========== -->
    <section class="section" style="background: #fafafa;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Property Types</div>
          <h2 class="section-title">Multifamily Properties We <span class="text-accent">Protect</span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $ptypes = [
            [ 'fa-solid fa-building',      'Apartment Complexes',    'Low-rise, mid-rise, and garden-style apartment buildings — new construction and occupied retrofits.' ],
            [ 'fa-solid fa-building-user', 'Condominiums',           'Condo associations and HOAs — new projects and existing buildings requiring code upgrades.' ],
            [ 'fa-solid fa-people-roof',   'Senior Living',          'Assisted living, memory care, and independent senior communities — with heightened life safety requirements.' ],
            [ 'fa-solid fa-store',         'Mixed-Use Developments', 'Ground-floor commercial with residential above — we design systems that meet both occupancy classifications.' ],
            [ 'fa-solid fa-house-chimney', 'Townhome Communities',   'Attached townhomes and rowhomes requiring NFPA 13D or 13R systems per CBC Chapter 9.' ],
            [ 'fa-solid fa-graduation-cap','Student Housing',        'On- and off-campus student housing with higher occupancy loads and specific code requirements.' ],
          ];
          foreach ( $ptypes as $p ) : ?>
            <div class="service-card service-card--sm">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $p[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo esc_html( $p[1] ); ?></h3>
              <p class="service-card__desc"><?php echo esc_html( $p[2] ); ?></p>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FOR PROPERTY MANAGERS ========== -->
    <section class="section about">
      <div class="container about-container">
        <div class="about-visual reveal-left">
          <div style="background: #1a1a1a; border-radius: 16px; padding: 2.5rem; color: #fff; height: 100%; display: flex; flex-direction: column; gap: 1.5rem; justify-content: center;">
            <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.5rem; color: #C41230;">Why Property Managers Choose Us</h3>
            <?php
            $pm_points = [
              'We carry full general liability and workers\' comp insurance — COI available on request.',
              'Our inspection reports are digital, detailed, and camera-documented for your records.',
              'We coordinate directly with building management to schedule inspections around tenant schedules.',
              'We track your system\'s compliance calendar and send renewal reminders before deficiency notices arrive.',
              'Single point of contact for design, installation, inspections, and emergency service.',
            ];
            foreach ( $pm_points as $pt ) : ?>
              <div style="display: flex; gap: 1rem; align-items: flex-start;">
                <i class="fa-solid fa-check" style="color: #C41230; margin-top: 0.2rem; flex-shrink: 0;"></i>
                <span style="font-size: 0.95rem; color: rgba(255,255,255,0.85);"><?php echo esc_html( $pt ); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="about-content reveal-right">
          <div class="section-badge">For Property Managers &amp; HOAs</div>
          <h2 class="section-title">Managing a Portfolio? <span class="text-accent">We've Got You.</span></h2>
          <p class="about-lead">Richardson Fire Protection works with property management companies and HOAs across Northern California to keep their entire portfolios compliant, inspected, and protected.</p>
          <p class="about-body">We understand the unique pressures of managing occupied multifamily properties — from tenant relations during retrofit projects to keeping compliance certificates current for lender and insurance requirements. Our team coordinates everything so you don't have to.</p>
          <div class="about-pillars">
            <div class="pillar">
              <div class="pillar-icon"><i class="fa-solid fa-calendar-check"></i></div>
              <div class="pillar-content">
                <strong>Compliance Tracking</strong>
                <span>We track your inspection schedule and alert you before renewals are due.</span>
              </div>
            </div>
            <div class="pillar">
              <div class="pillar-icon"><i class="fa-solid fa-file-lines"></i></div>
              <div class="pillar-content">
                <strong>Lender-Ready Reports</strong>
                <span>Our inspection documentation meets the requirements of most commercial lenders and insurance underwriters.</span>
              </div>
            </div>
          </div>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary">
            <i class="fa-solid fa-phone"></i> Schedule a Portfolio Review
          </a>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: #C41230; color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; margin-bottom: 1rem;">
          Protect Your Residents &amp; Your Investment
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Get a free property assessment from Sacramento's multifamily fire protection specialists.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Request a Free Assessment
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
