<?php
/**
 * Template Name: City Location Page
 * Template Post Type: page
 *
 * Serves all 7 city pages under /locations/{slug}/
 * Auto-routed via template_include filter in functions.php.
 */
get_header();

$post = get_queried_object();
$slug = $post->post_name;
$loc  = rfp_location_data( $slug );

if ( ! $loc ) {
    wp_redirect( home_url( '/locations/' ) );
    exit;
}

$name      = $loc['name'];
$county    = $loc['county'];
$ahj       = $loc['ahj_name'];
$all_locs  = rfp_all_locations();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 50vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Fire Sprinkler Contractor — <?php echo esc_html( $name ); ?>, <?php echo esc_html( $county ); ?>
        </div>
        <h1 class="hero-title reveal-up">
          Fire Protection in <span class="hero-title--accent"><?php echo esc_html( $name ); ?></span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection is the preferred fire sprinkler sub for GCs and developers working in <?php echo esc_html( $name ); ?>. We handle design, permits, <?php echo esc_html( $ahj ); ?> coordination, and installation — turnkey from bid to certificate.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#contact-<?php echo esc_attr( $slug ); ?>" class="btn btn--ghost btn--lg">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

    <!-- ========== INTRO / AHJ INFO ========== -->
    <section class="section">
      <div class="container" style="max-width: 860px;">
        <div class="section-badge reveal-up"><?php echo esc_html( $name ); ?> Fire Protection</div>
        <h2 class="section-title reveal-up">
          Fire Sprinkler Services in <span class="text-accent"><?php echo esc_html( $name ); ?></span>
        </h2>
        <p class="reveal-up" style="font-size: 1.05rem; line-height: 1.85; color: var(--c-text); margin-bottom: 1.5rem;">
          <?php echo esc_html( $loc['intro'] ); ?>
        </p>
        <div class="reveal-up" style="background: var(--c-surface); border: 1px solid var(--c-border); border-left: 3px solid var(--c-red); border-radius: var(--r-md); padding: 1.25rem 1.5rem;">
          <p style="font-size: 0.9rem; margin: 0; color: var(--c-text-muted);">
            <strong style="color: var(--c-white); display: block; margin-bottom: 0.4rem;">
              <i class="fa-solid fa-building-shield" style="color: var(--c-red); margin-right: 0.4rem;"></i>
              Authority Having Jurisdiction: <?php echo esc_html( $ahj ); ?>
            </strong>
            <?php echo esc_html( $loc['services_note'] ); ?>
          </p>
        </div>
      </div>
    </section>

    <!-- ========== SECTOR INTERLINKING ========== -->
    <section class="section" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge"><?php echo esc_html( $name ); ?> Fire Protection</div>
          <h2 class="section-title">Services We Provide in <span class="text-accent"><?php echo esc_html( $name ); ?></span></h2>
          <p class="section-desc">Richardson Fire Protection handles all three major sectors in <?php echo esc_html( $name ); ?> — from office buildings and retail to industrial warehouses and apartment complexes.</p>
        </div>
        <div class="services-grid reveal-up">
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="service-card__tag">Commercial</div>
            <h3 class="service-card__title">Commercial Fire Protection in <?php echo esc_html( $name ); ?></h3>
            <p class="service-card__desc">NFPA 13 sprinkler systems for offices, retail, restaurants, and mixed-use developments in <?php echo esc_html( $name ); ?>. Full design-build from permit to CO.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> Wet &amp; dry pipe systems</li>
              <li><i class="fa-solid fa-check"></i> Tenant improvement retrofits</li>
              <li><i class="fa-solid fa-check"></i> <?php echo esc_html( $ahj ); ?> coordination</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/commercial/' ) ); ?>" class="service-card__link">
              Commercial Fire Protection <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Industrial</div>
            <h3 class="service-card__title">Industrial Fire Protection in <?php echo esc_html( $name ); ?></h3>
            <p class="service-card__desc">ESFR and high-piled storage systems for warehouses, distribution centers, and manufacturing facilities in <?php echo esc_html( $county ); ?>.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> ESFR high-bay systems</li>
              <li><i class="fa-solid fa-check"></i> High-piled storage compliance</li>
              <li><i class="fa-solid fa-check"></i> Cold storage dry-pipe</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/industrial/' ) ); ?>" class="service-card__link">
              Industrial Fire Protection <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-building-user"></i></div>
            <div class="service-card__tag">Residential</div>
            <h3 class="service-card__title">Multifamily Fire Protection in <?php echo esc_html( $name ); ?></h3>
            <p class="service-card__desc">NFPA 13R and NFPA 13D systems for apartment complexes, condos, and townhomes throughout <?php echo esc_html( $name ); ?> and <?php echo esc_html( $county ); ?>.</p>
            <ul class="service-card__features">
              <li><i class="fa-solid fa-check"></i> NFPA 13R apartment systems</li>
              <li><i class="fa-solid fa-check"></i> NFPA 13D single-family</li>
              <li><i class="fa-solid fa-check"></i> Occupied building retrofits</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>" class="service-card__link">
              Residential Fire Protection <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SERVICES ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3.5rem; padding-bottom: 3.5rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Services in <?php echo esc_html( $name ); ?></div>
          <h2 class="section-title">What We Do in <span class="text-accent"><?php echo esc_html( $name ); ?></span></h2>
        </div>
        <div class="services-grid reveal-up">
          <?php foreach ( $loc['primary_services'] as $svc ) : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="<?php echo esc_attr( $svc['icon'] ); ?>"></i></div>
            <div class="service-card__tag"><?php echo esc_html( $svc['tag'] ); ?></div>
            <h3 class="service-card__title"><?php echo esc_html( $svc['title'] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $svc['desc'] ); ?></p>
            <ul class="service-card__features">
              <?php foreach ( $svc['features'] as $feat ) : ?>
              <li><i class="fa-solid fa-check"></i> <?php echo esc_html( $feat ); ?></li>
              <?php endforeach; ?>
            </ul>
            <a href="<?php echo esc_url( home_url( $svc['link'] ) ); ?>" class="service-card__link">
              <?php echo esc_html( $svc['title'] ); ?> in <?php echo esc_html( $name ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== BUILDING TYPES ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Project Types</div>
          <h2 class="section-title">Buildings We Protect in <span class="text-accent"><?php echo esc_html( $name ); ?></span></h2>
        </div>
        <?php
        $rfp_building_icons = [
          'fa-solid fa-building',
          'fa-solid fa-warehouse',
          'fa-solid fa-building-user',
          'fa-solid fa-hospital',
          'fa-solid fa-school',
          'fa-solid fa-store',
        ];
        ?>
        <div class="services-grid services-grid--6 reveal-up">
          <?php foreach ( $loc['building_types'] as $i => $type ) : ?>
            <div class="service-card service-card--sm" data-delay="<?php echo esc_attr( $i * 80 ); ?>">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $rfp_building_icons[ $i % count( $rfp_building_icons ) ] ); ?>"></i></div>
              <h3 class="service-card__title" style="font-size: 0.95rem;"><?php echo esc_html( $type ); ?></h3>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON IN THIS CITY ========== -->
    <section class="section" style="background: var(--c-black); color: #fff; padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up" style="text-align: left; max-width: 100%; margin-bottom: 2.5rem;">
          <div class="section-badge">Local Advantage</div>
          <h2 class="section-title" style="color: #fff;">
            Why Richardson in <span class="text-accent"><?php echo esc_html( $name ); ?></span>
          </h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $reasons = [
            [ 'fa-solid fa-map-location-dot', 'We Know ' . $name,     'Richardson has completed projects in ' . $county . ' and has working relationships with ' . $ahj . ' plan review staff.' ],
            [ 'fa-solid fa-file-lines',        '24–48 hr Bids',        'Send us your plans and we return a complete, priced bid in 24–48 hours — ready for your budget.' ],
            [ 'fa-solid fa-drafting-compass',  'Design-Build Turnkey', 'Hydraulic design, stamped drawings, permit submittal to ' . $ahj . ', and all field phases — one sub.' ],
            [ 'fa-solid fa-calendar-check',    'Schedule-Driven',      'Our crews hit rough-in, above-ceiling, and trim-out milestones on your construction schedule.' ],
            [ 'fa-solid fa-circle-check',      'First-Pass AHJ Final', 'We coordinate the final inspection with ' . $ahj . ' and pass on the first attempt — no CO delays.' ],
            [ 'fa-solid fa-handshake',         'Direct Owner Contact', 'Family-owned. Every GC gets a direct line to the owner — not a dispatcher or call center.' ],
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

    <!-- ========== SERVICE AREA MAP ========== -->
    <section class="section location-map-section">
      <div class="container">
        <div class="location-map-wrap reveal-up">
          <div class="location-map-content">
            <div class="section-badge">Service Area</div>
            <h2 class="section-title">
              Serving <span class="text-accent"><?php echo esc_html( $name ); ?></span> &amp; Surrounding Areas
            </h2>
            <p style="color: var(--c-text-muted); line-height: 1.75; margin-bottom: 1.5rem;">
              Richardson Fire Protection covers <?php echo esc_html( $name ); ?> and all of <?php echo esc_html( $county ); ?>. Our crews are familiar with local building departments, permit offices, and <?php echo esc_html( $ahj ); ?> review requirements across the region.
            </p>
            <div class="location-map-meta">
              <div class="location-map-meta__item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                  <strong>Office</strong>
                  <span>3599 Scotland Drive, Antelope, CA 95843</span>
                </div>
              </div>
              <div class="location-map-meta__item">
                <i class="fa-solid fa-building-shield"></i>
                <div>
                  <strong>Authority Having Jurisdiction</strong>
                  <span><?php echo esc_html( $ahj ); ?></span>
                </div>
              </div>
              <div class="location-map-meta__item">
                <i class="fa-solid fa-clock"></i>
                <div>
                  <strong>Bid Turnaround</strong>
                  <span>Complete bids returned in 24–48 hours</span>
                </div>
              </div>
            </div>
            <a href="#contact-<?php echo esc_attr( $slug ); ?>" class="btn btn--primary" style="margin-top: 1.75rem; display: inline-flex;">
              <i class="fa-solid fa-file-lines"></i> Get a Bid for <?php echo esc_html( $name ); ?>
            </a>
          </div>
          <div class="location-map-embed">
            <?php
            $lat     = floatval( $loc['lat'] );
            $lng     = floatval( $loc['lng'] );
            $bbox    = round( $lng - 0.06, 6 ) . ',' . round( $lat - 0.045, 6 ) . ',' . round( $lng + 0.06, 6 ) . ',' . round( $lat + 0.045, 6 );
            $map_url = 'https://www.openstreetmap.org/export/embed.html?bbox=' . $bbox . '&amp;layer=mapnik&amp;marker=' . $lat . '%2C' . $lng;
            ?>
            <iframe
              src="<?php echo esc_url( rawurldecode( $map_url ) ); ?>"
              width="100%"
              height="420"
              loading="lazy"
              title="<?php echo esc_attr( $name ); ?> fire protection service area"
            ></iframe>
            <a
              href="https://www.openstreetmap.org/?mlat=<?php echo esc_attr( $lat ); ?>&mlon=<?php echo esc_attr( $lng ); ?>#map=13/<?php echo esc_attr( $lat ); ?>/<?php echo esc_attr( $lng ); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="location-map-credit"
            >View larger map</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== LOCAL REGULATIONS ========== -->
    <?php if ( ! empty( $loc['local_regulations'] ) ) : ?>
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Code &amp; Compliance</div>
          <h2 class="section-title">Local Fire Code in <span class="text-accent"><?php echo esc_html( $name ); ?></span></h2>
          <p class="section-desc">Key regulations and laws that govern fire protection system design, permitting, and inspection in <?php echo esc_html( $name ); ?> and <?php echo esc_html( $county ); ?>. Richardson is fully compliant with all applicable codes.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php foreach ( $loc['local_regulations'] as $reg ) : ?>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-scale-balanced"></i></div>
            <h3 class="service-card__title" style="font-size: 0.9rem;"><?php echo esc_html( $reg['code'] ); ?></h3>
            <p style="font-size: 0.75rem; color: var(--c-red); font-weight: 600; margin-bottom: 0.5rem;"><?php echo esc_html( $reg['authority'] ); ?></p>
            <p class="service-card__desc" style="font-size: 0.82rem;"><?php echo esc_html( $reg['summary'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- ========== FAQ (AEO) ========== -->
    <section class="section faq" id="faq-<?php echo esc_attr( $slug ); ?>">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">
            Fire Protection Questions for <span class="text-accent"><?php echo esc_html( $name ); ?></span>
          </h2>
          <p class="section-desc">Common questions from GCs and developers working in <?php echo esc_html( $name ); ?>.</p>
        </div>
        <div class="faq-list reveal-up">
          <?php foreach ( $loc['faqs'] as $faq ) : ?>
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

    <!-- ========== NEIGHBORHOODS ========== -->
    <?php if ( ! empty( $loc['neighborhoods'] ) ) : ?>
    <section class="section" style="background: var(--c-surface); padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.5rem;">
          <div class="section-badge">Areas We Serve</div>
          <h2 class="section-title"><?php echo esc_html( $name ); ?> <span class="text-accent">Neighborhoods &amp; Districts</span></h2>
          <p class="section-desc">Richardson Fire Protection serves GCs and developers across <?php echo esc_html( $name ); ?> — from major development corridors to neighborhood infill projects.</p>
        </div>
        <ul class="locations-strip__list reveal-up" style="justify-content: flex-start; flex-wrap: wrap; gap: 0.5rem;">
          <?php foreach ( $loc['neighborhoods'] as $n ) : ?>
            <li>
              <span style="display: inline-flex; align-items: center; gap: 0.4rem; padding: 0.35rem 0.85rem; background: var(--c-surface); border: 1px solid var(--c-border); border-radius: 999px; font-size: 0.82rem; color: var(--c-text-muted);">
                <i class="fa-solid fa-map-pin" style="color: var(--c-red); font-size: 0.7rem;"></i>
                <?php echo esc_html( $n ); ?>
              </span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <?php endif; ?>

    <!-- ========== NEARBY SERVICE AREAS ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.75rem;">
          <div class="section-badge">Also Serving</div>
          <h2 class="section-title">Nearby <span class="text-accent">Service Areas</span></h2>
        </div>
        <ul class="locations-strip__list reveal-up">
          <?php foreach ( $loc['nearby_cities'] as $nearby_slug ) :
              if ( ! isset( $all_locs[ $nearby_slug ] ) ) continue;
              $n = $all_locs[ $nearby_slug ]; ?>
            <li>
              <a href="<?php echo esc_url( home_url( '/locations/' . $n['slug'] . '/' ) ); ?>"
                 class="locations-strip__link">
                <i class="fa-solid fa-location-dot"></i>
                <?php echo esc_html( $n['name'] ); ?>
              </a>
            </li>
          <?php endforeach; ?>
          <li>
            <a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="locations-strip__link">
              <i class="fa-solid fa-map"></i> All Locations
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- ========== CONTACT FORM ========== -->
    <section class="section contact" id="contact-<?php echo esc_attr( $slug ); ?>">
      <div class="container contact-container">
        <div class="contact-info reveal-left">
          <div class="section-badge">Start a Project</div>
          <h2 class="section-title">
            Bid a Project in <span class="text-accent"><?php echo esc_html( $name ); ?></span>
          </h2>
          <p class="contact-lead">We serve <?php echo esc_html( $name ); ?> and all of <?php echo esc_html( $county ); ?>. Send your plans or call — bids returned in 24–48 hours.</p>
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
          </div>
        </div>
        <div class="contact-form-wrap reveal-right">
          <form class="contact-form" id="contactForm" novalidate>
            <?php wp_nonce_field( 'rfp_contact', 'rfp_nonce' ); ?>
            <input type="hidden" name="location_city" value="<?php echo esc_attr( $name ); ?>" />
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
              <span class="btn-text">Request a Bid in <?php echo esc_html( $name ); ?></span>
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
