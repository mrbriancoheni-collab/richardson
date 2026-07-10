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
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
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
