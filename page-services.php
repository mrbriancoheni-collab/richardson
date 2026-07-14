<?php
/**
 * Template Name: Services
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "services".
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 55vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          CSLB Lic. #1053506 &mdash; NICET Certified
        </div>
        <h1 class="hero-title reveal-up">
          Fire Protection <span class="hero-title--accent">Services</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection delivers every phase of fire protection — design, installation, inspection, testing, and emergency response — across commercial, industrial, and residential sectors throughout the Sacramento Valley.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#contact" class="btn btn--ghost btn--lg">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

    <!-- ========== SECTORS ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">By Sector</div>
          <h2 class="section-title">Fire Protection by <span class="text-accent">Building Type</span></h2>
          <p class="section-desc">Every sector has different code requirements, occupancy hazards, and AHJ expectations. Richardson has the experience and certifications to handle all three.</p>
        </div>
        <div class="services-grid reveal-up">

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="service-card__tag">Commercial</div>
            <h2 class="service-card__title">Commercial Fire Protection</h2>
            <p class="service-card__desc">NFPA 13 sprinkler systems for offices, retail centers, restaurants, hotels, and mixed-use developments. Full design-build service from permit submittal to AHJ final.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Wet &amp; dry pipe systems</li>
              <li><i class="fa-solid fa-check"></i> High-rise compliance (CBC 403)</li>
              <li><i class="fa-solid fa-check"></i> Tenant improvement retrofits</li>
              <li><i class="fa-solid fa-check"></i> Restaurant hood suppression</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>" class="service-card__link">
              Commercial Services <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Industrial</div>
            <h2 class="service-card__title">Industrial Fire Protection</h2>
            <p class="service-card__desc">ESFR and in-rack sprinkler systems for warehouses, distribution centers, cold storage, and manufacturing facilities. High-piled storage compliance and commodity classification included.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> ESFR high-bay systems</li>
              <li><i class="fa-solid fa-check"></i> In-rack sprinkler design</li>
              <li><i class="fa-solid fa-check"></i> Cold storage dry-pipe</li>
              <li><i class="fa-solid fa-check"></i> High-piled storage compliance</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>" class="service-card__link">
              Industrial Services <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-building-user"></i></div>
            <div class="service-card__tag">Residential</div>
            <h2 class="service-card__title">Multifamily &amp; Residential</h2>
            <p class="service-card__desc">NFPA 13R systems for apartment complexes and NFPA 13D for single-family homes. We handle occupied retrofits, WUI fire hardening, and new construction throughout Northern California.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NFPA 13R apartment systems</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13D single-family</li>
              <li><i class="fa-solid fa-check"></i> Occupied building retrofits</li>
              <li><i class="fa-solid fa-check"></i> WUI fire hardening compliance</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>" class="service-card__link">
              Residential Services <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== ALL SERVICES ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What We Do</div>
          <h2 class="section-title">Every Phase of <span class="text-accent">Fire Protection</span></h2>
          <p class="section-desc">From initial design through ongoing inspection and emergency response — Richardson handles every phase in-house. No handoffs, no subcontracted work you don't know about.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <div class="service-card service-card--sm" data-delay="0">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="service-card__title">System Design</h3>
            <p class="service-card__desc">Custom engineering and hydraulic calculations for any building type, occupancy class, or hazard level. NICET-certified designers on staff.</p>
          </div>
          <div class="service-card service-card--sm" data-delay="80">
            <div class="service-card__icon"><i class="fa-solid fa-wrench"></i></div>
            <h3 class="service-card__title">Installation</h3>
            <p class="service-card__desc">Expert installation of wet pipe, dry pipe, pre-action, and deluge sprinkler systems. We hit your schedule milestones — rough-in, above-ceiling, trim-out.</p>
          </div>
          <div class="service-card service-card--sm" data-delay="160">
            <div class="service-card__icon"><i class="fa-solid fa-clipboard-list"></i></div>
            <h3 class="service-card__title">Inspections</h3>
            <p class="service-card__desc">Annual, semi-annual, and quarterly NFPA 25 inspections with full documentation, deficiency reports, and corrective action — everything your insurance and AHJ require.</p>
          </div>
          <div class="service-card service-card--sm" data-delay="240">
            <div class="service-card__icon"><i class="fa-solid fa-vials"></i></div>
            <h3 class="service-card__title">Testing &amp; Maintenance</h3>
            <p class="service-card__desc">Flow tests, drain tests, and full NFPA 25 testing cycles. We keep your system compliant and performing so there are no surprises at the next AHJ inspection.</p>
          </div>
          <div class="service-card service-card--sm" data-delay="320">
            <div class="service-card__icon"><i class="fa-solid fa-truck-fast"></i></div>
            <h3 class="service-card__title">Emergency Service</h3>
            <p class="service-card__desc">Frozen pipes, accidental discharges, damaged heads — we respond fast to get your system back online and your building back to operations.</p>
          </div>
          <div class="service-card service-card--sm" data-delay="400">
            <div class="service-card__icon"><i class="fa-solid fa-file-lines"></i></div>
            <h3 class="service-card__title">Permit &amp; AHJ Coordination</h3>
            <p class="service-card__desc">We handle plan submittal, permit pulls, AHJ pre-application meetings, and final inspection scheduling — so you never have to chase the fire department.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON ========== -->
    <section class="section" style="background: var(--c-black); color: #fff; padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up" style="text-align: left; max-width: 100%; margin-bottom: 2.5rem;">
          <div class="section-badge">Why We're Different</div>
          <h2 class="section-title" style="color: #fff;">One Sub. <span class="text-accent">Every Phase.</span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
            <div class="service-card__icon"><i class="fa-solid fa-handshake"></i></div>
            <h3 class="service-card__title" style="color: #fff;">Family Owned</h3>
            <p class="service-card__desc" style="color: rgba(255,255,255,0.7);">Every GC gets a direct line to the owner — not a dispatcher or call center. Decisions get made on the spot.</p>
          </div>
          <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
            <div class="service-card__icon"><i class="fa-solid fa-file-lines"></i></div>
            <h3 class="service-card__title" style="color: #fff;">24–48 hr Bids</h3>
            <p class="service-card__desc" style="color: rgba(255,255,255,0.7);">Send your plans and get a complete, priced bid in 24–48 hours — ready to plug into your budget and submit to the owner.</p>
          </div>
          <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="service-card__title" style="color: #fff;">Design-Build Turnkey</h3>
            <p class="service-card__desc" style="color: rgba(255,255,255,0.7);">Hydraulic design, stamped drawings, permit submittal, and all field phases — one sub from bid to certificate of occupancy.</p>
          </div>
          <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
            <div class="service-card__icon"><i class="fa-solid fa-calendar-check"></i></div>
            <h3 class="service-card__title" style="color: #fff;">Schedule-Driven</h3>
            <p class="service-card__desc" style="color: rgba(255,255,255,0.7);">We sync with your construction schedule and commit to rough-in, above-ceiling, and trim-out milestones — not vague windows.</p>
          </div>
          <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
            <div class="service-card__icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3 class="service-card__title" style="color: #fff;">First-Pass AHJ Final</h3>
            <p class="service-card__desc" style="color: rgba(255,255,255,0.7);">We coordinate final inspections with the AHJ and pass on the first attempt — no CO delays, no rescheduling, no surprises.</p>
          </div>
          <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
            <div class="service-card__icon"><i class="fa-solid fa-certificate"></i></div>
            <h3 class="service-card__title" style="color: #fff;">Licensed &amp; Certified</h3>
            <p class="service-card__desc" style="color: rgba(255,255,255,0.7);">CSLB Lic. #1053506, NICET certified fire protection engineers. We meet every licensing requirement across Northern California.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CITY COVERAGE ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.75rem;">
          <div class="section-badge">Service Area</div>
          <h2 class="section-title">We Serve the <span class="text-accent">Sacramento Valley</span></h2>
          <p class="section-desc">Richardson Fire Protection covers the greater Sacramento area and beyond — serving GCs and developers in all major Northern California markets.</p>
        </div>
        <?php get_template_part( 'template-parts/locations-strip' ); ?>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" style="background: var(--c-surface);">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Common <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Do you handle permits and AHJ coordination?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>Yes. Richardson handles the full permit cycle — plan preparation, submittal to the Authority Having Jurisdiction, responding to corrections, and scheduling the final inspection. Our goal is a first-pass AHJ final on every project.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              How quickly can you turn around a bid?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>We return complete, priced bids in 24–48 hours for most projects. Send us your plans and square footage and we'll have a number back to you the same day or next morning.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What codes do you design to?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>We design to the California Fire Code (CFC), California Building Code (CBC), NFPA 13, NFPA 13R, NFPA 13D, and NFPA 25, with site-specific modifications required by the local AHJ. Our NICET-certified designers ensure compliance from the first drawing set.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              Do you offer inspection and testing for existing systems?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>Yes. We perform annual, semi-annual, and quarterly NFPA 25 inspections, including flow tests, drain tests, and alarm verification. We provide full written reports and handle any deficiency corrections identified during the inspection.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" aria-expanded="false">
              What areas do you serve?
              <i class="fa-solid fa-chevron-down faq-icon"></i>
            </button>
            <div class="faq-answer">
              <p>Richardson Fire Protection serves the greater Sacramento Valley including Sacramento, Roseville, Rocklin, Stockton, Fairfield, Yuba City, Davis, and all surrounding communities. Call us for any Northern California project — we'll let you know quickly if we can cover it.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CONTACT ========== -->
    <section class="section contact" id="contact">
      <div class="container contact-container">
        <div class="contact-info reveal-left">
          <div class="section-badge">Start a Project</div>
          <h2 class="section-title">
            Get a Bid on Your <span class="text-accent">Next Project</span>
          </h2>
          <p class="contact-lead">Send your plans or call — we return complete bids in 24–48 hours. Commercial, industrial, and residential projects across Northern California.</p>
          <div class="contact-details">
            <div class="contact-item">
              <div class="contact-item__icon"><i class="fa-solid fa-phone"></i></div>
              <div class="contact-item__content">
                <strong>Call or Text</strong>
                <a href="tel:+19168496441">(916) 849-6441</a>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item__icon"><i class="fa-solid fa-envelope"></i></div>
              <div class="contact-item__content">
                <strong>Email</strong>
                <a href="mailto:Chris@Richardsonfirepro.com">Chris@Richardsonfirepro.com</a>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item__icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="contact-item__content">
                <strong>Office</strong>
                <span>3599 Scotland Drive, Antelope, CA 95843</span>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-form-wrap reveal-right">
          <form class="contact-form" id="contactForm" novalidate>
            <?php wp_nonce_field( 'rfp_contact', 'rfp_nonce' ); ?>
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" placeholder="John" required />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" placeholder="Smith" required />
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" placeholder="john@company.com" required />
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" placeholder="(916) 555-0100" />
            </div>
            <div class="form-group">
              <label for="serviceType">Service Needed *</label>
              <select id="serviceType" name="serviceType" required>
                <option value="">Select a service...</option>
                <option value="commercial">Commercial Fire Protection</option>
                <option value="industrial">Industrial Systems</option>
                <option value="residential">Multifamily / Apartment Complex</option>
                <option value="inspection">Inspection &amp; Testing</option>
                <option value="emergency">Emergency Service</option>
                <option value="other">Other / Not Sure</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Tell Us About Your Project</label>
              <textarea id="message" name="message" rows="4" placeholder="Facility type, square footage, timeline..."></textarea>
            </div>
            <div class="form-group form-checkbox">
              <label class="checkbox-label">
                <input type="checkbox" id="consent" name="consent" required />
                <span class="checkbox-custom"></span>
                I agree to be contacted by Richardson Fire Protection.
              </label>
            </div>
            <button type="submit" class="btn btn--primary btn--block btn--lg">
              <span class="btn-text">Request a Bid</span>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
            <div class="form-success" id="formSuccess" hidden>
              <i class="fa-solid fa-circle-check"></i>
              <strong>Message received!</strong> We'll follow up within one business day. Call (916) 849-6441 for urgent needs.
            </div>
            <div class="form-error" id="formError" hidden></div>
          </form>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
