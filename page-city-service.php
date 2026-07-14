<?php
/**
 * Template Name: City + Service
 * Template Post Type: page
 *
 * Auto-applied to pages whose parent is a city page (sacramento, roseville, etc.)
 * and whose own slug is commercial, industrial, or residential.
 *
 * URL pattern:  /{city}/{service}/
 * Example:      /sacramento/commercial/
 */
get_header();

$post         = get_queried_object();
$service_slug = $post->post_name;
$parent       = get_post( $post->post_parent );
$city_slug    = $parent ? $parent->post_name : '';
$loc          = rfp_location_data( $city_slug );

$valid_slugs = [ 'commercial', 'industrial', 'residential', 'fire-pump-design', 'fire-pump-installation', 'fire-pump-repair', 'fire-pump-testing' ];

// Graceful fallback if data is missing
if ( ! $loc || ! in_array( $service_slug, $valid_slugs, true ) ) {
    wp_redirect( home_url( '/services/' ) );
    exit;
}

$name   = $loc['name'];
$county = $loc['county'];
$ahj    = $loc['ahj_name'];

// ─── Service-specific content ───────────────────────────────────────────────
$services = [
    'commercial' => [
        'label'    => 'Commercial',
        'icon'     => 'fa-solid fa-building',
        'h1_mid'   => 'Commercial Fire <span class="hero-title--accent">Protection</span>',
        'badge'    => 'Commercial Fire Sprinkler Sub',
        'tagline'  => 'NFPA 13 design-build for offices, retail, restaurants, mixed-use, and tenant improvements. AHJ coordination and permit submittal included.',
        'page_url' => '/commercial/',
        'page_label' => 'Commercial Fire Protection',
        'code'     => 'NFPA 13',
        'features' => [
            [ 'fa-solid fa-building',         'Office & Retail',         'Wet-pipe systems, ordinary hazard design, quick-response heads for office parks and retail centers.' ],
            [ 'fa-solid fa-utensils',          'Restaurant & Hospitality','Hood suppression, kitchen systems, and full NFPA 13 compliance for food service occupancies.' ],
            [ 'fa-solid fa-city',              'Mixed-Use & High-Rise',   'Multi-story NFPA 13 systems with CBC 403 high-rise compliance, standpipe integration, and zoned control.' ],
            [ 'fa-solid fa-screwdriver-wrench','Tenant Improvements',     'TI retrofits in occupied buildings — off-hours work available. Permit pull to AHJ final in a single scope.' ],
        ],
    ],
    'industrial' => [
        'label'    => 'Industrial',
        'icon'     => 'fa-solid fa-warehouse',
        'h1_mid'   => 'Industrial Fire <span class="hero-title--accent">Protection</span>',
        'badge'    => 'Industrial & Warehouse Fire Sprinkler Sub',
        'tagline'  => 'ESFR, in-rack, and high-piled storage fire protection for warehouses, distribution centers, cold storage, and manufacturing in ' . $name . '.',
        'page_url' => '/industrial/',
        'page_label' => 'Industrial Fire Protection',
        'code'     => 'NFPA 13 / ESFR',
        'features' => [
            [ 'fa-solid fa-warehouse',    'ESFR High-Bay',          'Early Suppression Fast Response systems for high-bay warehouses — approved per NFPA 13 Chapter 16 and commodity classification analysis.' ],
            [ 'fa-solid fa-boxes-stacked','In-Rack Sprinklers',     'In-rack systems for high-piled storage exceeding 12 ft — designed to NFPA 13 and California Fire Code Chapter 32 requirements.' ],
            [ 'fa-solid fa-snowflake',    'Cold Storage Dry-Pipe',  'Dry-pipe systems for refrigerated warehouses and freezer vaults — freeze-resistant design with accelerator valves.' ],
            [ 'fa-solid fa-industry',     'Manufacturing',          'Ordinary and extra hazard systems for manufacturing, fabrication, and assembly facilities with process-area hazard mapping.' ],
        ],
    ],
    'residential' => [
        'label'    => 'Residential',
        'icon'     => 'fa-solid fa-building-user',
        'h1_mid'   => 'Residential Fire <span class="hero-title--accent">Protection</span>',
        'badge'    => 'Multifamily & Residential Fire Sprinkler Sub',
        'tagline'  => 'NFPA 13R apartment systems and NFPA 13D single-family systems for multifamily developers and homebuilders in ' . $name . '.',
        'page_url' => '/residential/',
        'page_label' => 'Residential Fire Protection',
        'code'     => 'NFPA 13R / 13D',
        'features' => [
            [ 'fa-solid fa-building-user', 'NFPA 13R Apartments',    'Four-stories-or-fewer multifamily systems — cost-effective concealed heads, balcony protection, and garage coverage per 13R scope.' ],
            [ 'fa-solid fa-house',         'NFPA 13D Single-Family', 'Residential one- and two-family dwelling systems. Required by many California jurisdictions for all new construction.' ],
            [ 'fa-solid fa-fire-extinguisher','WUI Fire Hardening',  'Wildland-Urban Interface compliance — defensible-space sprinkler requirements for homes in CalFire State Responsibility Areas.' ],
            [ 'fa-solid fa-wrench',        'Occupied Retrofits',     'Retrofit sprinkler systems into occupied apartment buildings — phased work plans, off-hours scheduling, and minimal tenant disruption.' ],
        ],
    ],
    'fire-pump-design' => [
        'label'      => 'Fire Pump Design',
        'icon'       => 'fa-solid fa-drafting-compass',
        'h1_mid'     => 'Fire Pump <span class="hero-title--accent">Design</span>',
        'badge'      => 'Fire Pump Design Specialists',
        'tagline'    => 'NFPA 20 hydraulic analysis, pump sizing, and engineered specifications for new construction and system upgrades in ' . $name . '.',
        'page_url'   => '/fire-pump/',
        'page_label' => 'Fire Pump Services',
        'code'       => 'NFPA 20',
        'features'   => [
            [ 'fa-solid fa-calculator',   'Hydraulic Demand Analysis', 'We calculate system water demand to right-size the pump for your building\'s fire protection needs and available municipal supply.' ],
            [ 'fa-solid fa-sliders',      'Pump Sizing & Selection',   'Electric-drive or diesel-drive; horizontal split-case, vertical turbine, or end-suction — we specify the correct pump type and rating.' ],
            [ 'fa-solid fa-bolt',         'Electric / Diesel Drive',   'NFPA 20-compliant design for both electric motor-driven and diesel engine-driven fire pump assemblies, including jockey pump sizing.' ],
            [ 'fa-solid fa-gauge-high',   'Controller & Alarm Specs',  'Fire pump controller specifications, transfer switch coordination, alarm wiring diagrams, and weekly test timer requirements per NFPA 20.' ],
        ],
    ],
    'fire-pump-installation' => [
        'label'      => 'Fire Pump Installation',
        'icon'       => 'fa-solid fa-screwdriver-wrench',
        'h1_mid'     => 'Fire Pump <span class="hero-title--accent">Installation</span>',
        'badge'      => 'Fire Pump Installation Contractor',
        'tagline'    => 'Complete NFPA 20 fire pump assembly installation — electric-drive, diesel engine-drive, and vertical turbine pumps — coordinated with ' . $ahj . '.',
        'page_url'   => '/fire-pump/',
        'page_label' => 'Fire Pump Services',
        'code'       => 'NFPA 20',
        'features'   => [
            [ 'fa-solid fa-bolt',              'Electric-Drive Pump Sets',  'Electric motor-driven fire pump assemblies — horizontal split-case and end-suction — fully listed, NFPA 20 compliant, and AHJ-submitted.' ],
            [ 'fa-solid fa-oil-can',           'Diesel Engine-Drive Pumps', 'Diesel-engine fire pump installations for facilities requiring a secondary power source independent of utility power.' ],
            [ 'fa-solid fa-arrow-up-from-water','Vertical Turbine Pumps',   'VTP installations for sites drawing from underground cisterns, ponds, or tanks where submersible pump placement is required.' ],
            [ 'fa-solid fa-microchip',         'Controller & Commissioning','Controller installation, ATS coordination, supervisory alarm wiring, and full commissioning tests per NFPA 20 Section 14.' ],
        ],
    ],
    'fire-pump-repair' => [
        'label'      => 'Fire Pump Repair',
        'icon'       => 'fa-solid fa-toolbox',
        'h1_mid'     => 'Fire Pump <span class="hero-title--accent">Repair</span>',
        'badge'      => 'Fire Pump Repair & Emergency Service',
        'tagline'    => '24/7 emergency and scheduled fire pump repair in ' . $name . ' — impeller, seal, controller, and piping — with written reports for ' . $ahj . ' and your insurer.',
        'page_url'   => '/fire-pump/',
        'page_label' => 'Fire Pump Services',
        'code'       => 'NFPA 25',
        'features'   => [
            [ 'fa-solid fa-gear',         'Impeller & Seal Replacement', 'Impeller wear-ring replacement, mechanical seal repair, and bearing replacement to restore rated pump performance and NFPA 25 compliance.' ],
            [ 'fa-solid fa-microchip',    'Controller Troubleshooting',  'Diagnose and repair controller failures, pressure switch faults, transfer switch malfunctions, and supervisory alarm faults.' ],
            [ 'fa-solid fa-pipe-section', 'Suction & Discharge Piping',  'Repair or replace suction and discharge piping, isolation valves, check valves, and pressure relief valves per NFPA 20 specifications.' ],
            [ 'fa-solid fa-phone-volume', '24/7 Emergency Response',     'Pump failures trigger AHJ notification and fire watch requirements. Richardson responds around the clock to restore your system.' ],
        ],
    ],
    'fire-pump-testing' => [
        'label'      => 'Fire Pump Testing',
        'icon'       => 'fa-solid fa-gauge-high',
        'h1_mid'     => 'Fire Pump <span class="hero-title--accent">Testing</span>',
        'badge'      => 'NFPA 25 Fire Pump Testing',
        'tagline'    => 'Annual NFPA 25 fire pump performance tests, acceptance tests, and certified flow curves — accepted by ' . $ahj . ' and your property insurer.',
        'page_url'   => '/fire-pump/',
        'page_label' => 'Fire Pump Services',
        'code'       => 'NFPA 25',
        'features'   => [
            [ 'fa-solid fa-chart-line',  'Annual Performance Testing', 'Full NFPA 25 Chapter 8 annual test — churn, rated flow, and peak load — producing a certified pump curve and written test report.' ],
            [ 'fa-solid fa-circle-check','Acceptance Testing',         'New installation acceptance tests per NFPA 20: full-flow performance, controller verification, and transfer switch test.' ],
            [ 'fa-solid fa-chart-area',  'Pressure Flow Curves',       'Electronic pump curve documentation showing churn pressure, rated capacity, and shut-off — required by FM Global and most insurers.' ],
            [ 'fa-solid fa-file-lines',  'Written NFPA 25 Reports',    'Detailed written reports accepted by ' . $ahj . ', insurance carriers, and FM Global — delivered within 5 business days of test.' ],
        ],
    ],
];

