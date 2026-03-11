<?php
/**
 * Template Name: Commercial Fire Protection
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "commercial".
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
          NFPA 13 · NFPA 72 · Title 19 Compliant
        </div>
        <h1 class="hero-title reveal-up">
          Commercial Fire <span class="hero-title--accent">Protection</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Full-service fire suppression and alarm systems for offices, retail centers, restaurants, hotels, schools, and multi-tenant buildings across Sacramento and Northern California.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Get a Free Quote
          </a>
          <a href="#commercial-services" class="btn btn--ghost btn--lg">
            See All Services
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Standards We Work To</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-bell"></i> NFPA 72</div>
            <div class="cert-item"><i class="fa-solid fa-magnifying-glass"></i> NFPA 25</div>
            <div class="cert-item"><i class="fa-solid fa-fire"></i> Title 19</div>
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
    <section id="commercial-services" class="section commercial">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Commercial Services</div>
          <h2 class="section-title">Everything Your Building <span class="text-accent">Needs</span></h2>
          <p class="section-desc">From initial design through ongoing annual inspections, Richardson handles every aspect of commercial fire protection.</p>
        </div>
        <div class="services-grid">
          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <div class="service-card__tag">Suppression</div>
            <h3 class="service-card__title">Sprinkler System Design &amp; Installation</h3>
            <p class="service-card__desc">NFPA 13-compliant wet, dry, and pre-action sprinkler systems engineered for your building's specific occupancy classification and hazard level.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Wet &amp; dry pipe systems</li>
              <li><i class="fa-solid fa-check"></i> Pre-action systems</li>
              <li><i class="fa-solid fa-check"></i> Deluge systems</li>
              <li><i class="fa-solid fa-check"></i> Tenant improvement retrofits</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card reveal-up" data-delay="100">
            <div class="service-card__icon"><i class="fa-solid fa-bell"></i></div>
            <div class="service-card__tag">Detection</div>
            <h3 class="service-card__title">Fire Alarm Systems</h3>
            <p class="service-card__desc">Addressable and conventional fire alarm systems from leading manufacturers — designed, installed, programmed, and monitored to NFPA 72 standards.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Addressable &amp; conventional panels</li>
              <li><i class="fa-solid fa-check"></i> Smoke, heat &amp; CO detection</li>
              <li><i class="fa-solid fa-check"></i> Voice evacuation systems</li>
              <li><i class="fa-solid fa-check"></i> Central station monitoring</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card reveal-up service-card--featured" data-delay="200">
            <div class="featured-badge">Most Requested</div>
            <div class="service-card__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="service-card__tag">Compliance</div>
            <h3 class="service-card__title">Annual Inspection &amp; Testing</h3>
            <p class="service-card__desc">Stay code-compliant with thorough inspections, testing, and certification of all fire protection systems — fully documented for your AHJ and insurance carrier.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Sprinkler inspections (NFPA 25)</li>
              <li><i class="fa-solid fa-check"></i> Alarm testing (NFPA 72)</li>
              <li><i class="fa-solid fa-check"></i> Fire pump testing</li>
              <li><i class="fa-solid fa-check"></i> Digital compliance reports</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Schedule Now <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Extended services row -->
        <div class="services-grid services-grid--6 reveal-up" style="margin-top: 1.5rem;">
          <?php
          $extra = [
            [ 'fa-solid fa-fire-extinguisher', 'Portable Extinguishers',    'Sales, service, and annual inspection for portable fire extinguishers.' ],
            [ 'fa-solid fa-door-open',          'Emergency Egress Lighting',  'Exit signs and emergency lighting installation and testing.' ],
            [ 'fa-solid fa-plug',               'Monitoring &amp; Central Station', 'UL-listed central station monitoring for alarm and suppression systems.' ],
            [ 'fa-solid fa-screwdriver-wrench', 'System Repairs',            'Fast repair of damaged or non-functional components — sprinklers, heads, valves, panels.' ],
            [ 'fa-solid fa-clipboard-check',    'Permit &amp; AHJ Coordination', 'We pull permits and coordinate final inspections with the Authority Having Jurisdiction.' ],
            [ 'fa-solid fa-truck-fast',         '24/7 Emergency Service',    'Around-the-clock response for sprinkler leaks, system impairments, and alarm failures.' ],
          ];
          foreach ( $extra as $s ) : ?>
            <div class="service-card service-card--sm">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $s[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo $s[1]; ?></h3>
              <p class="service-card__desc"><?php echo esc_html( $s[2] ); ?></p>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== BUILDING TYPES ========== -->
    <section class="section" style="background: #f8f8f8;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Who We Serve</div>
          <h2 class="section-title">Building Types We <span class="text-accent">Protect</span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $types = [
            'fa-solid fa-briefcase'       => 'Office Buildings',
            'fa-solid fa-store'           => 'Retail Centers',
            'fa-solid fa-utensils'        => 'Restaurants',
            'fa-solid fa-hotel'           => 'Hotels &amp; Motels',
            'fa-solid fa-graduation-cap'  => 'Schools &amp; Universities',
            'fa-solid fa-hospital'        => 'Medical &amp; Healthcare',
            'fa-solid fa-church'          => 'Houses of Worship',
            'fa-solid fa-building'        => 'High-Rise Buildings',
            'fa-solid fa-car'             => 'Parking Structures',
            'fa-solid fa-dumbbell'        => 'Gyms &amp; Fitness Centers',
            'fa-solid fa-film'            => 'Entertainment Venues',
            'fa-solid fa-building-columns'=> 'Government Buildings',
          ];
          foreach ( $types as $icon => $label ) : ?>
            <div class="service-card service-card--sm" style="text-align: center; padding: 1.5rem 1rem;">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
              <h3 class="service-card__title" style="font-size: 0.9rem;"><?php echo $label; ?></h3>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== PROCESS ========== -->
    <section class="section process">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">How We Work</div>
          <h2 class="section-title">Turnkey from Permit to <span class="text-accent">Certificate</span></h2>
          <p class="section-desc">We handle design, permitting, installation, and final inspection — you focus on your business.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="step-title">Free Consultation</h3>
            <p class="step-desc">We assess your building, review your occupancy classification, and discuss your protection requirements and budget.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">Engineering &amp; Permits</h3>
            <p class="step-desc">Our engineers produce stamped drawings and hydraulic calcs. We pull all required permits from the local AHJ.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-hard-hat"></i></div>
            <h3 class="step-title">Installation</h3>
            <p class="step-desc">Licensed field crews install your system with minimal disruption to operations. All work is inspected daily.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Test &amp; Certify</h3>
            <p class="step-desc">Full system test, AHJ final inspection, and certificate of occupancy support. Ongoing maintenance plans available.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Protect Your Commercial Property
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          Get a free quote from Sacramento's most experienced commercial fire protection team.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Request a Free Quote
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
