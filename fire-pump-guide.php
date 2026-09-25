<?php
/**
 * Template Name: Fire Pump Installation Guide
 * Template Post Type: page
 *
 * Assign to a page with slug "fire-pump-installation-guide".
 */
get_header();
$biz = rfp_business_data();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 46vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 3rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          NFPA 20 Technical Guide &mdash; C-16 Licensed
        </div>
        <h1 class="hero-title reveal-up">
          Fire Pump <span class="hero-title--accent">Installation Guide</span>:<br />Sizing, Costs &amp; NFPA 20
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 680px;">
          When a building's water supply cannot meet fire sprinkler demand, NFPA 13 requires a fire pump. This guide covers when a fire pump is required, how it's sized, NFPA 20 installation requirements, cost ranges, and what Sacramento Valley AHJs require for permit approval.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Talk to a C-16 Contractor
          </a>
          <a href="#fire-pump-guide" class="btn btn--ghost btn--lg">Read the Guide</a>
        </div>
      </div>
    </section>

    <!-- ========== ARTICLE BODY ========== -->
    <section id="fire-pump-guide" class="section">
      <div class="container" style="max-width: 860px;">

        <!-- WHEN IS A FIRE PUMP REQUIRED -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">When Does a Building Require a Fire Pump?</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            A fire pump is required whenever the available water supply — measured at the point of connection to the sprinkler system — cannot deliver both the required pressure and flow rate that the hydraulic calculation demands. NFPA 13 requires this comparison on every new system: the water supply curve (from a physical flow test) must envelope the system demand curve (from the hydraulic calculation). If the supply falls short, a fire pump must make up the difference.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            The most common scenarios requiring a fire pump in Sacramento Valley include:
          </p>
          <ul style="color: var(--c-text-secondary); line-height: 1.85; padding-left: 1.5rem; margin: 1rem 0; display: flex; flex-direction: column; gap: 0.6rem;">
            <li><strong style="color: var(--c-white);">Multi-story buildings</strong> — Static pressure drops approximately 0.43 psi per foot of elevation. A 10-story building loses over 40 psi before water reaches the top floor — often exceeding available main pressure.</li>
            <li><strong style="color: var(--c-white);">Large warehouse and high-piled storage</strong> — ESFR (Early Suppression Fast Response) sprinkler systems for high-piled storage demand extremely high flow rates (often 750+ GPM) that exceed public water main capacity in most locations.</li>
            <li><strong style="color: var(--c-white);">Buildings served by aging or undersized mains</strong> — Many industrial areas in Sacramento and Stockton are served by water mains that were sized for earlier, lower-density development. Modern fire sprinkler demands exceed available pressure and flow.</li>
            <li><strong style="color: var(--c-white);">Remote rural sites</strong> — Sites in outlying areas of Sacramento County, San Joaquin County, or Placer County may have limited water district infrastructure. On-site storage tanks with a fire pump are required when no public water supply is available.</li>
          </ul>
        </div>

        <!-- PUMP TYPES -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Types of Fire Pumps</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">NFPA 20 governs three main pump driver types. Selection depends on the required flow, available utilities, and reliability requirements of the AHJ.</p>
          <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem; margin-top: 1.25rem;">
            <?php
            $pump_types = [
                [ 'fa-solid fa-bolt', 'Electric-Drive Pump',
                  'Most common type in California. Requires a dedicated service-entrance-rated electrical feeder per NEC 695. Lower operating cost than diesel, preferred by most AHJs in urban areas where grid reliability is high.',
                  'Office towers, multifamily, retail centers, industrial facilities on utility power' ],
                [ 'fa-solid fa-gas-pump', 'Diesel-Drive Pump',
                  'Required where electric service reliability is insufficient, or as a backup in critical occupancies. Must have a minimum 8-hour fuel supply, automatic weekly test cycle, and separate engine room ventilation per NFPA 20.',
                  'Hospitals, data centers, high-rise buildings, critical infrastructure, remote sites without reliable utility power' ],
                [ 'fa-solid fa-arrows-spin', 'Vertical Turbine Pump',
                  'Used when the water supply is below grade — a storage tank, cistern, or below-grade vault. The pump shaft extends down into the water source, with the motor mounted at grade. Common in rural sites and large industrial complexes.',
                  'Sites with on-site water storage tanks, below-grade cisterns, or pump houses below finished grade' ],
            ];
            foreach ( $pump_types as $pt ) : ?>
            <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-radius: 8px; padding: 1.1rem;">
              <i class="<?php echo esc_attr( $pt[0] ); ?>" style="color: var(--c-red); font-size: 1.4rem; margin-bottom: 0.5rem; display: block;"></i>
              <strong style="color: var(--c-white); display: block; margin-bottom: 0.4rem;"><?php echo esc_html( $pt[1] ); ?></strong>
              <p style="font-size: 0.85rem; color: var(--c-text-secondary); margin: 0 0 0.5rem; line-height: 1.6;"><?php echo esc_html( $pt[2] ); ?></p>
              <p style="font-size: 0.8rem; color: var(--c-text-muted); margin: 0;"><em><?php echo esc_html( $pt[3] ); ?></em></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- NFPA 20 REQUIREMENTS -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">NFPA 20 Installation Requirements</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            NFPA 20, <em>Standard for the Installation of Stationary Pumps for Fire Protection</em>, is the governing standard for all fire pump installations. California adopts it by reference through the California Fire Code. Key NFPA 20 requirements include:
          </p>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1.25rem;">
            <?php
            $nfpa20 = [
                [ 'Fire Pump Room', 'Dedicated, enclosed, fire-rated room separate from other building systems. Minimum 2-hour fire-rated construction. Adequate clearance for service access (minimum 12 inches on all sides of pump).' ],
                [ 'Controller', 'Listed fire pump controller mounted within sight of pump, in a listed enclosure. Controls automatic start on pressure drop, manual start/stop, and provides supervisory signals to the fire alarm panel.' ],
                [ 'Test Header', 'A listed flow meter or test header must be installed to allow NFPA 25 annual flow testing without flowing water onto the site. Required for electric-drive pumps per NFPA 20 Chapter 14.' ],
                [ 'Suction & Discharge', 'Suction piping must be sized to avoid friction loss that would cavitate the pump. Discharge piping leads to the system riser. Both must be restrained per ASCE 7 seismic requirements in California.' ],
                [ 'Relief Valve', 'A pressure relief valve is required on the discharge side to prevent over-pressurization when the pump runs with no system demand (churn condition). Discharge piped to drain or back to suction.' ],
                [ 'Jockey Pump', 'A small pressure-maintenance (jockey) pump is installed in parallel to the main fire pump. It maintains system pressure during minor leaks and pressure fluctuations, preventing the main pump from starting unnecessarily.' ],
            ];
            foreach ( $nfpa20 as $item ) : ?>
            <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-radius: 8px; padding: 1.1rem;">
              <strong style="color: var(--c-white); display: block; margin-bottom: 0.4rem;"><?php echo esc_html( $item[0] ); ?></strong>
              <p style="font-size: 0.88rem; color: var(--c-text-muted); margin: 0; line-height: 1.65;"><?php echo esc_html( $item[1] ); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- SIZING METHODOLOGY -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">How Fire Pumps Are Sized</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Fire pump sizing follows a defined hydraulic engineering process, performed by the C-16 licensed designer and submitted with the permit package:
          </p>
          <ol style="color: var(--c-text-secondary); line-height: 1.85; padding-left: 1.5rem; margin: 1rem 0; display: flex; flex-direction: column; gap: 0.75rem;">
            <li><strong style="color: var(--c-white);">Water supply test.</strong> A flow test is performed at the nearest fire hydrant or at the building's water service connection, recording static pressure, residual pressure, and pitot-measured flow. The AHJ or water district provides a "N-1.85" water supply curve from these three data points.</li>
            <li><strong style="color: var(--c-white);">Hydraulic calculation.</strong> The sprinkler system is computer-modeled using NFPA 13 hydraulic calculation software. The calculation identifies the most demanding design area and calculates the GPM and psi required at the system riser.</li>
            <li><strong style="color: var(--c-white);">Demand vs. supply comparison.</strong> The system demand point (GPM, psi) is plotted against the water supply curve. The difference in pressure between the supply curve and the demand point — at the required flow — is the pressure the pump must provide.</li>
            <li><strong style="color: var(--c-white);">Pump selection.</strong> A listed NFPA 20 fire pump is selected with a rated point that matches the required GPM and pressure. NFPA 20 requires the pump to deliver 150% of rated flow at no less than 65% of rated pressure (the churn-to-peak-flow performance range).</li>
            <li><strong style="color: var(--c-white);">Permit submittal.</strong> Stamped hydraulic calculations, pump data sheets, controller submittals, and NFPA 20 compliance documentation are submitted to the AHJ. Sacramento City FD, Roseville FD, and Stockton FD each have specific submittal formats and plan check timelines.</li>
          </ol>
        </div>

        <!-- INSTALLATION TIMELINE -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Installation Timeline &amp; AHJ Permit Process</h2>
          <div class="cost-table-wrap">
            <table class="cost-table" style="width: 100%;">
              <thead>
                <tr>
                  <th>Phase</th>
                  <th>Typical Duration</th>
                  <th>Notes</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $timeline = [
                    [ 'Water Supply Test', '1–2 weeks', 'Coordinate with AHJ or water district for flow test. Some districts require advance scheduling.' ],
                    [ 'Hydraulic Design & Pump Selection', '1–2 weeks', 'Performed after water supply test data is received. Pump procurement lead time begins here.' ],
                    [ 'Permit Submittal', '1 week', 'Submit stamped calculations, pump data, NFPA 20 docs to AHJ fire prevention bureau.' ],
                    [ 'AHJ Plan Check', '3–6 weeks', 'Varies by AHJ. Sacramento City FD averages 4 weeks; Roseville and Stockton often faster. Corrections cycle adds 2–3 weeks.' ],
                    [ 'Pump Equipment Lead Time', '8–16 weeks', 'Listed fire pumps and controllers are typically procured to order. Ordering before permit approval is common on fast-track projects.' ],
                    [ 'Fire Pump Room Construction', '2–4 weeks', 'Concurrent with equipment lead time on most projects.' ],
                    [ 'Installation & Rough-In', '1–2 weeks', 'Pump set, suction/discharge piping, controller, test header.' ],
                    [ 'Acceptance Testing (NFPA 20)', '1 day (+ AHJ scheduling)', 'Flow test at 100%, 150%, and churn — witnessed by AHJ. Alarm verification with fire alarm contractor.' ],
                ];
                foreach ( $timeline as $row ) : ?>
                <tr>
                  <td><strong><?php echo esc_html( $row[0] ); ?></strong></td>
                  <td><?php echo esc_html( $row[1] ); ?></td>
                  <td style="color: var(--c-text-muted); font-size: 0.88rem;"><?php echo esc_html( $row[2] ); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <p style="color: var(--c-text-secondary); line-height: 1.85; margin-top: 1rem;">
            Total elapsed time from design to AHJ acceptance typically runs <strong style="color: var(--c-white);">5–7 months</strong> on a standard commercial project in Sacramento Valley, driven primarily by pump equipment lead times and AHJ plan check. Richardson begins procurement after permit submittal (not after permit issuance) on design-build projects to compress the schedule.
          </p>
        </div>

        <!-- COST RANGES -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Fire Pump Installation Cost Ranges</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Fire pump costs vary widely based on pump size, driver type, and the complexity of the pump room. The following ranges reflect installed costs in Sacramento Valley as of 2025, including design, equipment, installation, and permit fees, but excluding the cost of the fire pump room construction (which is typically bid by the GC):
          </p>
          <div class="cost-table-wrap" style="margin-top: 1rem;">
            <table class="cost-table" style="width: 100%;">
              <thead>
                <tr>
                  <th>Pump Configuration</th>
                  <th>Typical Flow Range</th>
                  <th>Installed Cost Range</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $costs = [
                    [ 'Small Electric-Drive (horizontal split-case)', '250–500 GPM', '$45,000–$80,000' ],
                    [ 'Medium Electric-Drive (horizontal split-case)', '500–1,000 GPM', '$75,000–$130,000' ],
                    [ 'Large Electric-Drive (horizontal split-case)', '1,000–2,500 GPM', '$120,000–$220,000' ],
                    [ 'Diesel-Drive (any size)', '+$30,000–$60,000 vs. electric', 'Diesel driver, fuel tank, exhaust, ventilation' ],
                    [ 'Vertical Turbine (tank/cistern)', 'Varies — add $15,000–$40,000', 'Depends on depth, shaft length, bowl configuration' ],
                    [ 'Jockey Pump (all systems)', 'N/A', '$4,000–$8,000 installed — always included' ],
                ];
                foreach ( $costs as $row ) : ?>
                <tr>
                  <td><strong><?php echo esc_html( $row[0] ); ?></strong></td>
                  <td><?php echo esc_html( $row[1] ); ?></td>
                  <td style="color: var(--c-white); font-weight: 600;"><?php echo esc_html( $row[2] ); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <p style="color: var(--c-text-secondary); line-height: 1.85; margin-top: 1rem;">
            These ranges do not include utility connection costs (new electrical service, fuel line) or the cost of the AHJ-required fire pump room, which can add $30,000–$100,000+ depending on the building's existing configuration. Richardson provides a detailed itemized bid after reviewing project documents and the water supply test results.
          </p>
        </div>

        <!-- NFPA 25 TESTING -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">NFPA 25 Annual Testing for Fire Pumps</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            After installation, fire pumps enter the NFPA 25 inspection, testing, and maintenance (ITM) cycle. The testing requirements for fire pumps are more frequent than for the rest of the sprinkler system:
          </p>
          <ul style="color: var(--c-text-secondary); line-height: 1.85; padding-left: 1.5rem; margin: 1rem 0; display: flex; flex-direction: column; gap: 0.6rem;">
            <li><strong style="color: var(--c-white);">Weekly no-flow (churn) test</strong> — The pump runs for a minimum of 10 minutes (electric) or 30 minutes (diesel) with no water discharged. Suction and discharge pressures are recorded and compared to the baseline established at acceptance testing.</li>
            <li><strong style="color: var(--c-white);">Annual flow test</strong> — A full performance curve test at 100%, 150%, and churn (0% flow). Results are compared to the NFPA 20 acceptance test baseline. A degradation of more than 5% at rated point triggers investigation. California SB 1205 requires annual certification records including the fire pump flow test results.</li>
            <li><strong style="color: var(--c-white);">Diesel-specific tests</strong> — Battery capacity, fuel level, coolant, heat exchanger, and exhaust system inspections at quarterly and annual frequencies per NFPA 25 Table 8.1.</li>
          </ul>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Richardson performs weekly churn tests and annual flow tests for ITM clients throughout Sacramento Valley. Annual flow test reports are submitted to the CSFM database for SB 1205 compliance.
          </p>
        </div>

        <!-- FAQ -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1.5rem;">Fire Pump Installation — Frequently Asked Questions</h2>
          <div class="faq-list">
            <?php
            $faqs = [
                [ 'q' => 'When is a fire pump required under NFPA 13?',
                  'a' => 'A fire pump is required when the available water supply — measured at the building\'s point of connection — cannot deliver the pressure and flow rate the hydraulic calculation demands. This is determined by comparing the water supply curve (from a flow test) against the system demand curve. If the supply falls short at any point, a fire pump sized to close the gap must be installed per NFPA 20. This is commonly triggered in multi-story buildings, large warehouses with high-piled storage, and buildings served by aging water infrastructure.' ],
                [ 'q' => 'What is the difference between an electric-drive and diesel-drive fire pump?',
                  'a' => 'An electric-drive fire pump uses a dedicated electrical feeder from the utility service entrance. It is simpler to maintain, lower in operating cost, and preferred by most California AHJs for urban buildings with reliable utility power. A diesel-drive pump uses an on-board engine with its own fuel supply, providing full independence from the electrical grid. Diesel pumps are required where NFPA 20 or the AHJ determines that electric supply reliability is insufficient — typically hospitals, data centers, or critical infrastructure.' ],
                [ 'q' => 'How long does it take to get a fire pump installation permitted in Sacramento?',
                  'a' => 'From design start to permit issuance, expect 8–12 weeks in most Sacramento Valley jurisdictions: 2–3 weeks for design and water supply testing, 1 week for submittal preparation, and 3–6 weeks for AHJ plan check. Sacramento City FD averages 4 weeks for fire pump plan check; Roseville and Stockton are often 2–4 weeks. First-submittal correction cycles add 2–3 weeks. Richardson submits complete packages — stamped hydraulic calculations, NFPA 20 compliance docs, pump data sheets, and controller submittals — to minimize corrections.' ],
                [ 'q' => 'What does an annual fire pump flow test involve?',
                  'a' => 'The annual NFPA 25 fire pump flow test measures pump performance at three points: churn (no flow), rated flow (100%), and 150% of rated flow. Suction pressure, discharge pressure, and flow rate are recorded at each point and compared to the pump\'s acceptance test baseline. A full performance curve is plotted and documented. The test also confirms that the controller\'s automatic start, manual start/stop, and alarm functions operate correctly. California SB 1205 requires annual certification records including fire pump test data.' ],
                [ 'q' => 'Can a fire pump be installed as part of a tenant improvement?',
                  'a' => 'Yes, but it requires coordination between the building owner, the C-16 contractor, the electrical contractor, and the AHJ. The fire pump room must meet NFPA 20 construction requirements (2-hour fire-rated), a dedicated electrical feeder must be added, and the existing sprinkler riser must be modified to tie in the pump discharge. Richardson manages fire pump TI installations as design-build projects — handling the NFPA 20 design, the sprinkler riser modification, and the AHJ permit submittal under a single contract.' ],
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

      </div>
    </section>

    <?php get_template_part( 'template-parts/author-bio' ); ?>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Need a Fire Pump Designed or Installed?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Richardson Fire Protection designs, installs, and tests NFPA 20-compliant fire pump systems across Sacramento, Roseville, Stockton, and Northern California. Stamped hydraulic calculations and AHJ coordination included. CSLB C-16 Licensed (#1053506).
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/fire-pump/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Fire Pump Services
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
