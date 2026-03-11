<?php
/**
 * Richardson Fire Protection — single.php
 * Template for individual blog posts.
 */
get_header();
?>

  <main class="site-main single-main">

    <?php while ( have_posts() ) : the_post(); ?>

      <!-- Post Hero -->
      <div class="page-hero" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="container" style="position: relative; z-index: 2; padding-top: 9rem; padding-bottom: 4rem;">
          <?php
          $cats     = get_the_category();
          $cat_name = $cats ? esc_html( $cats[0]->name ) : 'News';
          ?>
          <div class="hero-badge reveal-up">
            <span class="badge-dot"></span>
            <?php echo $cat_name; ?> &nbsp;&bull;&nbsp; <?php echo get_the_date(); ?>
          </div>
          <h1 class="hero-title reveal-up" style="font-size: clamp(1.75rem, 4vw, 3rem);">
            <?php the_title(); ?>
          </h1>
          <p class="hero-desc reveal-up" style="font-size: 1rem; opacity: 0.8;">
            By <?php the_author(); ?>
            &nbsp;&bull;&nbsp;
            <?php echo get_the_time( 'F j, Y' ); ?>
            &nbsp;&bull;&nbsp;
            <?php echo ceil( str_word_count( get_the_content() ) / 200 ); ?> min read
          </p>
        </div>
      </div>

      <!-- Post Body -->
      <div class="container" style="padding-top: 4rem; padding-bottom: 6rem; max-width: 800px;">

        <?php if ( has_post_thumbnail() ) : ?>
          <figure style="margin: 0 0 2.5rem; border-radius: 12px; overflow: hidden;">
            <?php the_post_thumbnail( 'large', [ 'style' => 'width: 100%; height: auto; display: block;' ] ); ?>
          </figure>
        <?php endif; ?>

        <div class="entry-content post-content">
          <?php the_content(); ?>
        </div>

        <!-- Tags -->
        <?php if ( has_tag() ) : ?>
          <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
            <strong>Tagged:</strong> <?php the_tags( '', ', ', '' ); ?>
          </div>
        <?php endif; ?>

        <!-- Author bio -->
        <div style="display: flex; gap: 1.5rem; align-items: flex-start; background: #f8f8f8; border-radius: 12px; padding: 2rem; margin-top: 3rem;">
          <div style="width: 56px; height: 56px; border-radius: 50%; background: #C41230; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.25rem; flex-shrink: 0;">
            <?php echo esc_html( strtoupper( substr( get_the_author_meta( 'display_name' ), 0, 2 ) ) ); ?>
          </div>
          <div>
            <strong><?php the_author(); ?></strong><br />
            <small style="color: #6b7280;">Richardson Fire Protection</small>
            <?php if ( get_the_author_meta( 'description' ) ) : ?>
              <p style="margin-top: 0.5rem; font-size: 0.9rem; color: #4b5563;"><?php the_author_meta( 'description' ); ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Post navigation -->
        <nav style="display: flex; justify-content: space-between; gap: 1rem; margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
          <div><?php previous_post_link( '%link', '<i class="fa-solid fa-arrow-left"></i> %title' ); ?></div>
          <div><?php next_post_link( '%link', '%title <i class="fa-solid fa-arrow-right"></i>' ); ?></div>
        </nav>

        <!-- Comments -->
        <?php comments_template(); ?>

      </div>

    <?php endwhile; ?>

    <!-- CTA -->
    <div style="background: #C41230; color: #fff; text-align: center; padding: 3rem 1.5rem;">
      <p style="font-size: 1.15rem; margin-bottom: 1.25rem;">Need fire protection for your property?</p>
      <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
        <i class="fa-solid fa-phone"></i> (916) 849-6441 — Free Quote
      </a>
    </div>

  </main>

<?php get_footer(); ?>
