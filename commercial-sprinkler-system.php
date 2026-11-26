<?php
/**
 * Template Name: Commercial Sprinkler System
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "commercial-sprinkler-system".
 * Targets: "commercial sprinkler system", "commercial fire sprinkler system",
 *          "commercial building sprinkler systems", "commercial sprinkler installation"
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
          CSLB C-16 Licensed &bull; NICET II Certified &bull; NFPA 13 Design-Build
        </div>
        <h1 class="hero-title reveal-up">
          Commercial Sprinkler System <span class="hero-title--accent">Design &amp; Installation</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection designs and installs commercial sprinkler systems for GCs, developers, and building owners across Sacramento and Northern California. NFPA 13-compliant wet pipe, dry pipe, pre-action, and deluge systems — engineered, permitted, and installed by our licensed team. Bids returned in 24–48 hours.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#system-types" class="btn btn--ghost btn--lg">
            System Types
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Governing Standards</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-fire"></i> 2022 CFC</div>
            <div class="cert-item"><i class="fa-solid fa-scroll"></i> Title 19</div>
            <div class="cert-item"><i class="fa-solid fa-magnifying-glass"></i> NFPA 25</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== BREADCRUMB NAV ========== -->
    <div class="container" style="padding-top: 1.25rem; padding-bottom: 0.25rem;">
      <nav class="breadcrumb" aria-label="Breadcrumb" style="font-size: 0.85rem; color: var(--c-text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span> &rsaquo; </span>
        <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>">Commercial Fire Protection</a>
        <span> &rsaquo; </span>
        <span>Commercial Sprinkler Systems</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          A <strong>commercial sprinkler system</strong> is an automatic fire suppression system installed throughout a commercial building to detect and suppress fires before they spread. Under the 2022 California Fire Code, virtually all new commercial construction — offices, retail centers, restaurants, warehouses, and mixed-use buildings — requires a fully automatic fire sprinkler system designed to NFPA 13 standards.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          Richardson Fire Protection is a full <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>">commercial fire protection</a> design-build contractor. We handle everything from hydraulic calculations and AHJ permitting through installation and final inspection — one C-16 license, one point of contact, first-pass approvals.
        </p>
      </div>
    </section>

    <!-- ========== SYSTEM TYPES ========== -->
    <section id="system-types" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">System Selection</div>
          <h2 class="section-title">Types of Commercial <span class="text-accent">Sprinkler Systems</span></h2>
          <p class="section-desc">The right commercial sprinkler system depends on your occupancy type, building environment, and local AHJ requirements. Richardson selects and engineers the appropriate system for every project.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <div class="service-card__tag">Most Common</div>
            <h3 class="service-card__title">Wet Pipe Sprinkler System</h3>
            <p class="service-card__desc">Piping is filled with pressurized water at all times. When a sprinkler head activates, water flows immediately — no delay, no valves to open. The simplest, most reliable, and lowest-cost commercial sprinkler system option.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Offices, retail, restaurants</li>
              <li><i class="fa-solid fa-check"></i> Heated interior spaces</li>
              <li><i class="fa-solid fa-check"></i> Lowest installed cost</li>
              <li><i class="fa-solid fa-check"></i> Easiest to maintain</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="100">
            <div class="service-card__icon"><i class="fa-solid fa-wind"></i></div>
            <div class="service-card__tag">Freeze Protection</div>
            <h3 class="service-card__title">Dry Pipe Sprinkler System</h3>
            <p class="service-card__desc">Piping is filled with pressurized air instead of water. When a head activates, air releases and water rushes in. Required for unheated commercial spaces where wet pipe would freeze.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Parking structures</li>
              <li><i class="fa-solid fa-check"></i> Loading docks &amp; canopies</li>
              <li><i class="fa-solid fa-check"></i> Cold storage &amp; freezers</li>
              <li><i class="fa-solid fa-check"></i> Unheated warehouses</li>
            </ul>
          </div>
          <div class="service-card reveal-up service-card--featured" data-delay="200">
            <div class="featured-badge">Specialized</div>
            <div class="service-card__icon"><i class="fa-solid fa-server"></i></div>
            <div class="service-card__tag">High-Value Assets</div>
            <h3 class="service-card__title">Pre-Action Sprinkler System</h3>
            <p class="service-card__desc">Requires two independent triggers before water is released — a detection signal followed by a sprinkler head activation. Provides maximum protection against accidental discharge for sensitive commercial occupancies.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Data centers</li>
              <li><i class="fa-solid fa-check"></i> Archives &amp; libraries</li>
              <li><i class="fa-solid fa-check"></i> Museums &amp; galleries</li>
              <li><i class="fa-solid fa-check"></i> Server rooms</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="300">
            <div class="service-card__icon"><i class="fa-solid fa-fire-flame-curved"></i></div>
            <div class="service-card__tag">High Hazard</div>
            <h3 class="service-card__title">Deluge System</h3>
            <p class="service-card__desc">All heads are open — when the deluge valve trips, water flows through every head simultaneously across the entire protected area. Used for rapidly developing high-hazard fires.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Aircraft hangars</li>
              <li><i class="fa-solid fa-check"></i> Flammable liquid storage</li>
              <li><i class="fa-solid fa-check"></i> Industrial process areas</li>
              <li><i class="fa-solid fa-check"></i> Transformer vaults</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CODE REQUIREMENTS ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 900px;">
        <div class="section-header reveal-up">
          <div class="section-badge">California Code</div>
          <h2 class="section-title">Which Commercial Buildings <span class="text-accent">Require Sprinklers?</span></h2>
          <p class="section-desc">The 2022 California Fire Code (CFC) requires fire sprinkler systems in virtually all commercial construction. Here's what triggers the requirement by occupancy type.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Occupancy Type</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Sprinkler Trigger</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">NFPA Standard</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">System Type</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $reqs = [
                [ 'Office / Business (B)',     'New construction &gt;5,000 sq ft or 3+ stories', 'NFPA 13',    'Wet pipe' ],
                [ 'Retail / Mercantile (M)',    'New construction &gt;5,000 sq ft',              'NFPA 13',    'Wet pipe' ],
                [ 'Restaurant (A-2)',           'New construction, all sizes per CBC',            'NFPA 13',    'Wet pipe / Hood suppression' ],
                [ 'Warehouse / Storage (S)',    'High-piled storage &gt;500 sq ft',               'NFPA 13',    'Wet or dry pipe / ESFR' ],
                [ 'Hotel / Motel (R-1)',        'All occupancies per CFC 903.2.8',               'NFPA 13R/13', 'Wet pipe' ],
                [ 'Medical / Ambulatory (B/I)', 'All new construction',                          'NFPA 13',    'Wet pipe' ],
                [ 'Parking Garage (S-2)',       'Enclosed structures per CFC 903.2.10',          'NFPA 13',    'Dry pipe' ],
                [ 'High-Rise (all types)',      'All buildings &gt;55 ft above grade',            'NFPA 13',    'Wet pipe (each floor)' ],
              ];
              foreach ( $reqs as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? 'background: var(--c-surface);' : '';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo esc_html( $row[0] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo $row[1]; ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary);"><?php echo esc_html( $row[2] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-text-muted);"><?php echo esc_html( $row[3] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--c-text-muted);">
          Local AHJ amendments may be more restrictive. <a href="<?php echo esc_url( home_url( '/ahj-comparison/' ) ); ?>">Compare AHJ requirements →</a>
        </p>
      </div>
    </section>

    <!-- ========== COST ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 900px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Pricing</div>
          <h2 class="section-title">Commercial Sprinkler System <span class="text-accent">Cost</span></h2>
          <p class="section-desc">Commercial fire sprinkler installation in California is priced per square foot installed — design, hydraulic calcs, materials, labor, and permit fees included.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Building Type</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Cost per Sq Ft</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Example: 10,000 sq ft</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">System Type</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $costs = [
                [ 'Light-Hazard Office',              '$2.00–$3.50',  '$20,000–$35,000',  'Wet pipe' ],
                [ 'Retail / Storefront',              '$2.50–$4.00',  '$25,000–$40,000',  'Wet pipe' ],
                [ 'Restaurant / Food Service',        '$3.00–$5.50',  '$30,000–$55,000',  'Wet pipe + hood' ],
                [ 'Medical / Dental Office',          '$3.50–$5.50',  '$35,000–$55,000',  'Wet pipe' ],
                [ 'Warehouse (ordinary hazard)',      '$2.00–$3.50',  '$20,000–$35,000',  'Wet or dry pipe' ],
                [ 'High-Bay Warehouse (ESFR)',        '$3.50–$6.00',  '$35,000–$60,000',  'ESFR wet pipe' ],
                [ 'Parking Structure',                '$4.00–$6.50',  '$40,000–$65,000',  'Dry pipe' ],
                [ 'Tenant Improvement (retrofit)',    '$3.00–$6.00',  '$30,000–$60,000',  'Extend existing' ],
              ];
              foreach ( $costs as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? 'background: #fff;' : '';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo esc_html( $row[0] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary); font-weight: 700;"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[2] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-text-muted);"><?php echo esc_html( $row[3] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--c-text-muted);">
          Figures include design, hydraulic calculations, materials, labor, permits, and AHJ inspection fees for the Sacramento Valley. Bay Area projects add 15–25% for labor and permit costs. <a href="<?php echo esc_url( home_url( '/cost-guide/' ) ); ?>">See our full fire sprinkler cost guide →</a>
        </p>
      </div>
    </section>

    <!-- ========== INSTALLATION PROCESS ========== -->
    <section class="section process" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">Commercial Sprinkler System <span class="text-accent">Installation Process</span></h2>
          <p class="section-desc">From bid to certificate of occupancy — Richardson manages every step of the commercial sprinkler installation process.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="step-title">Bid &amp; Scope</h3>
            <p class="step-desc">We review your plans, assess occupancy hazard classification, and return a fixed-price proposal within 24–48 hours. No scope creep — the number you see is the number you pay.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">Design &amp; Permit</h3>
            <p class="step-desc">Our <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>">NICET-certified team</a> produces stamped shop drawings and hydraulic calculations. We pull the fire sprinkler permit directly — first-pass approval or we correct at no charge.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-hard-hat"></i></div>
            <h3 class="step-title">Installation</h3>
            <p class="step-desc">Licensed C-16 crews install your commercial sprinkler system in coordination with your GC's schedule. All work is inspected daily. Deviations from approved drawings are documented and submitted as RFIs.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Test &amp; Certificate</h3>
            <p class="step-desc">Full hydrostatic and functional system test, AHJ final inspection, and certificate of occupancy support. We stay on-site until the AHJ signs off. Annual <a href="<?php echo esc_url( home_url( '/inspection-testing/' ) ); ?>">NFPA 25 inspection</a> plans available.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-css" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Commercial Sprinkler System <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'What is a commercial sprinkler system and how does it work?',
              'a' => 'A commercial sprinkler system is a network of water-filled pipes and heat-activated sprinkler heads installed throughout a commercial building. When a head detects fire (typically at 155°F–165°F), it opens and releases water directly onto the fire while simultaneously triggering the alarm. Only the head(s) in the fire area activate — not every head in the building. NFPA 13 governs the design, spacing, water supply, and pipe sizing requirements for all commercial sprinkler systems in California.',
            ],
            [
              'q' => 'How much does a commercial sprinkler system cost to install in California?',
              'a' => 'Commercial fire sprinkler installation in the Sacramento Valley runs $2.00–$6.00 per square foot installed, depending on building type and hazard classification. A 10,000 sq ft light-hazard office runs $20,000–$35,000; a restaurant of the same size runs $30,000–$55,000; a high-bay warehouse might run $35,000–$60,000 for an ESFR system. Bay Area projects typically add 15–25% for local labor and permit costs. Call (916) 849-6441 for a project-specific estimate.',
            ],
            [
              'q' => 'What NFPA standard applies to commercial sprinkler systems?',
              'a' => 'NFPA 13 (Standard for the Installation of Sprinkler Systems) governs commercial sprinkler system design, pipe sizing, hydraulic calculations, water supply requirements, and head spacing for most commercial occupancies. NFPA 13R applies to residential occupancies up to 4 stories. NFPA 25 governs the ongoing inspection, testing, and maintenance of installed systems. The 2022 California Fire Code adopts NFPA 13 by reference with California-specific amendments.',
            ],
            [
              'q' => 'How long does commercial fire sprinkler installation take?',
              'a' => 'Commercial sprinkler installation typically takes 2–6 weeks of field time for a typical commercial project, following permit approval. Plan check at most Sacramento Valley AHJs runs 3–6 weeks for a first submittal. Total project timeline from contract execution to certificate of occupancy is typically 8–14 weeks. The most common schedule risk is permit approval delays caused by incomplete first submittals — Richardson submits complete packages every time to minimize correction cycles.',
            ],
            [
              'q' => 'Do commercial sprinkler systems need to be inspected every year?',
              'a' => 'Yes. NFPA 25 requires annual inspection, testing, and maintenance (ITM) of commercial fire sprinkler systems. The inspection includes visual checks of all heads, hangers, and piping; flow testing of each alarm valve; and testing of main drain flow. A written report is required and must be retained on-premises. Most insurance carriers require proof of annual ITM as a condition of coverage. Richardson provides <a href="/inspection-testing/">NFPA 25 inspection and testing</a> for all system types.',
            ],
            [
              'q' => 'Can Richardson do both the sprinkler design and installation?',
              'a' => 'Yes — Richardson is a full design-build contractor. We perform NFPA 13 hydraulic calculations, produce stamped shop drawings through our NICET II certified team, pull the C-16 fire sprinkler permit directly, and install with our licensed field crews. You get one contract, one point of contact, and one team responsible for the entire commercial sprinkler system from permit to certificate of occupancy.',
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

    <!-- ========== RELATED RESOURCES ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.5rem;">
          <div class="section-badge">Further Reading</div>
          <h2 class="section-title">Related <span class="text-accent">Guides</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="service-card__title">Fire Sprinkler System Design &amp; Engineering</h3>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-hammer"></i></div>
            <h3 class="service-card__title">Tenant Improvement Fire Sprinkler Requirements</h3>
            <a href="<?php echo esc_url( home_url( '/tenant-improvement-fire-sprinklers/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <h3 class="service-card__title">Wet Pipe vs. Dry Pipe Sprinkler Systems</h3>
            <a href="<?php echo esc_url( home_url( '/wet-pipe-vs-dry-pipe-sprinklers/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <h3 class="service-card__title">NFPA 25 Inspection &amp; Testing Guide</h3>
            <a href="<?php echo esc_url( home_url( '/nfpa-25-inspection-guide/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Get a Quote for Your Commercial Sprinkler System
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          CSLB C-16 licensed. NICET II certified. Bids returned in 24–48 hours across Sacramento, the Central Valley, and the Bay Area.
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
