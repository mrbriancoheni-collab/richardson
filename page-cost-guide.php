<?php
/**
 * Template Name: Fire Sprinkler Cost Guide
 * Template Post Type: page
 *
 * Assign to a page with slug "cost-guide" or "fire-sprinkler-cost".
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 48vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Budget Guide for GCs &amp; Developers — Sacramento Valley
        </div>
        <h1 class="hero-title reveal-up">
          Fire Sprinkler <span class="hero-title--accent">Cost Guide</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 680px;">
          Ballpark budget ranges for fire sprinkler installation across common building types in Sacramento, Stockton, Roseville, and the broader Northern California market. Use these ranges for early-stage pro formas — then call us for a project-specific number.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> Get a Project Estimate
          </a>
          <a href="#cost-table" class="btn btn--ghost btn--lg">
            See Cost Ranges
          </a>
        </div>
      </div>
    </section>

    <!-- ========== DISCLAIMER ========== -->
    <div style="background: rgba(196,18,48,0.08); border-top: 2px solid var(--c-red); border-bottom: 1px solid var(--c-border); padding: 1rem 1.5rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 0.88rem; color: var(--c-text-muted); margin: 0;">
          <i class="fa-solid fa-circle-info" style="color: var(--c-red); margin-right: 0.4rem;"></i>
          <strong style="color: var(--c-white);">Disclaimer:</strong> All figures below are rough industry benchmarks for budgeting purposes only. Actual costs depend on building complexity, AHJ requirements, existing infrastructure, commodity classification, and project schedule. Call (916) 849-6441 for a project-specific bid.
        </p>
      </div>
    </div>

    <!-- ========== COST TABLE ========== -->
    <section id="cost-table" class="section">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">By Building Type</div>
          <h2 class="section-title">Cost Ranges by <span class="text-accent">Occupancy Type</span></h2>
          <p class="section-desc">Installed cost per square foot for fire sprinkler systems in Sacramento Valley, including design, materials, labor, and permit fees. Excludes fire alarm.</p>
        </div>
        <div class="cost-table-wrap reveal-up">
          <table class="cost-table">
            <thead>
              <tr>
                <th>Building Type</th>
                <th>NFPA Standard</th>
                <th>Typical Range ($/sq ft)</th>
                <th>Notes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Light Commercial Office</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$2.00 – $4.00</td>
                <td>Open office, light hazard, wet-pipe system</td>
              </tr>
              <tr>
                <td><strong>Retail / Strip Center</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$2.50 – $4.50</td>
                <td>Ordinary hazard; varies with rack storage height</td>
              </tr>
              <tr>
                <td><strong>Restaurant</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$3.00 – $5.50</td>
                <td>Kitchen hood suppression typically separate contract</td>
              </tr>
              <tr>
                <td><strong>Medical Office / Clinic</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$3.50 – $6.00</td>
                <td>Quick-response heads in patient areas; possible HCAI review</td>
              </tr>
              <tr>
                <td><strong>Multifamily Apartment (NFPA 13R)</strong></td>
                <td>NFPA 13R</td>
                <td class="cost-range">$2.50 – $4.50</td>
                <td>Per unit; varies with density and floor count</td>
              </tr>
              <tr>
                <td><strong>Single-Family / Townhome (NFPA 13D)</strong></td>
                <td>NFPA 13D</td>
                <td class="cost-range">$1.50 – $3.00</td>
                <td>Simplified system; domestic water supply often sufficient</td>
              </tr>
              <tr>
                <td><strong>High-Bay Warehouse (ESFR)</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$3.00 – $6.00</td>
                <td>ESFR K-25 ceiling system; commodity analysis required</td>
              </tr>
              <tr>
                <td><strong>Warehouse + In-Rack</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$4.50 – $8.00</td>
                <td>Combined ceiling and in-rack; higher with dense rack config</td>
              </tr>
              <tr>
                <td><strong>Cold Storage / Refrigerated</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$5.00 – $9.00</td>
                <td>Dry-pipe or pre-action required; freeze protection adders</td>
              </tr>
              <tr>
                <td><strong>Research Laboratory</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$5.00 – $10.00</td>
                <td>Pre-action in hazardous areas; clean agent for equipment rooms</td>
              </tr>
              <tr>
                <td><strong>Data Center / Server Room</strong></td>
                <td>NFPA 13 + NFPA 2001</td>
                <td class="cost-range">$15.00 – $30.00</td>
                <td>Clean agent suppression; pre-action for overhead; specialized design</td>
              </tr>
              <tr>
                <td><strong>High-Rise (7+ stories)</strong></td>
                <td>NFPA 13</td>
                <td class="cost-range">$6.00 – $12.00</td>
                <td>Zone pressure boosting, standpipe integration, extra inspection requirements</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ========== WHAT DRIVES COST ========== -->
    <section class="section" style="background: var(--c-surface);">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Cost Drivers</div>
          <h2 class="section-title">What Affects Your <span class="text-accent">Final Cost</span></h2>
        </div>
        <div class="services-grid services-grid--6 reveal-up">
          <?php
          $drivers = [
            [ 'fa-solid fa-ruler-combined', 'Building Size',      'Larger buildings benefit from economies of scale on materials. Small projects (<10K sq ft) often cost more per sq ft due to fixed mobilization and permitting overhead.' ],
            [ 'fa-solid fa-layer-group',    'Occupancy Class',    'Light hazard (office) is cheapest. Ordinary hazard (retail, restaurant) adds cost. Extra hazard (industrial, chemical) requires heavier systems and larger pipe.' ],
            [ 'fa-solid fa-mountain-city',  'Ceiling Height',     'High-bay ceilings require longer drops, larger heads, and higher-pressure calculations. Buildings over 30 ft often require ESFR redesign.' ],
            [ 'fa-solid fa-building-shield','AHJ Complexity',     'Some AHJs require additional documentation, pre-application meetings, or third-party review — adding time and cost to the permit phase.' ],
            [ 'fa-solid fa-pipe-valve',     'Existing Infrastructure', 'TI projects in existing buildings may require rerouting around existing structure, working around active businesses, and matching existing pipe sizes.' ],
            [ 'fa-solid fa-calendar-xmark', 'Schedule Pressure',  'Accelerated construction schedules that require overtime, phased installation, or after-hours work increase labor cost by 15–30%.' ],
          ];
          foreach ( $drivers as $d ) : ?>
            <div class="service-card service-card--sm reveal-up">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $d[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo esc_html( $d[1] ); ?></h3>
              <p class="service-card__desc"><?php echo esc_html( $d[2] ); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Cost FAQs</div>
          <h2 class="section-title">Common <span class="text-accent">Budgeting Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [ 'Does the cost range include the permit fee?', 'Yes, our bids include permit fees, plan check fees, and inspection fees as part of the total installed price. We handle all submittals — you see a single number.' ],
            [ 'Does it include fire alarm?', 'Fire sprinkler and fire alarm are separate scopes. The ranges above are for sprinkler systems only. NFPA 72 fire alarm systems typically run $2–$5 per sq ft depending on addressable point count and notification zone complexity. We can bid both together.' ],
            [ 'How accurate are these ranges for a pro forma?', 'For a 50K–500K sq ft commercial or industrial building, use the midpoint of the applicable range as your budgeted number at schematic design. Refine it with a preliminary bid once you have a floor plan. Final bid accuracy is typically ±10% from construction documents.' ],
            [ 'Can I get a budget number before I have drawings?', 'Yes. Call us with the building type, approximate square footage, ceiling height, and city. We can give you a verbal budget estimate within 24 hours. No drawings required for preliminary budgeting.' ],
            [ 'Do tenant improvements cost more per sq ft than new construction?', 'Often yes. TI work typically costs 15–30% more per sq ft than new construction because of existing infrastructure coordination, working in occupied buildings, and the need to tie into an existing system with unknown parameters.' ],
            [ 'What is the typical payment schedule for a fire sprinkler contract?', 'Standard payment terms: mobilization draw at contract signing, progress draws tied to rough-in and above-ceiling milestones, and a final payment at AHJ acceptance. Richardson is flexible on draw schedules for established GC relationships.' ],
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
          Ready for a Real Number?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Send your plans or call with your project details. We return a complete bid in 24–48 hours.
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