$svc        = $services[ $service_slug ];
$all_locs   = rfp_all_locations();

// Split services into two groups for the "Other Services" section.
$sector_slugs = [ 'commercial', 'industrial', 'residential' ];
$fp_slugs     = [ 'fire-pump-design', 'fire-pump-installation', 'fire-pump-repair', 'fire-pump-testing' ];
$is_fp_page   = in_array( $service_slug, $fp_slugs, true );

// Append city-specific AHJ coordination note as a 5th feature card on fire pump pages.
if ( $is_fp_page && ! empty( $loc['fire_pump_note'] ) ) {
    $svc['features'][] = [ 'fa-solid fa-building-shield', esc_html( $loc['ahj_name'] ) . ' Coordination', $loc['fire_pump_note'] ];
}

// Sibling services = same group minus current
$sibling_svcs = array_filter(
    $services,
    function( $k ) use ( $service_slug, $is_fp_page, $sector_slugs, $fp_slugs ) {
        if ( $k === $service_slug ) return false;
        return $is_fp_page
            ? in_array( $k, $fp_slugs, true )
            : in_array( $k, $sector_slugs, true );
    },
    ARRAY_FILTER_USE_KEY
);
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
          <?php echo esc_html( $svc['badge'] ); ?> &mdash; <?php echo esc_html( $name ); ?>, <?php echo esc_html( $county ); ?>
        </div>
        <h1 class="hero-title reveal-up">
          <?php echo $name; ?> <?php echo $svc['h1_mid']; ?>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          <?php echo esc_html( $svc['tagline'] ); ?> Coordinated directly with <?php echo esc_html( $ahj ); ?>.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#contact-<?php echo esc_attr( $city_slug ); ?>-<?php echo esc_attr( $service_slug ); ?>" class="btn btn--ghost btn--lg">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

    <!-- ========== BREADCRUMB / CONTEXT ========== -->
    <section class="section" style="padding-top: 2rem; padding-bottom: 0; background: var(--c-surface);">
      <div class="container" style="font-size: 0.83rem; color: var(--c-text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: var(--c-text-muted);">Home</a>
        <span style="margin: 0 0.4rem;">/</span>
        <a href="<?php echo esc_url( get_permalink( $parent->ID ) ); ?>" style="color: var(--c-text-muted);"><?php echo esc_html( $name ); ?></a>
        <span style="margin: 0 0.4rem;">/</span>
        <span style="color: var(--c-white);"><?php echo esc_html( $svc['label'] ); ?></span>
      </div>
    </section>

    <!-- ========== INTRO ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 2.5rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 860px;">
        <div class="section-badge reveal-up"><?php echo esc_html( $svc['label'] ); ?> in <?php echo esc_html( $name ); ?></div>
        <h2 class="section-title reveal-up">
          <?php echo esc_html( $svc['code'] ); ?> Systems in <span class="text-accent"><?php echo esc_html( $name ); ?></span>
        </h2>
        <p class="reveal-up" style="font-size: 1.05rem; line-height: 1.85; color: var(--c-text); margin-bottom: 1.5rem;">
          Richardson Fire Protection is <?php echo esc_html( $name ); ?>'s preferred fire sprinkler sub for <?php echo esc_html( strtolower( $svc['label'] ) ); ?> projects.
          We handle every phase — <?php echo esc_html( $svc['code'] ); ?> system design, hydraulic calculations, permit submittal to <?php echo esc_html( $ahj ); ?>, and all field phases through AHJ final and certificate of occupancy.
        </p>
        <div class="reveal-up" style="background: var(--c-bg); border: 1px solid var(--c-border); border-left: 3px solid var(--c-red); border-radius: var(--r-md); padding: 1.25rem 1.5rem;">
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

    <!-- ========== SERVICE FEATURES ========== -->
    <section class="section" style="padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">What's Included</div>
          <h2 class="section-title"><?php echo esc_html( $svc['label'] ); ?> Systems We Install in <span class="text-accent"><?php echo esc_html( $name ); ?></span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php foreach ( $svc['features'] as $feat ) : ?>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="<?php echo esc_attr( $feat[0] ); ?>"></i></div>
            <h3 class="service-card__title"><?php echo esc_html( $feat[1] ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $feat[2] ); ?></p>
          </div>
          <?php endforeach; ?>

          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-file-lines"></i></div>
            <h3 class="service-card__title">Permit &amp; AHJ Coordination</h3>
            <p class="service-card__desc">We pull permits and submit to <?php echo esc_html( $ahj ); ?> — you don't chase the fire department.</p>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-calendar-check"></i></div>
            <h3 class="service-card__title">Schedule-Driven</h3>
            <p class="service-card__desc">We commit to your rough-in, above-ceiling, and trim-out milestones — no vague availability windows.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== WHY RICHARDSON ========== -->
    <section class="section" style="background: var(--c-black); color: #fff; padding-top: 4rem; padding-bottom: 4rem;">
      <div class="container">
        <div class="section-header reveal-up" style="text-align: left; max-width: 100%; margin-bottom: 2.5rem;">
          <div class="section-badge">Local Expertise</div>
          <h2 class="section-title" style="color: #fff;">
            Why <?php echo esc_html( $name ); ?> GCs Choose <span class="text-accent">Richardson</span>
          </h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $reasons = [
            [ 'fa-solid fa-map-location-dot', 'We Know ' . $name,     'Richardson has completed ' . esc_html( strtolower( $svc['label'] ) ) . ' projects in ' . $county . ' and has working relationships with ' . $ahj . ' plan review staff.' ],
            [ 'fa-solid fa-file-lines',        '24–48 hr Bids',        'Send your plans and get a complete, priced ' . esc_html( strtolower( $svc['label'] ) ) . ' bid in 24–48 hours — ready for your budget and owner.' ],
            [ 'fa-solid fa-drafting-compass',  'Design-Build Turnkey', $svc['code'] . ' design, stamped drawings, permit submittal to ' . $ahj . ', and all field phases — one sub.' ],
            [ 'fa-solid fa-calendar-check',    'Schedule-Driven',      'We sync with your construction schedule and commit to rough-in, above-ceiling, and trim-out milestones.' ],
            [ 'fa-solid fa-circle-check',      'First-Pass AHJ Final', 'We coordinate the final inspection with ' . $ahj . ' and pass on the first attempt — no CO delays.' ],
            [ 'fa-solid fa-handshake',         'Direct Owner Contact', 'Family-owned. Every GC gets a direct line to the owner — not a dispatcher or a call center.' ],
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

    <!-- ========== OTHER SERVICES IN THIS CITY ========== -->
    <section class="section" style="padding-top: 3.5rem; padding-bottom: 3.5rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">More in <?php echo esc_html( $name ); ?></div>
          <h2 class="section-title">
            <?php echo $is_fp_page ? 'Other Fire Pump Services in' : 'Other Services in'; ?>
            <span class="text-accent"><?php echo esc_html( $name ); ?></span>
          </h2>
        </div>
        <div class="services-grid reveal-up">
          <?php foreach ( $sibling_svcs as $slug => $s ) : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="<?php echo esc_attr( $s['icon'] ); ?>"></i></div>
            <div class="service-card__tag"><?php echo esc_html( $s['label'] ); ?></div>
            <h3 class="service-card__title"><?php echo esc_html( $s['label'] ); ?> in <?php echo esc_html( $name ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( $s['tagline'] ); ?></p>
            <a href="<?php echo esc_url( get_permalink( $parent->ID ) . $slug . '/' ); ?>" class="service-card__link">
              <?php echo esc_html( $s['label'] ); ?> in <?php echo esc_html( $name ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <?php endforeach; ?>

          <?php if ( $is_fp_page ) : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div class="service-card__tag">All Sectors</div>
            <h3 class="service-card__title">Sprinkler Systems in <?php echo esc_html( $name ); ?></h3>
            <p class="service-card__desc">Richardson also installs NFPA 13 commercial, ESFR industrial, and NFPA 13R multifamily sprinkler systems throughout <?php echo esc_html( $name ); ?>.</p>
            <a href="<?php echo esc_url( get_permalink( $parent->ID ) ); ?>" class="service-card__link">
              All <?php echo esc_html( $name ); ?> Services <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <?php else : ?>
          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <div class="service-card__tag">Fire Pump Services</div>
            <h3 class="service-card__title">Fire Pump Services in <?php echo esc_html( $name ); ?></h3>
            <p class="service-card__desc">Richardson also provides NFPA 20 fire pump design, installation, 24/7 repair, and annual NFPA 25 performance testing in <?php echo esc_html( $name ); ?>.</p>
            <a href="<?php echo esc_url( get_permalink( $parent->ID ) . 'fire-pump-design/' ); ?>" class="service-card__link">
              Fire Pump Services in <?php echo esc_html( $name ); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <?php endif; ?>
        </div>
        <p style="text-align: center; margin-top: 1.5rem;">
          <a href="<?php echo esc_url( get_permalink( $parent->ID ) ); ?>" class="btn btn--ghost">
            <i class="fa-solid fa-location-dot"></i> All <?php echo esc_html( $name ); ?> Fire Protection Services
          </a>
          &nbsp;
          <a href="<?php echo esc_url( home_url( $svc['page_url'] ) ); ?>" class="btn btn--ghost">
            <i class="<?php echo esc_attr( $svc['icon'] ); ?>"></i> <?php echo esc_html( $svc['page_label'] ); ?> (All Cities)
          </a>
        </p>
      </div>
    </section>

    <!-- ========== SAME SERVICE IN OTHER CITIES ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.75rem;">
          <div class="section-badge">Also Serving</div>
          <h2 class="section-title"><?php echo esc_html( $svc['label'] ); ?> Fire Protection <span class="text-accent">Near <?php echo esc_html( $name ); ?></span></h2>
        </div>
        <ul class="locations-strip__list reveal-up">
          <?php foreach ( $loc['nearby_cities'] as $nearby_slug ) :
              if ( ! isset( $all_locs[ $nearby_slug ] ) ) continue;
              $n = $all_locs[ $nearby_slug ];
              $nearby_page = get_page_by_path( $nearby_slug );
              if ( ! $nearby_page ) continue;
              $nearby_url = get_permalink( $nearby_page->ID ) . $service_slug . '/';
              ?>
            <li>
              <a href="<?php echo esc_url( $nearby_url ); ?>" class="locations-strip__link">
                <i class="fa-solid fa-location-dot"></i>
                <?php echo esc_html( $svc['label'] ); ?> in <?php echo esc_html( $n['name'] ); ?>
              </a>
            </li>
          <?php endforeach; ?>
          <li>
            <a href="<?php echo esc_url( home_url( $svc['page_url'] ) ); ?>" class="locations-strip__link">
              <i class="<?php echo esc_attr( $svc['icon'] ); ?>"></i> All <?php echo esc_html( $svc['label'] ); ?> Services
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">
            <?php echo esc_html( $svc['label'] ); ?> Questions for <span class="text-accent"><?php echo esc_html( $name ); ?></span>
          </h2>
          <p class="section-desc">Common questions from GCs and developers on <?php echo esc_html( strtolower( $svc['label'] ) ); ?> projects in <?php echo esc_html( $name ); ?>.</p>
        </div>
        <div class="faq-list reveal-up">
          <?php
          // Use fire-pump-specific FAQs on pump pages; fall back to general city FAQs on sector pages.
          $faqs = ( $is_fp_page && ! empty( $loc['fire_pump_faqs'] ) ) ? $loc['fire_pump_faqs'] : $loc['faqs'];
          foreach ( array_slice( $faqs, 0, 5 ) as $faq ) : ?>
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
    <section class="section contact" id="contact-<?php echo esc_attr( $city_slug ); ?>-<?php echo esc_attr( $service_slug ); ?>">
      <div class="container contact-container">
        <div class="contact-info reveal-left">
          <div class="section-badge">Start a Project</div>
          <h2 class="section-title">
            Bid a <?php echo esc_html( $svc['label'] ); ?> Project in <span class="text-accent"><?php echo esc_html( $name ); ?></span>
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
            <input type="hidden" name="service_type_preset" value="<?php echo esc_attr( $service_slug ); ?>" />
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
                <option value="commercial"             <?php selected( $service_slug, 'commercial' ); ?>>Commercial Fire Protection</option>
                <option value="industrial"             <?php selected( $service_slug, 'industrial' ); ?>>Industrial Systems</option>
                <option value="residential"            <?php selected( $service_slug, 'residential' ); ?>>Multifamily / Apartment Complex</option>
                <option value="fire-pump-design"       <?php selected( $service_slug, 'fire-pump-design' ); ?>>Fire Pump Design</option>
                <option value="fire-pump-installation" <?php selected( $service_slug, 'fire-pump-installation' ); ?>>Fire Pump Installation</option>
                <option value="fire-pump-repair"       <?php selected( $service_slug, 'fire-pump-repair' ); ?>>Fire Pump Repair</option>
                <option value="fire-pump-testing"      <?php selected( $service_slug, 'fire-pump-testing' ); ?>>Fire Pump Testing (NFPA 25)</option>
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
