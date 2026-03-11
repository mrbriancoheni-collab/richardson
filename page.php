<?php
/**
 * Richardson Fire Protection — page.php
 * Template for static WordPress pages (About, Privacy Policy, etc.)
 */
get_header();
?>

  <main class="site-main page-main">

    <!-- Page Hero Banner -->
    <div class="page-hero">
      <div class="hero-overlay"></div>
      <div class="container" style="position: relative; z-index: 2; padding-top: 9rem; padding-bottom: 4rem;">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="hero-badge reveal-up">
            <span class="badge-dot"></span>
            Richardson Fire Protection
          </div>
          <h1 class="hero-title reveal-up" style="font-size: clamp(2rem, 5vw, 3.5rem);">
            <?php the_title(); ?>
          </h1>
        <?php endwhile; ?>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container" style="padding-top: 4rem; padding-bottom: 6rem; max-width: 860px;">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="page-content entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- CTA Strip -->
    <div style="background: #C41230; color: #fff; text-align: center; padding: 3rem 1.5rem;">
      <p style="font-size: 1.15rem; margin-bottom: 1.25rem;">Have questions? We're here to help.</p>
      <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
        <i class="fa-solid fa-phone"></i> (916) 849-6441
      </a>
    </div>

  </main>

<?php get_footer(); ?>
