<?php
/**
 * Template Name: Industrial Fire Protection
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "industrial".
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero industrial" style="min-height: 55vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          NFPA 13 · NFPA 30 · High-Piled Storage · Special Hazards
        </div>
        <h1 class="hero-title reveal-up">
          Industrial Fire <span class="hero-title--accent">Systems</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Heavy-duty fire suppression and detection systems engineered for warehouses, manufacturing plants, cold storage, high-piled storage operations, and hazardous materials environments.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Get a Site Assessment
          </a>
          <a href="#industrial-services" class="btn btn--ghost btn--lg">
            See All Services
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Applicable Standards</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-flask"></i> NFPA 30</div>
            <div class="cert-item"><i class="fa-solid fa-warehouse"></i> NFPA 13 High-Piled</div>
            <div class="cert-item"><i class="fa-solid fa-fire-flame-curved"></i> UFC</div>
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
    <section id="industrial-services" class="section industrial" style="background: #fafafa;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Industrial Services</div>
          <h2 class="section-title">Built for the <span class="text-accent">Toughest Environments</span></h2>
          <p class="section-desc">Industrial facilities have unique fire risks that demand specialized suppression and detection systems. We engineer for your specific hazard.</p>
        </div>
        <div class="services-grid">
          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Warehouse</div>
            <h3 class="service-card__title">High-Piled Storage Protection</h3>
            <p class="service-card__desc">In-rack and ceiling-level sprinkler systems engineered for high-bay warehouses and distribution centers — with full commodity classification and storage arrangement analysis.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> In-rack sprinkler systems</li>
              <li><i class="fa-solid fa-check"></i> ESFR ceiling sprinklers</li>
              <li><i class="fa-solid fa-check"></i> Commodity classification analysis</li>
              <li><i class="fa-solid fa-check"></i> Storage arrangement review</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card reveal-up service-card--featured" data-delay="100">
            <div class="featured-badge">Specialized</div>
            <div class="service-card__icon"><i class="fa-solid fa-flask"></i></div>
            <div class="service-card__tag">Special Hazards</div>
            <h3 class="service-card__title">Special Hazard Suppression</h3>
            <p class="service-card__desc">Clean agent, foam, CO₂, and dry chemical systems for environments where water-based suppression would cause more damage than the fire — or wouldn't work at all.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Clean agent (FM-200, Novec 1230)</li>
              <li><i class="fa-solid fa-check"></i> ANSUL kitchen suppression</li>
              <li><i class="fa-solid fa-check"></i> Foam deluge systems</li>
              <li><i class="fa-solid fa-check"></i> CO₂ total flooding</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-gears"></i></div>
            <div class="service-card__tag">Maintenance</div>
            <h3 class="service-card__title">Industrial System Maintenance</h3>
            <p class="service-card__desc">Scheduled preventive maintenance and emergency repair programs to keep industrial fire systems fully operational and continuously code-compliant with minimal downtime.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Annual/semi-annual PM programs</li>
              <li><i class="fa-solid fa-check"></i> Fire pump testing &amp; maintenance</li>
              <li><i class="fa-solid fa-check"></i> Valve &amp; riser maintenance</li>
              <li><i class="fa-solid fa-check"></i> 24/7 emergency response</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FACILITY TYPES ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Facility Types</div>
          <h2 class="section-title">Industrial Facilities We <span class="text-accent">Protect</span></h2>
        </div>
        <div class="residential-layout reveal-up">
          <div class="residential-content" style="flex: 1;">
            <?php
            $facilities = [
              [ 'fa-solid fa-warehouse',    'Warehouses &amp; Distribution Centers', 'High-piled storage, ESFR systems, in-rack sprinklers, and complete NFPA 13 compliance for facilities of all sizes.' ],
              [ 'fa-solid fa-industry',     'Manufacturing Plants',                   'Custom suppression and alarm systems for production floor hazards including flammable liquids, dust, and process equipment.' ],
              [ 'fa-solid fa-snowflake',    'Cold Storage &amp; Refrigeration',       'Dry pipe and pre-action systems engineered for the unique challenges of sub-zero storage environments.' ],
              [ 'fa-solid fa-paint-roller', 'Paint Booths &amp; Finishing',           'Dry chemical and foam suppression systems for automotive finishing, industrial coating, and spray booth operations.' ],
            ];
            foreach ( $facilities as $f ) : ?>
              <div class="res-feature">
                <div class="res-feature__icon"><i class="<?php echo esc_attr( $f[0] ); ?>"></i></div>
                <div>
                  <h3><?php echo $f[1]; ?></h3>
                  <p><?php echo esc_html( $f[2] ); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="residential-visual" style="flex: 1;">
            <?php
            $more = [
              [ 'fa-solid fa-bolt',         'Data Centers &amp; Server Rooms',       'Clean agent suppression (FM-200, Novec) to protect critical IT infrastructure without data loss or equipment damage.' ],
              [ 'fa-solid fa-oil-can',      'Flammable Liquid Storage',              'NFPA 30-compliant suppression systems for flammable and combustible liquid storage areas.' ],
              [ 'fa-solid fa-truck-moving', 'Truck Terminals &amp; Maintenance',     'Vehicle maintenance facilities and truck terminals with specialized suppression for fuel and hydraulic fluid hazards.' ],
              [ 'fa-solid fa-seedling',     'Agriculture &amp; Food Processing',     'Dust collection, grain handling, and food processing suppression systems built for agricultural environments.' ],
            ];
            foreach ( $more as $f ) : ?>
              <div class="res-feature">
                <div class="res-feature__icon"><i class="<?php echo esc_attr( $f[0] ); ?>"></i></div>
                <div>
                  <h3><?php echo $f[1]; ?></h3>
                  <p><?php echo esc_html( $f[2] ); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHY INDUSTRIAL ========== -->
    <section class="section" style="background: #1a1a1a; color: #fff;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Why Richardson</div>
          <h2 class="section-title" style="color: #fff;">Industrial Experience <span class="text-accent">That Matters</span></h2>
          <p class="section-desc" style="color: rgba(255,255,255,0.7);">Industrial fire protection is not one-size-fits-all. Our engineers have designed systems for some of the most complex industrial facilities in Northern California.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $pts = [
            [ 'fa-solid fa-drafting-compass', 'Hydraulic Engineering',    'In-house hydraulic calculations and stamped drawings for every installation.' ],
            [ 'fa-solid fa-clipboard-list',   'Commodity Analysis',       'Proper fire hazard classification to ensure your system is sized for your actual risk.' ],
            [ 'fa-solid fa-shield-halved',    'AHJ Coordination',         'We handle permit applications and final inspection coordination from start to finish.' ],
            [ 'fa-solid fa-tools',            'Retrofit Specialists',     'We retrofit existing facilities without requiring full shutdowns or major structural changes.' ],
            [ 'fa-solid fa-truck-fast',       '24/7 Emergency Response',  'System failure at 3 AM? We\'re on-site within the hour.' ],
            [ 'fa-solid fa-file-contract',    'Compliance Documentation', 'Complete as-built drawings, inspection records, and digital compliance reports.' ],
          ];
          foreach ( $pts as $p ) : ?>
            <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $p[0] ); ?>"></i></div>
              <h3 class="service-card__title" style="color: #fff;"><?php echo esc_html( $p[1] ); ?></h3>
              <p class="service-card__desc" style="color: rgba(255,255,255,0.7);"><?php echo esc_html( $p[2] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: #C41230; color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; margin-bottom: 1rem;">
          Protect Your Industrial Facility
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Get a free site assessment from our industrial fire protection specialists.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Request a Site Assessment
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
