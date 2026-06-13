<?php
/**
 * Template Name: Project Portfolio
 * Template Post Type: page
 *
 * Completed project case studies — assign to a page with slug "portfolio".
 */
get_header();

$projects = [
    [
        'city'    => 'Sacramento',
        'slug'    => 'sacramento',
        'type'    => 'Mixed-Use',
        'label'   => 'Mixed-Use Development — Natomas, Sacramento',
        'scope'   => '6-story mixed-use building, 112 residential units above ground-floor retail. NFPA 13R sprinkler system design-build, NFPA 72 fire alarm, AHJ final coordination with Sacramento City Fire Department.',
        'sf'      => '94,000 sq ft',
        'system'  => 'NFPA 13R + NFPA 72',
        'weeks'   => '14',
        'result'  => 'First-pass AHJ final. Certificate of occupancy issued on the developer\'s target date.',
        'icon'    => 'fa-solid fa-building',
    ],
    [
        'city'    => 'Stockton',
        'slug'    => 'stockton',
        'type'    => 'High-Bay Warehouse',
        'label'   => 'E-Commerce Fulfillment Center — I-5 Corridor, Stockton',
        'scope'   => 'New 450,000 sq ft tilt-up fulfillment center with high-piled mixed-commodity storage. ESFR K-25 ceiling sprinkler system, in-rack supplemental, complete commodity analysis and storage design documentation for Stockton Fire Department.',
        'sf'      => '450,000 sq ft',
        'system'  => 'NFPA 13 ESFR + In-Rack',
        'weeks'   => '18',
        'result'  => 'Zero correction cycles on plan check. First-pass SFD final inspection. On-schedule tenant occupancy.',
        'icon'    => 'fa-solid fa-warehouse',
    ],
    [
        'city'    => 'Roseville',
        'slug'    => 'roseville',
        'type'    => 'Medical Office',
        'label'   => 'Medical Office Campus — Blue Oaks Corridor, Roseville',
        'scope'   => 'Three-building medical office campus with ambulatory surgery center, imaging suite, and general office. NFPA 13 quick-response sprinklers, NFPA 72 addressable fire alarm with emergency voice/alarm, and NFPA 25 inspection program.',
        'sf'      => '62,000 sq ft',
        'system'  => 'NFPA 13 + NFPA 72 EVAC',
        'weeks'   => '16',
        'result'  => 'Coordinated with Roseville Fire and state HCAI reviewers simultaneously. CO issued 3 days ahead of opening.',
        'icon'    => 'fa-solid fa-hospital',
    ],
    [
        'city'    => 'Rocklin',
        'slug'    => 'rocklin',
        'type'    => 'Tech Campus',
        'label'   => 'Corporate Tech Campus — Stanford Ranch, Rocklin',
        'scope'   => 'Two-phase office campus: 4 buildings totaling 180,000 sq ft. Phase 1 NFPA 13 ordinary hazard wet-pipe with clean agent suppression for server rooms. Phase 2 added pre-action data center protection and expanded fire alarm.',
        'sf'      => '180,000 sq ft',
        'system'  => 'NFPA 13 + Clean Agent + Pre-Action',
        'weeks'   => '22 (2 phases)',
        'result'  => 'Single permit package across both phases. Rocklin Fire approved first submittal. No punch list items at final.',
        'icon'    => 'fa-solid fa-microchip',
    ],
    [
        'city'    => 'Fairfield',
        'slug'    => 'fairfield',
        'type'    => 'Logistics & Distribution',
        'label'   => 'Cold-Chain Distribution Center — North Fairfield',
        'scope'   => 'Refrigerated distribution facility with dry-pipe and pre-action zones for sub-freezing areas. Full commodity analysis, double-interlock pre-action system design, and Fairfield FD permit coordination.',
        'sf'      => '280,000 sq ft',
        'system'  => 'NFPA 13 Dry-Pipe + Pre-Action',
        'weeks'   => '20',
        'result'  => 'Complex dual-AHJ coordination (Fairfield FD + facility engineer). Certificate issued on schedule.',
        'icon'    => 'fa-solid fa-snowflake',
    ],
    [
        'city'    => 'Yuba City',
        'slug'    => 'yuba-city',
        'type'    => 'Multifamily',
        'label'   => 'Affordable Multifamily Community — Yuba City',
        'scope'   => '4-building, 128-unit affordable housing community. NFPA 13R sprinkler systems across all residential buildings, common areas, and parking structure. Yuba City Fire and Sutter County permit coordination.',
        'sf'      => '110,000 sq ft',
        'system'  => 'NFPA 13R Multifamily',
        'weeks'   => '12',
        'result'  => 'First-pass AHJ final across all four buildings. Project completed 2 weeks ahead of construction schedule.',
        'icon'    => 'fa-solid fa-people-roof',
    ],
    [
        'city'    => 'Davis',
        'slug'    => 'davis',
        'type'    => 'Research Laboratory',
        'label'   => 'Biotech Research Building — East Davis Research Park',
        'scope'   => 'Three-story research laboratory with BSL-2 zones, chemical storage rooms, and standard office areas. NFPA 13 wet-pipe for offices, pre-action for lab areas, and clean agent suppression for specialized equipment rooms. Parallel review with Davis FD and UC Davis EH&S.',
        'sf'      => '48,000 sq ft',
        'system'  => 'NFPA 13 + Pre-Action + Clean Agent',
        'weeks'   => '18',
        'result'  => 'Managed simultaneous Davis FD and UC EH&S review tracks without schedule conflict. First-pass final on all systems.',
        'icon'    => 'fa-solid fa-flask',
    ],
    [
        'city'    => 'Sacramento',
        'slug'    => 'sacramento',
        'type'    => 'Adaptive Reuse',
        'label'   => 'Historic Warehouse Adaptive Reuse — Midtown Sacramento',
        'scope'   => 'Conversion of 1920s brick warehouse to creative office and event space. NFPA 13 wet-pipe system designed to avoid structural attachment to historic timber framing. Coordinated with SCFD and State Historic Preservation Office for code-compliant, non-intrusive installation.',
        'sf'      => '38,000 sq ft',
        'system'  => 'NFPA 13 Wet-Pipe',
        'weeks'   => '10',
        'result'  => 'Zero damage to historic structure. SCFD approved on first submittal. Project recognized by developer as best-coordinated sub.',
        'icon'    => 'fa-solid fa-landmark',
    ],
];
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
          Fire Sprinkler Contractor — Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          Completed <span class="hero-title--accent">Projects</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection has completed hundreds of fire sprinkler projects across Sacramento Valley. Below are a sample of representative projects across our seven service markets.
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

    <!-- ========== PORTFOLIO GRID ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Case Studies</div>
          <h2 class="section-title">Representative <span class="text-accent">Projects</span></h2>
          <p class="section-desc">Project details are representative of completed scopes. Specific addresses are omitted per client confidentiality.</p>
        </div>
        <div class="portfolio-grid reveal-up">
          <?php foreach ( $projects as $p ) : ?>
            <div class="portfolio-card">
              <div class="portfolio-card__header">
                <div class="portfolio-card__icon"><i class="<?php echo esc_attr( $p['icon'] ); ?>"></i></div>
                <div class="portfolio-card__meta">
                  <span class="portfolio-card__type"><?php echo esc_html( $p['type'] ); ?></span>
                  <span class="portfolio-card__city">
                    <a href="<?php echo esc_url( home_url( '/locations/' . $p['slug'] . '/' ) ); ?>">
                      <?php echo esc_html( $p['city'] ); ?>
                    </a>
                  </span>
                </div>
              </div>
              <h3 class="portfolio-card__title"><?php echo esc_html( $p['label'] ); ?></h3>
              <p class="portfolio-card__scope"><?php echo esc_html( $p['scope'] ); ?></p>
              <ul class="portfolio-card__stats">
                <li><i class="fa-solid fa-ruler-combined"></i> <?php echo esc_html( $p['sf'] ); ?></li>
                <li><i class="fa-solid fa-fire-extinguisher"></i> <?php echo esc_html( $p['system'] ); ?></li>
                <li><i class="fa-solid fa-calendar"></i> <?php echo esc_html( $p['weeks'] ); ?> weeks install</li>
              </ul>
              <div class="portfolio-card__result">
                <i class="fa-solid fa-circle-check"></i>
                <?php echo esc_html( $p['result'] ); ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Your Project, Our Next Case Study
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Send your plans and we'll return a complete bid in 24–48 hours.
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
