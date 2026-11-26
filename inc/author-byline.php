<?php
/**
 * Author byline partial — included at the top of every article/guide page.
 * Provides visible E-E-A-T attribution for AI engine citation (Perplexity, AI Overviews, etc.).
 */
$byline_date = get_the_modified_date( 'F Y' ) ?: 'November 2026';
?>
<div class="author-byline" style="display:flex; align-items:center; gap:0.75rem; padding:0.875rem 1.125rem; background:var(--c-surface); border:1px solid var(--c-border); border-left:3px solid var(--c-red); border-radius:var(--r-md); margin-bottom:2rem;">
  <div class="author-byline__icon" style="flex-shrink:0; width:2.5rem; height:2.5rem; background:var(--c-red); border-radius:50%; display:flex; align-items:center; justify-content:center;">
    <i class="fa-solid fa-fire-extinguisher" style="color:#fff; font-size:1rem;"></i>
  </div>
  <div class="author-byline__text" style="font-size:0.875rem; line-height:1.5; color:var(--c-text-muted);">
    Written by <strong style="color:var(--c-text);">Chris Richardson</strong> &mdash;
    NICET Level II Fire Protection, CSLB C-16 License <a href="<?php echo esc_url( home_url('/licenses/') ); ?>" style="color:var(--c-red);">#1053506</a>,
    California State Fire Marshal Registered Contractor.
    <span style="display:inline-block; margin-left:0.5rem;">Updated <?php echo esc_html( $byline_date ); ?></span>
  </div>
</div>
