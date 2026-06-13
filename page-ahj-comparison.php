<?php
/**
 * Template Name: AHJ Permit Comparison
 * Template Post Type: page
 *
 * Assign to a page with slug "ahj-comparison" or "permit-timelines".
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 46vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          AHJ Guide for Developers &amp; GCs — Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          AHJ Permit <span class="hero-title--accent">Timelines Compared</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 680px;">
          Know your jurisdiction before you break ground. Richardson Fire Protection has submitted fire sprinkler permits to all seven major Sacramento Valley AHJs. Here's what you can expect at each.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#ahj-table" class="btn btn--ghost btn--lg">
            View AHJ Comparison
          </a>
        </div>
      </div>
    </section>

    <!-- ========== AHJ TABLE ========== -->
    <section id="ahj-table" class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Side-by-Side</div>
          <h2 class="section-title">AHJ Plan Review <span class="text-accent">Comparison</span></h2>
          <p class="section-desc">Permit timelines and requirements for fire sprinkler systems in each Sacramento Valley jurisdiction. Based on Richardson's direct experience submitting to each AHJ.</p>
        </div>
        <div class="cost-table-wrap reveal-up">
          <table class="cost-table">
            <thead>
              <tr>
                <th>City / AHJ</th>
                <th>Standard Review</th>
                <th>Expedited Option</th>
                <th>Pre-App Meeting</th>
                <th>Notable Requirements</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $ahjs = [
                [
                  'city'      => 'Sacramento',
                  'ahj'       => 'Sacramento City Fire Dept.',
                  'url'       => '/locations/sacramento/',
                  'standard'  => '4–6 weeks',
                  'expedited' => 'Available (fee)',
                  'preapp'    => 'Recommended for high-rise',
                  'notes'     => 'Complete hydraulic calcs and shop drawings required first submittal. SCFD is thorough — incomplete packages cause delays.',
                ],
                [
                  'city'      => 'Stockton',
                  'ahj'       => 'Stockton Fire Department',
                  'url'       => '/locations/stockton/',
                  'standard'  => '4–6 weeks',
                  'expedited' => 'Case-by-case',
                  'preapp'    => 'Required >100K sq ft',
                  'notes'     => 'Commodity classification documentation required for all high-piled storage. SFD enforces strictly.',
                ],
                [
                  'city'      => 'Roseville',
                  'ahj'       => 'Roseville Fire Department',
                  'url'       => '/locations/roseville/',
                  'standard'  => '3–4 weeks',
                  'expedited' => 'Yes (paid track)',
                  'preapp'    => 'Optional',
                  'notes'     => 'One of the faster AHJs in the Valley. Good communication during plan check. Complete packages clear first review.',
                ],
                [
                  'city'      => 'Rocklin',
                  'ahj'       => 'Rocklin Fire Department',
                  'url'       => '/locations/rocklin/',
                  'standard'  => '3–4 weeks',
                  'expedited' => 'Limited availability',
                  'preapp'    => 'Not typically required',
                  'notes'     => 'Confirm jurisdiction first — unincorporated parcels use Placer County Fire, not Rocklin FD.',
                ],
                [
                  'city'      => 'Fairfield',
                  'ahj'       => 'Fairfield Fire Department',
                  'url'       => '/locations/fairfield/',
                  'standard'  => '3–5 weeks',
                  'expedited' => 'Case-by-case',
                  'preapp'    => 'Required near Travis AFB',
                  'notes'     => 'Travis AFB adjacency may require parallel review with base Fire Protection Engineer. Plan extra time.',
                ],
                [
                  'city'      => 'Yuba City',
                  'ahj'       => 'Yuba City Fire Department',
                  'url'       => '/locations/yuba-city/',
                  'standard'  => '3–5 weeks',
                  'expedited' => 'Not formally offered',
                  'preapp'    => 'Recommended for healthcare',
                  'notes'     => 'Healthcare projects may involve HCAI (formerly OSHPD), adding 6–10 weeks. Confirm occupancy type early.',
                ],
                [
                  'city'      => 'Davis',
                  'ahj'       => 'Davis Fire Department',
                  'url'       => '/locations/davis/',
                  'standard'  => '3–5 weeks',
                  'expedited' => 'Case-by-case',
                  'preapp'    => 'Required for UC-adjacent',
                  'notes'     => 'Campus-adjacent projects may require parallel UC Davis EH&S review. Manage both tracks simultaneously.',
                ],
              ];
              foreach ( $ahjs as $a ) : ?>
                <tr>
                  <td>
                    <strong><a href="<?php echo esc_url( home_url( $a['url'] ) ); ?>" style="color: var(--c-red-light);"><?php echo esc_html( $a['city'] ); ?></a></strong>
                    <span style="display: block; font-size: 0.8rem; color: var(--c-text-muted);"><?php echo esc_html( $a['ahj'] ); ?></span>
                  </td>
                  <td><?php echo esc_html( $a['standard'] ); ?></td>
                  <td><?php echo esc_html( $a['expedited'] ); ?></td>
                  <td><?php echo esc_html( $a['preapp'] ); ?></td>
                  <td style="font-size: 0.85rem;"><?php echo esc_html( $a['notes'] ); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p class="reveal-up" style="margin-top: 1.25rem; font-size: 0.82rem; color: var(--c-text-muted);">
          * Timelines are typical for complete, well-organized first submittals. Incomplete packages, correction cycles, or AHJ staffing changes can extend review. Data based on Richardson's direct experience and is subject to change.
        </p>
      </div>
    </section>

    <!-- ========== HOW TO SPEED UP PERMITS ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Speed Up Permits</div>
          <h2 class="section-title">How to Minimize <span class="text-accent">Permit Delays</span></h2>
          <p class="section-desc">The biggest cause of permit delay is an incomplete first submittal. Here's how Richardson eliminates that risk.</p>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $tips = [
            [ 'fa-solid fa-file-lines',       'Complete First Submittal',   'We submit hydraulic calculations, CAD shop drawings, equipment cut sheets, and code analysis in one organized package — everything the AHJ needs to approve without asking for more.' ],
            [ 'fa-solid fa-magnifying-glass',  'Pre-App Meetings',           'For complex projects, we attend pre-application meetings with the AHJ to get alignment on design approach before stamped drawings are produced.' ],
            [ 'fa-solid fa-comments',          'Direct Reviewer Contact',    'Richardson builds relationships with plan reviewers at each AHJ. When questions arise during review, we respond directly — not through a third-party service.' ],
            [ 'fa-solid fa-reply-all',         'Fast Correction Response',   'When the AHJ does request changes, we respond within 3–5 business days. No backlog, no waiting for a project queue.' ],
            [ 'fa-solid fa-calendar-check',    'Parallel Submission Tracks', 'For dual-AHJ projects (Stockton + San Joaquin County, Davis + UC EH&S, Fairfield + Travis), we submit to both simultaneously to avoid sequential delays.' ],
            [ 'fa-solid fa-circle-check',      'First-Pass Finals',          'Our goal on every project: first-pass AHJ final inspection. We pre-walk every system before calling the AHJ to eliminate punch list surprises.' ],
          ];
          foreach ( $tips as $t ) : ?>
            <div class="service-card service-card--sm reveal-up">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $t[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo esc_html( $t[1] ); ?></h3>
              <p class="service-card__desc"><?php echo esc_html( $t[2] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Permit FAQs</div>
          <h2 class="section-title">Common <span class="text-accent">AHJ Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [ 'What happens if the AHJ rejects our first submittal?', 'The AHJ issues a correction notice listing the deficiencies. Richardson responds with a revised submittal addressing each comment — typically within 3–5 business days. Each resubmittal restarts the review clock, so the goal is to avoid corrections entirely with a complete first submittal.' ],
            [ 'Can we get an over-the-counter permit for a small tenant improvement?', 'Some AHJs offer OTC or same-day review for minor TI scopes (typically under 5,000 sq ft with simple modifications). Richardson can advise whether your scope qualifies and prepare an OTC-ready package.' ],
            [ 'What is a pre-application meeting and when should we request one?', 'A pre-app meeting is a face-to-face (or virtual) meeting with the AHJ\'s plan review staff before stamped drawings are submitted. Richardson recommends pre-apps for high-rise projects, special hazard occupancies, and any project with dual-AHJ jurisdiction requirements.' ],
            [ 'Who pulls the fire sprinkler permit — us or Richardson?', 'Richardson pulls the fire sprinkler permit as the C-16 licensed subcontractor. We handle all permit applications, fees, and submittals. The GC or owner is typically listed as the owner-builder on the building permit, which is a separate permit from the fire sprinkler sub-permit.' ],
            [ 'Is there a difference between the fire sprinkler permit and the building permit?', 'Yes. The building permit covers structural, architectural, and MEP systems under the local building department. The fire sprinkler permit is issued separately by the fire authority (AHJ) after their independent plan review. Both must be obtained before work begins.' ],
          ];
          foreach ( $faqs as $f ) : ?>
            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                <?php echo esc_html( $f[0] ); ?>
                <i class="fa-solid fa-chevron-down faq-icon"></i>
              </button>
              <div class="faq-answer">
                <p><?php echo esc_html( $f[1] ); ?></p>
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
          We Know Every AHJ. You Shouldn't Have To.
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Let Richardson handle permit coordination. Bids returned in 24–48 hours.
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
