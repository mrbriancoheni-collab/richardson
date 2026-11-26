<?php
/**
 * Template Name: Warehouse Fire Sprinkler System
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "warehouse-fire-sprinkler-system".
 * Targets: "warehouse fire sprinkler system", "warehouse fire sprinkler",
 *          "high-capacity fire sprinkler system contractors", "ESFR warehouse sprinkler"
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
          ESFR Specialist &bull; High-Piled Storage &bull; CSLB C-16 Licensed
        </div>
        <h1 class="hero-title reveal-up">
          Warehouse Fire Sprinkler System <span class="hero-title--accent">Design &amp; Installation</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection designs and installs warehouse fire sprinkler systems for logistics developers, GCs, and owner-operators across Sacramento and Northern California. ESFR ceiling systems, in-rack combinations, and cold storage dry pipe — engineered to your commodity class, ceiling height, and AHJ requirements. Bids returned in 24–48 hours.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#system-types" class="btn btn--ghost btn--lg">
            System Options
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Governing Standards</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-layer-group"></i> NFPA 13 Ch. 20</div>
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
        <span>Warehouse Fire Sprinkler Systems</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          Warehouse fire sprinkler systems are among the most technically demanding to design correctly. Unlike commercial office or retail occupancies, warehouses present three compounding variables that drive every design decision: <strong>ceiling height</strong> (25–45+ feet), <strong>commodity class</strong> (Class I–IV and Group A/B/C plastics), and <strong>rack storage configuration</strong> (solid shelving, open-rack, or mobile shelving). Getting the ESFR vs. in-rack decision wrong means a system that fails to control a fire — or one that over-engineers at significant cost.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          Richardson Fire Protection is a full <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>">industrial fire protection</a> design-build contractor with deep experience in high-bay warehouse sprinkler systems across the Sacramento Valley logistics corridor. We perform the commodity classification analysis, select the appropriate system type, produce NFPA 13 Chapter 20-compliant shop drawings, and install — one C-16 license, one point of contact.
        </p>
      </div>
    </section>

    <!-- ========== SYSTEM TYPES ========== -->
    <section id="system-types" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">System Selection</div>
          <h2 class="section-title">Warehouse Sprinkler <span class="text-accent">System Options</span></h2>
          <p class="section-desc">The right warehouse fire sprinkler system depends on your commodity class, ceiling height, and rack configuration. Richardson performs a full commodity analysis before recommending a system type.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card reveal-up service-card--featured" data-delay="0">
            <div class="featured-badge">Most Common</div>
            <div class="service-card__icon"><i class="fa-solid fa-arrow-up-from-bracket"></i></div>
            <div class="service-card__tag">High-Bay Warehouses</div>
            <h3 class="service-card__title">ESFR Ceiling System</h3>
            <p class="service-card__desc">Early Suppression Fast Response (ESFR) sprinklers deliver a high-volume, high-pressure discharge that suppresses fires at the ceiling before they grow. Eliminates the need for in-rack sprinklers for Class I–III commodities, dramatically reducing installation cost and rack reconfiguration restrictions.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Class I–III commodities</li>
              <li><i class="fa-solid fa-check"></i> Ceiling heights 25–45 ft</li>
              <li><i class="fa-solid fa-check"></i> No in-rack required (Class I–III)</li>
              <li><i class="fa-solid fa-check"></i> Full rack reconfiguration flexibility</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="100">
            <div class="service-card__icon"><i class="fa-solid fa-layer-group"></i></div>
            <div class="service-card__tag">Class IV &amp; Plastics</div>
            <h3 class="service-card__title">In-Rack + Ceiling Combination</h3>
            <p class="service-card__desc">Class IV commodities and Group A/B/C plastics burn fast and hot enough that ceiling-only systems cannot suppress the fire before it spreads. In-rack sprinklers installed at multiple rack levels, combined with ceiling protection, provide the multilevel suppression NFPA 13 Chapter 20 requires.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Class IV commodities</li>
              <li><i class="fa-solid fa-check"></i> Group A/B/C plastics</li>
              <li><i class="fa-solid fa-check"></i> Multilevel rack protection</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13 Ch. 20 compliant</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <div class="service-card__tag">Smaller Warehouses</div>
            <h3 class="service-card__title">Ceiling-Only Wet Pipe</h3>
            <p class="service-card__desc">For warehouses under 25 ft ceiling height storing Class I–II commodities, a standard NFPA 13 ordinary-hazard ceiling system is the most economical solution. No ESFR heads required — standard control-mode heads provide adequate protection at lower water pressure and cost.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Class I–II goods</li>
              <li><i class="fa-solid fa-check"></i> Ceiling heights under 25 ft</li>
              <li><i class="fa-solid fa-check"></i> Lowest installed cost</li>
              <li><i class="fa-solid fa-check"></i> Standard control-mode heads</li>
            </ul>
          </div>
          <div class="service-card reveal-up" data-delay="300">
            <div class="service-card__icon"><i class="fa-solid fa-snowflake"></i></div>
            <div class="service-card__tag">Freeze Protection</div>
            <h3 class="service-card__title">Dry Pipe for Cold Storage</h3>
            <p class="service-card__desc">Freezer warehouses and refrigerated distribution centers require dry-pipe systems — piping is kept pressurized with air rather than water, preventing freeze damage. Unheated loading docks and dock canopies attached to conditioned warehouses also require dry-pipe or antifreeze loop protection.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Freezer &amp; cold storage</li>
              <li><i class="fa-solid fa-check"></i> Unheated loading docks</li>
              <li><i class="fa-solid fa-check"></i> Refrigerated distribution centers</li>
              <li><i class="fa-solid fa-check"></i> Air-pressurized piping</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CODE REQUIREMENTS ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 920px;">
        <div class="section-header reveal-up">
          <div class="section-badge">California Code</div>
          <h2 class="section-title">When Does a Warehouse <span class="text-accent">Need Fire Sprinklers?</span></h2>
          <p class="section-desc">The 2022 California Fire Code triggers warehouse sprinkler requirements based on construction type, storage height, and commodity classification — not just square footage.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Storage Condition</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Trigger</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Governing Standard</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $reqs = [
                [ 'New warehouse construction, any size',               'Building permit required',              '2022 CFC 903' ],
                [ 'Existing warehouse, change of occupancy',            'CFC 903.2 / AHJ discretion',            'Varies by AHJ' ],
                [ 'High-piled storage &gt;12 ft high',                  'High-piled storage permit required',    'CFC 2301 / NFPA 13 Ch. 20' ],
                [ 'Rack storage &gt;6 ft, Class II+ commodities',       'In-rack analysis required',             'NFPA 13 Section 20' ],
                [ 'Aerosol products, flammable liquids',                'Special hazard suppression required',   'NFPA 30 / NFPA 30B' ],
                [ 'Group A plastics in rack storage',                   'In-rack + ceiling combination required','NFPA 13 Ch. 20 Table 20.X' ],
              ];
              foreach ( $reqs as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? 'background: var(--c-surface);' : '';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo $row[0]; ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary);"><?php echo esc_html( $row[2] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--c-text-muted);">
          Local AHJs in Sacramento, Stockton, and Fairfield have additional high-piled storage requirements beyond the state code baseline. <a href="<?php echo esc_url( home_url( '/ahj-comparison/' ) ); ?>">Compare AHJ requirements →</a>
        </p>
      </div>
    </section>

    <!-- ========== ESFR VS IN-RACK ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 920px;">
        <div class="section-header reveal-up">
          <div class="section-badge">System Selection Guide</div>
          <h2 class="section-title">ESFR vs. In-Rack: <span class="text-accent">Which Does Your Warehouse Need?</span></h2>
          <p class="section-desc">The ESFR vs. in-rack decision drives the entire design and cost outcome. It depends primarily on commodity class and ceiling height — not building size.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Factor</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">ESFR Ceiling-Only</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">In-Rack + Ceiling</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $compare = [
                [ 'Commodity class',              'Class I–III only',                      'Class IV, Group A/B/C plastics' ],
                [ 'Storage height',               'Up to 40 ft (varies by commodity)',     'Any height; in-rack at each tier' ],
                [ 'Minimum ceiling height',       '25 ft (K-25 heads)',                    'No minimum ceiling height req.' ],
                [ 'Installed cost (relative)',    'Lower — ceiling heads only',            'Higher — ceiling + in-rack piping' ],
                [ 'Rack reconfiguration',         'Full flexibility — no in-rack piping',  'Must re-permit in-rack on reconfig' ],
                [ 'Water supply demand',          'High pressure at ceiling (15–25 psi)',  'Lower pressure, distributed demand' ],
                [ 'Best for',                     'High-bay logistics, e-commerce DCs',   'Class IV/plastics, mixed commodity' ],
              ];
              foreach ( $compare as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? '' : 'background: var(--c-bg, #fff);';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo esc_html( $row[0] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[2] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p style="margin-top: 1.25rem; font-size: 1rem; line-height: 1.75;">
          If you're storing mixed commodities — Class III goods in one zone and Group A plastics in another — you may need a hybrid approach with zone-specific designs. Richardson performs a commodity classification analysis as part of every warehouse bid at no additional charge. <a href="<?php echo esc_url( home_url( '/esfr-vs-in-rack/' ) ); ?>">Read our full ESFR vs. in-rack guide →</a>
        </p>
      </div>
    </section>

    <!-- ========== COST ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 920px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Pricing</div>
          <h2 class="section-title">Warehouse Fire Sprinkler System <span class="text-accent">Cost</span></h2>
          <p class="section-desc">Warehouse fire sprinkler installation is priced per square foot — design, hydraulic calcs, materials, labor, and permit fees included. The example column shows a 100,000 sq ft facility, typical for Sacramento Valley logistics.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Warehouse Type</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Cost per Sq Ft</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Example: 100,000 sq ft</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">System</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $costs = [
                [ 'Standard warehouse, ordinary hazard (ceiling-only)', '$1.75–$3.00', '$175,000–$300,000', 'Wet pipe' ],
                [ 'High-bay ESFR — Class I–III, ceiling-only',          '$2.50–$4.00', '$250,000–$400,000', 'ESFR' ],
                [ 'High-piled ESFR + in-rack — Class IV',               '$4.50–$7.00', '$450,000–$700,000', 'ESFR + in-rack' ],
                [ 'Freezer / cold storage facility',                    '$3.50–$6.00', '$350,000–$600,000', 'Dry pipe' ],
                [ 'Rack storage retrofit (in-rack addition only)',       '$2.00–$4.00', '$200,000–$400,000', 'In-rack addition' ],
              ];
              foreach ( $costs as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? 'background: var(--c-surface);' : '';
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
          Figures include design, hydraulic calculations, materials, labor, permits, and AHJ inspection fees for the Sacramento Valley. Bay Area (Concord, Oakland, Fremont) projects add 15–25% for local labor and permit costs. <a href="<?php echo esc_url( home_url( '/cost-guide/' ) ); ?>">See our full fire sprinkler cost guide →</a>
        </p>
      </div>
    </section>

    <!-- ========== INSTALLATION PROCESS ========== -->
    <section class="section process" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">Warehouse Sprinkler System <span class="text-accent">Installation Process</span></h2>
          <p class="section-desc">Warehouse projects have additional complexity — commodity analysis, rack coordination, and high-piled storage permits. Richardson manages every step.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-box-open"></i></div>
            <h3 class="step-title">Commodity Analysis &amp; Fire Protection Plan</h3>
            <p class="step-desc">We classify your stored goods (Class I–IV, plastics group), determine storage height and rack configuration, and produce a preliminary fire protection plan to establish system type, water supply demand, and permit scope before bidding.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">ESFR / In-Rack Design &amp; AHJ Permit</h3>
            <p class="step-desc">Our <a href="<?php echo esc_url( home_url( '/fire-sprinkler-system-design/' ) ); ?>">NICET-certified team</a> produces stamped NFPA 13 Chapter 20 shop drawings with full hydraulic calculations. We coordinate high-piled storage permits with the AHJ fire prevention bureau and pull the fire sprinkler permit directly.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-hard-hat"></i></div>
            <h3 class="step-title">Installation — Coordinated with Rack Installer</h3>
            <p class="step-desc">Licensed C-16 crews install in direct coordination with your rack installer's sequence. In-rack piping runs alongside rack erection to avoid re-work. Daily inspections confirm compliance with approved drawings. Deviations are documented and submitted as RFIs.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Hydraulic Flow Test &amp; CO Support</h3>
            <p class="step-desc">Full system hydrostatic test, main drain flow test, and hydraulic verification. We coordinate AHJ final inspection for both the fire sprinkler permit and high-piled storage permit. Annual <a href="<?php echo esc_url( home_url( '/inspection-testing/' ) ); ?>">NFPA 25 inspection</a> plans available from day one.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-warehouse" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Warehouse Fire Sprinkler System <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'What type of fire sprinkler system is required for a warehouse in California?',
              'a' => 'The required warehouse fire sprinkler system depends on your commodity class, storage height, and ceiling height. Standard warehouses storing Class I–II commodities under 25 ft ceilings typically use a conventional ceiling-only wet-pipe system. High-bay warehouses (25–45 ft) storing Class I–III commodities typically use ESFR ceiling systems, which eliminate the need for in-rack sprinklers. Warehouses storing Class IV commodities or Group A/B/C plastics require a combination of ceiling and in-rack sprinklers per NFPA 13 Chapter 20. Richardson performs a commodity classification analysis as part of every bid.',
            ],
            [
              'q' => 'How much does a warehouse fire sprinkler system cost?',
              'a' => 'Warehouse fire sprinkler installation in the Sacramento Valley runs $1.75–$7.00 per square foot installed, depending on system type. A standard 100,000 sq ft ordinary-hazard warehouse runs $175,000–$300,000 for a ceiling-only wet-pipe system. A high-bay ESFR system for the same building runs $250,000–$400,000. High-piled storage with ESFR plus in-rack can run $450,000–$700,000. Freezer warehouses add dry-pipe complexity and typically run $350,000–$600,000. Call (916) 849-6441 for a commodity-specific estimate.',
            ],
            [
              'q' => 'What is ESFR and when is it required for a warehouse?',
              'a' => 'ESFR stands for Early Suppression Fast Response. ESFR sprinklers deliver a high-flow, high-pressure discharge (K-factor 14 or 25) designed to suppress a fire at the point of origin before it grows. ESFR is typically selected — rather than required — when a warehouse stores Class I–III commodities in rack storage at heights over 20–25 ft. The benefit is eliminating in-rack sprinklers, which reduces installation cost and allows full rack reconfiguration without re-permitting. ESFR is not suitable for Class IV commodities or plastics, which require in-rack protection.',
            ],
            [
              'q' => 'Does high-piled storage require additional sprinklers beyond the ceiling system?',
              'a' => 'It depends on commodity class. Under California Fire Code Section 2301 and NFPA 13 Chapter 20, high-piled storage (storage over 12 ft) triggers a high-piled storage permit and a full fire protection plan. For Class I–III commodities, a properly designed ESFR ceiling system satisfies the high-piled requirement without in-rack sprinklers. For Class IV commodities and plastics, in-rack sprinklers at every other tier (or as specified by the NFPA 13 Chapter 20 tables) are required in addition to ceiling protection.',
            ],
            [
              'q' => 'Can we reconfigure our warehouse racking after the sprinkler system is installed?',
              'a' => 'If you have an ESFR ceiling-only system, yes — you can reconfigure racks freely within the limits of your approved fire protection plan (commodity class and maximum storage height cannot change without re-analysis). If you have in-rack sprinklers, any rack reconfiguration that moves in-rack heads requires a plan revision and AHJ re-submittal. This is one reason we recommend ESFR over in-rack for Class I–III operations — it preserves full operational flexibility.',
            ],
            [
              'q' => 'Does Richardson repair and service existing warehouse fire sprinkler systems?',
              'a' => 'Yes. Richardson provides NFPA 25 annual inspection, testing, and maintenance for warehouse fire sprinkler systems of all types — ESFR, in-rack, wet-pipe, and dry-pipe. We also perform repairs on damaged heads, broken pipe, corroded valves, and failed dry-pipe components. For 24/7 emergency sprinkler repairs — impairments, broken heads from forklift strikes, or system leaks — call (916) 849-6441 for immediate response.',
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
    <section class="section" style="background: var(--c-surface); padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.5rem;">
          <div class="section-badge">Further Reading</div>
          <h2 class="section-title">Related <span class="text-accent">Guides</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-arrow-up-from-bracket"></i></div>
            <h3 class="service-card__title">ESFR vs. In-Rack Sprinkler Systems</h3>
            <a href="<?php echo esc_url( home_url( '/esfr-vs-in-rack/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-boxes-stacked"></i></div>
            <h3 class="service-card__title">California High-Piled Storage Fire Code</h3>
            <a href="<?php echo esc_url( home_url( '/high-piled-storage-fire-code/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-industry"></i></div>
            <h3 class="service-card__title">Industrial Fire Sprinkler Systems</h3>
            <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>" class="service-card__link">View Service <i class="fa-solid fa-arrow-right"></i></a>
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
          Get a Warehouse Fire Sprinkler Quote
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          ESFR specialists. NFPA 13 Chapter 20 design-build. Commodity analysis included. Serving Sacramento Valley and Bay Area logistics corridors — bids in 24–48 hours.
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
