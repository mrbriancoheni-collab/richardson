<?php
/**
 * Template Name: Fire Sprinkler Installation Hub
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "fire-sprinkler-installation".
 * Targets: "fire sprinkler installation companies", "fire sprinkler installation sacramento",
 *          "fire sprinkler companies near me", "fire sprinkler contractor near me"
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
          Local C-16 Licensed Contractor &bull; 24–48 hr Bids &bull; First-Pass AHJ Approvals
        </div>
        <h1 class="hero-title reveal-up">
          Fire Sprinkler Installation in <span class="hero-title--accent">Sacramento</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection is a full design-build fire sprinkler installation company serving GCs, developers, and building owners across Sacramento and Northern California. We handle everything — NFPA 13 design, AHJ permitting, field installation, and certificate of occupancy — under one C-16 license.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#installation-types" class="btn btn--ghost btn--lg">
            Building Types
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Standards We Install To</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-building-user"></i> NFPA 13R</div>
            <div class="cert-item"><i class="fa-solid fa-house"></i> NFPA 13D</div>
            <div class="cert-item"><i class="fa-solid fa-magnifying-glass"></i> NFPA 25</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== BREADCRUMB ========== -->
    <div class="container" style="padding-top: 1.25rem; padding-bottom: 0.25rem;">
      <nav class="breadcrumb" aria-label="Breadcrumb" style="font-size: 0.85rem; color: var(--c-text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span> &rsaquo; </span>
        <span>Fire Sprinkler Installation</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          <strong>Fire sprinkler installation</strong> covers the full scope of work from initial system design through the final AHJ inspection — hydraulic calculations, shop drawing production, permit submittal, pipe and head installation, hydrostatic testing, and certificate of occupancy support. As a licensed fire sprinkler installation company, Richardson handles every phase under one contract.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          We specialize in <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>">commercial</a>, <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>">industrial</a>, and <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>">multifamily residential</a> fire sprinkler installation — new construction, tenant improvements, and occupied building retrofits. CSLB C-16 License #1053506. NICET Level II certified design team. Bids returned in 24–48 hours.
        </p>
      </div>
    </section>

    <!-- ========== INSTALLATION BY TYPE ========== -->
    <section id="installation-types" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Installation Types</div>
          <h2 class="section-title">Fire Sprinkler Installation for <span class="text-accent">Every Building Type</span></h2>
          <p class="section-desc">Richardson installs fire sprinkler systems for all commercial, industrial, and residential occupancies. Select your building type for detailed scope and pricing.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="service-card__tag">Commercial</div>
            <h3 class="service-card__title">Commercial Fire Sprinkler Installation</h3>
            <p class="service-card__desc">NFPA 13-compliant wet pipe, dry pipe, and pre-action systems for offices, retail centers, restaurants, hotels, and mixed-use developments. Full design-build from permit to CO.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Offices, retail &amp; restaurants</li>
              <li><i class="fa-solid fa-check"></i> Hotels &amp; mixed-use</li>
              <li><i class="fa-solid fa-check"></i> Tenant improvement retrofits</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13 design-build</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/commercial-sprinkler-system/' ) ); ?>" class="service-card__link">
              Commercial Sprinkler Systems <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="service-card reveal-up service-card--featured" data-delay="100">
            <div class="featured-badge">High Demand</div>
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Industrial</div>
            <h3 class="service-card__title">Industrial &amp; Warehouse Sprinkler Installation</h3>
            <p class="service-card__desc">ESFR, in-rack, and standard NFPA 13 systems for high-bay warehouses, distribution centers, cold storage facilities, and manufacturing operations across the Sacramento Valley and Bay Area.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> ESFR high-bay warehouse systems</li>
              <li><i class="fa-solid fa-check"></i> In-rack sprinkler design</li>
              <li><i class="fa-solid fa-check"></i> Cold storage dry-pipe</li>
              <li><i class="fa-solid fa-check"></i> Manufacturing &amp; special hazard</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/industrial-sprinkler-system/' ) ); ?>" class="service-card__link">
              Industrial Sprinkler Systems <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-building-user"></i></div>
            <div class="service-card__tag">Multifamily &amp; Residential</div>
            <h3 class="service-card__title">Multifamily &amp; Residential Installation</h3>
            <p class="service-card__desc">NFPA 13R systems for apartment complexes and condos up to 4 stories; NFPA 13D for single-family homes and townhomes under California's mandatory residential sprinkler requirement.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NFPA 13R apartment systems</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13D single-family</li>
              <li><i class="fa-solid fa-check"></i> Occupied building retrofits</li>
              <li><i class="fa-solid fa-check"></i> WUI compliance</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>" class="service-card__link">
              Residential Fire Protection <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHAT'S INCLUDED ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Scope of Work</div>
          <h2 class="section-title">What Does Fire Sprinkler <span class="text-accent">Installation Include?</span></h2>
          <p class="section-desc">Richardson provides true design-build fire sprinkler installation — every line item below is included under one contract, one license, and one point of contact.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="service-card__title">System Design &amp; Hydraulic Calculations</h3>
            <p class="service-card__desc">NICET II certified engineers produce NFPA 13-compliant hydraulic calcs and occupancy hazard analysis for every project.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-file-lines"></i></div>
            <h3 class="service-card__title">Shop Drawing Production</h3>
            <p class="service-card__desc">Stamped, AHJ-ready shop drawings coordinated with architectural, structural, and MEP drawings to prevent field conflicts.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-file-contract"></i></div>
            <h3 class="service-card__title">AHJ Permit Submittal</h3>
            <p class="service-card__desc">We pull the fire sprinkler permit directly — complete first-time submittals at every AHJ across Sacramento Valley and the Bay Area.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-truck-fast"></i></div>
            <h3 class="service-card__title">Material Procurement &amp; Scheduling</h3>
            <p class="service-card__desc">We manage material delivery and scheduling to stay ahead of your GC's framing and MEP rough-in milestones.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-hard-hat"></i></div>
            <h3 class="service-card__title">Field Installation (Rough-In through Final)</h3>
            <p class="service-card__desc">Licensed C-16 crews install mains, branch lines, hangers, and heads. All work is inspected daily against approved shop drawings.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="service-card__title">Flow Test &amp; Certificate of Occupancy</h3>
            <p class="service-card__desc">Full hydrostatic test, flow test, and AHJ final inspection. We stay on-site until the inspector signs off and the CO is issued.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== PROCESS ========== -->
    <section class="section process" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">How Fire Sprinkler <span class="text-accent">Installation Works</span></h2>
          <p class="section-desc">From your first call to certificate of occupancy — here's how Richardson manages every fire sprinkler installation project.</p>
        </div>
        <div class="process-steps" style="flex-wrap: wrap; row-gap: 2rem;">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="step-title">Bid &amp; Scope Review</h3>
            <p class="step-desc">We review your plans and occupancy classification and return a fixed-price proposal within 24–48 hours. No scope creep — the number you see is the number you pay.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">NICET II Design &amp; Stamped Drawings</h3>
            <p class="step-desc">Our <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>">NICET-certified design team</a> produces hydraulic calculations and stamped shop drawings coordinated with your project's MEP set.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-file-contract"></i></div>
            <h3 class="step-title">AHJ Permit &amp; Plan Check</h3>
            <p class="step-desc">We submit complete packages directly to your local AHJ — Sacramento City, Roseville, ConFire, SJFD, or any other jurisdiction. First-pass approval or we correct at no charge.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-hard-hat"></i></div>
            <h3 class="step-title">Coordinated Field Installation</h3>
            <p class="step-desc">Licensed C-16 crews install on your GC's schedule — rough-in, mains, branches, heads, and all required hangers. We coordinate directly with mechanical and electrical subs to avoid conflicts.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">05</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Hydrostatic Test, AHJ Final &amp; CO</h3>
            <p class="step-desc">Full 200 psi hydrostatic test and functional flow test. AHJ final inspection on-site with our crew. Certificate of occupancy support until the inspector signs off.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Why Richardson</div>
          <h2 class="section-title">Why Sacramento GCs Choose Richardson <span class="text-accent">for Fire Sprinkler Installation</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up" style="margin-top: 1.5rem;">
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-certificate"></i></div>
            <h3 class="service-card__title">First-Pass AHJ Approvals</h3>
            <p class="service-card__desc">Complete submittals every time — hydraulic calcs, shop drawings, and all required forms — so your project doesn't sit in plan check correction cycles.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-id-card"></i></div>
            <h3 class="service-card__title">C-16 Licensed &amp; NICET II In-House</h3>
            <p class="service-card__desc">Design and installation under one roof. CSLB C-16 License #1053506. NICET Level II certified engineers on staff — no outside design firm needed.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-clock"></i></div>
            <h3 class="service-card__title">24–48 Hour Bid Turnaround</h3>
            <p class="service-card__desc">GCs don't have time to wait a week for a number. Richardson returns fixed-price bids within 24–48 hours of receiving plans.</p>
          </div>
          <div class="service-card service-card--sm" style="text-align:center;">
            <div class="service-card__icon"><i class="fa-solid fa-wrench"></i></div>
            <h3 class="service-card__title">Post-Install ITM Available</h3>
            <p class="service-card__desc">We offer ongoing <a href="<?php echo esc_url( home_url( '/inspection-testing/' ) ); ?>">NFPA 25 inspection and testing</a> after installation — one contractor for the life of the system.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICE AREA ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Where We Work</div>
          <h2 class="section-title">Fire Sprinkler Installation <span class="text-accent">Service Areas</span></h2>
        </div>
        <p class="reveal-up" style="font-size: 1.05rem; line-height: 1.85; margin-bottom: 1.25rem;">
          Richardson provides fire sprinkler installation services across Sacramento and Northern California, including the Sacramento Valley, Central Valley, and San Francisco Bay Area. Our primary service area includes:
        </p>
        <p class="reveal-up" style="font-size: 1rem; line-height: 1.85; color: var(--c-text-muted); margin-bottom: 1.5rem;">
          <strong style="color: var(--c-text);">Sacramento Valley:</strong>
          Sacramento · Roseville · Rocklin · Folsom · Elk Grove · Citrus Heights · Natomas · Davis · Woodland · Auburn · Lincoln · Yuba City · Marysville<br><br>
          <strong style="color: var(--c-text);">Central Valley:</strong>
          Stockton · Fairfield · Vacaville<br><br>
          <strong style="color: var(--c-text);">Bay Area:</strong>
          Concord · Oakland · Fremont · San Jose · Napa
        </p>
        <p class="reveal-up">
          <a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="btn btn--outline">
            View All Service Areas <i class="fa-solid fa-arrow-right"></i>
          </a>
        </p>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-installation" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Fire Sprinkler Installation <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'How much does fire sprinkler installation cost?',
              'a' => 'Fire sprinkler installation cost in California depends on building type, occupancy hazard classification, and project location. Light-hazard commercial (offices, retail) typically runs $2.00–$4.00 per square foot installed. Restaurants and medical offices run $3.00–$5.50/sq ft. Industrial and warehouse systems run $2.00–$6.00/sq ft depending on whether ESFR heads are required. Multifamily NFPA 13R systems typically run $1.75–$3.50/sq ft. Bay Area projects add 15–25% for labor and permit costs. Call (916) 849-6441 for a project-specific estimate returned in 24–48 hours.',
            ],
            [
              'q' => 'How long does fire sprinkler installation take?',
              'a' => 'The field installation phase for a typical commercial project runs 2–6 weeks. Total project timeline from contract execution to certificate of occupancy — including design, plan check, and installation — typically runs 8–16 weeks. The longest variable is AHJ plan check: Sacramento City runs 4–6 weeks, Roseville and Rocklin run 3–4 weeks, Bay Area jurisdictions vary from 4–8 weeks. Richardson submits complete packages on the first attempt to avoid correction cycles that add 2–4 weeks per round.',
            ],
            [
              'q' => 'Do fire sprinkler installation companies need a special license in California?',
              'a' => 'Yes. California requires fire sprinkler installation contractors to hold a CSLB C-16 (Fire Protection) contractor license. The C-16 license covers the design, installation, inspection, and service of fire protection systems — including automatic sprinkler systems, standpipes, halon systems, and fire pumps. Contractors without a C-16 license cannot legally install fire sprinklers in California. Richardson holds CSLB C-16 License #1053506 and is CSFM registered.',
            ],
            [
              'q' => 'What\'s the difference between new construction and tenant improvement fire sprinkler installation?',
              'a' => 'New construction fire sprinkler installation is installed in coordination with structural framing and rough MEP — underground mains, risers, and distribution piping are designed from scratch and installed before drywall. Tenant improvement (TI) installation modifies an existing system to cover a remodeled space: extending branch lines, relocating heads to match a new reflected ceiling plan, and updating hydraulic calcs to account for the modified layout. TI work in occupied buildings requires careful impairment planning and phased installation to keep portions of the building protected at all times.',
            ],
            [
              'q' => 'Does Richardson handle both the fire sprinkler design and installation?',
              'a' => 'Yes — Richardson is a full design-build fire sprinkler installation company. We perform NFPA 13 hydraulic calculations, produce stamped shop drawings through our NICET II certified team, pull the C-16 fire sprinkler permit directly from the AHJ, and install with our own licensed field crews. You get one contract covering design through certificate of occupancy — no separate engineer, no separate permit expediter, no finger-pointing between design and field.',
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

    <!-- ========== RELATED SERVICES ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.5rem;">
          <div class="section-badge">Related Services</div>
          <h2 class="section-title">Beyond <span class="text-accent">Installation</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="service-card__title">Fire Sprinkler System Design &amp; Engineering</h3>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <h3 class="service-card__title">NFPA 25 Inspection &amp; Testing</h3>
            <a href="<?php echo esc_url( home_url( '/inspection-testing/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-gauge-high"></i></div>
            <h3 class="service-card__title">Fire Pump Design, Install &amp; Testing</h3>
            <a href="<?php echo esc_url( home_url( '/fire-pump/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-truck-fast"></i></div>
            <h3 class="service-card__title">24/7 Emergency Repair Service</h3>
            <a href="<?php echo esc_url( home_url( '/emergency-repair/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Request a Fire Sprinkler Installation Quote
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          CSLB C-16 licensed. NICET II certified. Fixed-price bids returned in 24–48 hours across Sacramento, the Central Valley, and the Bay Area.
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

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
