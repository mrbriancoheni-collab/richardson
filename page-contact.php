<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "contact".
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 42vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Same-Day Response — 24/7 Emergency Line Available
        </div>
        <h1 class="hero-title reveal-up">
          Start a Bid or <span class="hero-title--accent">Pre-Con Consultation</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 600px;">
          Send us your plans or reach out directly. We turn around competitive bids in 24–48 hours and are available for pre-construction meetings, plan reviews, and scope calls.
        </p>
      </div>
    </section>

    <!-- ========== CONTACT SPLIT ========== -->
    <section class="section contact" style="padding-top: 5rem; padding-bottom: 5rem;">
      <div class="container contact-container">

        <!-- Info Column -->
        <div class="contact-info reveal-left">
          <div class="section-badge">Contact Info</div>
          <h2 class="section-title">Reach <span class="text-accent">Our Team</span></h2>

          <div class="contact-details">
            <div class="contact-item">
              <div class="contact-item__icon"><i class="fa-solid fa-phone"></i></div>
              <div class="contact-item__content">
                <strong>Main Office</strong>
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
            <div class="contact-item contact-item--emergency">
              <div class="contact-item__icon"><i class="fa-solid fa-truck-fast"></i></div>
              <div class="contact-item__content">
                <strong>24/7 Emergency Line</strong>
                <a href="tel:+19168496441">(916) 849-6441</a>
              </div>
            </div>
          </div>

          <!-- Business Hours -->
          <div style="margin-top: 2.5rem; background: #f8f8f8; border-radius: 12px; padding: 1.5rem;">
            <h4 style="font-family: 'Oswald', sans-serif; font-size: 1rem; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 1rem; color: #1a1a1a;">Business Hours</h4>
            <?php
            $hours = [
              'Monday – Friday'  => '7:00 AM – 5:30 PM',
              'Saturday'         => '8:00 AM – 2:00 PM',
              'Sunday'           => 'Emergency Service Only',
            ];
            foreach ( $hours as $day => $time ) : ?>
              <div style="display: flex; justify-content: space-between; padding: 0.4rem 0; border-bottom: 1px solid #eee; font-size: 0.9rem;">
                <span style="color: #4b5563;"><?php echo esc_html( $day ); ?></span>
                <span style="font-weight: 600; color: #1a1a1a;"><?php echo esc_html( $time ); ?></span>
              </div>
            <?php endforeach; ?>
            <p style="font-size: 0.8rem; color: #C41230; margin-top: 0.75rem; font-weight: 600;">
              <i class="fa-solid fa-truck-fast"></i> Emergency response available 24/7/365.
            </p>
          </div>

          <!-- Licenses -->
          <div style="margin-top: 1.5rem; display: flex; gap: 1rem; flex-wrap: wrap;">
            <span style="background: #1a1a1a; color: #fff; font-size: 0.75rem; font-weight: 600; padding: 0.4rem 0.9rem; border-radius: 20px;">
              <i class="fa-solid fa-certificate"></i> CSLB Lic. #000000
            </span>
            <span style="background: #1a1a1a; color: #fff; font-size: 0.75rem; font-weight: 600; padding: 0.4rem 0.9rem; border-radius: 20px;">
              <i class="fa-solid fa-shield-halved"></i> NICET Certified
            </span>
            <span style="background: #1a1a1a; color: #fff; font-size: 0.75rem; font-weight: 600; padding: 0.4rem 0.9rem; border-radius: 20px;">
              <i class="fa-solid fa-building-shield"></i> Fully Insured
            </span>
          </div>
        </div>

        <!-- Form Column -->
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
              <textarea id="message" name="message" rows="5" placeholder="Facility type, square footage, number of units/floors, current system status, timeline..."></textarea>
            </div>
            <div class="form-group form-checkbox">
              <label class="checkbox-label">
                <input type="checkbox" id="consent" name="consent" required />
                <span class="checkbox-custom"></span>
                I agree to be contacted by Richardson Fire Protection.
              </label>
            </div>
            <button type="submit" class="btn btn--primary btn--block btn--lg">
              <span class="btn-text">Send My Request</span>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
            <div class="form-success" id="formSuccess" hidden>
              <i class="fa-solid fa-circle-check"></i>
              <strong>Message received!</strong> We'll follow up within one business day. For urgent project needs call (916) 849-6441.
            </div>
            <div class="form-error" id="formError" hidden></div>
          </form>
        </div>

      </div>
    </section>

    <!-- ========== WHY CALL US ========== -->
    <section style="background: #1a1a1a; color: #fff; padding: 4rem 1.5rem;">
      <div class="container">
        <div class="section-header" style="margin-bottom: 2.5rem;">
          <div class="section-badge">Why Richardson</div>
          <h2 class="section-title" style="color: #fff;">Why GCs &amp; Developers <span class="text-accent">Work With Us</span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $reasons = [
            [ 'fa-solid fa-file-lines',    'Fast Bid Turnaround',   'Send us your plans — we return a complete, detailed bid in 24–48 hours so you can close your budget.' ],
            [ 'fa-solid fa-file-contract', 'Design-Build Turnkey',  'We own the scope from hydraulic design and permit submittal through AHJ final — one sub, zero gaps.' ],
            [ 'fa-solid fa-calendar-check','Schedule-Driven',       'Our crews hit rough-in, above-ceiling, and trim-out milestones on your schedule — not theirs.' ],
            [ 'fa-solid fa-circle-check',  'Clean Inspections',     'We pass AHJ final on the first attempt. No re-inspections, no certificate delays, no CO hold-ups.' ],
            [ 'fa-solid fa-handshake',     'True Sub Partner',      'Family-owned. We give every GC a direct line to the owner — not a dispatcher, not a call center.' ],
            [ 'fa-solid fa-award',         '30+ Years on the Job',  'Decades of Sacramento-area experience means we know every local AHJ and what they expect to see.' ],
          ];
          foreach ( $reasons as $r ) : ?>
            <div class="service-card service-card--sm" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); color: #fff;">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $r[0] ); ?>"></i></div>
              <h3 class="service-card__title" style="color: #fff;"><?php echo esc_html( $r[1] ); ?></h3>
              <p class="service-card__desc" style="color: rgba(255,255,255,0.7);"><?php echo esc_html( $r[2] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
