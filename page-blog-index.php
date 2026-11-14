<?php
/**
 * Template Name: Blog & Resources
 * Template Post Type: page
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 42vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Fire Protection Resources
        </div>
        <h1 class="hero-title reveal-up">
          Fire Safety <span class="hero-title--accent">Knowledge Base</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Practical guides on NFPA standards, California fire code, and fire protection system requirements — written for developers, GCs, and facility managers.
        </p>
      </div>
    </section>

    <!-- ========== FEATURED ARTICLES ========== -->
    <section class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Expert Guides</div>
          <h2 class="section-title">Technical <span class="text-accent">Articles</span></h2>
          <p class="section-desc">In-depth guides on the codes and standards that govern fire protection in California.</p>
        </div>
        <div class="services-grid reveal-up">

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <div class="service-card__tag">Inspection &amp; Maintenance</div>
            <h3 class="service-card__title">NFPA 25: The Complete Inspection Guide</h3>
            <p class="service-card__desc">Everything California property owners need to know about fire sprinkler inspection frequency, SB 1205 licensing requirements, and what to expect during an annual NFPA 25 inspection.</p>
            <a href="<?php echo esc_url( home_url( '/nfpa-25-inspection-guide/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-building"></i></div>
            <div class="service-card__tag">Multifamily Fire Code</div>
            <h3 class="service-card__title">NFPA 13R vs. NFPA 13: Which Applies to Your Building?</h3>
            <p class="service-card__desc">A practical guide for developers and architects — when California requires NFPA 13R vs. full NFPA 13 for apartments, condos, and mixed-use residential projects.</p>
            <a href="<?php echo esc_url( home_url( '/nfpa-13r-vs-13-apartment-sprinklers/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
            <div class="service-card__tag">Warehouse Fire Code</div>
            <h3 class="service-card__title">High-Piled Storage Fire Code: What California Warehouses Must Know</h3>
            <p class="service-card__desc">CFC Chapter 32, commodity classification, ESFR vs. in-rack sprinklers, and the permit process for California high-piled storage facilities.</p>
            <a href="<?php echo esc_url( home_url( '/high-piled-storage-fire-code/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-book-open"></i></div>
            <div class="service-card__tag">Code Update 2025</div>
            <h3 class="service-card__title">California Fire Code 2025: Key Changes for Sacramento Valley Contractors</h3>
            <p class="service-card__desc">The 2022 CFC is in effect statewide — AHJ adoption varies. What changed for fire sprinklers, WUI construction, and warehouse protection.</p>
            <a href="<?php echo esc_url( home_url( '/ca-fire-code-2025/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-fire"></i></div>
            <div class="service-card__tag">Wildfire Zone Requirements</div>
            <h3 class="service-card__title">WUI Fire Sprinkler Requirements in California: Builders' Guide (2025)</h3>
            <p class="service-card__desc">SRA/LRA designation, CalFire Chapter 12, CBC Chapter 7A, and what builders and developers need to know about fire sprinklers in wildfire hazard zones.</p>
            <a href="<?php echo esc_url( home_url( '/wui-sprinklers/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-file-signature"></i></div>
            <div class="service-card__tag">Sacramento Permit Process</div>
            <h3 class="service-card__title">How to Get a Fire Sprinkler Permit in Sacramento: Step-by-Step (2025)</h3>
            <p class="service-card__desc">The SCFD Accela process, plan check timelines, common corrections, and how Richardson manages the entire permit process end-to-end.</p>
            <a href="<?php echo esc_url( home_url( '/permit-guide-sacramento/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
            <div class="service-card__tag">Warehouse Fire Protection</div>
            <h3 class="service-card__title">ESFR vs. In-Rack Sprinklers: Which Does Your California Warehouse Need?</h3>
            <p class="service-card__desc">K-factors, ceiling height requirements, commodity classification, cost comparison, and when NFPA 13 requires in-rack heads vs. ESFR ceiling-only systems.</p>
            <a href="<?php echo esc_url( home_url( '/esfr-vs-in-rack/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-book"></i></div>
            <div class="service-card__tag">NFPA Standards</div>
            <h3 class="service-card__title">What is NFPA 13? The Complete 2025 Guide</h3>
            <p class="service-card__desc">NFPA 13 governs commercial fire sprinkler design and installation across California. This guide explains requirements, occupancy classifications, hydraulic design, and how California AHJs adopt and amend it.</p>
            <a href="<?php echo esc_url( home_url( '/nfpa-13-fire-sprinkler-guide/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-water"></i></div>
            <div class="service-card__tag">System Fundamentals</div>
            <h3 class="service-card__title">How Does a Fire Sprinkler System Work?</h3>
            <p class="service-card__desc">The real answer — each head activates independently based on heat, not smoke. This guide explains how glass bulbs trigger activation, wet vs. dry pipe systems, water supply requirements, and NFPA 13 testing.</p>
            <a href="<?php echo esc_url( home_url( '/how-fire-sprinklers-work/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-gauge-high"></i></div>
            <div class="service-card__tag">Fire Pump Systems</div>
            <h3 class="service-card__title">Fire Pump Installation Guide: Sizing, Costs &amp; NFPA 20</h3>
            <p class="service-card__desc">When does a building require a fire pump? This guide covers NFPA 20 requirements, electric vs. diesel drivers, hydraulic sizing methodology, cost ranges, and Sacramento Valley AHJ permit timelines.</p>
            <a href="<?php echo esc_url( home_url( '/fire-pump-installation-guide/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-calendar-check"></i></div>
            <div class="service-card__tag">Project Planning</div>
            <h3 class="service-card__title">How Long Does Fire Sprinkler Installation Take?</h3>
            <p class="service-card__desc">From design to AHJ final inspection: real timelines for Sacramento, Roseville, Stockton, and every AHJ in our service area. Includes the permit review schedule, rough-in durations, and the most common causes of delay.</p>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-installation-timeline/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-hammer"></i></div>
            <div class="service-card__tag">Tenant Improvements</div>
            <h3 class="service-card__title">Fire Sprinkler Requirements for Tenant Improvements in California</h3>
            <p class="service-card__desc">When does a TI require new or modified sprinklers? Head relocation rules, occupied-building procedures, AHJ submittal requirements, and cost ranges for Sacramento Valley commercial TI projects.</p>
            <a href="<?php echo esc_url( home_url( '/tenant-improvement-fire-sprinklers/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-code-branch"></i></div>
            <div class="service-card__tag">System Design Guide</div>
            <h3 class="service-card__title">Wet Pipe vs. Dry Pipe Fire Sprinkler Systems: When to Use Each</h3>
            <p class="service-card__desc">When California code requires a dry-pipe system, how each type works, cost comparison, maintenance differences, and common mistakes. Essential for projects with freeze-exposed areas.</p>
            <a href="<?php echo esc_url( home_url( '/wet-pipe-vs-dry-pipe-sprinklers/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-utensils"></i></div>
            <div class="service-card__tag">Food Service Guide</div>
            <h3 class="service-card__title">Fire Sprinkler Requirements for California Restaurants</h3>
            <p class="service-card__desc">NFPA 13 hazard classification for dining and kitchen areas, coordination with Type I hood suppression, change-of-occupancy triggers, and high-temperature head requirements above cooking equipment.</p>
            <a href="<?php echo esc_url( home_url( '/restaurant-fire-sprinkler-requirements/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-city"></i></div>
            <div class="service-card__tag">Mixed-Use Development</div>
            <h3 class="service-card__title">Mixed-Use Building Fire Protection: California Developer's Guide</h3>
            <p class="service-card__desc">NFPA 13 vs. 13R zoning by occupancy, podium construction fire protection, occupancy separation, high-rise triggers, and design-build coordination for Sacramento mixed-use pipeline projects.</p>
            <a href="<?php echo esc_url( home_url( '/mixed-use-fire-protection/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-house"></i></div>
            <div class="service-card__tag">Residential Construction</div>
            <h3 class="service-card__title">NFPA 13D Fire Sprinklers for California Homes: Builder's Guide</h3>
            <p class="service-card__desc">California's statewide residential sprinkler mandate, how NFPA 13D differs from NFPA 13, water supply requirements, common builder questions, and cost benchmarks for new single-family construction.</p>
            <a href="<?php echo esc_url( home_url( '/nfpa-13d-residential-fire-sprinklers/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-dollar-sign"></i></div>
            <div class="service-card__tag">Cost &amp; Pricing</div>
            <h3 class="service-card__title">Fire Sprinkler Inspection Cost Guide: California 2026</h3>
            <p class="service-card__desc">Inspection pricing by building type and size, what's included vs. extra, 5-year internal inspection costs, fire pump testing fees, and how to compare quotes and verify contractor credentials.</p>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-inspection-cost/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-hard-hat"></i></div>
            <div class="service-card__tag">GC Project Management</div>
            <h3 class="service-card__title">Ground-Up Commercial Construction: Fire Sprinkler Coordination Guide for GCs</h3>
            <p class="service-card__desc">When to hire the fire sprinkler sub, AHJ submittal timelines by Sacramento Valley city, rough-in coordination, inspection sequence, and the most common causes of fire sprinkler schedule delay on commercial projects.</p>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-coordination-guide/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-server"></i></div>
            <div class="service-card__tag">Specialized Systems</div>
            <h3 class="service-card__title">Pre-Action Fire Sprinkler Systems: When Are They Required?</h3>
            <p class="service-card__desc">Single vs. double-interlock pre-action systems, when California facilities (data centers, cold storage, museums) specify pre-action, NFPA 13 requirements, and cost premium vs. wet-pipe systems.</p>
            <a href="<?php echo esc_url( home_url( '/pre-action-fire-sprinkler-systems/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-faucet"></i></div>
            <div class="service-card__tag">System Maintenance</div>
            <h3 class="service-card__title">Fire Sprinkler Backflow Preventer: Testing, Requirements &amp; Costs</h3>
            <p class="service-card__desc">Why every California fire sprinkler system requires a backflow preventer, RPZ vs. DCVA, annual testing requirements, water district reporting, failure consequences, and replacement cost ranges.</p>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-backflow-preventer/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <div class="service-card__tag">GC Reference Guide</div>
            <h3 class="service-card__title">How to Read Fire Sprinkler Shop Drawings: A Guide for GCs</h3>
            <p class="service-card__desc">Fire sprinkler shop drawing package explained — head symbols, pipe sizing notation, hydraulic calculation sheets, seismic bracing requirements, and the common submittal errors that delay permit approval.</p>
            <a href="<?php echo esc_url( home_url( '/fire-sprinkler-shop-drawings/' ) ); ?>" class="service-card__link">
              Read Guide <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

        </div>
      </div>
    </section>

    <?php
    $rfp_blog_posts = get_posts( [ 'numberposts' => 6, 'post_status' => 'publish' ] );
    if ( $rfp_blog_posts ) : ?>
    <!-- ========== LATEST POSTS ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Latest Posts</div>
          <h2 class="section-title">From the <span class="text-accent">Blog</span></h2>
        </div>
        <div class="services-grid reveal-up">
          <?php foreach ( $rfp_blog_posts as $rfp_post ) : ?>
          <div class="service-card">
            <h3 class="service-card__title"><?php echo esc_html( get_the_title( $rfp_post ) ); ?></h3>
            <p class="service-card__desc"><?php echo esc_html( get_the_excerpt( $rfp_post ) ); ?></p>
            <a href="<?php echo esc_url( get_permalink( $rfp_post ) ); ?>" class="service-card__link">
              Read More <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Have a Fire Protection Question?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Our NICET-certified team answers code and design questions at no charge. Call us or send your plans.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
             class="btn btn--lg" style="background: #fff; color: var(--c-red); border-color: #fff;">
            Request a Consultation
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>
<?php get_footer(); ?>
