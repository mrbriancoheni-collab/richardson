<?php
/**
 * Template Name: Fire Sprinkler Inspection & Testing
 * Template Post Type: page
 *
 * Assign to a page with slug "inspection-testing".
 * NFPA 25 ITM services — inspection, testing, maintenance.
 */
get_header();
$biz = rfp_business_data();
$phone = $biz['phone'] ?? '(916) 849-6441';
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 52vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          SB 1205 Certified Reports &mdash; Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          Fire Sprinkler <span class="hero-title--accent">Inspection</span><br />&amp; Testing (NFPA 25)
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 660px;">
          Richardson Fire Protection delivers NFPA 25-compliant inspection, testing, and maintenance (ITM) for commercial and industrial fire protection systems across Sacramento Valley. Written reports. SB 1205 certification. No deferred corrections.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> <?php echo esc_html( $phone ); ?>
          </a>
          <a href="#schedule" class="btn btn--ghost btn--lg">
            Schedule Inspection
          </a>
        </div>
      </div>
    </section>

    <!-- ========== NFPA 25 FREQUENCY TABLE ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">NFPA 25 Requirements</div>
          <h2 class="section-title">What <span class="text-accent">NFPA 25</span> Requires</h2>
          <p class="section-desc">Inspection and testing frequencies mandated by NFPA 25 and enforced by California AHJs under SB 1205.</p>
        </div>
        <div class="cost-table-wrap reveal-up">
          <table class="cost-table" style="width: 100%;">
            <thead>
              <tr>
                <th>Component</th>
                <th>Frequency</th>
                <th>What We Check</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rows = [
                  [ 'Fire Pump (Churn Test)', 'Weekly', 'No-flow test run, suction/discharge pressure, controller status' ],
                  [ 'Sprinkler Heads & Gauges', 'Monthly', 'Corrosion, paint, physical damage, gauge readings' ],
                  [ 'Alarm Valves & Waterflow', 'Quarterly', 'Clapper condition, seat, strainers, retard chamber' ],
                  [ 'Dry-Pipe Valve', 'Quarterly / Annual', 'Air pressure, priming water, quick-opening devices' ],
                  [ 'Full System Inspection', 'Annual', 'All heads, piping, hangers, signage, control valves, alarm devices' ],
                  [ 'Fire Pump Flow Test', 'Annual', 'Rated capacity, churn pressure, performance curve documentation' ],
                  [ 'Obstruction Investigation', 'Every 5 Years', 'Internal pipe inspection for MIC, organic material, mineral deposits' ],
                  [ 'Backflow Preventer', 'Annual', 'Full-flow test, RPC differential, relief valve, gate valve operation' ],
              ];
              foreach ( $rows as $row ) : ?>
              <tr>
                <td><strong><?php echo esc_html( $row[0] ); ?></strong></td>
                <td><?php echo esc_html( $row[1] ); ?></td>
                <td><?php echo esc_html( $row[2] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ========== SB 1205 ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container" style="max-width: 900px;">
        <div class="section-header reveal-up">
          <div class="section-badge">California Compliance</div>
          <h2 class="section-title">SB 1205 <span class="text-accent">Certification</span></h2>
        </div>
        <div class="reveal-up" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
          <div>
            <p style="color: var(--c-text-secondary); line-height: 1.8; margin: 0 0 1rem;">
              California SB 1205 (2018) requires commercial and multi-family building owners to submit annual fire protection system inspection records to the California State Fire Marshal. Buildings that cannot produce current certification records are subject to enforcement action by the local AHJ.
            </p>
            <p style="color: var(--c-text-secondary); line-height: 1.8; margin: 0;">
              Richardson provides SB 1205-compliant written reports submitted directly to the CSFM database. Every inspection includes a deficiency report, a corrective action schedule, and the signed certification documentation your building needs to stay compliant.
            </p>
          </div>
          <div style="background: var(--c-bg); border: 1px solid var(--c-border); border-radius: 8px; padding: 1.5rem;">
            <h3 style="font-family: 'Oswald', sans-serif; margin: 0 0 1rem; color: var(--c-white);">What You Receive</h3>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.6rem;">
              <?php
              $deliverables = [
                  'Written NFPA 25 Inspection Report',
                  'Deficiency Documentation with Photos',
                  'Corrective Action Priority List',
                  'SB 1205 Certification for CSFM',
                  'AHJ Notification (before testing)',
                  'Repair Quote for Any Deficiencies',
              ];
              foreach ( $deliverables as $d ) : ?>
              <li style="display: flex; gap: 0.6rem; align-items: flex-start; color: var(--c-text-secondary); font-size: 0.9rem;">
                <i class="fa-solid fa-check" style="color: var(--c-red); flex-shrink: 0; margin-top: 0.15rem;"></i>
                <?php echo esc_html( $d ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICE TYPES ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Test</div>
          <h2 class="section-title">ITM Services <span class="text-accent">We Provide</span></h2>
          <p class="section-desc">All fire protection system types inspected and tested by C-16 licensed technicians.</p>
        </div>
        <div class="services-grid reveal-up">
          <?php
          $services = [
              [ 'fa-solid fa-fire-extinguisher', 'Wet-Pipe Sprinkler Systems',
                'NFPA 25 annual inspection and 5-year internal inspection for standard wet-pipe systems in commercial and multifamily buildings.' ],
              [ 'fa-solid fa-wind', 'Dry-Pipe & Pre-Action Systems',
                'Quarterly and annual inspection, full trip tests, and air supply checks for dry-pipe and pre-action systems in cold-storage and data center applications.' ],
              [ 'fa-solid fa-droplet', 'Fire Pump Testing (NFPA 25)',
                'Weekly churn tests, annual flow tests with performance curves, and NFPA 25 documentation for electric and diesel-drive fire pumps.' ],
              [ 'fa-solid fa-arrows-rotate', 'Backflow Preventer Testing',
                'Annual full-flow test of reduced-pressure zone (RPZ) backflow preventers with test reports submitted to the local water district.' ],
              [ 'fa-solid fa-bell', 'Fire Alarm ITM (NFPA 72)',
                'NFPA 72 annual inspection and testing of detection devices, pull stations, notification appliances, and control panels. Coordinated with sprinkler ITM.' ],
              [ 'fa-solid fa-gauge-high', 'Standpipe & Hose System Testing',
                'Annual inspection and flow testing of Class I, II, and III standpipe systems per NFPA 25. Certificate of compliance provided.' ],
          ];
          foreach ( $services as $s ) : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="<?php echo esc_attr( $s[0] ); ?>"></i></div>
            <h3 class="service-card__title"><?php echo esc_html( $s[1] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $s[2] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== COVERAGE ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Service Area</div>
          <h2 class="section-title">Inspection Coverage — <span class="text-accent">Sacramento Valley</span></h2>
          <p class="section-desc">We serve all 7 AHJ jurisdictions in our coverage area with annual ITM contracts and one-time inspections.</p>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <?php foreach ( rfp_all_locations() as $city_slug => $loc ) : ?>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-map-pin"></i></div>
            <h3 class="service-card__title"><?php echo esc_html( $loc['name'] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $loc['county'] ); ?> &mdash; <?php echo esc_html( $loc['ahj_name'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Inspection &amp; Testing <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
              [ 'q' => 'How often is fire sprinkler inspection required in California?',
                'a' => 'NFPA 25 requires: weekly fire pump churn tests, monthly visual inspection of heads and gauges, quarterly alarm valve and dry-pipe inspection, and a comprehensive annual inspection of the full system. California SB 1205 requires annual certification records to be submitted to the State Fire Marshal. Richardson handles all frequencies under a single ITM contract.' ],
              [ 'q' => 'What happens if my building fails NFPA 25 inspection?',
                'a' => 'Deficiencies are categorized and documented in a written report. Minor deficiencies must be corrected within 30 days. Critical deficiencies that impair system function require immediate corrective action and may trigger AHJ enforcement under CFC Section 901.6. Richardson documents every deficiency and can schedule repairs during the same inspection visit when parts are available.' ],
              [ 'q' => 'Do I need to notify my fire department before annual sprinkler testing?',
                'a' => 'Most AHJs in Sacramento Valley — including Sacramento City FD, Roseville Fire, and Stockton FD — require advance notification before annual flow tests that will activate the alarm system. Richardson handles AHJ notification as a standard part of every inspection contract, so building owners never miss this step.' ],
              [ 'q' => 'How much does fire sprinkler inspection cost in Sacramento?',
                'a' => 'Annual NFPA 25 inspection for a standard commercial wet-pipe system typically runs $200–$600. Buildings with dry-pipe, pre-action, or fire pump systems cost more due to additional testing procedures. Richardson provides flat-rate inspection contracts with no surprise line items, and delivers written reports upon completion. Call (916) 849-6441 for a quote.' ],
              [ 'q' => 'What is SB 1205 and does it apply to my building?',
                'a' => 'SB 1205 (2018) requires all commercial and multi-family residential building owners in California to certify annual fire protection system inspections with the State Fire Marshal. Non-compliance can result in enforcement action by your local AHJ. Richardson provides SB 1205-compliant reports submitted directly to the CSFM certification database.' ],
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

    <!-- ========== SCHEDULE CTA ========== -->
    <section id="schedule" style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Schedule Your NFPA 25 Inspection
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          SB 1205 certified reports, written deficiency documentation, and same-visit repair coordination. Serving all of Sacramento Valley. CSLB C-16 Licensed (#1053506).
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> <?php echo esc_html( $phone ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Request Inspection
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
