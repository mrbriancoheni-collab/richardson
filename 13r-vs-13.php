<?php
/**
 * Template Name: NFPA 13R vs 13 Guide
 * Template Post Type: page
 */
get_header();
?>

  <main class="site-main">

    <!-- ========== HERO ========== -->
    <section class="hero" style="min-height: 42vh; padding-top: 7rem; padding-bottom: 3rem;">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
      </div>
      <div class="container hero-container" style="align-items: flex-start; padding-top: 4rem;">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          Multifamily Fire Code
        </div>
        <h1 class="hero-title reveal-up">
          NFPA 13R vs. NFPA 13: <span class="hero-title--accent">Which Standard Applies to Your Building?</span>
        </h1>
        <p class="hero-desc reveal-up" style="max-width: 640px;">
          A practical guide for developers, architects, and GCs — when California requires NFPA 13R vs. full NFPA 13 sprinkler systems in residential and mixed-use projects.
        </p>
        <div class="hero-actions reveal-up">
          <a href="tel:+19168496441" class="btn btn--primary btn--lg">
            <i class="fa-solid fa-phone"></i> (916) 849-6441
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">
            Get a Bid
          </a>
        </div>
      </div>
    </section>

    <!-- ========== ARTICLE ========== -->
    <section class="section">
      <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">

          <h2>The Three NFPA Sprinkler Standards for Residential Buildings</h2>
          <p>When a California multifamily project requires fire sprinklers — and nearly all of them do — the design standard used affects system cost, complexity, and performance. Three NFPA standards cover residential applications, each with different scopes:</p>
          <p><strong>NFPA 13D</strong> — One- and Two-Family Dwellings and Manufactured Homes. The most basic standard, designed to give occupants time to escape rather than suppress the fire. Limited to single-family homes and duplexes.</p>
          <p><strong>NFPA 13R</strong> — Residential Occupancies Up to and Including Four Stories in Height. Designed for low-rise multifamily with some attic and concealed space exemptions. More cost-effective than full NFPA 13 for qualifying buildings.</p>
          <p><strong>NFPA 13</strong> — Standard for the Installation of Sprinkler Systems. The full commercial standard. Required for buildings over 4 stories, mixed occupancies, and buildings with commercial uses. Covers all occupancy types with no residential exemptions.</p>

          <h2>When Does California Require NFPA 13 vs. 13R?</h2>
          <div class="cost-table-wrap">
            <table class="cost-table">
              <thead>
                <tr><th>Building Type</th><th>Required Standard</th></tr>
              </thead>
              <tbody>
                <tr><td>1–2 family home</td><td>NFPA 13D</td></tr>
                <tr><td>Townhome (attached, ≤ 3 stories)</td><td>NFPA 13D or 13R (per jurisdiction)</td></tr>
                <tr><td>Apartment / condo ≤ 4 stories</td><td>NFPA 13R</td></tr>
                <tr><td>Apartment / condo 5+ stories</td><td>NFPA 13</td></tr>
                <tr><td>Mixed-use (residential + commercial)</td><td>NFPA 13 (commercial standard)</td></tr>
                <tr><td>Senior living / assisted living</td><td>NFPA 13 (I-1 occupancy)</td></tr>
                <tr><td>Hotels / motels (low-rise)</td><td>NFPA 13R</td></tr>
                <tr><td>Hotels / motels (high-rise)</td><td>NFPA 13</td></tr>
                <tr><td>Student housing ≤ 4 stories</td><td>NFPA 13R</td></tr>
                <tr><td>Student housing 5+ stories</td><td>NFPA 13</td></tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.875rem; color: var(--c-text-muted);">Note: California Building Code Chapter 9 and local AHJ amendments can increase the threshold. Some California jurisdictions require NFPA 13 where the state minimum would permit 13R — confirm with your local fire department before design.</p>

          <h2>Key Design Differences: 13R vs. 13</h2>
          <p><strong>Attic and Concealed Space Coverage:</strong> NFPA 13R allows sprinklers to be omitted from attic spaces, closets under 24 sq ft, and certain concealed combustible spaces — a significant cost-saver in wood-frame construction. NFPA 13 requires sprinkler coverage in virtually all concealed combustible spaces.</p>
          <p><strong>Sprinkler Head Types:</strong> NFPA 13R permits residential-pattern sprinkler heads optimized for room geometry and response time in residential settings. NFPA 13 also allows residential heads in dwelling units but requires standard commercial heads in common areas.</p>
          <p><strong>Water Supply Requirements:</strong> NFPA 13R systems have lower calculated water demand than NFPA 13 systems of comparable area. This often means a smaller water meter, smaller underground supply pipe, and lower fire flow requirement from the utility — all reducing infrastructure cost.</p>
          <p><strong>Common Area Coverage:</strong> NFPA 13R requires coverage in common areas (corridors, lobbies, stairwells, parking levels under building). NFPA 13 requires the same but with higher design density.</p>
          <p><strong>Balconies and Decks:</strong> NFPA 13R (2015 edition and later) requires sprinklers on balconies and exterior decks. This is a common area where plan checkers flag errors on submitted drawings.</p>

          <h2>Cost Difference: 13R vs. 13</h2>
          <p>For a typical 4-story, 100-unit apartment building:</p>
          <div class="cost-table-wrap">
            <table class="cost-table">
              <thead>
                <tr><th>System Type</th><th>Typical Installed Cost Per Unit</th></tr>
              </thead>
              <tbody>
                <tr><td>NFPA 13R system</td><td>$1,000 – $1,500 per unit</td></tr>
                <tr><td>NFPA 13 system</td><td>$1,400 – $2,200 per unit</td></tr>
              </tbody>
            </table>
          </div>
          <p>The cost difference comes primarily from additional coverage in concealed spaces, higher-density heads, and larger water supply infrastructure. For a 100-unit project, the difference can be $40,000–$70,000 in installed cost.</p>

          <h2>When an Owner Might Choose NFPA 13 Over 13R</h2>
          <p>Some developers voluntarily specify NFPA 13 for 13R-qualifying buildings:</p>
          <ul>
            <li><strong>Insurance reasons:</strong> Some carriers offer lower premiums for NFPA 13 buildings</li>
            <li><strong>Future proofing:</strong> Adding stories later is easier if the system is already 13-compliant</li>
            <li><strong>Financing requirements:</strong> Some lenders or investors specify NFPA 13 in their underwriting requirements</li>
            <li><strong>High-value finishes:</strong> In luxury multifamily, concealed-space coverage is a selling point for buyers and insurers</li>
          </ul>

          <h2>California-Specific Considerations</h2>
          <p>California's 2022 CBC and CFC align with NFPA 13R 2022 edition for qualifying buildings. However:</p>
          <ul>
            <li><strong>High-rise threshold:</strong> California defines high-rise as 55 ft above grade (not 4 stories). A 4-story building with high floor-to-floor heights could exceed 55 ft and trigger high-rise provisions requiring NFPA 13 and additional life safety features.</li>
            <li><strong>AHJ discretion:</strong> Local fire marshals can require NFPA 13 in locations with limited water supply, difficult access, or other risk factors.</li>
            <li><strong>Title 19 overlay:</strong> California Title 19 CCR adds state-specific requirements on top of NFPA standards for all system types.</li>
          </ul>

          <!-- FAQ -->
          <h2 style="margin-top: 3rem;">Frequently Asked Questions</h2>
          <div class="faq-list">

            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                Does California require fire sprinklers in apartments?
                <i class="fa-solid fa-chevron-down"></i>
              </button>
              <div class="faq-answer">
                <p>Yes. California requires fire sprinklers in all new multifamily residential buildings. The standard depends on building height: NFPA 13D for 1-2 family, NFPA 13R for buildings up to 4 stories, and NFPA 13 for 5+ story buildings or mixed-use projects.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                What is the key difference between NFPA 13 and NFPA 13R?
                <i class="fa-solid fa-chevron-down"></i>
              </button>
              <div class="faq-answer">
                <p>NFPA 13R is a reduced-coverage standard for low-rise residential up to 4 stories. It allows sprinklers to be omitted from attic spaces and small closets, resulting in lower cost. NFPA 13 requires complete coverage of all combustible spaces and is required for buildings over 4 stories, mixed-use, and commercial occupancies.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                How much does a multifamily fire sprinkler system cost per unit?
                <i class="fa-solid fa-chevron-down"></i>
              </button>
              <div class="faq-answer">
                <p>NFPA 13R systems for low-rise apartments typically cost $1,000–$1,500 per unit installed. NFPA 13 systems run $1,400–$2,200 per unit. Final cost depends on unit count, building height, water supply conditions, and local AHJ requirements. Richardson provides detailed per-unit estimates.</p>
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question" aria-expanded="false">
                Can we use NFPA 13R for a 5-story apartment building?
                <i class="fa-solid fa-chevron-down"></i>
              </button>
              <div class="faq-answer">
                <p>No. NFPA 13R is limited to buildings four stories or fewer above grade. A 5-story building requires a full NFPA 13 system. Additionally, if any building exceeds 55 feet above grade (California's high-rise threshold), high-rise provisions and NFPA 13 apply regardless of story count.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section style="background: var(--c-red); color: #fff; text-align: center; padding: 4rem 1.5rem;">
      <div class="container" style="max-width: 640px;">
        <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem;">
          Planning a Multifamily Project?
        </h2>
        <p style="opacity: 0.9; margin-bottom: 2rem;">
          Richardson designs and installs NFPA 13, 13R, and 13D systems across Northern California. Send us your plans for a 24–48 hour bid.
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
