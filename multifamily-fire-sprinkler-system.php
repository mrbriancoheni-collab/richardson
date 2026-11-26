<?php
/**
 * Template Name: Multifamily Fire Sprinkler System
 * Template Post Type: page
 *
 * Auto-applied to any page with the slug "multifamily-fire-sprinkler-system".
 * Targets: "apartment fire sprinkler system", "multifamily fire sprinkler",
 *          "nfpa 13r sprinkler system", "fire sprinkler apartment building"
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 55vh; padding-top: 7rem; padding-bottom: 4rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          NFPA 13 &bull; NFPA 13R &bull; NFPA 13D &bull; C-16 Licensed
        </div>
        <h1 class="hero-title reveal-up">
          Multifamily Fire Sprinkler <span class="hero-title--accent">Systems Sacramento</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          Richardson Fire Protection designs and installs fire sprinkler systems for apartment complexes, condominiums, townhomes, and affordable housing projects across Sacramento and Northern California. NFPA 13, NFPA 13R, and NFPA 13D systems — full design-build, AHJ permit coordination, and occupied-building scheduling. CSLB C-16 License #1053506.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="#nfpa-standards" class="btn btn--ghost btn--lg">
            Which NFPA Standard Applies?
          </a>
        </div>
        <div class="hero-certifications reveal-up">
          <span class="cert-label">Credentials</span>
          <div class="cert-items">
            <div class="cert-item"><i class="fa-solid fa-certificate"></i> CSLB C-16 #1053506</div>
            <div class="cert-item"><i class="fa-solid fa-award"></i> NICET Level II</div>
            <div class="cert-item"><i class="fa-solid fa-fire"></i> CSFM Registered</div>
            <div class="cert-item"><i class="fa-solid fa-scroll"></i> Title 19</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== BREADCRUMB NAV ========== -->
    <div class="container" style="padding-top: 1.25rem; padding-bottom: 0.25rem;">
      <nav class="breadcrumb" aria-label="Breadcrumb" style="font-size: 0.85rem; color: var(--c-text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span> &rsaquo; </span>
        <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>">Residential &amp; Multifamily</a>
        <span> &rsaquo; </span>
        <span>Multifamily Fire Sprinkler Systems</span>
      </nav>
    </div>

    <!-- ========== INTRO ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2rem;">
      <div class="container" style="max-width: 860px;">
        <p style="font-size: 1.1rem; line-height: 1.75; margin-bottom: 1.25rem;">
          California mandates fire sprinkler systems in virtually all new multifamily residential construction. The specific NFPA standard — 13D, 13R, or 13 — depends on the building's height, number of units, and construction type. Choosing the wrong standard or misapplying it is the most expensive mistake a multifamily developer can make, so Richardson provides design-build services that include AHJ pre-application meetings before the first drawing is submitted.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--c-text-muted);">
          Richardson serves apartment developers, general contractors, and HOA property managers across Sacramento County, the Central Valley, and the Bay Area — from garden-style complexes to mid-rise mixed-use projects. See also our <a href="<?php echo esc_url( home_url( '/residential/' ) ); ?>">residential fire sprinkler page</a> for single-family and small-scale projects.
        </p>
      </div>
    </section>

    <!-- ========== NFPA STANDARD SELECTION TABLE ========== -->
    <section id="nfpa-standards" class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 980px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Code Comparison</div>
          <h2 class="section-title">Which NFPA Standard Applies to <span class="text-accent">Your Building?</span></h2>
          <p class="section-desc">California adopts NFPA 13, 13R, and 13D with amendments under Title 19 and the California Fire Code (CFC). The table below reflects 2022 CFC requirements.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.9rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 0.9rem; text-align: left;">Building Type</th>
                <th style="padding: 0.75rem 0.9rem; text-align: left;">NFPA Standard</th>
                <th style="padding: 0.75rem 0.9rem; text-align: left;">Key Limitations</th>
                <th style="padding: 0.75rem 0.9rem; text-align: left;">Coverage Requirement</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rows = [
                [ 'Single-family detached home',          'NFPA 13D',  'Max 2 dwelling units; no attached garages',       'All areas except small closets &lt; 24 sq ft, attics, crawl spaces' ],
                [ 'Duplex / 2-unit townhome',             'NFPA 13D',  'Owner-occupied only in some jurisdictions',        'All habitable areas; garage optional depending on AHJ' ],
                [ '3–4 story apartment / condo',          'NFPA 13R',  'Max 4 stories above grade; no high-rise use',      'All dwelling units + corridors; no attic / crawl space required' ],
                [ '5–6 story mid-rise residential',       'NFPA 13R or 13', 'CFC Sec. 903.3.1.2 cutoff at 55 ft',          '13R: dwelling units + corridors; 13: fully sprinklered' ],
                [ 'High-rise residential (&gt; 55 ft)',   'NFPA 13',   'No exceptions; full NFPA 13 coverage required',   'All areas including attics, closets, elevator shafts, mechanical' ],
                [ 'Mixed-use (residential over commercial)', 'NFPA 13', 'Entire building under most code interpretations', 'Full coverage — commercial portion drives standard up to NFPA 13' ],
                [ 'Affordable / tax-credit housing (LIHTC)', 'NFPA 13R or 13', 'AHJ may require NFPA 13 regardless of height', 'Confirm with local AHJ pre-application' ],
              ];
              foreach ( $rows as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? '' : 'background: var(--c-bg);';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 0.9rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo $row[0]; ?></td>
                <td style="padding: 0.65rem 0.9rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary); font-weight: 700;"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 0.9rem; border-bottom: 1px solid var(--c-border);"><?php echo $row[2]; ?></td>
                <td style="padding: 0.65rem 0.9rem; border-bottom: 1px solid var(--c-border);"><?php echo $row[3]; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p class="reveal-up" style="font-size: 0.85rem; color: var(--c-text-muted); margin-top: 1rem;">
          Note: AHJ amendments and local ordinances can require a more protective standard than the base code. Richardson always recommends a pre-application meeting with the AHJ before design begins. <a href="<?php echo esc_url( home_url( '/ahj-comparison/' ) ); ?>">Compare Sacramento-area AHJ requirements →</a>
        </p>
      </div>
    </section>

    <!-- ========== SYSTEM TYPES ========== -->
    <section class="section" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">System Types</div>
          <h2 class="section-title">Multifamily Fire Sprinkler <span class="text-accent">System Options</span></h2>
          <p class="section-desc">Richardson designs and installs all system types appropriate for multifamily residential, matched to building height, climate, and AHJ requirements.</p>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <?php
          $systems = [
            [
              'fa-solid fa-droplet',
              'Wet Pipe',
              'Standard for most California multifamily projects. Pipes always filled with pressurized water — fastest response, lowest maintenance. Used in all heated areas.',
            ],
            [
              'fa-solid fa-snowflake',
              'Dry Pipe',
              'Required for unheated garages, breezeways, and unconditioned corridors where freezing is possible. Air-filled pipes; water releases on activation.',
            ],
            [
              'fa-solid fa-lock',
              'Pre-Action',
              'Double interlock pre-action used in data rooms, server spaces, or archive rooms in mixed-use residential. Prevents accidental discharge.',
            ],
            [
              'fa-solid fa-fire-flame-simple',
              'Residential Heads (NFPA 13R)',
              'Residential-pattern concealed or pendant heads engineered for residential response characteristics under NFPA 13R — typically faster response than commercial heads.',
            ],
          ];
          foreach ( $systems as $s ) : ?>
            <div class="service-card service-card--sm">
              <div class="service-card__icon"><i class="<?php echo esc_attr( $s[0] ); ?>"></i></div>
              <h3 class="service-card__title"><?php echo $s[1]; ?></h3>
              <p class="service-card__desc"><?php echo $s[2]; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== COST TABLE ========== -->
    <section class="section" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 900px;">
        <div class="section-header reveal-up">
          <div class="section-badge">Budgeting</div>
          <h2 class="section-title">Multifamily Fire Sprinkler <span class="text-accent">Cost by Project Type</span></h2>
          <p class="section-desc">Installed costs in Northern California vary by system standard, building height, number of units, and access conditions. Ranges below are for new construction; retrofit projects typically cost 20–40% more.</p>
        </div>
        <div class="reveal-up" style="overflow-x: auto; margin-top: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.95rem;">
            <thead>
              <tr style="background: var(--c-primary); color: #fff;">
                <th style="padding: 0.75rem 1rem; text-align: left;">Project Type</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">NFPA Standard</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Cost per Unit</th>
                <th style="padding: 0.75rem 1rem; text-align: left;">Cost per Sq Ft</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $costs = [
                [ 'Single-family / duplex (new construction)',     '13D',  '$2,500–$4,500',  '$2.00–$3.50' ],
                [ '3-story garden apartments (20–60 units)',       '13R',  '$4,000–$7,500',  '$3.00–$5.00' ],
                [ '4-story apartment over podium parking',         '13R',  '$5,500–$9,500',  '$3.50–$6.00' ],
                [ '5–6 story mid-rise residential',                '13',   '$7,000–$12,000', '$4.50–$7.50' ],
                [ 'High-rise residential (&gt; 7 stories)',        '13',   '$10,000–$18,000','$6.00–$10.00' ],
                [ 'Mixed-use (residential + ground-floor retail)', '13',   '$8,000–$14,000', '$5.00–$8.50' ],
                [ 'Affordable / LIHTC retrofit',                   '13R or 13', '$6,000–$11,000', '$4.00–$7.00' ],
              ];
              foreach ( $costs as $i => $row ) :
                $bg = ( $i % 2 === 0 ) ? '' : 'background: var(--c-bg);';
              ?>
              <tr style="<?php echo $bg; ?>">
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); font-weight: 600;"><?php echo $row[0]; ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border); color: var(--c-primary); font-weight: 700;"><?php echo esc_html( $row[1] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[2] ); ?></td>
                <td style="padding: 0.65rem 1rem; border-bottom: 1px solid var(--c-border);"><?php echo esc_html( $row[3] ); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <p class="reveal-up" style="font-size: 0.85rem; color: var(--c-text-muted); margin-top: 1rem;">
          Costs include design drawings, permit fees, materials, and installation. Fire pump, backflow preventer, and PIV are not included. <a href="<?php echo esc_url( home_url( '/cost-guide/' ) ); ?>">See our full cost guide →</a>
        </p>
      </div>
    </section>

    <!-- ========== PROCESS ========== -->
    <section class="section process" style="padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container">
        <div class="section-header reveal-up">
          <div class="section-badge">Our Process</div>
          <h2 class="section-title">Multifamily Sprinkler <span class="text-accent">Design-Build Process</span></h2>
          <p class="section-desc">Richardson manages every step from AHJ pre-application through final Certificate of Occupancy sign-off.</p>
        </div>
        <div class="process-steps">
          <div class="process-step reveal-up">
            <div class="step-number">01</div>
            <div class="step-icon"><i class="fa-solid fa-building-columns"></i></div>
            <h3 class="step-title">AHJ Pre-Application</h3>
            <p class="step-desc">We meet with the Authority Having Jurisdiction before design begins to confirm which NFPA standard applies, local amendments, and any project-specific conditions. This prevents costly redesigns.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">02</div>
            <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <h3 class="step-title">Design &amp; Hydraulic Calcs</h3>
            <p class="step-desc">NICET-certified designers produce NFPA 13/13R/13D compliant shop drawings with hydraulic calculations, coordinated with architectural, structural, and MEP drawings to prevent conflicts.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">03</div>
            <div class="step-icon"><i class="fa-solid fa-hammer"></i></div>
            <h3 class="step-title">Installation</h3>
            <p class="step-desc">Licensed C-16 crews install on the GC's schedule. For occupied retrofit projects, we sequence work by unit with minimal water-off impairment windows to minimize tenant disruption.</p>
          </div>
          <div class="process-connector reveal-up"><i class="fa-solid fa-arrow-right"></i></div>
          <div class="process-step reveal-up">
            <div class="step-number">04</div>
            <div class="step-icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <h3 class="step-title">Inspection &amp; CO Sign-Off</h3>
            <p class="step-desc">We schedule and manage all AHJ inspections, hydrostatic testing, and final acceptance testing. As-built drawings, O&amp;M manuals, and inspection certificates delivered for the CO package.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ ========== -->
    <section class="section faq" id="faq-multifamily" style="background: var(--c-surface); padding-top: 3rem; padding-bottom: 3rem;">
      <div class="container" style="max-width: 800px;">
        <div class="section-header reveal-up">
          <div class="section-badge">FAQ</div>
          <h2 class="section-title">Multifamily Fire Sprinkler <span class="text-accent">Questions</span></h2>
        </div>
        <div class="faq-list reveal-up">
          <?php
          $faqs = [
            [
              'q' => 'Are fire sprinklers required in apartment buildings in California?',
              'a' => 'Yes. California mandates fire sprinkler systems in all new multifamily residential buildings under CFC Section 903.3. The standard depends on building height: NFPA 13D for one- and two-family homes, NFPA 13R for residential buildings up to four stories, and NFPA 13 for mid-rise and high-rise buildings and all mixed-use structures. Retrofit requirements apply to substantially renovated buildings in many Sacramento-area jurisdictions.',
            ],
            [
              'q' => 'What is the difference between NFPA 13 and NFPA 13R for apartments?',
              'a' => 'NFPA 13R is designed specifically for residential buildings up to four stories. It allows coverage omissions in attics, crawl spaces, and exterior balconies in many configurations, and uses residential-pattern sprinkler heads optimized for residential activation characteristics. NFPA 13 is the full commercial standard, requires coverage in virtually all areas, and is mandatory for buildings over four stories, mixed-use structures, and any building the AHJ determines needs full protection. NFPA 13 typically costs 20–40% more per unit than NFPA 13R.',
            ],
            [
              'q' => 'How much does a fire sprinkler system cost for an apartment building?',
              'a' => 'New construction costs typically range from $4,000–$9,500 per unit for NFPA 13R garden-style apartments and $7,000–$18,000 per unit for mid-rise and high-rise buildings under NFPA 13. On a per-square-foot basis, expect $3.00–$7.50 depending on system complexity. Retrofit projects in occupied buildings cost 20–40% more due to access constraints and sequencing requirements. Call (916) 849-6441 for a project-specific estimate.',
            ],
            [
              'q' => 'Can fire sprinklers be installed in an occupied apartment building?',
              'a' => 'Yes, with proper planning. Richardson has extensive experience with occupied-building installations for apartment retrofits. We work with property managers to sequence installations by unit or floor, minimize water-off impairment windows to under 4 hours per affected area, and coordinate around tenant schedules. Impairment notifications to the AHJ, insurance carrier, and tenants are managed by Richardson per NFPA 25 and local fire code requirements.',
            ],
            [
              'q' => 'Do I need a fire pump for my multifamily fire sprinkler system?',
              'a' => 'Whether a fire pump is required depends on the building\'s water supply pressure and the hydraulic demand of the sprinkler system. For low-rise projects with good municipal supply, a pump is often not required. For mid-rise and high-rise buildings, and for projects with inadequate street pressure, a fire pump is typically required. Richardson performs water supply analysis as part of the design process and will advise on fire pump requirements early in the project. See our <a href="' . esc_url( home_url( '/fire-pump/' ) ) . '">fire pump services page</a> for more.',
            ],
            [
              'q' => 'What is the NFPA 25 inspection requirement for apartment buildings?',
              'a' => 'NFPA 13R and NFPA 13 systems in multifamily buildings are subject to NFPA 25 inspection, testing, and maintenance requirements — the same annual/quarterly/5-year cycle as commercial buildings. The property owner is responsible for ensuring compliance. Richardson provides NFPA 25 annual inspection services for apartment complexes across Northern California. See our <a href="' . esc_url( home_url( '/inspection-testing/' ) ) . '">inspection and testing page</a> for details.',
            ],
          ];
          foreach ( $faqs as $faq ) : ?>
            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                <?php echo esc_html( $faq['q'] ); ?>
                <i class="fa-solid fa-chevron-down faq-icon"></i>
              </button>
              <div class="faq-answer">
                <p><?php echo wp_kses_post( $faq['a'] ); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== RELATED GUIDES ========== -->
    <section class="section" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
      <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 1.5rem;">
          <div class="section-badge">Further Reading</div>
          <h2 class="section-title">Related <span class="text-accent">Guides</span></h2>
        </div>
        <div class="services-grid services-grid--4 reveal-up">
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-building-user"></i></div>
            <h3 class="service-card__title">NFPA 13R vs. 13 for Apartment Buildings</h3>
            <a href="<?php echo esc_url( home_url( '/nfpa-13r-vs-13-apartment-sprinklers/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-house-fire"></i></div>
            <h3 class="service-card__title">NFPA 13D Residential Sprinkler System Guide</h3>
            <a href="<?php echo esc_url( home_url( '/nfpa-13d-residential-fire-sprinklers/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-clipboard-list"></i></div>
            <h3 class="service-card__title">NFPA 25: The Complete Inspection Guide</h3>
            <a href="<?php echo esc_url( home_url( '/nfpa-25-inspection-guide/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="service-card service-card--sm">
            <div class="service-card__icon"><i class="fa-solid fa-dollar-sign"></i></div>
            <h3 class="service-card__title">Fire Sprinkler Cost Guide 2026</h3>
            <a href="<?php echo esc_url( home_url( '/cost-guide/' ) ); ?>" class="service-card__link">Read Guide <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section contact" style="padding-top: 4rem; padding-bottom: 4rem; background: #C41230;">
      <div class="container" style="text-align: center; max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: 2rem; color: #fff; margin-bottom: 1rem;">
          Get a Multifamily Sprinkler Bid
        </h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
          24–48 hour bids for new construction and retrofit projects. NICET-certified design. CSLB C-16 Licensed (#1053506). Serving Sacramento, Central Valley, and the Bay Area.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="tel:+19168496441" class="btn btn--ghost btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg" style="background: #fff; color: #C41230;">
            Request a Bid
          </a>
        </div>
      </div>
    </section>

  </main>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
