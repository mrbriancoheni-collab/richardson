<?php
/**
 * Richardson Fire Protection — home.php
 * Blog posts listing page (used when a static front page is set and
 * a "Posts page" is assigned under Settings → Reading).
 */
get_header();
?>

  <main class="site-main blog-main">

    <!-- Blog Hero Banner -->
    <div class="page-hero" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
      <div class="hero-overlay"></div>
      <div class="hero-pattern"></div>
      <div class="container" style="position: relative; z-index: 2; padding-top: 9rem; padding-bottom: 5rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Fire Safety Knowledge Base
        </div>
        <h1 class="hero-title reveal-up">
          Fire Safety <span class="hero-title--accent">Resources</span>
        </h1>
        <p class="hero-desc reveal-up">
          Expert insights on fire code compliance, system maintenance, NFPA standards, and life safety best practices from the Richardson Fire Protection team.
        </p>
      </div>
    </div>

    <div class="container" style="padding-top: 4rem; padding-bottom: 6rem;">

      <?php if ( have_posts() ) : ?>

        <div class="blog-grid reveal-up">
          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
              <?php $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'medium' ) : rfp_truck_img_url(); ?>
              <a href="<?php the_permalink(); ?>" class="blog-card__img" style="background-image: url('<?php echo esc_url( $thumb ); ?>'); background-size: cover; background-position: center; display: block;"></a>
              <div class="blog-card__body">
                <?php
                $cats     = get_the_category();
                $cat_name = $cats ? esc_html( $cats[0]->name ) : 'News';
                ?>
                <span class="blog-tag"><?php echo $cat_name; ?></span>
                <h2 style="font-size: 1.15rem;"><?php the_title(); ?></h2>
                <p class="blog-meta" style="font-size: 0.8rem; color: #6b7280; margin-bottom: 0.75rem;">
                  <i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?>
                  &nbsp;&bull;&nbsp;
                  <i class="fa-regular fa-user"></i> <?php the_author(); ?>
                </p>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="blog-link">
                  Read More <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </article>

          <?php endwhile; ?>
        </div>

        <div class="pagination" style="text-align: center; padding: 3rem 0;">
          <?php
          the_posts_pagination( [
              'mid_size'  => 2,
              'prev_text' => '<i class="fa-solid fa-arrow-left"></i> Newer',
              'next_text' => 'Older <i class="fa-solid fa-arrow-right"></i>',
          ] );
          ?>
        </div>

      <?php else : ?>

        <div style="text-align: center; padding: 6rem 0;">
          <i class="fa-solid fa-fire" style="font-size: 3rem; color: #C41230; margin-bottom: 1.5rem; display: block;"></i>
          <h2>No articles yet.</h2>
          <p style="color: #6b7280;">Check back soon — we'll be sharing fire safety tips, code updates, and industry news.</p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary" style="margin-top: 2rem;">
            Back to Home
          </a>
        </div>

      <?php endif; ?>

    </div>
  </main>

<?php get_footer(); ?>
