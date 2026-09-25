<?php
/**
 * Template Name: How Fire Sprinklers Work
 * Template Post Type: page
 *
 * Assign to a page with slug "how-fire-sprinklers-work".
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
          Fire Sprinkler Systems Explained &mdash; C-16 Licensed
        </div>
        <h1 class="hero-title reveal-up">
          How Does a <span class="hero-title--accent">Fire Sprinkler</span><br />System Work?
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 680px;">
          Fire sprinkler systems are widely misunderstood. This guide explains exactly how a sprinkler head activates, why only the heads nearest the fire open (not the entire system), and what NFPA 13 requires for design, installation, and testing in California.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Talk to a C-16 Contractor
          </a>
          <a href="#how-sprinklers-work" class="btn btn--ghost btn--lg">Read the Guide</a>
        </div>
      </div>
    </section>

    <!-- ========== ARTICLE BODY ========== -->
    <section id="how-sprinklers-work" class="section">
      <div class="container" style="max-width: 860px;">

        <!-- THE COMMON MISCONCEPTION -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">The Biggest Misconception About Fire Sprinklers</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Movies and television consistently portray fire sprinklers as a system where every head in the building opens simultaneously at the first sign of smoke. This is completely wrong — and the misconception leads many building owners to underestimate how precisely engineered these systems actually are.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            In reality, each sprinkler head operates independently. Only the head or heads directly above the fire — where temperatures have risen high enough to trigger activation — will open. In 90% of real-world fire incidents, <strong style="color: var(--c-white);">fewer than four sprinkler heads</strong> control the fire. This precision prevents unnecessary water damage and is a core design principle of NFPA 13.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Smoke does not activate sprinklers. Heat does. A detector or pull station may trigger the fire alarm panel, but sprinklers operate entirely on heat — independently of the alarm system.
          </p>
        </div>

        <!-- HOW A HEAD ACTIVATES -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">How a Sprinkler Head Activates</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            The activation mechanism in a standard sprinkler head is a small glass bulb filled with a glycerin-based liquid. The liquid expands as ambient temperature rises. When the temperature reaches the head's rated activation threshold, the bulb shatters — releasing the cap that was holding back water pressure — and the head begins discharging.
          </p>

          <!-- Activation steps -->
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 1.5rem 0;">
            <?php
            $steps = [
                [ '1', 'Fire ignites below the ceiling', 'Heat and combustion gases rise toward the sprinkler head mounted at the ceiling.' ],
                [ '2', 'Glass bulb heats up', 'The glycerin-filled bulb absorbs heat. At the rated temperature, the liquid expands and shatters the bulb.' ],
                [ '3', 'Deflector plate releases water', 'The shattered bulb releases the cap. Water pressure forces water through the orifice onto a deflector plate that spreads the spray.' ],
                [ '4', 'Water cools the fire and structure', 'Water discharge suppresses the fire directly, cools surrounding materials, and activates the waterflow alarm.' ],
            ];
            foreach ( $steps as $s ) : ?>
            <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-radius: 8px; padding: 1.1rem; text-align: center;">
              <div style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: var(--c-red); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem; margin: 0 auto 0.75rem;">
                <?php echo esc_html( $s[0] ); ?>
              </div>
              <strong style="color: var(--c-white); display: block; margin-bottom: 0.4rem; font-size: 0.9rem;"><?php echo esc_html( $s[1] ); ?></strong>
              <p style="font-size: 0.83rem; color: var(--c-text-muted); margin: 0; line-height: 1.6;"><?php echo esc_html( $s[2] ); ?></p>
            </div>
            <?php endforeach; ?>
          </div>

          <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.15rem; color: var(--c-white); margin: 1.5rem 0 0.75rem;">Temperature Ratings</h3>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Sprinkler heads are manufactured in multiple temperature ratings, color-coded by the glass bulb:
          </p>
          <div class="cost-table-wrap" style="margin-top: 1rem;">
            <table class="cost-table" style="width: 100%;">
              <thead>
                <tr>
                  <th>Rating</th>
                  <th>Temperature Range</th>
                  <th>Bulb Color</th>
                  <th>Typical Location</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $temps = [
                    [ 'Ordinary', '135–170°F (57–77°C)', 'Orange / Red', 'Standard office, retail, warehouse (heated)' ],
                    [ 'Intermediate', '175–225°F (79–107°C)', 'Yellow / Green', 'Near skylights, unheated attics, mechanical rooms' ],
                    [ 'High', '250–300°F (121–149°C)', 'Blue', 'Near unit heaters, boiler rooms, cooking equipment' ],
                    [ 'Extra High', '325–375°F (163–191°C)', 'Purple', 'Near ovens, deep-fat fryers, drying ovens' ],
                ];
                foreach ( $temps as $t ) : ?>
                <tr>
                  <td><strong><?php echo esc_html( $t[0] ); ?></strong></td>
                  <td><?php echo esc_html( $t[1] ); ?></td>
                  <td><?php echo esc_html( $t[2] ); ?></td>
                  <td><?php echo esc_html( $t[3] ); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

          <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.15rem; color: var(--c-white); margin: 1.5rem 0 0.75rem;">Standard vs. Quick-Response Heads</h3>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            NFPA 13 distinguishes between <strong style="color: var(--c-white);">standard response</strong> heads (larger bulb, activates in 300–500 seconds in a standardized fire test) and <strong style="color: var(--c-white);">quick response</strong> heads (smaller bulb, activates in under 50 seconds). Quick-response heads are required by NFPA 13 in light hazard occupancies — offices, hotels, and similar buildings — because they suppress a fire while it is still small, reducing both water damage and life-safety risk.
          </p>
        </div>

        <!-- WET PIPE VS DRY PIPE -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Wet-Pipe vs. Dry-Pipe Systems</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            NFPA 13 governs both the most common system type — wet-pipe — and several specialized alternatives. The right system depends on the occupancy, climate exposure, and fire hazard.
          </p>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 1.25rem;">
            <?php
            $system_types = [
                [ 'Wet-Pipe System', 'fa-solid fa-droplet',
                  'The pipes are always filled with pressurized water. When a head activates, water discharges immediately — no delay. Used in 90%+ of commercial buildings in California. Simplest, most reliable, least maintenance.',
                  'Offices, retail, multifamily, warehouses, most commercial occupancies' ],
                [ 'Dry-Pipe System', 'fa-solid fa-wind',
                  'Pipes are filled with pressurized air or nitrogen. When a head activates, air escapes first, the dry-pipe valve trips, and water fills the pipes before discharging. Adds 15–60 seconds of delay. Used where pipes could freeze.',
                  'Unheated warehouses, loading docks, parking structures, cold-storage facilities' ],
                [ 'Pre-Action System', 'fa-solid fa-shield-halved',
                  'A two-step process: the fire alarm system must detect a fire AND a sprinkler head must activate before water is released. Protects against accidental discharge from head damage or pipe rupture.',
                  'Data centers, server rooms, museums, archival storage, any space sensitive to water damage' ],
                [ 'Deluge System', 'fa-solid fa-burst',
                  'All heads are open orifice (no bulb). When the deluge valve opens — triggered by the fire alarm — water discharges from all heads simultaneously throughout the protected area.',
                  'Aircraft hangars, transformer vaults, flammable liquid storage, chemical processing' ],
            ];
            foreach ( $system_types as $st ) : ?>
            <div style="background: var(--c-surface); border: 1px solid var(--c-border); border-radius: 8px; padding: 1.25rem;">
              <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.6rem;">
                <i class="<?php echo esc_attr( $st[1] ); ?>" style="color: var(--c-red); font-size: 1.2rem;"></i>
                <strong style="color: var(--c-white);"><?php echo esc_html( $st[0] ); ?></strong>
              </div>
              <p style="font-size: 0.88rem; color: var(--c-text-secondary); margin: 0 0 0.6rem; line-height: 1.65;"><?php echo esc_html( $st[2] ); ?></p>
              <p style="font-size: 0.82rem; color: var(--c-text-muted); margin: 0; line-height: 1.5;"><strong style="color: var(--c-text-secondary);">Common uses:</strong> <?php echo esc_html( $st[3] ); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- WATER SUPPLY & FIRE PUMP -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Water Supply and the Role of Fire Pumps</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            A sprinkler system is only as effective as its water supply. NFPA 13 requires a hydraulic calculation — a computer-modeled analysis — to verify that the water supply can deliver the required water density (measured in gallons per minute per square foot) over the most hydraulically demanding design area in the building.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            The water supply analysis starts with a physical flow test at the water main: static pressure (the pressure when no water is flowing), residual pressure (the pressure when flow is occurring), and pitot pressure (a measure of actual flow rate). These three values are plotted on a water supply curve and compared against the system demand curve produced by the hydraulic calculation.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            When the public water supply cannot meet the system's demand — common in multi-story buildings, large warehouse occupancies, and buildings served by aging water mains — NFPA 13 requires a <strong style="color: var(--c-white);">fire pump</strong>, installed per NFPA 20. Fire pumps boost system pressure to ensure adequate flow at the most remote sprinkler heads, even under fire conditions when other demands on the water system are high.
          </p>
        </div>

        <!-- ALARM INTERCONNECTION -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">Interconnection with the Fire Alarm System</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Sprinkler systems and fire alarm systems are separate but interconnected. When a sprinkler head opens and water begins flowing, the movement of water through the alarm valve — a check valve in the main riser — triggers a waterflow switch. That switch sends a signal to the fire alarm panel, which activates audible/visual notification devices and transmits a signal to the central monitoring station and fire department.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            This is why NFPA 72 (fire alarm) and NFPA 13 (sprinkler) coordination matters. The two systems must be designed together: the location of the waterflow switch, the supervisory valve tamper switches, and the trouble/supervisory signal routing all appear on both the fire alarm drawings and the sprinkler shop drawings submitted to the AHJ.
          </p>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            California AHJs — including Sacramento City FD, Roseville FD, and Stockton FD — require coordinated fire alarm and sprinkler submittals. Richardson coordinates both systems on design-build projects to ensure a single point of accountability for permit submittal and final acceptance testing.
          </p>
        </div>

        <!-- NFPA 13 TESTING -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1rem;">NFPA 13 Acceptance Testing Requirements</h2>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            Before a newly installed or modified sprinkler system can be accepted by the AHJ, NFPA 13 requires a formal acceptance test procedure, witnessed by the AHJ or an approved third party. Required tests include:
          </p>
          <ul style="color: var(--c-text-secondary); line-height: 1.85; padding-left: 1.5rem; margin: 1rem 0; display: flex; flex-direction: column; gap: 0.6rem;">
            <li><strong style="color: var(--c-white);">Hydrostatic test</strong> — The system is pressurized to 200 psi (or 50 psi above static pressure, whichever is greater) for 2 hours. No pressure loss is acceptable. This test confirms that all joints, fittings, and pipe are leak-free.</li>
            <li><strong style="color: var(--c-white);">Flush test</strong> — Water is flushed through the underground supply piping to clear all foreign material before it can reach the sprinkler heads.</li>
            <li><strong style="color: var(--c-white);">Main drain test</strong> — The main drain is opened fully, and static and residual pressures are recorded. This establishes a baseline for future NFPA 25 annual inspections — a significant drop from the baseline indicates an obstruction or closed valve.</li>
            <li><strong style="color: var(--c-white);">Waterflow alarm test</strong> — A test connection is opened to simulate waterflow and verify that the alarm activates within 5 minutes (NFPA 13) or the time specified by the AHJ.</li>
            <li><strong style="color: var(--c-white);">Dry-pipe trip test</strong> — On dry-pipe systems, the valve is tripped to verify that air pressure releases correctly and water fills the system within the required time.</li>
          </ul>
          <p style="color: var(--c-text-secondary); line-height: 1.85;">
            After installation and acceptance, the system enters the NFPA 25 annual inspection and testing cycle. NFPA 25 requires progressively deeper inspections over a 5-year cycle, culminating in an internal pipe inspection (obstruction investigation) in year 5.
          </p>
        </div>

        <!-- FAQ -->
        <div class="reveal-up" style="margin-bottom: 3rem;">
          <h2 style="font-family: 'Oswald', sans-serif; font-size: 1.6rem; color: var(--c-white); margin-bottom: 1.5rem;">How Fire Sprinklers Work — Frequently Asked Questions</h2>
          <div class="faq-list">
            <?php
            $faqs = [
                [ 'q' => 'Do all fire sprinkler heads go off at once?',
                  'a' => 'No. Each sprinkler head activates independently based on the heat in its immediate vicinity. Only the heads above or near the fire, where ceiling temperatures have reached the head\'s activation threshold, will open. In the vast majority of fires, fewer than four heads control the incident. This is why a properly designed NFPA 13 system causes far less water damage than a fire hose — and far less than many building owners fear.' ],
                [ 'q' => 'Does smoke set off fire sprinklers?',
                  'a' => 'No. Sprinkler heads are activated by heat, not smoke. The glass bulb in the head must reach a specific temperature — typically 135°F for ordinary-rated heads — before it shatters and allows water to discharge. Smoke detectors and pull stations may trigger the fire alarm panel, but they have no direct connection to the sprinkler heads themselves.' ],
                [ 'q' => 'How much water does a sprinkler head discharge?',
                  'a' => 'A standard commercial sprinkler head discharges approximately 13–26 gallons per minute (GPM) depending on the system pressure and the head\'s K-factor (orifice size). By comparison, a fire hose used by a fire department flows 100–250 GPM. This is why fire sprinklers are far more effective at minimizing water damage than waiting for fire department response — they apply precisely targeted water at low volume while the fire is still small.' ],
                [ 'q' => 'Can a sprinkler head be accidentally activated?',
                  'a' => 'Yes, but it is rare and almost always caused by physical damage or an installation error. Accidental discharge from thermal activation requires temperatures well above normal building conditions — ordinary-rated heads require 135°F at the bulb. However, heads can be damaged by forklifts, ladders, or remodeling work. Pre-action systems (which require both alarm and sprinkler activation before water is released) are specifically designed to protect spaces where even accidental water discharge would be catastrophic.' ],
                [ 'q' => 'What maintenance does a fire sprinkler system require?',
                  'a' => 'NFPA 25 mandates a formal inspection, testing, and maintenance (ITM) program. At minimum: weekly fire pump churn tests, monthly visual inspection of heads and gauges, quarterly alarm valve and dry-pipe inspections, an annual full-system inspection with main drain test and waterflow alarm test, and a 5-year internal pipe obstruction investigation. California SB 1205 requires annual certification records to be submitted to the State Fire Marshal — non-compliant buildings face enforcement action by the local AHJ.' ],
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
          Need a Fire Sprinkler System Designed or Inspected?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Richardson Fire Protection designs, installs, and inspects NFPA 13-compliant fire sprinkler systems across Sacramento, Roseville, Stockton, and Northern California. CSLB C-16 Licensed (#1053506).
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
