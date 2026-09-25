<?php
/**
 * Template Name: Fire Sprinkler Installation Timeline
 * Template Post Type: page
 *
 * Assign to a page with slug "fire-sprinkler-installation-timeline".
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
          California Fire Sprinkler Timelines &mdash; Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          How Long Does <span class="hero-title--accent">Fire Sprinkler</span><br />Installation Take?
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 680px;">
          Fire sprinkler installation in California takes longer than most contractors expect — primarily because of AHJ permit review. This guide breaks down every phase of the process with real timelines for Sacramento, Roseville, Stockton, and the other AHJs in our service area.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Get a Schedule Estimate
          </a>
          <a href="#timeline-guide" class="btn btn--ghost btn--lg">Read the Guide</a>
        </div>
      </div>
    </section>

    <!-- ========== ARTICLE BODY ========== -->
    <section id="timeline-guide" class="section">
      <div class="container" style="max-width: 860px;">

        <!-- SUMMARY TABLE -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Fire Sprinkler Installation Timeline — Summary</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            For a typical new commercial building in Sacramento Valley, the full fire sprinkler process — from design start to AHJ final inspection — takes <strong style="color: var(--c-white);">3 to 5 months</strong>. Here is how each phase breaks down:
          </p>
          <div class="cost-table-wrap" style="margin-top: 1rem;">
            <table class="cost-table" style="width: 100%;">
              <thead>
                <tr>
                  <th>Phase</th>
                  <th>Typical Duration</th>
                  <th>What Drives the Timeline</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $summary_rows = [
                    [ 'Design &amp; Hydraulic Calculations', '1–2 weeks', 'Receipt of architect\'s construction documents (CDs) and water supply test data' ],
                    [ 'Permit Submittal Preparation', '3–5 days', 'Stamping, submittal assembly, AHJ-specific forms' ],
                    [ 'AHJ Plan Check', '3–6 weeks', 'Varies by jurisdiction (see city breakdown below)' ],
                    [ 'Correction Cycle (if any)', '+2–3 weeks', 'Depends on first-submittal quality; avoidable with experienced designer' ],
                    [ 'Rough-In Installation', '2–6 weeks', 'Building size, occupancy type, trade coordination' ],
                    [ 'Trim-Out &amp; Above-Ceiling Close', '1–2 weeks', 'Sprinkler head placement, escutcheon installation, cover plates' ],
                    [ 'Acceptance Testing', '1–3 days', 'Hydrostatic test, main drain, waterflow alarm — AHJ witnessed' ],
                    [ 'AHJ Final Inspection', '1–3 weeks', 'Scheduling lag at AHJ; often the longest wait after work is complete' ],
                ];
                foreach ( $summary_rows as $row ) : ?>
                <tr>
                  <td><strong><?php echo wp_kses_post( $row[0] ); ?></strong></td>
                  <td style="color: var(--c-white); font-weight: 600; white-space: nowrap;"><?php echo esc_html( $row[1] ); ?></td>
                  <td style="color: var(--c-text-muted); font-size: 0.88rem;"><?php echo esc_html( $row[2] ); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- DESIGN PHASE -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Phase 1: Design (1–2 Weeks After Receipt of CDs)</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Fire sprinkler design begins when the contractor receives a complete set of architectural and structural construction documents — floor plans, reflected ceiling plans, structural framing, and mechanical/plumbing drawings. The design phase cannot begin from incomplete documents, so schedule slippage on the architect's end directly compresses the sprinkler contractor's timeline.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            During design, the C-16 designer lays out sprinkler head locations per NFPA 13 coverage area limits, sizes all pipe runs, and runs hydraulic calculations to verify the system meets the required water density. If a fire pump is needed, pump sizing adds 1–2 weeks and requires a water supply flow test first.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Deliverables: stamped shop drawings (plan views, riser diagram, isometrics), hydraulic calculation report, material specification sheet, and the AHJ submittal cover sheet.
          </p>
        </div>

        <!-- PERMIT SUBMITTAL + AHJ PLAN CHECK -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Phase 2: Permit Submittal &amp; AHJ Plan Check</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            AHJ plan check is typically the longest single phase in the fire sprinkler schedule — and the one most outside the contractor's control. Plan check timelines vary significantly across the Sacramento Valley AHJs:
          </p>
          <div class="cost-table-wrap" style="margin: 1rem 0 1.5rem;">
            <table class="cost-table" style="width: 100%;">
              <thead>
                <tr>
                  <th>AHJ</th>
                  <th>Typical Plan Check</th>
                  <th>Submittal Portal</th>
                  <th>Notes</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $ahj_times = [
                    [ 'Sacramento City FD', '3–5 weeks', 'Accela', 'Digital submittal. Over-the-counter review available for minor TIs.' ],
                    [ 'Sacramento County FSD', '3–4 weeks', 'ePlans', 'Separate from City; covers unincorporated areas, Elk Grove, Rancho Cordova.' ],
                    [ 'Roseville FD', '2–3 weeks', 'Online portal', 'Faster than Sacramento City. Clear submittal requirements posted online.' ],
                    [ 'Stockton FD', '3–5 weeks', 'Paper + digital', 'Can be longer for large industrial projects. Coordination with building dept. required.' ],
                    [ 'Modesto FD', '3–4 weeks', 'Paper', 'Some over-the-counter review available for small projects.' ],
                    [ 'Elk Grove FD', '2–4 weeks', 'ePlans', 'Shares ePlans platform with Sacramento County.' ],
                    [ 'Lodi FD', '2–3 weeks', 'Paper', 'Smaller jurisdiction; direct contact with fire marshal speeds approval.' ],
                ];
                foreach ( $ahj_times as $row ) : ?>
                <tr>
                  <td><strong><?php echo esc_html( $row[0] ); ?></strong></td>
                  <td style="color: var(--c-white); font-weight: 600;"><?php echo esc_html( $row[1] ); ?></td>
                  <td><?php echo esc_html( $row[2] ); ?></td>
                  <td style="color: var(--c-text-muted); font-size: 0.85rem;"><?php echo esc_html( $row[3] ); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Plan check corrections — where the AHJ returns the submittal with required changes — typically add 2–3 weeks per correction cycle. Richardson's designers are familiar with each AHJ's specific preferences and submission requirements, and our first-submittal correction rate is low as a result.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            <strong style="color: var(--c-white);">Important:</strong> California law prohibits starting fire sprinkler rough-in before the permit is issued. Scheduling the framing and rough-in crew before permit issuance is a common GC mistake — verify permit status before releasing trades.
          </p>
        </div>

        <!-- ROUGH-IN -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Phase 3: Rough-In Installation (2–6 Weeks)</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Rough-in is the installation of all piping, hangers, seismic braces, and branch line stub-outs — everything above the ceiling before it is closed. Duration depends primarily on three factors:
          </p>
          <ul style="color: var(--c-text-secondary); line-height: 1.85; padding-left: 1.5rem; margin: 1rem 0; display: flex; flex-direction: column; gap: 0.6rem;">
            <li><strong style="color: var(--c-white);">Building square footage</strong> — A 5,000 sq ft office TI runs 2–3 days rough-in. A 200,000 sq ft warehouse runs 4–6 weeks.</li>
            <li><strong style="color: var(--c-white);">Occupancy and hazard classification</strong> — Light hazard (office) has wider head spacing, fewer heads, and less pipe. Extra hazard (chemical plant) requires denser layouts and larger pipe.</li>
            <li><strong style="color: var(--c-white);">Trade coordination</strong> — Sprinkler contractors install above the ceiling alongside mechanical, electrical, and plumbing trades. Congested ceilings require coordination to avoid conflicts. BIM coordination on larger projects reduces field rework.</li>
          </ul>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            California also requires seismic bracing per NFPA 13 Chapter 9 and ASCE 7 — lateral and longitudinal braces at required intervals add material and labor compared to non-seismic states.
          </p>
        </div>

        <!-- TRIM-OUT -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Phase 4: Trim-Out &amp; Testing (1–2 Weeks)</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            After the ceiling is closed and finishes are applied, the sprinkler crew returns to install the sprinkler heads, escutcheons, and cover plates. This phase is quick — typically 1–3 days for most commercial projects — but it cannot begin until the ceiling is complete, which depends on the GC's finish schedule.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            After trim-out, acceptance testing begins. Per NFPA 13, testing requires:
          </p>
          <ul style="color: var(--c-text-secondary); line-height: 1.85; padding-left: 1.5rem; margin: 1rem 0; display: flex; flex-direction: column; gap: 0.5rem;">
            <li>Hydrostatic test at 200 psi for 2 hours (or 50 psi over static, whichever is greater)</li>
            <li>Main drain test (static and residual pressure recorded)</li>
            <li>Waterflow alarm activation and verification</li>
            <li>Underground flush test (prior to system connection on new construction)</li>
          </ul>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Most California AHJs require the contractor to schedule a final inspection appointment, which typically has a 1–3 week wait depending on the AHJ's workload. Richardson coordinates AHJ notification for all testing events as a standard part of the project schedule.
          </p>
        </div>

        <!-- SCHEDULE RISK FACTORS -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Factors That Delay the Schedule</h2>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <?php
            $risks = [
                [ 'Incomplete Construction Documents',
                  'CD revisions after sprinkler design is underway require redesign. Always obtain a frozen set of CDs before starting sprinkler design.' ],
                [ 'Occupancy Changes',
                  'If the occupancy classification changes during design — e.g., light hazard office is reclassified to ordinary hazard storage — the hydraulic calculations must be redone and resubmitted.' ],
                [ 'AHJ Correction Cycles',
                  'Each correction cycle at the AHJ adds 2–3 weeks. First-submittal quality is the best defense — use a designer who regularly works with the specific AHJ.' ],
                [ 'Fire Pump Equipment Lead Time',
                  'Listed fire pumps and controllers are typically 8–16 weeks out from the manufacturer. This is almost always the critical path on projects requiring a fire pump — order early.' ],
                [ 'Construction Sequencing Conflicts',
                  'The sprinkler rough-in must happen before the ceiling is closed. If framing or mechanical work delays the ceiling area, sprinkler rough-in is pushed back by the same duration.' ],
                [ 'AHJ Final Inspection Scheduling',
                  'Final inspection scheduling is the AHJ\'s calendar, not the contractor\'s. Sacramento City FD can have 2–4 week wait times at peak season. Build this into the master schedule from day one.' ],
            ];
            foreach ( $risks as $r ) : ?>
            <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-left: 3px solid var(--c-red); border-radius: 0 8px 8px 0; padding: 1rem;">
              <strong style="color: var(--c-white); display: block; margin-bottom: 0.4rem;"><?php echo esc_html( $r[0] ); ?></strong>
              <p style="font-size: 0.88rem; color: var(--c-text-muted); margin: 0; line-height: 1.65;"><?php echo esc_html( $r[1] ); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- FAQ -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1.5rem;">Fire Sprinkler Installation Timeline — Frequently Asked Questions</h2>
          <div class="faq-list">
            <?php
            $faqs = [
                [ 'q' => 'How long does fire sprinkler installation take in California?',
                  'a' => 'From design start to AHJ final inspection, most new commercial projects in Sacramento Valley take 3–5 months. The biggest variable is AHJ plan check, which ranges from 2 weeks (small projects, fast-turnaround AHJs like Roseville) to 6+ weeks (Sacramento City FD on large industrial projects with corrections). The actual rough-in installation is usually 2–6 weeks depending on building size.' ],
                [ 'q' => 'How long does fire sprinkler permit review take in Sacramento?',
                  'a' => 'Sacramento City FD typically takes 3–5 weeks for fire sprinkler plan check. Projects with corrections take an additional 2–3 weeks per correction cycle. Over-the-counter review is available for small tenant improvements. Sacramento County FSD (for unincorporated areas) also runs 3–4 weeks. Submitting complete, code-compliant documents on the first submittal is the best way to avoid delays.' ],
                [ 'q' => 'Can fire sprinklers be installed while the building is occupied?',
                  'a' => 'Yes, with proper planning. NFPA 13 and the CFC allow work in occupied buildings, but require the AHJ to be notified when the system is impaired, and a fire watch must be established during system shutdowns exceeding 4 hours. Most AHJs require an impairment permit. Richardson coordinates impairment notifications, fire watch scheduling, and AHJ coordination for occupied TI projects.' ],
                [ 'q' => 'How long does a fire sprinkler tenant improvement take?',
                  'a' => 'A typical commercial TI — a single floor of office or retail where the ceiling layout changes — takes 4–8 weeks from design start to AHJ final inspection. That includes 1–2 weeks for design, 2–4 weeks for plan check (over-the-counter review if the AHJ offers it), 2–5 days for rough-in and trim-out, and 1–2 weeks to schedule the final inspection. The GC\'s ceiling finish schedule is often the critical path, not the sprinkler work itself.' ],
                [ 'q' => 'What is the fastest way to get a fire sprinkler permit in Sacramento Valley?',
                  'a' => 'The fastest path is: (1) engage the sprinkler contractor early — before construction documents are finalized, so design can start immediately on CD release; (2) submit a complete first package with all required AHJ-specific forms, stamped calculations, and material submittals to avoid correction cycles; (3) use over-the-counter review when available for small TIs; and (4) in jurisdictions like Roseville or Lodi, direct communication with the fire marshal at the counter can resolve minor issues in hours instead of weeks.' ],
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
          Need a Fire Sprinkler Schedule for Your Project?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Richardson Fire Protection provides design-build fire sprinkler services with a clear, predictable schedule across Sacramento, Roseville, Stockton, and Northern California. Bids in 24–48 hours. CSLB C-16 Licensed (#1053506).
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Get a Project Bid
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
