<?php
/**
 * Template Name: Fire Protection Services
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "fire-protection-services".
 * Targets: "sacramento fire protection services", "fire protection contractor sacramento",
 *          "fire protection company sacramento", "fire protection services near me"
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 55vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Sacramento &bull; Central Valley &bull; Bay Area &bull; C-16 Licensed
        </div>
        <h1 class="hero-title reveal-up">
          Fire Protection Services in <span class="hero-title--accent">Sacramento</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection is a full-service fire protection contractor serving Sacramento and Northern California. From design and installation to inspection, testing, repair, and 24/7 emergency response — we are the licensed C-16 contractor for every phase of a building's fire protection life cycle. CSLB C-16 License #1053506 &bull; NICET Level II &bull; CSFM Registered.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#services-overview" class="btn btn--ghost btn--lg">
            All Services
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Why Richardson</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> CSLB C-16 #1053506</div>
            <div class="cert-item"><i class="fa-solid fa-award"></i> NICET Level II</div>
            <div class="cert-item"><i class="fa-solid fa-star"></i> 4.8-Star Rating</div>
            <div class="cert-item"><i class="fa-solid fa-clock"></i> 24/7 Emergency</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== BREADCRUMB NAV ========== -->
    <div class="container" style="padding-top: 1.25rem; padding-bottom: 0.25rem;">
      <nav class="breadcrumb" aria-label="Breadcrumb" style="font-size: 0.85rem; color: var(--c-text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span> &rsaquo; </span>
        <span>Fire Protection Services</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          Richardson Fire Protection provides comprehensive fire protection services for commercial, industrial, warehouse, and multifamily properties across Sacramento Valley and the Bay Area. We hold a California CSLB C-16 fire protection contractor license, employ NICET-certified designers, and are registered with the California State Fire Marshal — the full credential stack required to design, install, inspect, and repair fire sprinkler systems in California.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          Unlike general contractors who subcontract fire protection, Richardson handles every phase in-house. That means one point of contact, faster AHJ coordination, and no markup layers between design intent and field execution. If you're searching for "fire protection services near me" in Sacramento or the surrounding counties, Richardson is the local licensed contractor with the credentials to match.
        </p>
      </div>
    </section>

    <!-- ========== SERVICE HUB CARDS ========== -->
    <section id="services-overview" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Do</div>
          <h2 class="section-title">Our Fire Protection <span class="text-accent">Services</span></h2>
          <p class="section-desc">Richardson provides every fire protection service a commercial, industrial, or multifamily building needs — from initial design through ongoing compliance.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <div class="service-card__tag">Design-Build</div>
            <h3 class="service-card__title">Fire Sprinkler System Design</h3>
            <p class="service-card__desc">NFPA 13, 13R, and 13D design with hydraulic calculations, coordinated shop drawings, and AHJ submittal management. NICET-certified designers in-house. 24–48 hour preliminary pricing for most projects.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Commercial &amp; industrial</li>
              <li><i class="fa-solid fa-check"></i> Multifamily &amp; residential</li>
              <li><i class="fa-solid fa-check"></i> Tenant improvements</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="service-card reveal-up service-card--featured" data-delay="100">
            <div class="featured-badge">Most Requested</div>
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="service-card__tag">Commercial</div>
            <h3 class="service-card__title">Commercial Fire Protection</h3>
            <p class="service-card__desc">Fire sprinkler design and installation for offices, retail, restaurants, hotels, and mixed-use buildings. NFPA 13 wet pipe, dry pipe, pre-action, and deluge systems. Tenant improvement modifications on occupied buildings.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Offices &amp; retail</li>
              <li><i class="fa-solid fa-check"></i> Restaurants &amp; hospitality</li>
              <li><i class="fa-solid fa-check"></i> TI modifications</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>" class="service-card__link">Commercial Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Industrial</div>
            <h3 class="service-card__title">Industrial &amp; Warehouse Fire Protection</h3>
            <p class="service-card__desc">ESFR, in-rack, dry pipe, and special hazard fire sprinkler systems for warehouses, distribution centers, manufacturing facilities, and cold storage. Commodity classification and high-piled storage analysis included.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> ESFR systems</li>
              <li><i class="fa-solid fa-check"></i> In-rack sprinklers</li>
              <li><i class="fa-solid fa-check"></i> Cold storage dry pipe</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>" class="service-card__link">Industrial Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-pump-soap"></i></div>
            <div class="service-card__tag">Fire Pumps</div>
            <h3 class="service-card__title">Fire Pump Design &amp; Installation</h3>
            <p class="service-card__desc">Electric and diesel fire pump systems for high-rise, campus, and high-demand occupancies where municipal supply is insufficient. NFPA 20 design, installation, and annual flow testing by certified technicians.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NFPA 20 design</li>
              <li><i class="fa-solid fa-check"></i> Electric &amp; diesel pumps</li>
              <li><i class="fa-solid fa-check"></i> Annual flow testing</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/fire-pump/' ) ); ?>" class="service-card__link">Fire Pump Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="service-card reveal-up" data-delay="100">
            <div class="service-card__icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <div class="service-card__tag">Compliance</div>
            <h3 class="service-card__title">Inspection, Testing &amp; Maintenance</h3>
            <p class="service-card__desc">NFPA 25 annual inspection, testing, and maintenance for all system types. Quarterly and 5-year testing cycles, written deficiency reports, and deficiency correction scheduling — all in one service relationship.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NFPA 25 compliant</li>
              <li><i class="fa-solid fa-check"></i> Written deficiency reports</li>
              <li><i class="fa-solid fa-check"></i> All system types</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/inspection-testing/' ) ); ?>" class="service-card__link">Inspection Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-wrench"></i></div>
            <div class="service-card__tag">24/7 Repair</div>
            <h3 class="service-card__title">Fire Sprinkler Repair &amp; Emergency Response</h3>
            <p class="service-card__desc">Same-visit repairs for head replacement, pipe repair, valve service, and system modifications. 24/7 emergency response for impairments, flowing heads, and burst pipes. NFPA 25 deficiency corrections documented.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> 24/7 emergency response</li>
              <li><i class="fa-solid fa-check"></i> Same-visit repairs</li>
              <li><i class="fa-solid fa-check"></i> All building types</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-repair/' ) ); ?>" class="service-card__link">Repair Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 900px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Credentials</div>
          <h2 class="section-title">Why Sacramento Chooses <span class="text-accent">Richardson Fire Protection</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up" style="margin-top: 1.5rem;">
          <?php
          $reasons = [
            [ 'fa-solid fa-certificate', 'C-16 Licensed',   'CSLB C-16 Fire Protection License #1053506 — required by California law to design, install, and repair fire sprinkler systems.' ],
            [ 'fa-solid fa-award',       'NICET Certified', 'NICET Level II certified designers produce code-compliant drawings and hydraulic calculations in-house — no outsourcing.' ],
            [ 'fa-solid fa-fire',        'CSFM Registered', 'California State Fire Marshal registered contractor. Required for all public occupancy work in California.' ],
            [ 'fa-solid fa-map-location-dot', 'Local', 'Sacramento-based. We know the AHJs, local amendments, and inspection expectations across Sacramento, Placer, San Joaquin, and Bay Area counties.' ],
          ];
          foreach ( $reasons as $r ) : ?>
            <div class="service-card service-card--sm">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $r[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo $r[1]; ?></h3>
              <p class="service-card__desc"><?php echo $r[2]; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== PROCESS ========== -->
    <section class="section process" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">From Design to <span class="text-accent">Certificate of Occupancy</span></h2>
          <p class="section-desc">Richardson manages the full fire protection life cycle for new construction, tenant improvements, and retrofit projects.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="step-title">Consultation &amp; Scoping</h3>
            <p class="step-desc">We review your project documents, identify applicable NFPA standards, confirm AHJ requirements, and provide a preliminary bid within 24–48 hours.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">Design &amp; Permit</h3>
            <p class="step-desc">NICET-certified designers produce AHJ-ready shop drawings with hydraulic calculations. We submit and track the permit so you don't have to.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-hammer"></i></div>
            <h3 class="step-title">Installation</h3>
            <p class="step-desc">Licensed C-16 crews install on the GC's or owner's schedule. We coordinate with other trades and self-perform all fire sprinkler and fire pump work.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Inspection &amp; CO Sign-Off</h3>
            <p class="step-desc">We manage all AHJ inspections, hydrostatic and flow testing, and deliver as-builts and O&amp;M documentation for your Certificate of Occupancy package.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICE AREA ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Where We Work</div>
          <h2 class="section-title">Fire Protection Services Across <span class="text-accent">Northern California</span></h2>
        </div>
        <p class="reveal-up" style="margin-top: 1.25rem; font-size: 1.05rem; line-height: 1.75;">
          Richardson provides fire protection services throughout Sacramento Valley, the Central Valley, and the Bay Area:
        </p>
        <div class="reveal-up" style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1.25rem;">
          <?php
          $cities = [
            'Sacramento', 'Roseville', 'Elk Grove', 'Folsom', 'Rancho Cordova',
            'West Sacramento', 'Stockton', 'Modesto', 'Fairfield', 'Vallejo',
            'Concord', 'Oakland', 'Fremont', 'San Jose', 'Napa',
          ];
          foreach ( $cities as $city ) : ?>
            <span style="background: var(--c-surface); border: 1px solid var(--c-border); border-radius: 999px; padding: 0.35rem 0.9rem; font-size: 0.9rem;"><?php echo esc_html( $city ); ?></span>
          <?php endforeach; ?>
        </div>
        <p class="reveal-up" style="margin-top: 1.25rem; font-size: 0.95rem; color: var(--c-text-muted);">
          Not sure if we serve your city? Call (916) 849-6441 or visit our <a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>">locations page</a>.
        </p>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-services" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Fire Protection Services <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'What fire protection services does Richardson provide?',
              'a' => 'Richardson Fire Protection provides full-lifecycle fire protection services: fire sprinkler system design and installation (commercial, industrial, warehouse, and multifamily), fire pump design and installation, NFPA 25 inspection and testing, fire sprinkler repair (including 24/7 emergency response), and tenant improvement modifications. All work is performed in-house by CSLB C-16 licensed crews.',
            ],
            [
              'q' => 'Is Richardson a licensed fire protection contractor in California?',
              'a' => 'Yes. Richardson holds CSLB C-16 Fire Protection Contractor License #1053506, is registered with the California State Fire Marshal (CSFM), and employs NICET Level II certified designers. The C-16 license is specifically required by California law to design, install, and repair fire sprinkler systems. We carry all required liability insurance and workers\' compensation coverage.',
            ],
            [
              'q' => 'What areas does Richardson serve?',
              'a' => 'Richardson provides fire protection services throughout Sacramento Valley (Sacramento, Roseville, Folsom, Elk Grove, Rancho Cordova), the Central Valley (Stockton, Modesto), the North Bay (Fairfield, Napa, Vallejo), and the Bay Area (Concord, Oakland, Fremont, San Jose). Call (916) 849-6441 to confirm coverage for your project location.',
            ],
            [
              'q' => 'How do I get a bid for fire protection work?',
              'a' => 'Call (916) 849-6441 or use the contact form on our website. For new construction and tenant improvement projects, provide your project address, occupancy type, square footage, and any available architectural drawings. Richardson provides preliminary pricing within 24–48 hours for most commercial and industrial projects.',
            ],
            [
              'q' => 'Does Richardson do both new construction and retrofit fire sprinkler work?',
              'a' => 'Yes. Richardson handles new construction fire protection from pre-construction AHJ coordination through Certificate of Occupancy sign-off, as well as retrofit installations, tenant improvement modifications, and system additions in existing occupied buildings. For large retrofit projects in occupied multifamily or commercial buildings, we provide impairment scheduling and tenant notification management.',
            ],
          ];
          foreach ( $faqs as $faq ) : ?>
            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                <?php echo esc_html( $faq['q'] ); ?>
                <i class="fa-solid fa-chevron-down faq-icon"></i>
              </button>
              <div class="faq-answer">
                <p><?php echo wp_kses_post( $faq['a'] ); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Request Fire Protection Services
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          Licensed. Certified. Local. 24–48 hour bids for new construction and tenant improvements. CSLB C-16 #1053506 — serving Sacramento and all of Northern California.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Get a Free Bid
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
