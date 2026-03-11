
  <!-- ========== FOOTER ========== -->
  <footer class="footer">
    <div class="footer-top">
      <div class="container footer-top-container">

        <div class="footer-brand">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo footer-logo">
            <img
              src="<?php echo esc_url( rfp_logo_url() ); ?>"
              alt="Richardson Fire Protection"
              class="nav-logo__img"
              width="200"
              height="48"
              loading="lazy"
            />
          </a>
          <p>Protection for your family &amp; investment. Licensed, bonded, and insured fire protection services across Sacramento and Northern California.</p>
          <a href="tel:+19168496441" class="footer-phone">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
        </div>

        <div class="footer-links-group">
          <h4>Services</h4>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/#commercial' ) ); ?>">Commercial</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#industrial' ) ); ?>">Industrial</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#residential' ) ); ?>">Residential</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Inspections</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Emergency Service</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">System Repairs</a></li>
          </ul>
        </div>

        <div class="footer-links-group">
          <h4>Company</h4>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Us</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#testimonials' ) ); ?>">Reviews</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#blog' ) ); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>">All Articles</a></li>
          </ul>
        </div>

        <div class="footer-newsletter">
          <h4>Fire Safety Newsletter</h4>
          <p>Code updates, maintenance tips, and safety reminders — delivered monthly.</p>
          <form class="newsletter-form" id="newsletterForm">
            <input type="email" placeholder="your@email.com" required />
            <button type="submit" aria-label="Subscribe"><i class="fa-solid fa-arrow-right"></i></button>
          </form>
          <div class="footer-licenses">
            <span><i class="fa-solid fa-certificate"></i> CSLB Lic. #000000</span>
            <span><i class="fa-solid fa-shield-halved"></i> NICET Certified</span>
          </div>
        </div>

      </div>
    </div>
    <div class="footer-bottom">
      <div class="container footer-bottom-container">
        <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        <div class="footer-legal">
          <?php
          $privacy = get_privacy_policy_url();
          if ( $privacy ) : ?>
            <a href="<?php echo esc_url( $privacy ); ?>">Privacy Policy</a>
          <?php endif; ?>
          <a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>">Terms of Service</a>
          <a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>">Accessibility</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to top -->
  <button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

<?php wp_footer(); ?>
</body>
</html>
