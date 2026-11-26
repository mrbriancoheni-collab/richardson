<?php
/**
 * Template Name: Industrial Sprinkler System
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "industrial-sprinkler-system".
 * Targets: "industrial fire sprinkler system", "industrial fire sprinkler systems",
 *          "industrial fire sprinkler", "industrial sprinkler systems"
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
          ESFR Specialist &bull; CSLB C-16 Licensed &bull; NICET II Certified
        </div>
        <h1 class="hero-title reveal-up">
          Industrial Fire Sprinkler System <span class="hero-title--accent">Design &amp; Installation</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection designs and installs industrial fire sprinkler systems for warehouses, distribution centers, cold storage facilities, and manufacturing plants across Sacramento and Northern California. ESFR, in-rack, dry pipe, and special hazard systems — engineered to your commodity classification, permitted, and installed by our licensed team. Bids returned in 24–48 hours.
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
            <div class="cert-item"><i class="fa-solid fa-fire"></i> NFPA 30</div>
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
        <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>">Industrial Fire Protection</a>
        <span> &rsaquo; </span>
        <span>Industrial Sprinkler Systems</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          An <strong>industrial fire sprinkler system</strong> is designed to suppress fires in high-challenge occupancies where standard commercial systems are insufficient — high-bay warehouses, rack storage facilities, cold storage plants, and manufacturing operations. Unlike commercial sprinkler systems, industrial designs require commodity classification analysis, water density calculations that far exceed ordinary hazard thresholds, and in many cases specialized suppression strategies such as ESFR ceiling-only protection or in-rack systems at multiple storage levels.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          Richardson Fire Protection is a full <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>">industrial fire protection</a> design-build contractor. We handle commodity classification review, ESFR hydraulic design, AHJ permitting, and installation — one C-16 license, one point of contact, first-pass submittals.
        </p>
      </div>
    </section>

    <!-- ========== SYSTEM TYPES ========== -->
    <section id="system-types" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">System Selection</div>
          <h2 class="section-title">Types of Industrial <span class="text-accent">Sprinkler Systems</span></h2>
          <p class="section-desc">The right industrial sprinkler system depends on ceiling height, storage configuration, commodity classification, and local AHJ requirements. Richardson selects and engineers the appropriate system based on a full hazard analysis.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card reveal-up service-card--featured" data-delay="0">
            <div class="featured-badge">Most Specified</div>
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">High-Bay Warehouses</div>
            <h3 class="service-card__title">ESFR Sprinkler System</h3>
            <p class="service-card__desc">Early Suppression Fast Response (ESFR) systems deliver large water droplets at high velocity directly onto a fire's fuel surface — suppressing the fire before it grows rather than controlling it. Designed for high-bay warehouses with 25'+ clear height, ESFR ceiling-only systems eliminate the need for in-rack sprinklers in most Class I–IV commodity applications.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Warehouses 25'–45' clear height</li>
              <li><i class="fa-solid fa-check"></i> Class I–IV commodities (ceiling only)</li>
              <li><i class="fa-solid fa-check"></i> No in-rack sprinklers required</li>
              <li><i class="fa-solid fa-check"></i> Lower long-term maintenance cost</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="100">
            <div class="service-card__icon"><i class="fa-solid fa-layer-group"></i></div>
            <div class="service-card__tag">Multi-Tier Storage</div>
            <h3 class="service-card__title">In-Rack Sprinkler System</h3>
            <p class="service-card__desc">When storage height, commodity class, or rack configuration exceeds ESFR protection limits, in-rack sprinklers are installed at intermediate storage levels alongside a ceiling system. Required for high-challenge commodities (Group A plastics, aerosols, rubber tires) or when ceiling height alone can't provide adequate water density at the base of the fire.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Class I–IV + Group A plastics</li>
              <li><i class="fa-solid fa-check"></i> Combined with ceiling system</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13 Chapter 20 compliance</li>
              <li><i class="fa-solid fa-check"></i> High-piled storage &gt;12 ft</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-snowflake"></i></div>
            <div class="service-card__tag">Freeze Protection</div>
            <h3 class="service-card__title">Dry Pipe Industrial System</h3>
            <p class="service-card__desc">Required wherever water-filled piping would freeze — unheated warehouses, loading docks, cold storage staging areas, and freezer vaults. Piping is kept under air pressure; water enters only after a head activates and air escapes. Industrial dry pipe systems are engineered to strict trip-time limits per NFPA 13 to maintain suppression effectiveness.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Unheated warehouses &amp; docks</li>
              <li><i class="fa-solid fa-check"></i> Cold storage &amp; refrigerated facilities</li>
              <li><i class="fa-solid fa-check"></i> Freezer vault protection</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13 &sect;7.3 trip-time compliant</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="300">
            <div class="service-card__icon"><i class="fa-solid fa-fire-flame-curved"></i></div>
            <div class="service-card__tag">Special Hazard</div>
            <h3 class="service-card__title">Special Hazard &amp; Foam Systems</h3>
            <p class="service-card__desc">Flammable and combustible liquid storage, industrial process areas, and aircraft hangars require suppression systems beyond standard NFPA 13 scope. Foam-water deluge systems, Class B foam concentrate, and high-expansion foam systems are engineered to NFPA 11 and NFPA 30 for the specific hazard class and spill geometry.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Flammable liquid storage (NFPA 30)</li>
              <li><i class="fa-solid fa-check"></i> Aircraft hangars (NFPA 409)</li>
              <li><i class="fa-solid fa-check"></i> Industrial process hazards</li>
              <li><i class="fa-solid fa-check"></i> Foam-water &amp; deluge systems</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== COMMODITY / CODE REQUIREMENTS ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 960px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Hazard Classification</div>
          <h2 class="section-title">Industrial Sprinkler System <span class="text-accent">Requirements by Occupancy</span></h2>
          <p class="section-desc">Industrial fire sprinkler design begins with commodity classification — the NFPA 13 hazard group that determines required water density, system type, and whether in-rack protection is needed. Richardson performs the commodity analysis as part of every industrial bid.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.92rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Facility Type</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Hazard Classification</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Water Density</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">NFPA Standard</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Typical System</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $reqs = [
                [ 'Ordinary-hazard warehouse (Class I–III goods)', 'Ordinary Hazard Gr. 2',       '0.17 gpm/sq ft',       'NFPA 13',         'Wet pipe' ],
                [ 'High-piled storage (Class I–IV, &gt;12 ft)',   'Extra Hazard / High-Piled',    'Varies by commodity',  'NFPA 13 Ch. 20',  'ESFR or in-rack' ],
                [ 'Cold storage / freezer',                        'Extra Hazard Gr. 1',           '0.30+ gpm/sq ft',      'NFPA 13',         'Dry pipe' ],
                [ 'Manufacturing (light / ordinary)',              'Ordinary Hazard Gr. 2',        '0.17 gpm/sq ft',       'NFPA 13',         'Wet pipe' ],
                [ 'Manufacturing (extra hazard)',                  'Extra Hazard Gr. 1–2',         '0.30–0.40 gpm/sq ft',  'NFPA 13',         'Wet pipe or deluge' ],
                [ 'Flammable liquid storage',                      'Special Hazard',               'Foam-water rate',      'NFPA 30 / 11',    'Foam-water or deluge' ],
                [ 'Distribution center (rack storage)',            'Extra Hazard / Class II–IV',   'Per commodity analysis', 'NFPA 13',       'ESFR + in-rack' ],
              ];
              foreach ( $reqs as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? 'background: var(--c-surface);' : '';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo $row[0]; ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary); font-weight: 600;"><?php echo esc_html( $row[2] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary);"><?php echo esc_html( $row[3] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-text-muted);"><?php echo esc_html( $row[4] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--c-text-muted);">
          Commodity classification determines your required system type. <a href="<?php echo esc_url( home_url( '/esfr-vs-in-rack/' ) ); ?>">Read our ESFR vs. in-rack guide →</a> or call (916) 849-6441 for a commodity analysis.
        </p>
      </div>
    </section>

    <!-- ========== COST ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 960px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Pricing</div>
          <h2 class="section-title">Industrial Sprinkler System <span class="text-accent">Cost</span></h2>
          <p class="section-desc">Industrial fire sprinkler installation cost is primarily driven by water density requirements, ceiling height, and whether in-rack systems are needed. The example below is based on a 50,000 sq ft facility.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.92rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Facility Type</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Cost per Sq Ft</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Example: 50,000 sq ft</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">System Type</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $costs = [
                [ 'Light manufacturing / ordinary hazard',      '$2.00–$3.50', '$100,000–$175,000', 'Wet pipe' ],
                [ 'Distribution warehouse (ceiling-only ESFR)', '$2.50–$4.00', '$125,000–$200,000', 'ESFR' ],
                [ 'High-piled storage (ESFR + in-rack)',        '$4.00–$7.00', '$200,000–$350,000', 'ESFR + in-rack' ],
                [ 'Cold storage / freezer facility',            '$3.50–$6.00', '$175,000–$300,000', 'Dry pipe' ],
                [ 'Extra-hazard manufacturing',                 '$3.50–$6.50', '$175,000–$325,000', 'Wet pipe / deluge' ],
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
          Figures include commodity analysis, hydraulic calculations, materials, labor, permits, and AHJ inspection fees for the Sacramento Valley. Bay Area projects add 15–25%. Not sure whether ESFR or in-rack is right for your project? <a href="<?php echo esc_url( home_url( '/esfr-vs-in-rack/' ) ); ?>">Read our ESFR vs. in-rack guide →</a> or call (916) 849-6441.
        </p>
      </div>
    </section>

    <!-- ========== INSTALLATION PROCESS ========== -->
    <section class="section process" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">Industrial Sprinkler System <span class="text-accent">Installation Process</span></h2>
          <p class="section-desc">Industrial fire sprinkler projects require more upfront engineering than commercial work. Richardson's process starts with a commodity and hazard analysis — not a one-size template.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-clipboard-list"></i></div>
            <h3 class="step-title">Commodity &amp; Hazard Analysis</h3>
            <p class="step-desc">We review your stored commodity class (Class I–IV, Group A plastics, aerosols, etc.), maximum storage height, rack configuration, and ceiling height to determine NFPA 13 hazard group and protection approach. This analysis drives every downstream design decision — ESFR vs. in-rack, water demand, pipe sizing.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">ESFR Design &amp; Permit</h3>
            <p class="step-desc">Our <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>">NICET II-certified team</a> produces stamped ESFR or in-rack hydraulic calculations, shop drawings showing sprinkler locations and clearance requirements (18" minimum to top of storage), and a complete NFPA 13 compliance package for the AHJ submittal.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-hard-hat"></i></div>
            <h3 class="step-title">Coordinated Installation</h3>
            <p class="step-desc">Licensed C-16 crews install in coordination with your GC and racking contractor. Maintaining 18" clearance between the top of storage and the nearest sprinkler deflector is a critical field requirement — we document and verify this dimension throughout installation. Any rack reconfiguration after installation voids commodity class compliance and requires a plan revision.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Flow Test &amp; Certificate</h3>
            <p class="step-desc">Full hydrostatic pressure test, main drain flow test, and AHJ final inspection. For ESFR systems we verify water supply meets design demand via a flow test at the site's water connection point. Certificate of occupancy support included. Annual <a href="<?php echo esc_url( home_url( '/inspection-testing/' ) ); ?>">NFPA 25 inspection and testing</a> plans available.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-iss" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Industrial Sprinkler System <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'What is an industrial fire sprinkler system?',
              'a' => 'An industrial fire sprinkler system is a high-performance automatic fire suppression system designed for warehouses, distribution centers, manufacturing plants, and other high-challenge occupancies. Unlike standard commercial wet-pipe systems designed for ordinary hazard occupancies, industrial systems are engineered to deliver higher water densities — often 0.30–0.40+ gpm per square foot — and may incorporate ESFR ceiling-only heads, in-rack sprinklers at multiple storage levels, or dry pipe configurations for freeze-prone environments. NFPA 13 Chapter 20 governs high-piled storage fire protection in California.',
            ],
            [
              'q' => 'When is ESFR required vs. in-rack sprinklers?',
              'a' => 'ESFR (Early Suppression Fast Response) systems are designed for Class I–IV commodities stored at heights up to approximately 40 feet in high-bay buildings with adequate ceiling clearance. When storage involves Group A plastics, rubber tires, aerosols, or other high-challenge commodities — or when rack configuration limits water penetration to the base of the fire — in-rack sprinklers at intermediate storage levels are required in combination with the ceiling system. The decision depends on commodity class, storage height, rack configuration, and ceiling height. Richardson performs a commodity analysis on every industrial bid to determine the appropriate system. See our <a href="/esfr-vs-in-rack/">ESFR vs. in-rack guide</a> for a detailed comparison.',
            ],
            [
              'q' => 'How much does an industrial fire sprinkler system cost in California?',
              'a' => 'Industrial fire sprinkler installation in the Sacramento Valley runs $2.00–$7.00 per square foot installed, depending on hazard classification and system type. A 50,000 sq ft ordinary-hazard warehouse runs $100,000–$175,000; a high-piled storage facility with ESFR ceiling-only protection runs $125,000–$200,000; a facility requiring both ESFR and in-rack systems can run $200,000–$350,000. Bay Area projects add 15–25% for local labor and permit costs. Call (916) 849-6441 for a commodity-based estimate within 24–48 hours.',
            ],
            [
              'q' => 'What is commodity classification and why does it matter?',
              'a' => 'Commodity classification is the NFPA 13 system for categorizing stored goods by their fire hazard — from Class I (non-combustible goods in wood pallets) through Class IV (materials with significant combustible packaging or plastic content), and special classifications for Group A plastics, aerosols, flammable liquids, and rubber tires. The commodity class determines the required water density, the type of sprinkler system, whether in-rack protection is needed, and the maximum allowable storage height. Storing a higher commodity class than your system was designed for is an NFPA 25 violation and voids your fire protection coverage — a common issue when tenants change without updating the fire protection plan.',
            ],
            [
              'q' => 'Can an industrial building use a standard wet pipe sprinkler system?',
              'a' => 'Yes — for ordinary-hazard industrial occupancies like light manufacturing, assembly, and warehouses storing Class I–II commodities at moderate heights, a standard NFPA 13 wet pipe system is appropriate and cost-effective. The key variable is hazard group: once storage exceeds ordinary hazard thresholds (typically Class III–IV commodities stored above 12 feet or any high-challenge commodity), a standard wet pipe system will not provide adequate water density at the base of the fire and an ESFR or in-rack design is required.',
            ],
            [
              'q' => 'Does Richardson do design and installation for industrial projects?',
              'a' => 'Yes — Richardson is a full design-build contractor for industrial fire sprinkler projects. We perform the commodity and hazard analysis, produce stamped NFPA 13 shop drawings and hydraulic calculations through our NICET II certified team, pull the C-16 fire sprinkler permit directly, and install with our licensed field crews. We serve industrial GCs and owners across Sacramento, the Central Valley, and the Bay Area. One contract, one team, first-pass AHJ approvals.',
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
            <div class="service-card__icon"><i class="fa-solid fa-scale-balanced"></i></div>
            <h3 class="service-card__title">ESFR vs. In-Rack Sprinklers: Which Does Your Warehouse Need?</h3>
            <a href="<?php echo esc_url( home_url( '/esfr-vs-in-rack/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-boxes-stacked"></i></div>
            <h3 class="service-card__title">California High-Piled Storage Fire Code Requirements</h3>
            <a href="<?php echo esc_url( home_url( '/high-piled-storage-fire-code/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-wind"></i></div>
            <h3 class="service-card__title">Wet Pipe vs. Dry Pipe Sprinkler Systems</h3>
            <a href="<?php echo esc_url( home_url( '/wet-pipe-vs-dry-pipe-sprinklers/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="service-card__title">Fire Sprinkler System Design &amp; Engineering</h3>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Get a Quote for Your Industrial Sprinkler System
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          ESFR specialist. CSLB C-16 licensed. NICET II certified. Commodity analysis and bids returned in 24–48 hours across Sacramento, the Central Valley, and the Bay Area.
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
