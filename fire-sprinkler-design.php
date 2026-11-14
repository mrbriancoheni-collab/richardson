<?php
/**
 * Template Name: Fire Sprinkler System Design
 * Template Post Type: page
 *
 * Auto-applied to slug "fire-sprinkler-system-design".
 * Targets: fire sprinkler system design near me,
 *          industrial fire sprinkler design and engineering,
 *          fire pump design near me, commercial sprinkler system design.
 */
get_header();
$biz   = rfp_business_data();
$phone = $biz['phone_display'] ?? '(916) 849-6441';
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 52vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          NICET-Certified Fire Sprinkler System Design — Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          Fire Sprinkler <span class="hero-title--accent">System Design</span> &amp; Engineering
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 660px;">
          Richardson Fire Protection provides complete fire sprinkler system design for commercial, industrial, and multifamily projects across Sacramento Valley. NICET Level II certified designers. Stamped hydraulic calculations. First-pass AHJ approvals.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> <?php echo esc_html( $phone ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">
            Request a Design Consultation
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Design Standards</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-house"></i> NFPA 13R/13D</div>
            <div class="cert-item"><i class="fa-solid fa-gauge-high"></i> NFPA 20</div>
            <div class="cert-item"><i class="fa-solid fa-drafting-compass"></i> NICET Level II</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHAT DESIGN INCLUDES ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Deliver</div>
          <h2 class="section-title">Complete <span class="text-accent">Design Package</span></h2>
          <p class="section-desc">Every Richardson fire sprinkler system design includes everything the AHJ needs for first-pass permit approval — no missing documents, no correction cycles.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-calculator"></i></div>
            <div class="service-card__tag">Core Deliverable</div>
            <h3 class="service-card__title">Hydraulic Calculations</h3>
            <p class="service-card__desc">NICET Level II stamped hydraulic calculations proving the system delivers the required design density to the most remote sprinkler area. Includes water supply analysis and fire pump demand evaluation.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NICET Level II stamp</li>
              <li><i class="fa-solid fa-check"></i> Current flow test data</li>
              <li><i class="fa-solid fa-check"></i> Fire pump demand analysis</li>
            </ul>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <div class="service-card__tag">Core Deliverable</div>
            <h3 class="service-card__title">Shop Drawings</h3>
            <p class="service-card__desc">Complete shop drawing set showing sprinkler head layout, pipe sizing, hanger locations, seismic bracing, and all equipment cut sheets. Coordinated with architectural, structural, and MEP drawings.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Fully coordinated plan set</li>
              <li><i class="fa-solid fa-check"></i> Seismic bracing per NFPA 13 Ch. 9</li>
              <li><i class="fa-solid fa-check"></i> Equipment cut sheets included</li>
            </ul>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-file-contract"></i></div>
            <div class="service-card__tag">Core Deliverable</div>
            <h3 class="service-card__title">NFPA Code Analysis</h3>
            <p class="service-card__desc">Written NFPA 13 code analysis letter documenting occupancy classifications, hazard groups, design areas, and applicable California amendments. Required by most Sacramento Valley AHJs.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Occupancy hazard justification</li>
              <li><i class="fa-solid fa-check"></i> California Fire Code amendments</li>
              <li><i class="fa-solid fa-check"></i> AHJ-specific requirements addressed</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== DESIGN BY PROJECT TYPE ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Project Types</div>
          <h2 class="section-title">Fire Sprinkler System Design <span class="text-accent">by Occupancy</span></h2>
          <p class="section-desc">Each occupancy type has distinct NFPA 13 design requirements. Richardson's designers are experienced across all commercial and industrial occupancy classifications.</p>
        </div>
        <div class="cost-table-wrap reveal-up">
          <table class="cost-table" style="width: 100%;">
            <thead>
              <tr>
                <th>Occupancy / Project Type</th>
                <th>Applicable Standard</th>
                <th>Design Considerations</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $types = [
                  [ 'Office, Retail &amp; Restaurant',          'NFPA 13 Light–Ordinary Hazard', 'Ceiling height coordination, A-2 occupancy thresholds, hood suppression integration' ],
                  [ 'High-Bay Warehouse &amp; Distribution',    'NFPA 13 High-Piled / ESFR',     'Commodity classification, ESFR K-factor selection, in-rack analysis' ],
                  [ 'Cold Storage &amp; Refrigerated Warehouse','NFPA 13 Dry-Pipe / ESFR',       'Freeze protection, dry-pipe valve sizing, insulated enclosure details' ],
                  [ 'Manufacturing &amp; Industrial',           'NFPA 13 Extra Hazard',           'Occupancy hazard analysis, special hazard suppression where required' ],
                  [ 'Multifamily (3–4 stories)',                'NFPA 13R',                       'Partial coverage exemptions, domestic tie-in, occupancy separation' ],
                  [ 'Multifamily (5+ stories / mixed-use)',     'NFPA 13',                        'High-rise triggers, occupancy zoning, podium coordination' ],
                  [ 'Single-Family &amp; Townhomes',            'NFPA 13D',                       'Domestic water supply tie-in, two-head demand, residential head selection' ],
                  [ 'Data Centers &amp; IT Rooms',              'NFPA 13 Pre-Action',             'Double-interlock pre-action design, detection integration, water delivery timing' ],
                  [ 'High-Rise (55+ ft occupied)',              'NFPA 13 + CBC Ch. 403',          'Standpipe zones, voice alarm coordination, elevator lobby pressurization' ],
              ];
              foreach ( $types as $row ) : ?>
              <tr>
                <td><strong><?php echo $row[0]; ?></strong></td>
                <td><?php echo esc_html( $row[1] ); ?></td>
                <td><?php echo esc_html( $row[2] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ========== DESIGN PROCESS ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">The Richardson <span class="text-accent">Design Process</span></h2>
          <p class="section-desc">From first plans to AHJ permit approval — a typical Richardson design engagement in four phases.</p>
        </div>
        <div class="services-grid reveal-up">
          <?php
          $steps = [
              [ 'fa-solid fa-file-lines',       '01', 'Plans Review &amp; Scope Call',      'We review your architectural and structural drawings, identify occupancy classifications, flag any design conflicts, and confirm the scope in a 30-minute call. No charge.' ],
              [ 'fa-solid fa-calculator',       '02', 'Hydraulic Design',                   'Our NICET Level II designers produce the hydraulic calculations — water supply analysis, design area selection, pipe sizing — in 2–4 weeks for typical commercial projects.' ],
              [ 'fa-solid fa-drafting-compass', '03', 'Shop Drawing Production',             'The shop drawing set is produced from your coordinated plans: sprinkler head layout, pipe routing, hanger and seismic bracing, and equipment cut sheets. Fully coordinated with MEP.' ],
              [ 'fa-solid fa-building-shield',  '04', 'AHJ Submittal &amp; Permit Support',  'We submit the complete package directly to your AHJ — SCFD, Roseville Fire, Stockton FD, or any Sacramento Valley jurisdiction — and respond to all plan check corrections.' ],
          ];
          foreach ( $steps as $s ) : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="<?php echo esc_attr( $s[0] ); ?>"></i></div>
            <div class="service-card__tag">Step <?php echo $s[1]; ?></div>
            <h3 class="service-card__title"><?php echo $s[2]; ?></h3>
            <p class="service-card__desc"><?php echo $s[3]; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== DESIGN TIMELINES ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Timelines</div>
          <h2 class="section-title">Design &amp; Permit <span class="text-accent">Timelines</span></h2>
          <p class="section-desc">Richardson's design turnaround and observed AHJ review times across Sacramento Valley jurisdictions.</p>
        </div>
        <div class="cost-table-wrap reveal-up">
          <table class="cost-table" style="width: 100%;">
            <thead>
              <tr>
                <th>Phase</th>
                <th>Typical Duration</th>
                <th>Notes</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><strong>Richardson design turnaround</strong></td><td>2–4 weeks</td><td>Standard commercial; complex industrial or high-rise may require 4–6 weeks</td></tr>
              <tr><td><strong>SCFD Fire Prevention (Sacramento)</strong></td><td>4–6 weeks</td><td>First review; correction cycles add 2–4 weeks per round</td></tr>
              <tr><td><strong>Roseville Fire</strong></td><td>3–5 weeks</td><td>Consistent first-review turnaround with complete packages</td></tr>
              <tr><td><strong>Stockton Fire</strong></td><td>5–8 weeks</td><td>Heavier workload; complete submittal reduces correction risk</td></tr>
              <tr><td><strong>Rocklin / Lincoln Fire</strong></td><td>3–5 weeks</td><td>Smaller jurisdiction; responsive to complete, organized submittals</td></tr>
              <tr><td><strong>Yuba City / Davis Fire</strong></td><td>3–5 weeks</td><td>Moderate backlog; first-pass completeness is critical</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ========== DESIGN-BUILD vs DESIGN-BID-BUILD ========== -->
    <section class="section">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Delivery Method</div>
          <h2 class="section-title">Design-Build vs. <span class="text-accent">Design-Bid-Build</span></h2>
        </div>
        <div class="reveal-up" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
          <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-left: 3px solid var(--c-red); border-radius: var(--r-md); padding: 1.5rem;">
            <h3 style="font-family: 'Oswald', sans-serif; margin: 0 0 0.75rem; color: var(--c-white);">Design-Build <span style="color: var(--c-red);">(Richardson's Approach)</span></h3>
            <p style="color: var(--c-text-secondary); font-size: 0.9rem; line-height: 1.8; margin: 0 0 0.75rem;">One contractor designs and installs the system. Richardson holds the design liability, pulls the permit, and completes installation — one contract, one point of contact, no coordination gap between designer and installer.</p>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem;">
              <?php foreach ( [ 'Faster schedule (design and procurement overlap)', 'Single point of accountability', 'No RFI delays between designer and installer', 'Most cost-effective for GCs' ] as $item ) : ?>
              <li style="display: flex; gap: 0.5rem; align-items: flex-start; color: var(--c-text-secondary); font-size: 0.85rem;">
                <i class="fa-solid fa-check" style="color: var(--c-red); flex-shrink: 0; margin-top: 0.15rem;"></i>
                <?php echo esc_html( $item ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-radius: var(--r-md); padding: 1.5rem;">
            <h3 style="font-family: 'Oswald', sans-serif; margin: 0 0 0.75rem; color: var(--c-white);">Design-Bid-Build</h3>
            <p style="color: var(--c-text-secondary); font-size: 0.9rem; line-height: 1.8; margin: 0 0 0.75rem;">A separate engineer of record produces the design documents; multiple contractors bid installation. Common on public works and owner-driven projects with specific procurement requirements.</p>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem;">
              <?php foreach ( [ 'Owner controls designer selection', 'Competitive bidding on installation', 'Coordination required between designer and installer', 'More documentation and RFI management' ] as $item ) : ?>
              <li style="display: flex; gap: 0.5rem; align-items: flex-start; color: var(--c-text-secondary); font-size: 0.85rem;">
                <i class="fa-solid fa-minus" style="color: var(--c-text-muted); flex-shrink: 0; margin-top: 0.15rem;"></i>
                <?php echo esc_html( $item ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Fire Sprinkler System Design <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
              [ 'q' => 'What does fire sprinkler system design involve?',
                'a' => 'Fire sprinkler system design is the engineering process of sizing the piping network, selecting and spacing sprinkler heads, and producing stamped hydraulic calculations that prove the system delivers adequate water density to the most remote heads. The design must conform to NFPA 13 (or 13R/13D for residential) and must be approved by the local AHJ before installation begins. Richardson\'s NICET Level II certified designers produce complete design packages in-house.' ],
              [ 'q' => 'Is NICET certification required for fire sprinkler system design in California?',
                'a' => 'California does not mandate NICET certification by statute for all fire sprinkler designers, but many AHJs — including Sacramento City Fire Department — require NICET Level II or higher certification on hydraulic calculation submittals. NICET Level II is the professional standard for independent fire protection system design and is required by most general contractors for their sub prequalification. Richardson\'s design staff holds NICET Level II certification.' ],
              [ 'q' => 'How much does fire sprinkler system design cost?',
                'a' => 'On a design-build contract, design cost is bundled into the overall project price — there is no separate design fee. For design-only engagements (design-bid-build), fees vary by project size and complexity: small commercial TIs from $1,500–$4,000, mid-size commercial from $4,000–$10,000, large industrial or high-rise projects from $10,000–$30,000+. Contact Richardson at (916) 849-6441 for a project-specific estimate.' ],
              [ 'q' => 'How long does fire sprinkler system design take?',
                'a' => 'Richardson\'s typical design turnaround is 2–4 weeks for standard commercial projects after receiving complete architectural and structural drawings. Complex industrial facilities (ESFR, in-rack, special hazard) or high-rise buildings may require 4–6 weeks. This is followed by AHJ plan review, which runs 3–8 weeks depending on the jurisdiction.' ],
              [ 'q' => 'Can Richardson do fire pump design as part of the sprinkler system design?',
                'a' => 'Yes. If the hydraulic analysis shows that the available water supply is insufficient to meet system demand, Richardson designs the fire pump system under NFPA 20. This includes pump type selection (electric vs. diesel, horizontal split case vs. vertical turbine), pump room layout, controller specifications, and test header design. The fire pump design is included in the same submittal package as the sprinkler system hydraulics.' ],
          ];
          foreach ( $faqs as $faq ) : ?>
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              <?php echo esc_html( $faq['q'] ); ?>
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p><?php echo esc_html( $faq['a'] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

<?php get_template_part( 'template-parts/author-bio' ); ?>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Get Your Fire Sprinkler System Designed
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          NICET Level II certified design. Stamped hydraulic calculations. First-pass AHJ approvals. CSLB C-16 Licensed (#1053506). Serving all Sacramento Valley jurisdictions.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> <?php echo esc_html( $phone ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Request a Design Consultation
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
