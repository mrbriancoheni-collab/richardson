<?php
/**
 * Richardson Fire Protection — search.php
 * Search results template.
 */
get_header();
?>

  <main class="site-main">

    <!-- Search Hero -->
    <div class="page-hero">
      <div class="hero-overlay"></div>
      <div class="hero-pattern"></div>
      <div class="container" style="position: relative; z-index: 2; padding-top: 9rem; padding-bottom: 5rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          <?php
          $search_term = get_search_query();
          /* translators: %d: number of search results */
          printf( esc_html( _n( '%d result for', '%d results for', (int) $GLOBALS['wp_query']->found_posts, 'richardson-fp' ) ), (int) $GLOBALS['wp_query']->found_posts );
          ?>
          "<?php echo esc_html( $search_term ); ?>"
        </div>
        <h1 class="hero-title reveal-up">
          Search <span class="hero-title--accent">Results</span>
        </h1>
      </div>
    </div>

    <div class="container" style="padding-top: 4rem; padding-bottom: 6rem;">

      <!-- Refined Search Bar -->
      <div style="margin-bottom: 3rem;" class="reveal-up">
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; gap: 0.75rem; max-width: 560px;">
          <input
            type="search"
            name="s"
            value="<?php echo esc_attr( $search_term ); ?>"
            placeholder="Search again..."
            style="flex: 1; padding: 0.85rem 1.25rem; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 1rem; font-family: 'Inter', sans-serif; outline: none;"
            aria-label="Search"
          />
          <button type="submit" class="btn btn--primary" style="padding: 0.85rem 1.5rem;">
            <i class="fa-solid fa-magnifying-glass"></i> Search
          </button>
        </form>
      </div>

      <?php if ( have_posts() ) : ?>

        <div class="blog-grid reveal-up">
          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>"
                   class="blog-card__img"
                   style="background-image: url('<?php the_post_thumbnail_url( 'medium' ); ?>'); background-size: cover; background-position: center; display: block;"></a>
              <?php else : ?>
                <div class="blog-card__img">
                  <?php if ( is_page() ) : ?>
                    <i class="fa-solid fa-file-lines"></i>
                  <?php else : ?>
                    <i class="fa-solid fa-fire-extinguisher"></i>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <div class="blog-card__body">
                <span class="blog-tag"><?php echo esc_html( ucfirst( get_post_type() ) ); ?></span>
                <h2 style="font-size: 1.1rem;"><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words( get_the_excerpt(), 20, '&hellip;' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="blog-link">
                  View Page <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </article>

          <?php endwhile; ?>
        </div>

        <div style="text-align: center; padding: 3rem 0;">
          <?php
          the_posts_pagination( [
              'mid_size'  => 2,
              'prev_text' => '<i class="fa-solid fa-arrow-left"></i> Previous',
              'next_text' => 'Next <i class="fa-solid fa-arrow-right"></i>',
          ] );
          ?>
        </div>

      <?php else : ?>

        <div style="text-align: center; padding: 4rem 0;">
          <i class="fa-solid fa-magnifying-glass" style="font-size: 3rem; color: #C41230; margin-bottom: 1.5rem; display: block;"></i>
          <h2>No results found for "<?php echo esc_html( $search_term ); ?>"</h2>
          <p style="color: #6b7280; margin-bottom: 2rem;">Try a different search term, or browse our services below.</p>
          <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/#commercial' ) ); ?>" class="btn btn--primary">Commercial</a>
            <a href="<?php echo esc_url( home_url( '/#industrial' ) ); ?>" class="btn btn--primary">Industrial</a>
            <a href="<?php echo esc_url( home_url( '/#residential' ) ); ?>" class="btn btn--primary">Multifamily</a>
          </div>
        </div>

      <?php endif; ?>

    </div>

    <!-- CTA Strip -->
    <div style="background: #C41230; color: #fff; text-align: center; padding: 3rem 1.5rem;">
      <p style="font-size: 1.1rem; margin-bottom: 1.25rem;">Can't find what you need? Call us directly.</p>
      <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
        <i class="fa-solid fa-phone"></i> (916) 849-6441
      </a>
    </div>

  </main>

<?php get_footer(); ?>
