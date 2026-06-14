<?php
/**
 * Template Name: Licenses & Credentials
 * Template Post Type: page
 *
 * Assign to a page with slug "licenses" or "credentials".
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
          Licensed · Certified · Insured
        </div>
        <h1 class="hero-title reveal-up">
          Licenses &amp; <span class="hero-title--accent">Credentials</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection carries every license, certification, and insurance policy your GC or developer procurement team requires. COI and license verification available on request.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">
            Request COI
          </a>
        </div>
      </div>
    </section>

    <!-- ========== LICENSES ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">State Licensing</div>
          <h2 class="section-title">Contractor <span class="text-accent">Licenses</span></h2>
          <p class="section-desc">Richardson Fire Protection holds all California contractor licenses required for fire sprinkler design, installation, and inspection work.</p>
        </div>
        <div class="services-grid reveal-up">

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-certificate"></i></div>
            <h3 class="service-card__title">CSLB C-16 License</h3>
            <p class="service-card__desc">California State License Board Fire Protection Contractor license — required for all fire sprinkler installation and service work in California.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> License #: <strong>1053506</strong></li>
              <li><i class="fa-solid fa-check"></i> Active &amp; Current</li>
              <li><i class="fa-solid fa-check"></i> Verify at cslb.ca.gov</li>
            </ul>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-shield-halved"></i></div>
            <h3 class="service-card__title">CSFM Registration</h3>
            <p class="service-card__desc">California State Fire Marshal registration — required for all contractors performing fire protection work on state-regulated occupancies.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Registered with CSFM</li>
              <li><i class="fa-solid fa-check"></i> Current Certification</li>
              <li><i class="fa-solid fa-check"></i> Available on request</li>
            </ul>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-id-badge"></i></div>
            <h3 class="service-card__title">NICET Certification</h3>
            <p class="service-card__desc">National Institute for Certification in Engineering Technologies — the gold standard for fire protection system designers and inspectors.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NICET Level III Sprinkler Systems</li>
              <li><i class="fa-solid fa-check"></i> NICET Level II Inspection &amp; Testing</li>
              <li><i class="fa-solid fa-check"></i> Current certifications on file</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== INSURANCE ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Insurance &amp; Bonding</div>
          <h2 class="section-title">Coverage That Meets <span class="text-accent">Your Requirements</span></h2>
          <p class="section-desc">Richardson Fire Protection carries general liability, workers' compensation, and umbrella coverage that satisfies the insurance requirements of major GC prequalification programs.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $coverage = [
            [ 'fa-solid fa-building-shield', 'General Liability', '$2M per occurrence / $4M aggregate. Additional insured endorsements available for your project.' ],
            [ 'fa-solid fa-person-digging',  'Workers\' Comp',    'Full workers\' compensation coverage for all employees and field crews on your project site.' ],
            [ 'fa-solid fa-umbrella',        'Umbrella Policy',   'Excess liability coverage above primary GL limits for large commercial and industrial projects.' ],
            [ 'fa-solid fa-file-contract',   'Bonding',           'Performance and payment bonds available for public projects and GC requirements. Contact us for bonding capacity.' ],
            [ 'fa-solid fa-car',             'Auto Liability',    'Commercial auto coverage for all company vehicles, service trucks, and equipment transport.' ],
            [ 'fa-solid fa-hard-drive',      'E&amp;O Coverage',  'Errors and omissions coverage for design-build scopes, protecting your project from design liability.' ],
          ];
          foreach ( $coverage as $c ) : ?>
            <div class="service-card service-card--sm reveal-up">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $c[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo esc_html( $c[1] ); ?></h3>
              <p class="service-card__desc"><?php echo $c[2]; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="reveal-up" style="text-align: center; margin-top: 2.5rem;">
          <p style="color: var(--c-text-muted); margin-bottom: 1.25rem;">Need a Certificate of Insurance for your project? We can issue a COI naming your company as additional insured, typically within 24 hours.</p>
          <a href="tel:+19168496441" class="btn btn--primary">
            <i class="fa-solid fa-file-lines"></i> Request a COI
          </a>
        </div>
      </div>
    </section>

    <!-- ========== STANDARDS ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Code &amp; Standards</div>
          <h2 class="section-title">We Design &amp; Install to <span class="text-accent">These Standards</span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $standards = [
            [ 'NFPA 13',  'Standard for the Installation of Sprinkler Systems — commercial, industrial, and mixed-use.' ],
            [ 'NFPA 13R', 'Standard for Low-Rise Residential Occupancies — multifamily up to 4 stories.' ],
            [ 'NFPA 13D', 'Standard for One- and Two-Family Dwellings and Manufactured Homes.' ],
            [ 'NFPA 72',  'National Fire Alarm and Signaling Code — detection, alarm, and notification systems.' ],
            [ 'NFPA 25',  'Standard for the Inspection, Testing, and Maintenance of Water-Based Fire Protection Systems.' ],
            [ 'NFPA 30',  'Flammable and Combustible Liquids Code — applicable to fuel storage, industrial, and chemical facilities.' ],
            [ 'Title 19', 'California Code of Regulations — state-specific fire protection requirements.' ],
            [ 'CBC Ch. 9','California Building Code Chapter 9 — fire protection systems requirements.' ],
            [ 'FM Global', 'Factory Mutual loss prevention standards for industrial and warehouse occupancies.' ],
          ];
          foreach ( $standards as $s ) : ?>
            <div class="service-card service-card--sm reveal-up" style="text-align: center;">
              <div class="service-card__icon" style="font-size: 1rem; font-family: 'Oswald', sans-serif; font-weight: 700; color: var(--c-red); height: auto; width: auto; background: none; border: 1px solid var(--c-border-2); padding: 0.4rem 0.75rem; border-radius: var(--r-sm);"><?php echo esc_html( $s[0] ); ?></div>
              <p class="service-card__desc" style="font-size: 0.82rem; margin-top: 0.6rem;"><?php echo esc_html( $s[1] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Ready to Add Richardson to Your Approved Subs List?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          We provide prequalification packages, COIs, and references on request.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Request Prequalification Package
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
