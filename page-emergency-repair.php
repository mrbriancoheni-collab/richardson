<?php
/**
 * Template Name: Emergency Fire Sprinkler Repair
 * Template Post Type: page
 *
 * Assign to a page with slug "emergency-repair".
 * 24/7 emergency fire sprinkler repair service page.
 */
get_header();
$biz = rfp_business_data();
$phone = $biz['phone'] ?? '(916) 849-6441';
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 55vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up" style="background: rgba(196,18,48,0.9); border-color: rgba(196,18,48,0.6);">
          <span class="badge-dot" style="background: #fff;"></span>
          24/7 Emergency Response — Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          Emergency <span class="hero-title--accent">Fire Sprinkler</span><br />Repair
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Burst head, leaking pipe, controller fault — we dispatch same-day, 24 hours a day. Richardson Fire Protection is Sacramento Valley's emergency fire sprinkler repair contractor. CSLB C-16 Licensed &middot; Insured.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg" style="font-size: 1.15rem;">
            <i class="fa-solid fa-phone-volume"></i> Call Now: <?php echo esc_html( $phone ); ?>
          </a>
          <a href="#repair-form" class="btn btn--ghost btn--lg">
            Request Service Online
          </a>
        </div>
      </div>
    </section>

    <!-- ========== URGENCY STRIP ========== -->
    <div style="background: var(--c-red); padding: 1rem 1.5rem; text-align: center;">
      <div class="container">
        <p style="margin: 0; color: #fff; font-size: 1rem; font-weight: 600;">
          <i class="fa-solid fa-circle-exclamation" style="margin-right: 0.5rem;"></i>
          System offline? <strong>California Fire Code Section 901.7</strong> requires a fire watch for impairments over 4 hours. We handle AHJ notification and restore service fast.
          &nbsp;&nbsp;<a href="tel:+19168496441" style="color: #fff; text-decoration: underline;"><?php echo esc_html( $phone ); ?></a>
        </p>
      </div>
    </div>

    <!-- ========== RESPONSE PROCESS ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">How It Works</div>
          <h2 class="section-title">Emergency <span class="text-accent">Response Process</span></h2>
          <p class="section-desc">From your call to full system restoration — same day, every time.</p>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <?php
          $steps = [
              [ 'num' => '1', 'icon' => 'fa-solid fa-phone', 'title' => 'Call 24/7',
                'desc' => 'Call (916) 849-6441 any time. A Richardson technician — not an answering service — picks up and dispatches immediately.' ],
              [ 'num' => '2', 'icon' => 'fa-solid fa-truck-fast', 'title' => '1–2 Hr Dispatch',
                'desc' => 'We dispatch from Antelope, CA. Most Sacramento Valley locations receive a technician within 1–2 hours of your call.' ],
              [ 'num' => '3', 'icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Diagnose & Repair',
                'desc' => 'We identify the failure, contain any flow, and perform on-the-spot repair using parts stocked on every service truck.' ],
              [ 'num' => '4', 'icon' => 'fa-solid fa-shield-check', 'title' => 'Restore & Document',
                'desc' => 'System restored to full service and tested. We provide written documentation for your insurance claim and AHJ records.' ],
          ];
          foreach ( $steps as $step ) : ?>
          <div class="service-card">
            <div class="service-card__icon" style="position: relative;">
              <i class="<?php echo esc_attr( $step['icon'] ); ?>"></i>
              <span style="position: absolute; top: -4px; right: -4px; background: var(--c-red); color: #fff; font-size: 0.65rem; font-weight: 700; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><?php echo esc_html( $step['num'] ); ?></span>
            </div>
            <h3 class="service-card__title"><?php echo esc_html( $step['title'] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $step['desc'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== REPAIR TYPES ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Repair</div>
          <h2 class="section-title">Common <span class="text-accent">Emergency Repairs</span></h2>
          <p class="section-desc">Every repair type stocked on our service trucks for same-day resolution.</p>
        </div>
        <div class="services-grid reveal-up">
          <?php
          $repairs = [
              [ 'fa-solid fa-droplet-slash', 'Burst or Leaking Heads',
                'A fused or mechanically damaged sprinkler head discharging water. We isolate, replace, and restore in one visit.' ],
              [ 'fa-solid fa-pipe-section', 'Pipe Damage & Leaks',
                'Corrosion, impact damage, or joint failure causing system leaks. We cut out, replace, and pressure-test the affected section.' ],
              [ 'fa-solid fa-bolt', 'Controller & Panel Faults',
                'Electric-drive pump controller faults, pressure switch failures, and supervisory alarm conditions require immediate attention.' ],
              [ 'fa-solid fa-snowflake', 'Frozen or Ruptured Dry-Pipe',
                'Dry-pipe and pre-action systems can rupture during freezing conditions. We restore the system and address the source of the freeze.' ],
              [ 'fa-solid fa-house-crack', 'Post-Earthquake Inspection',
                'After any seismic event, sprinkler systems require visual inspection for displaced heads, cracked fittings, or shifted hangers.' ],
              [ 'fa-solid fa-gauge', 'Backflow Preventer Failure',
                'A failed reduced-pressure backflow assembly can trigger waterflow alarms and disable system protection. We repair and retest.' ],
          ];
          foreach ( $repairs as $r ) : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="<?php echo esc_attr( $r[0] ); ?>"></i></div>
            <h3 class="service-card__title"><?php echo esc_html( $r[1] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $r[2] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== COVERAGE ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Service Area</div>
          <h2 class="section-title">Emergency Coverage <span class="text-accent">Across Sacramento Valley</span></h2>
          <p class="section-desc">We respond 24/7 to all cities in our service area. Typical response times listed below.</p>
        </div>
        <div class="services-grid reveal-up">
          <?php
          $coverage = [
              [ 'Sacramento', '20–35 min', 'Sacramento County' ],
              [ 'Roseville', '30–40 min', 'Placer County' ],
              [ 'Rocklin', '30–45 min', 'Placer County' ],
              [ 'Stockton', '45–60 min', 'San Joaquin County' ],
              [ 'Fairfield', '45–60 min', 'Solano County' ],
              [ 'Yuba City', '40–55 min', 'Sutter County' ],
              [ 'Davis', '25–40 min', 'Yolo County' ],
          ];
          foreach ( $coverage as $c ) : ?>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-location-dot"></i></div>
            <h3 class="service-card__title"><?php echo esc_html( $c[0] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $c[2] ); ?></p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-clock"></i> ~<?php echo esc_html( $c[1] ); ?> response</li>
            </ul>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== INSURANCE ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container" style="max-width: 860px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Insurance Claims</div>
          <h2 class="section-title">We Help You <span class="text-accent">File the Claim</span></h2>
        </div>
        <div class="reveal-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
          <?php
          $ins = [
              [ 'fa-solid fa-file-contract', 'Cause-of-Failure Report', 'Written report documenting what failed, why, and how we repaired it — exactly what adjusters need.' ],
              [ 'fa-solid fa-camera', 'Before & After Photos', 'Timestamped documentation of the damage and the completed repair for your claim file.' ],
              [ 'fa-solid fa-receipt', 'Itemized Repair Invoice', 'Detailed invoice breaking out parts and labor — matches line items adjusters expect to see.' ],
              [ 'fa-solid fa-shield-halved', 'AHJ Notification', 'We notify the local fire department of any system impairment and clearance, satisfying CFC 901.7.' ],
          ];
          foreach ( $ins as $i ) : ?>
          <div style="background: var(--c-bg); border: 1px solid var(--c-border); border-radius: 8px; padding: 1.25rem;">
            <div style="color: var(--c-red); font-size: 1.5rem; margin-bottom: 0.75rem;"><i class="<?php echo esc_attr( $i[0] ); ?>"></i></div>
            <strong style="color: var(--c-white); display: block; margin-bottom: 0.4rem;"><?php echo esc_html( $i[1] ); ?></strong>
            <p style="font-size: 0.88rem; color: var(--c-text-muted); margin: 0;"><?php echo esc_html( $i[2] ); ?></p>
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
          <h2 class="section-title">Emergency Repair <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
              [ 'q' => 'Is a leaking or burst fire sprinkler head an emergency?',
                'a' => 'Yes. A flowing sprinkler head discharges 10–25 gallons per minute, causing immediate property damage. The system must be taken offline at the main control valve, the head replaced, and the system restored and tested. A fire watch is required under CFC 901.7 for any period the system is impaired. Call (916) 849-6441 now.' ],
              [ 'q' => 'Can I shut off just one sprinkler head without turning off the whole system?',
                'a' => 'A sprinkler stop (wedge tool) can temporarily stop flow at a single head, but this only works for upright and pendent heads where the wedge can be inserted without heat compromising it. Even with a stop in place, CFC 901.7 requires a fire watch. Richardson carries stops on every truck and replaces the head on the same visit.' ],
              [ 'q' => 'Does my insurance cover emergency fire sprinkler repair?',
                'a' => 'Most commercial property policies cover sudden and accidental sprinkler discharge, including water damage and repair costs. Richardson provides cause-of-failure reports, before/after photos, and itemized invoices to support your claim. We work directly with adjusters who need technical documentation.' ],
              [ 'q' => 'How long does emergency fire sprinkler repair take?',
                'a' => 'Most repairs — burst heads, leaking fittings, mechanical damage — are completed in 2–4 hours. Complex repairs involving significant pipe replacement or controller work may take longer or require a same-day return visit. We communicate your estimated timeline on arrival.' ],
              [ 'q' => 'Do I need to notify my fire department when the sprinkler system is offline for repair?',
                'a' => 'Yes. California Fire Code Section 901.7 requires AHJ notification when a fire protection system is impaired for more than 4 hours. Richardson notifies SCFD, Roseville FD, or the applicable AHJ on your behalf. We also coordinate fire watch requirements when mandated.' ],
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

    <!-- ========== CONTACT FORM ========== -->
    <section id="repair-form" class="section" style="background: var(--c-surface);">
      <div class="container" style="max-width: 680px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Request Service</div>
          <h2 class="section-title">Report an <span class="text-accent">Emergency</span></h2>
          <p class="section-desc">For immediate dispatch call <a href="tel:+19168496441" style="color: var(--c-red);">(916) 849-6441</a>. For non-urgent repair requests, use the form below.</p>
        </div>
        <form class="contact-form reveal-up" method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>" novalidate>
          <?php wp_nonce_field( 'rfp_contact', 'rfp_nonce' ); ?>
          <input type="hidden" name="rfp_form" value="1" />
          <div class="form-row form-row--2">
            <div class="form-group">
              <label for="em_name">Name *</label>
              <input type="text" id="em_name" name="rfp_name" required placeholder="Your name" />
            </div>
            <div class="form-group">
              <label for="em_phone">Phone *</label>
              <input type="tel" id="em_phone" name="rfp_phone" required placeholder="(916) 555-1234" />
            </div>
          </div>
          <div class="form-group">
            <label for="em_address">Property Address *</label>
            <input type="text" id="em_address" name="rfp_address" required placeholder="123 Main St, Sacramento, CA" />
          </div>
          <div class="form-group">
            <label for="em_issue">Describe the Issue *</label>
            <textarea id="em_issue" name="rfp_message" rows="4" required placeholder="What is the problem? Is the system currently flowing? Is water shutoff open or closed?"></textarea>
          </div>
          <button type="submit" class="btn btn--primary btn--lg" style="width: 100%;">
            <i class="fa-solid fa-paper-plane"></i> Submit Service Request
          </button>
        </form>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          System Down? Call Now — We Answer 24/7
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Sacramento Valley's fire sprinkler emergency repair contractor. CSLB C-16 Licensed (#1053506). Fully insured. 1–2 hr dispatch.
        </p>
        <a href="tel:+19168496441" class="btn btn--ghost btn--lg" style="font-size: 1.2rem;">
          <i class="fa-solid fa-phone-volume"></i> <?php echo esc_html( $phone ); ?>
        </a>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
