<?php
/**
 * Template Name: Fire Pump Services
 * Template Post Type: page
 */
get_header();

$biz  = rfp_business_data();
$locs = rfp_all_locations();
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
          NFPA 20 &amp; NFPA 25 Specialists
        </div>
        <h1 class="hero-title reveal-up">
          Fire Pump <span class="hero-title--accent">Design, Installation,</span><br>Repair &amp; Testing
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 660px;">
          When municipal water pressure isn't enough, your fire sprinkler system needs a fire pump. Richardson Fire Protection designs, installs, repairs, and tests fire pumps for commercial, industrial, and multifamily buildings across the Sacramento Valley.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

    <!-- ========== 4 SERVICE CARDS ========== -->
    <section class="section" style="padding-top: 4.5rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Do</div>
          <h2 class="section-title">Complete Fire Pump <span class="text-accent">Services</span></h2>
          <p class="section-desc">From initial hydraulic analysis through annual NFPA 25 testing — Richardson handles every phase of fire pump work under one contract.</p>
        </div>
        <div class="services-grid reveal-up">

          <div class="service-card" id="fire-pump-design">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <div class="service-card__tag">NFPA 20 Design</div>
            <h3 class="service-card__title">Fire Pump Design</h3>
            <p class="service-card__desc">Hydraulic demand analysis, pump sizing, and stamped NFPA 20 specifications for new construction, system expansions, and high-rise projects across the Sacramento Valley.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Hydraulic demand analysis</li>
              <li><i class="fa-solid fa-check"></i> Electric &amp; diesel-drive sizing</li>
              <li><i class="fa-solid fa-check"></i> Stamped drawings for AHJ submittal</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/sacramento/fire-pump-design/' ) ); ?>" class="service-card__link">
              Fire Pump Design in Sacramento <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card" id="fire-pump-installation">
            <div class="service-card__icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
            <div class="service-card__tag">NFPA 20 Installation</div>
            <h3 class="service-card__title">Fire Pump Installation</h3>
            <p class="service-card__desc">Complete fire pump assembly installation — horizontal split-case, end-suction, vertical turbine, and diesel-drive — fully commissioned and AHJ-inspected.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Electric &amp; diesel-drive systems</li>
              <li><i class="fa-solid fa-check"></i> Vertical turbine pumps (VTP)</li>
              <li><i class="fa-solid fa-check"></i> Controller &amp; ATS coordination</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/sacramento/fire-pump-installation/' ) ); ?>" class="service-card__link">
              Fire Pump Installation in Sacramento <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card" id="fire-pump-repair">
            <div class="service-card__icon"><i class="fa-solid fa-toolbox"></i></div>
            <div class="service-card__tag">24/7 Repair</div>
            <h3 class="service-card__title">Fire Pump Repair</h3>
            <p class="service-card__desc">Emergency and scheduled fire pump repair — impeller, seals, controller, and piping — with written documentation for your AHJ and property insurer. We respond 24/7.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Impeller &amp; seal replacement</li>
              <li><i class="fa-solid fa-check"></i> Controller troubleshooting</li>
              <li><i class="fa-solid fa-check"></i> 24/7 emergency response</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/sacramento/fire-pump-repair/' ) ); ?>" class="service-card__link">
              Fire Pump Repair in Sacramento <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card" id="fire-pump-testing">
            <div class="service-card__icon"><i class="fa-solid fa-gauge-high"></i></div>
            <div class="service-card__tag">NFPA 25 Testing</div>
            <h3 class="service-card__title">Fire Pump Testing</h3>
            <p class="service-card__desc">Annual NFPA 25 Chapter 8 performance tests — churn, rated flow, and peak load — with certified pump curves and written reports accepted by your AHJ and FM Global.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Annual &amp; acceptance testing</li>
              <li><i class="fa-solid fa-check"></i> Certified pressure flow curves</li>
              <li><i class="fa-solid fa-check"></i> Reports delivered in 5 business days</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/sacramento/fire-pump-testing/' ) ); ?>" class="service-card__link">
              Fire Pump Testing in Sacramento <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON ========== -->
    <section class="section" style="background: var(--c-black); color: #fff; padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up" style="text-align: left; max-width: 100%; margin-bottom: 2.5rem;">
          <div class="section-badge">Why Richardson</div>
          <h2 class="section-title" style="color: #fff;">
            The Sacramento Valley's Fire Pump <span class="text-accent">Specialists</span>
          </h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $reasons = [
            [ 'fa-solid fa-file-certificate', 'NFPA 20 Licensed',             'Richardson holds CSLB C-16 License #1053506 and is CSFM registered. Every fire pump design and installation we produce meets NFPA 20 and the applicable AHJ\'s local amendments.' ],
            [ 'fa-solid fa-drafting-compass',  'NICET-Certified Designers',    'Our NICET-certified fire protection engineers perform hydraulic demand analysis and size fire pumps to the exact water supply conditions at your site — no guessing, no over-sizing.' ],
            [ 'fa-solid fa-phone-volume',      '24/7 Emergency Repair',        'A failed fire pump requires an immediate fire watch and AHJ notification. Richardson technicians are on call around the clock to respond, diagnose, and document repairs.' ],
            [ 'fa-solid fa-circle-check',      'First-Pass AHJ Approval',      'We know what plan checkers at Sacramento City, Roseville, Stockton, and all 7 Sacramento Valley AHJs expect in a fire pump submittal. Our submittals pass on the first review.' ],
            [ 'fa-solid fa-droplet',           'All Pump Types',               'Electric motor-driven, diesel engine-driven, and vertical turbine pumps — horizontal split-case and end-suction configurations. Whatever NFPA 20 specifies for your building, we install it.' ],
            [ 'fa-solid fa-file-lines',        'Full ITM Under One Contract',  'One contractor for design, installation, annual NFPA 25 testing, and repairs. No handoff between a design firm and an installer — Richardson owns every phase from hydraulic calcs to final certificate.' ],
          ];
          foreach ( $reasons as $r ) : ?>
            <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $r[0] ); ?>"></i></div>
              <h3 class="service-card__title" style="color: #fff;"><?php echo esc_html( $r[1] ); ?></h3>
              <p class="service-card__desc" style="color: rgba(255,255,255,0.7);"><?php echo esc_html( $r[2] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CITY COVERAGE ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.75rem;">
          <div class="section-badge">Service Area</div>
          <h2 class="section-title">Fire Pump Services <span class="text-accent">by City</span></h2>
          <p class="section-desc">Richardson serves all major AHJ jurisdictions in the Sacramento Valley. Select your city for localized fire pump service information.</p>
        </div>
        <div class="services-grid reveal-up">
          <?php foreach ( $locs as $city_slug => $loc ) :
              $city_page = get_page_by_path( $city_slug );
              if ( ! $city_page ) continue;
              $city_url  = get_permalink( $city_page->ID );
              ?>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-location-dot"></i></div>
            <h3 class="service-card__title"><?php echo esc_html( $loc['name'] ); ?></h3>
            <p class="service-card__desc" style="font-size: 0.85rem;"><?php echo esc_html( $loc['ahj_name'] ); ?></p>
            <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 0.75rem;">
              <a href="<?php echo esc_url( $city_url . 'fire-pump-design/' ); ?>" style="font-size: 0.78rem; color: var(--c-red);">Design</a>
              <span style="color: var(--c-text-muted);">·</span>
              <a href="<?php echo esc_url( $city_url . 'fire-pump-installation/' ); ?>" style="font-size: 0.78rem; color: var(--c-red);">Install</a>
              <span style="color: var(--c-text-muted);">·</span>
              <a href="<?php echo esc_url( $city_url . 'fire-pump-repair/' ); ?>" style="font-size: 0.78rem; color: var(--c-red);">Repair</a>
              <span style="color: var(--c-text-muted);">·</span>
              <a href="<?php echo esc_url( $city_url . 'fire-pump-testing/' ); ?>" style="font-size: 0.78rem; color: var(--c-red);">Testing</a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" style="background: var(--c-surface);">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Fire Pump <span class="text-accent">Questions</span></h2>
          <p class="section-desc">Common questions from GCs, developers, and facility managers about fire pump requirements, installation, and testing in California.</p>
        </div>
        <div class="faq-list reveal-up">

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              When does a building require a fire pump?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>A fire pump is required by NFPA 13 when the available municipal water supply — pressure, flow, or both — is insufficient to meet the hydraulic demand of the sprinkler system. This is common in multi-story buildings (upper floors see reduced pressure), large warehouses with high water demand, and sites where the city main can't deliver the required gpm. Richardson performs a water supply flow test and hydraulic analysis on every project to determine whether a fire pump is needed before design begins.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What types of fire pumps does Richardson install?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>Richardson installs electric motor-driven fire pumps (horizontal split-case, end-suction, and vertical in-line configurations), diesel engine-driven fire pumps for facilities requiring an independent power source, and vertical turbine pumps (VTPs) for sites drawing from underground cisterns or ponds. All installations are designed to NFPA 20 and submitted to the local AHJ — Sacramento City Fire Department, Roseville Fire, Stockton Fire, and all other Sacramento Valley jurisdictions.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              How often does a fire pump need to be tested in California?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>NFPA 25 requires weekly churn tests (no-flow test run), monthly visual inspections of all components, and an annual full-flow performance test. The annual test documents pump performance at churn, rated capacity, and peak flow — producing a certified pump curve that must be kept on file for the AHJ and property insurer. California SB 1205 requires all NFPA 25 testing to be performed by a CSLB C-16 licensed contractor — Richardson meets that requirement with License #1053506.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What causes fire pump failures?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>Common failure causes include: mechanical seal leaks from inadequate weekly churn tests (seals dry out without regular runs), impeller wear that reduces output below rated capacity, controller malfunctions (pressure switch drift, contactor failure, transfer switch faults), and suction or discharge piping corrosion or leaks. When a fire pump fails or is impaired, NFPA 25 requires immediate AHJ notification and implementation of a fire watch. Richardson responds 24/7 and provides written documentation of all repairs for the AHJ file.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              How long does fire pump installation take?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>A standard electric-drive fire pump installation — concrete pump pad, suction and discharge piping, jockey pump, controller, and commissioning — typically takes 2–4 weeks from permit issuance for a commercial project. Diesel-drive installations add 1–2 weeks for fuel tank permitting, secondary containment, and exhaust routing. Richardson coordinates pump installation with your construction schedule and performs the NFPA 20 acceptance test before the AHJ final inspection.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Need a Fire Pump? Start With a Water Supply Analysis.
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Richardson performs flow tests, hydraulic analysis, and NFPA 20 fire pump design for projects across the Sacramento Valley. Bids returned in 24–48 hours.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
