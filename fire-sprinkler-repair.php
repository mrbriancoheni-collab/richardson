<?php
/**
 * Template Name: Fire Sprinkler Repair
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "fire-sprinkler-repair".
 * Targets: "fire sprinkler repair companies", "fire sprinkler repairs sacramento",
 *          "warehouse fire sprinkler repair", "fire sprinkler repair near me"
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
          C-16 Licensed &bull; 24/7 Emergency Response &bull; Same-Visit Repairs
        </div>
        <h1 class="hero-title reveal-up">
          Fire Sprinkler Repair in <span class="hero-title--accent">Sacramento</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection provides both emergency and non-emergency fire sprinkler repair for commercial, industrial, and multifamily buildings across Sacramento and Northern California. Leaking heads, burst pipes, impairment restoration, valve repair, and system modifications — same-visit repairs where possible. CSLB C-16 License #1053506.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#repair-services" class="btn btn--ghost btn--lg">
            Repair Services
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Standards We Work To</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA 13</div>
            <div class="cert-item"><i class="fa-solid fa-magnifying-glass"></i> NFPA 25</div>
            <div class="cert-item"><i class="fa-solid fa-fire"></i> 2022 CFC</div>
            <div class="cert-item"><i class="fa-solid fa-scroll"></i> Title 19</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== BREADCRUMB NAV ========== -->
    <div class="container" style="padding-top: 1.25rem; padding-bottom: 0.25rem;">
      <nav class="breadcrumb" aria-label="Breadcrumb" style="font-size: 0.85rem; color: var(--c-text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span> &rsaquo; </span>
        <span>Fire Sprinkler Repair</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          A malfunctioning fire sprinkler system is a code violation and an insurance liability. Whether you have a leaking head, a burst pipe from freezing weather, a recalled sprinkler, or an impaired valve, Richardson Fire Protection provides fast, licensed fire sprinkler repair across Sacramento Valley and the Bay Area.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          For immediate life-safety impairments — flowing heads, burst mains, or a system completely out of service — call our <a href="<?php echo esc_url( home_url( '/emergency-repair/' ) ); ?>">24/7 emergency repair line</a> at (916) 849-6441. For scheduled repairs, deficiency corrections from NFPA 25 inspections, and system modifications, use the form below for next-business-day scheduling.
        </p>
      </div>
    </section>

    <!-- ========== REPAIR SERVICES ========== -->
    <section id="repair-services" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Fix</div>
          <h2 class="section-title">Fire Sprinkler <span class="text-accent">Repair Services</span></h2>
          <p class="section-desc">Richardson repairs all types of fire sprinkler systems — wet pipe, dry pipe, pre-action, and deluge — for commercial, industrial, and multifamily buildings.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $repairs = [
            [ 'fa-solid fa-droplet-slash', 'Leaking Head Repair',           'Cracked or corroded sprinkler heads replaced with matching listed devices. Matching temperature rating, orifice size, and deflector type required by NFPA 25.' ],
            [ 'fa-solid fa-pipe-section',  'Burst Pipe &amp; Fitting Repair', 'Emergency pipe repair for freeze damage, impact, or corrosion failures. We cut, replace, and hydrostatically test the affected section before restoring service.' ],
            [ 'fa-solid fa-valve',         'Valve &amp; Alarm Valve Repair',  'PIV, OS&amp;Y, butterfly, and alarm valve repair and replacement. Impaired or stuck valves restored to full operation with NFPA 25 documentation.' ],
            [ 'fa-solid fa-spray-can',     'Painted Head Replacement',       'Paint on sprinkler deflectors renders them non-listed. We replace painted, corroded, or recalled heads with factory-new listed sprinklers.' ],
            [ 'fa-solid fa-wind',          'Dry Pipe System Repair',         'Dry-pipe valve, air compressor, quick-opening device, and low-point drum drip repair. Trip testing and air maintenance restored to NFPA 13 tolerances.' ],
            [ 'fa-solid fa-arrows-left-right', 'System Modification &amp; Extension', 'Re-routing around remodels, adding coverage for TI work, and extending systems into new construction areas — with full permit and AHJ coordination.' ],
          ];
          foreach ( $repairs as $r ) : ?>
            <div class="service-card service-card--sm">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $r[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo $r[1]; ?></h3>
              <p class="service-card__desc"><?php echo $r[2]; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== WHEN DO YOU NEED REPAIR ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 900px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Repair Indicators</div>
          <h2 class="section-title">When Does a Fire Sprinkler System <span class="text-accent">Need Repair?</span></h2>
          <p class="section-desc">NFPA 25 requires that deficiencies identified during inspection be corrected within defined timeframes. Many repairs are also triggered by physical damage or system events.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Issue</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Signs to Watch For</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Urgency</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $issues = [
                [ 'Leaking sprinkler head',      'Water dripping or ceiling staining near a head',       'Immediate — system impairment' ],
                [ 'Corrosion in piping',          'Rust-colored discharge at drain, low flow on test',    'Within 30 days per NFPA 25' ],
                [ 'Impact-damaged head',          'Head physically deformed, bent, or displaced',         'Immediate — replace before reoccupying' ],
                [ 'Painted heads',                'Paint visible on deflector, frame, or orifice',        'Required annual inspection correction' ],
                [ 'System impairment (valve shut)', 'No water supply to system, supervisory alarm',       'Same day — impairment watch required' ],
                [ 'Frozen and burst pipe',        'Post-freeze pressure drop, water in system area',      'Immediate — repair and restore service' ],
                [ 'Activated (discharged) head',  'Head has opened and discharged; visible flow damage',  'Same day — replace activated heads' ],
                [ 'Recalled sprinkler heads',     'CPSC / NFPA recall notice for installed model',        'Per recall timeline — often 30–90 days' ],
              ];
              foreach ( $issues as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? 'background: var(--c-surface);' : '';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo esc_html( $row[0] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary); font-weight: 600;"><?php echo esc_html( $row[2] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ========== REPAIR BY BUILDING TYPE ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">All Building Types</div>
          <h2 class="section-title">Fire Sprinkler Repair for <span class="text-accent">Every Occupancy</span></h2>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card reveal-up" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="service-card__tag">Commercial</div>
            <h3 class="service-card__title">Commercial Fire Sprinkler Repair</h3>
            <p class="service-card__desc">Offices, retail, restaurants, hotels, and mixed-use buildings. We repair NFPA 13 wet pipe, dry pipe, and pre-action systems with same-visit capability on most head and valve repairs.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Retail &amp; office buildings</li>
              <li><i class="fa-solid fa-check"></i> Restaurant &amp; food service</li>
              <li><i class="fa-solid fa-check"></i> Hotels &amp; mixed-use</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>" class="service-card__link">Commercial Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card reveal-up service-card--featured" data-delay="100">
            <div class="featured-badge">High Demand</div>
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Industrial &amp; Warehouse</div>
            <h3 class="service-card__title">Warehouse Fire Sprinkler Repair</h3>
            <p class="service-card__desc">ESFR head replacement, in-rack system repair, dry pipe valve service, and pipe repair for Sacramento's logistics and distribution center market. Rack reconfiguration impairment coordination available.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> ESFR head replacement</li>
              <li><i class="fa-solid fa-check"></i> In-rack system repair</li>
              <li><i class="fa-solid fa-check"></i> Cold storage dry pipe</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>" class="service-card__link">Industrial Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card reveal-up" data-delay="200">
            <div class="service-card__icon"><i class="fa-solid fa-building-user"></i></div>
            <div class="service-card__tag">Multifamily</div>
            <h3 class="service-card__title">Multifamily Fire Sprinkler Repair</h3>
            <p class="service-card__desc">NFPA 13R and NFPA 13 system repair for apartment complexes, condos, and townhomes. Occupied-building repair scheduling to minimize tenant disruption and impairment windows.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Apartment complexes</li>
              <li><i class="fa-solid fa-check"></i> Condos &amp; townhomes</li>
              <li><i class="fa-solid fa-check"></i> Occupied-building scheduling</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>" class="service-card__link">Residential Services <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <p class="reveal-up" style="margin-top: 1.5rem; font-size: 0.95rem; color: var(--c-text-muted); text-align: center;">
          Typical repair costs: head replacement $150–$400 each &bull; pipe repair $500–$2,500 &bull; valve replacement $800–$3,000.
          <a href="<?php echo esc_url( home_url( '/cost-guide/' ) ); ?>">See full cost guide →</a>
        </p>
      </div>
    </section>

    <!-- ========== PROCESS ========== -->
    <section class="section process" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">How Fire Sprinkler <span class="text-accent">Repair Works</span></h2>
          <p class="section-desc">From your call to restored system operation — Richardson manages every step of the fire sprinkler repair process.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="step-title">Call or Request</h3>
            <p class="step-desc">Call (916) 849-6441 for emergency repair or submit a service request for scheduled work. We'll confirm scope and scheduling within 2 hours during business hours.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <h3 class="step-title">Site Assessment</h3>
            <p class="step-desc">Our technician inspects the affected area, identifies the full scope of repair needed, and reviews the as-built drawings for the impaired section before work begins.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
            <h3 class="step-title">Repair</h3>
            <p class="step-desc">We perform the repair using listed materials matching the existing system. Impairment is managed per NFPA 25 requirements — fire watch coordinated if required by AHJ or insurance carrier.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="step-title">Test &amp; Document</h3>
            <p class="step-desc">Hydrostatic test on repaired sections, main drain flow test, and full system restoration to service. Written repair report provided for your NFPA 25 compliance records.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-repair" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Fire Sprinkler Repair <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'How much does fire sprinkler repair cost in Sacramento?',
              'a' => 'Fire sprinkler repair costs depend on the type and extent of the repair. Individual head replacement runs $150–$400 per head including labor and materials. Pipe repair ranges from $500–$2,500 depending on pipe size, access, and length of damaged section. Control valve or alarm valve replacement typically runs $800–$3,000. Emergency after-hours response adds a service call fee. Call (916) 849-6441 for a same-day repair estimate.',
            ],
            [
              'q' => 'Can I repair a fire sprinkler system myself?',
              'a' => 'No. California law requires that fire sprinkler repair be performed by a CSLB C-16 licensed fire protection contractor. Unlicensed repair can void your system warranty, trigger AHJ violations, and invalidate your property insurance. Any work that modifies or repairs a fire sprinkler system also requires a permit in most jurisdictions. Richardson holds C-16 License #1053506 and pulls all required permits.',
            ],
            [
              'q' => 'What happens if a fire sprinkler head is leaking?',
              'a' => 'A leaking sprinkler head is a system impairment. NFPA 25 requires that you notify your insurance carrier and local AHJ, implement a fire watch if the impaired area is occupied, and restore the system to service as quickly as possible. Do not attempt to cap or stop the head yourself — call a licensed contractor immediately. Richardson can respond same-day for leaking head repair.',
            ],
            [
              'q' => 'How do I know if my fire sprinkler system needs repair?',
              'a' => 'Signs that your system needs repair include: visible water staining or dripping near a sprinkler head; rust-colored water at drain points; a supervisory alarm indicating a closed valve; physical damage to heads, pipes, or hangers; and deficiency citations from your most recent NFPA 25 annual inspection. Richardson can perform a system assessment if you are unsure of your system\'s condition.',
            ],
            [
              'q' => 'Does Richardson repair fire sprinkler systems for all building types?',
              'a' => 'Yes. Richardson repairs NFPA 13 wet pipe, dry pipe, pre-action, and deluge systems for commercial, industrial, warehouse, and multifamily buildings across Sacramento Valley and the Bay Area. We also repair NFPA 13R residential systems in apartment complexes and condominiums.',
            ],
            [
              'q' => 'How quickly can Richardson respond to a fire sprinkler repair in Sacramento?',
              'a' => 'For emergency impairments — flowing heads, burst mains, or systems completely out of service — we provide 24/7 response with typical on-site arrival within 2–4 hours in Sacramento Valley. For scheduled repairs and inspection deficiency corrections, we typically schedule within 2–5 business days. Call (916) 849-6441 for emergency dispatch.',
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

    <!-- ========== RELATED GUIDES ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.5rem;">
          <div class="section-badge">Further Reading</div>
          <h2 class="section-title">Related <span class="text-accent">Guides</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <h3 class="service-card__title">NFPA 25: The Complete Inspection Guide</h3>
            <a href="<?php echo esc_url( home_url( '/nfpa-25-inspection-guide/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-dollar-sign"></i></div>
            <h3 class="service-card__title">Fire Sprinkler Inspection Cost Guide 2026</h3>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-inspection-cost/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-faucet"></i></div>
            <h3 class="service-card__title">Fire Sprinkler Backflow Preventer Guide</h3>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-backflow-preventer/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <h3 class="service-card__title">Wet Pipe vs. Dry Pipe Sprinkler Systems</h3>
            <a href="<?php echo esc_url( home_url( '/wet-pipe-vs-dry-pipe-sprinklers/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Schedule a Fire Sprinkler Repair
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          24/7 emergency response. Same-visit repairs where possible. CSLB C-16 Licensed (#1053506). Serving Sacramento, the Central Valley, and the Bay Area.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Request Repair Service
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
