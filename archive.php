<?php
/**
 * Richardson Fire Protection — archive.php
 * Template for category, tag, date, and author archives.
 */
get_header();
?>

  <main class="site-main blog-main">
    <div class="container">

      <!-- Archive Header -->
      <div class="section-header reveal-up" style="padding-top: 6rem;">
        <div class="section-badge">
          <?php
          if ( is_category() ) {
              echo 'Category';
          } elseif ( is_tag() ) {
              echo 'Tag';
          } elseif ( is_author() ) {
              echo 'Author';
          } elseif ( is_date() ) {
              echo 'Archive';
          } else {
              echo 'Blog';
          }
          ?>
        </div>
        <h1 class="section-title">
          <?php the_archive_title( '<span class="text-accent">', '</span>' ); ?>
        </h1>
        <?php
        $desc = get_the_archive_description();
        if ( $desc ) : ?>
          <p class="section-desc"><?php echo wp_kses_post( $desc ); ?></p>
        <?php endif; ?>
      </div>

      <?php if ( have_posts() ) : ?>

        <div class="blog-grid reveal-up">
          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" class="blog-card__img" style="background-image: url('<?php the_post_thumbnail_url( 'medium' ); ?>'); background-size: cover; background-position: center; display: block;"></a>
              <?php else : ?>
                <div class="blog-card__img"><i class="fa-solid fa-fire-extinguisher"></i></div>
              <?php endif; ?>
              <div class="blog-card__body">
                <?php
                $cats     = get_the_category();
                $cat_name = $cats ? esc_html( $cats[0]->name ) : 'News';
                ?>
                <span class="blog-tag"><?php echo $cat_name; ?></span>
                <h2><?php the_title(); ?></h2>
                <p class="blog-meta">
                  <i class="fa-regular fa-calendar"></i>
                  <?php echo get_the_date(); ?>
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
          <h2>No articles found.</h2>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary" style="margin-top: 2rem;">
            Back to Home
          </a>
        </div>

      <?php endif; ?>

    </div>
  </main>

<?php get_footer(); ?>
