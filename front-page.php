<?php get_header(); ?>

  <!-- ========== HERO ========== -->
  <section id="hero" class="hero">
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
      <div class="hero-overlay"></div>
      <div class="hero-pattern"></div>
    </div>
    <div class="container hero-container">
      <div class="hero-badge reveal-up">
        <span class="badge-dot"></span>
        Based in Antelope, CA — Serving Sacramento Valley Developers &amp; GCs
      </div>
      <h1 class="hero-title reveal-up">
        On Schedule.<br />
        <span class="hero-title--accent">Code Compliant. Every Job.</span>
      </h1>
      <p class="hero-desc reveal-up">
        Richardson Fire Protection is based in Antelope, CA and serves developers and GCs across Sacramento, Stockton, Roseville, Rocklin, Fairfield, Yuba City, and Davis. We handle design, permits, AHJ coordination, and installation — so your schedule stays intact.
      </p>
      <div class="hero-actions reveal-up">
        <a href="tel:+19168496441" class="btn btn--primary btn--lg">
          <i class="fa-solid fa-phone"></i>
          Call (916) 849-6441
        </a>
        <a href="#commercial" class="btn btn--ghost btn--lg">
          Our Services
        </a>
      </div>
      <div class="hero-certifications reveal-up">
        <span class="cert-label">Certified &amp; Compliant</span>
        <div class="cert-items">
          <div class="cert-item"><i class="fa-solid fa-certificate"></i> NFPA Certified</div>
          <div class="cert-item"><i class="fa-solid fa-shield-halved"></i> State Licensed</div>
          <div class="cert-item"><i class="fa-solid fa-star"></i> UL Listed</div>
          <div class="cert-item"><i class="fa-solid fa-check-double"></i> OSHA Compliant</div>
        </div>
      </div>
    </div>
    <div class="hero-scroll-indicator">
      <div class="scroll-line"><span></span></div>
      <span>Scroll</span>
    </div>
  </section>

  <!-- ========== STATS TICKER ========== -->
  <section class="stats-ticker">
    <div class="ticker-track">
      <div class="ticker-items" id="tickerItems">
        <div class="ticker-item"><span class="ticker-num" data-target="30">0</span><span>+</span><span class="ticker-label">Years Experience</span></div>
        <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
        <div class="ticker-item"><span class="ticker-num" data-target="5000">0</span><span>+</span><span class="ticker-label">Systems Installed</span></div>
        <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
        <div class="ticker-item"><span class="ticker-num" data-target="98">0</span><span>%</span><span class="ticker-label">Client Satisfaction</span></div>
        <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
        <div class="ticker-item"><span class="ticker-num" data-target="24">0</span><span>/7</span><span class="ticker-label">Emergency Response</span></div>
        <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
        <div class="ticker-item"><span class="ticker-num" data-target="500">0</span><span>+</span><span class="ticker-label">Commercial Clients</span></div>
        <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
        <div class="ticker-item"><span class="ticker-num" data-target="15">0</span><span>+</span><span class="ticker-label">Counties Served</span></div>
        <div class="ticker-sep"><i class="fa-solid fa-fire"></i></div>
      </div>
    </div>
  </section>

  <!-- ========== ABOUT ========== -->
  <section id="about" class="section about">
    <div class="container about-container">
      <div class="about-visual reveal-left">
        <div class="about-img-wrap">
          <div class="about-img-card about-img-card--1">
            <img
              src="<?php echo esc_url( rfp_truck_img_url() ); ?>"
              alt="Richardson Fire Protection service truck"
              style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit; display: block;"
              loading="lazy"
            />
          </div>
          <div class="about-img-card about-img-card--2">
            <img
              src="<?php echo esc_url( rfp_bg_img_url() ); ?>"
              alt="Richardson Fire Protection team at work"
              style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit; display: block;"
              loading="lazy"
            />
          </div>
          <div class="about-float-card">
            <div class="float-card-icon"><i class="fa-solid fa-award"></i></div>
            <div class="float-card-content">
              <strong>Trusted Since 1994</strong>
              <span>Sacramento's #1 fire protection firm</span>
            </div>
          </div>
        </div>
      </div>
      <div class="about-content reveal-right">
        <div class="section-badge">About Richardson</div>
        <h2 class="section-title">Serious Fire Protection<br /><span class="text-accent">For Serious Operations</span></h2>
        <p class="about-lead">Richardson Fire Protection is Sacramento's go-to fire sprinkler sub for developers and general contractors who need a reliable, schedule-driven trade partner — not another headache on the job.</p>
        <p class="about-body">We're a family-owned fire protection company based in Antelope, CA with decades of experience on ground-up commercial, industrial, and multifamily projects. Our team handles design-build, permits, AHJ coordination, rough-in, and final certification — one sub, one point of contact, zero surprises on inspection day.</p>
        <div class="about-pillars">
          <div class="pillar">
            <div class="pillar-icon"><i class="fa-solid fa-drafting-compass"></i></div>
            <div class="pillar-content">
              <strong>Design-Build. Permits Included.</strong>
              <span>We engineer your system, pull the permits, and coordinate the AHJ — you stay focused on your critical path.</span>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-icon"><i class="fa-solid fa-calendar-check"></i></div>
            <div class="pillar-content">
              <strong>Schedule-Driven Crews</strong>
              <span>We show up when we say we will. Rough-in, above-ceiling, and final on time — every phase, every project.</span>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <div class="pillar-content">
              <strong>Clean Inspections. Every Time.</strong>
              <span>Our systems pass AHJ final on the first attempt. No punch list surprises, no certificate delays holding up your CO.</span>
            </div>
          </div>
        </div>
        <a href="tel:+19168496441" class="btn btn--primary">
          <i class="fa-solid fa-phone"></i> Call Us Now
        </a>
      </div>
    </div>
  </section>

  <!-- ========== COMMERCIAL ========== -->
  <section id="commercial" class="section commercial">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">Commercial</div>
        <h2 class="section-title">Commercial Fire <span class="text-accent">Protection</span></h2>
        <p class="section-desc">Comprehensive fire protection systems for offices, retail centers, restaurants, hotels, schools, and multi-tenant buildings.</p>
      </div>
      <div class="services-grid">
        <div class="service-card reveal-up" data-delay="0">
          <div class="service-card__icon"><i class="fa-solid fa-droplet"></i></div>
          <div class="service-card__tag">Suppression</div>
          <h3 class="service-card__title">Sprinkler System Design &amp; Installation</h3>
          <p class="service-card__desc">NFPA 13-compliant wet, dry, and pre-action sprinkler systems engineered for your building's specific occupancy classification.</p>
          <ul class="service-card__features">
            <li><i class="fa-solid fa-check"></i> Wet &amp; dry pipe systems</li>
            <li><i class="fa-solid fa-check"></i> Pre-action systems</li>
            <li><i class="fa-solid fa-check"></i> Retrofit &amp; tenant improvements</li>
          </ul>
          <a href="#contact" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card reveal-up" data-delay="100">
          <div class="service-card__icon"><i class="fa-solid fa-bell"></i></div>
          <div class="service-card__tag">Detection</div>
          <h3 class="service-card__title">Fire Alarm Systems</h3>
          <p class="service-card__desc">Addressable and conventional fire alarm systems from leading manufacturers — designed, installed, and monitored to NFPA 72 standards.</p>
          <ul class="service-card__features">
            <li><i class="fa-solid fa-check"></i> Addressable panels</li>
            <li><i class="fa-solid fa-check"></i> Smoke &amp; heat detectors</li>
            <li><i class="fa-solid fa-check"></i> Central station monitoring</li>
          </ul>
          <a href="#contact" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card reveal-up service-card--featured" data-delay="200">
          <div class="featured-badge">Most Requested</div>
          <div class="service-card__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
          <div class="service-card__tag">Compliance</div>
          <h3 class="service-card__title">Annual Inspection &amp; Testing</h3>
          <p class="service-card__desc">Stay code-compliant with thorough inspections, testing, and certification of all fire protection systems — fully documented for your records.</p>
          <ul class="service-card__features">
            <li><i class="fa-solid fa-check"></i> Sprinkler inspections (NFPA 25)</li>
            <li><i class="fa-solid fa-check"></i> Alarm testing (NFPA 72)</li>
            <li><i class="fa-solid fa-check"></i> Digital compliance reports</li>
          </ul>
          <a href="#contact" class="service-card__link">Schedule Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== INDUSTRIAL ========== -->
  <section id="industrial" class="section industrial">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">Industrial</div>
        <h2 class="section-title">Industrial Fire <span class="text-accent">Systems</span></h2>
        <p class="section-desc">Heavy-duty fire suppression and detection for warehouses, manufacturing plants, cold storage, high-piled storage, and hazardous environments.</p>
      </div>
      <div class="services-grid">
        <div class="service-card reveal-up" data-delay="0">
          <div class="service-card__icon"><i class="fa-solid fa-warehouse"></i></div>
          <div class="service-card__tag">Warehouse</div>
          <h3 class="service-card__title">High-Piled Storage Protection</h3>
          <p class="service-card__desc">In-rack and ceiling-level sprinkler systems engineered for high-bay warehouses and distribution centers with complex commodity classification requirements.</p>
          <ul class="service-card__features">
            <li><i class="fa-solid fa-check"></i> In-rack sprinkler systems</li>
            <li><i class="fa-solid fa-check"></i> ESFR ceiling sprinklers</li>
            <li><i class="fa-solid fa-check"></i> Storage commodity analysis</li>
          </ul>
          <a href="#contact" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card reveal-up" data-delay="100">
          <div class="service-card__icon"><i class="fa-solid fa-flask"></i></div>
          <div class="service-card__tag">Suppression</div>
          <h3 class="service-card__title">Special Hazard Suppression</h3>
          <p class="service-card__desc">Clean agent, foam, and CO₂ suppression systems for server rooms, paint booths, commercial kitchens, and other special hazard environments.</p>
          <ul class="service-card__features">
            <li><i class="fa-solid fa-check"></i> Clean agent (FM-200, Novec)</li>
            <li><i class="fa-solid fa-check"></i> ANSUL kitchen systems</li>
            <li><i class="fa-solid fa-check"></i> Foam deluge systems</li>
          </ul>
          <a href="#contact" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card reveal-up" data-delay="200">
          <div class="service-card__icon"><i class="fa-solid fa-gears"></i></div>
          <div class="service-card__tag">Maintenance</div>
          <h3 class="service-card__title">Industrial System Maintenance</h3>
          <p class="service-card__desc">Scheduled and emergency maintenance programs to keep industrial fire systems fully operational and continuously code-compliant.</p>
          <ul class="service-card__features">
            <li><i class="fa-solid fa-check"></i> Preventive maintenance plans</li>
            <li><i class="fa-solid fa-check"></i> 24/7 emergency service</li>
            <li><i class="fa-solid fa-check"></i> Valve &amp; pump maintenance</li>
          </ul>
          <a href="#contact" class="service-card__link">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== RESIDENTIAL / MULTIFAMILY ========== -->
  <section id="residential" class="section residential">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">Residential</div>
        <h2 class="section-title">Multifamily &amp; Apartment <span class="text-accent">Fire Protection</span></h2>
        <p class="section-desc">Code-compliant fire suppression and alarm systems for apartment complexes, condominiums, mixed-use developments, and senior living communities.</p>
      </div>
      <div class="residential-layout">
        <div class="residential-content reveal-left">
          <div class="res-feature">
            <div class="res-feature__icon"><i class="fa-solid fa-building"></i></div>
            <div>
              <h3>NFPA 13R Sprinkler Systems</h3>
              <p>Fully engineered NFPA 13R sprinkler systems for low- and mid-rise multifamily buildings — from new construction ground-up to retrofit projects on occupied properties.</p>
            </div>
          </div>
          <div class="res-feature">
            <div class="res-feature__icon"><i class="fa-solid fa-bell"></i></div>
            <div>
              <h3>Building-Wide Fire Alarm Systems</h3>
              <p>Addressable fire alarm systems with apartment-level notification, common area coverage, and AHJ-compliant monitoring — designed to meet NFPA 72 and local fire code requirements.</p>
            </div>
          </div>
          <div class="res-feature">
            <div class="res-feature__icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <div>
              <h3>Ongoing Inspection &amp; Compliance</h3>
              <p>Annual inspection and testing programs to keep your property continuously code-compliant and your certificates current — critical for insurance, permitting, and lender requirements.</p>
            </div>
          </div>
          <a href="tel:+19168496441" class="btn btn--primary">
            <i class="fa-solid fa-phone"></i> Request a Property Assessment
          </a>
        </div>
        <div class="residential-visual reveal-right">
          <div class="res-stat-cards">
            <div class="res-stat-card">
              <div class="res-stat-icon"><i class="fa-solid fa-building"></i></div>
              <div class="res-stat-num">NFPA 13R</div>
              <div class="res-stat-label">The standard governing multifamily sprinkler systems — we design and install to full compliance</div>
            </div>
            <div class="res-stat-card res-stat-card--accent">
              <div class="res-stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
              <div class="res-stat-num">AHJ Ready</div>
              <div class="res-stat-label">We handle permits, coordination, and final inspection with the Authority Having Jurisdiction</div>
            </div>
            <div class="res-stat-card">
              <div class="res-stat-icon"><i class="fa-solid fa-file-contract"></i></div>
              <div class="res-stat-num">Turnkey</div>
              <div class="res-stat-label">Design through certificate of completion — single point of accountability for the entire scope</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SERVICES ========== -->
  <section id="services" class="section services">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">All Services</div>
        <h2 class="section-title">Everything Fire <span class="text-accent">Protection</span></h2>
        <p class="section-desc">From design and installation to inspection, testing, and emergency service — we handle every aspect of fire protection.</p>
      </div>
      <div class="services-grid services-grid--6">
        <div class="service-card service-card--sm reveal-up" data-delay="0">
          <div class="service-card__icon"><i class="fa-solid fa-drafting-compass"></i></div>
          <h3 class="service-card__title">System Design</h3>
          <p class="service-card__desc">Custom engineering and hydraulic calculations for any building type or occupancy class.</p>
          <a href="#contact" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card service-card--sm reveal-up" data-delay="80">
          <div class="service-card__icon"><i class="fa-solid fa-wrench"></i></div>
          <h3 class="service-card__title">Installation</h3>
          <p class="service-card__desc">Expert installation of sprinkler, alarm, suppression, and monitoring systems to code.</p>
          <a href="#contact" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card service-card--sm reveal-up" data-delay="160">
          <div class="service-card__icon"><i class="fa-solid fa-clipboard-list"></i></div>
          <h3 class="service-card__title">Inspections</h3>
          <p class="service-card__desc">Annual, semi-annual, and quarterly inspections with full documentation and compliance reports.</p>
          <a href="#contact" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card service-card--sm reveal-up" data-delay="240">
          <div class="service-card__icon"><i class="fa-solid fa-vial"></i></div>
          <h3 class="service-card__title">Testing &amp; Certification</h3>
          <p class="service-card__desc">Flow tests, hydrostatic tests, and full system certifications for all fire protection equipment.</p>
          <a href="#contact" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card service-card--sm reveal-up" data-delay="320">
          <div class="service-card__icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <h3 class="service-card__title">Repairs &amp; Upgrades</h3>
          <p class="service-card__desc">Fast repairs, system expansions, and code-required upgrades for existing fire protection equipment.</p>
          <a href="#contact" class="service-card__link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="service-card service-card--sm service-card--featured reveal-up" data-delay="400">
          <div class="featured-badge">24/7</div>
          <div class="service-card__icon"><i class="fa-solid fa-truck-fast"></i></div>
          <h3 class="service-card__title">Emergency Service</h3>
          <p class="service-card__desc">Around-the-clock emergency response for system failures, impairments, and fire damage restoration.</p>
          <a href="tel:+19168496441" class="service-card__link">Call Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PROCESS ========== -->
  <section id="process" class="section process">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">How We Work</div>
        <h2 class="section-title">Built for Your <span class="text-accent">Project Schedule</span></h2>
        <p class="section-desc">From pre-construction bid through certificate of completion — we move at the pace your schedule demands.</p>
      </div>
      <div class="process-steps">
        <div class="process-step reveal-up" data-delay="0">
          <div class="step-number">01</div>
          <div class="step-icon"><i class="fa-solid fa-file-lines"></i></div>
          <h3 class="step-title">Bid &amp; Plan Review</h3>
          <p class="step-desc">Send us your plans and we turn around a complete, competitive bid. We flag code issues early — before they become RFIs on-site.</p>
          <div class="step-duration"><i class="fa-regular fa-clock"></i> 24–48 hr turnaround</div>
        </div>
        <div class="process-connector reveal-up" data-delay="50"><i class="fa-solid fa-arrow-right"></i></div>
        <div class="process-step reveal-up" data-delay="100">
          <div class="step-number">02</div>
          <div class="step-icon"><i class="fa-solid fa-drafting-compass"></i></div>
          <h3 class="step-title">Design, Engineer &amp; Permit</h3>
          <p class="step-desc">We produce stamped hydraulic calculations, shop drawings, and handle all permit submittals to the AHJ — no extra sub-consultant needed.</p>
          <div class="step-duration"><i class="fa-regular fa-clock"></i> 1–2 weeks</div>
        </div>
        <div class="process-connector reveal-up" data-delay="150"><i class="fa-solid fa-arrow-right"></i></div>
        <div class="process-step reveal-up" data-delay="200">
          <div class="step-number">03</div>
          <div class="step-icon"><i class="fa-solid fa-hard-hat"></i></div>
          <h3 class="step-title">Phased Field Installation</h3>
          <p class="step-desc">Our crews show up on your schedule — underground, rough-in, above-ceiling, and trim-out coordinated with your super so nothing waits on us.</p>
          <div class="step-duration"><i class="fa-regular fa-clock"></i> Per project phase</div>
        </div>
        <div class="process-connector reveal-up" data-delay="250"><i class="fa-solid fa-arrow-right"></i></div>
        <div class="process-step reveal-up" data-delay="300">
          <div class="step-number">04</div>
          <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
          <h3 class="step-title">Test, AHJ Final &amp; Cert</h3>
          <p class="step-desc">We coordinate the AHJ final inspection, conduct full system testing, and deliver the certificate of completion — no delays to your CO.</p>
          <div class="step-duration"><i class="fa-regular fa-clock"></i> First-pass approval</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TESTIMONIALS ========== -->
  <section id="testimonials" class="section testimonials">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">Client Reviews</div>
        <h2 class="section-title">What Our Clients <span class="text-accent">Say</span></h2>
      </div>
      <div class="testimonials-slider reveal-up">
        <div class="testimonials-track" id="testimonialsTrack">
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <blockquote>"Richardson installed our entire sprinkler system for our 80,000 sq ft warehouse. On time, on budget, zero issues with the AHJ inspection. I wouldn't use anyone else."</blockquote>
            <div class="testimonial-author">
              <div class="author-avatar">MR</div>
              <div class="author-info">
                <strong>Mike Ramirez</strong>
                <span>General Manager, Pacific West Distribution</span>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <blockquote>"They retrofitted sprinklers into our restaurant without closing for a single day. The crew was professional, respectful of our space, and finished ahead of schedule."</blockquote>
            <div class="testimonial-author">
              <div class="author-avatar">TS</div>
              <div class="author-info">
                <strong>Tina Sato</strong>
                <span>Owner, Sato's Kitchen &amp; Bar, Sacramento</span>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <blockquote>"Called at 2am when a sprinkler head broke at our apartment complex. Technician was on-site within the hour. That kind of response is why we've been a customer for 12 years."</blockquote>
            <div class="testimonial-author">
              <div class="author-avatar">DK</div>
              <div class="author-info">
                <strong>David Kim</strong>
                <span>Property Manager, Granite Bay Residential</span>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <blockquote>"Richardson Fire Protection has handled all our inspections and maintenance for our entire commercial portfolio. Reliable, thorough, and their reports are always clean."</blockquote>
            <div class="testimonial-author">
              <div class="author-avatar">PL</div>
              <div class="author-info">
                <strong>Patricia Lee</strong>
                <span>VP of Facilities, Meridian Commercial REIT</span>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-controls">
          <button class="slider-btn slider-prev" id="sliderPrev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
          <div class="slider-dots" id="sliderDots"></div>
          <button class="slider-btn slider-next" id="sliderNext" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== BLOG ========== -->
  <section id="blog" class="section blog">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-badge">Blog</div>
        <h2 class="section-title">Fire Safety <span class="text-accent">Resources</span></h2>
        <p class="section-desc">Expert insights on fire code compliance, system maintenance, and life safety best practices.</p>
      </div>
      <div class="blog-grid reveal-up">
        <?php
        $blog_query = new WP_Query( [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );

        if ( $blog_query->have_posts() ) :
            while ( $blog_query->have_posts() ) :
                $blog_query->the_post();
                $cats     = get_the_category();
                $cat_name = $cats ? esc_html( $cats[0]->name ) : 'News';
        ?>
        <article class="blog-card">
          <?php
          $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'medium' ) : rfp_truck_img_url();
          ?>
          <div class="blog-card__img" style="background-image: url('<?php echo esc_url( $thumb ); ?>'); background-size: cover; background-position: center;"></div>
          <div class="blog-card__body">
            <span class="blog-tag"><?php echo $cat_name; ?></span>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words( get_the_excerpt(), 25, '&hellip;' ); ?></p>
            <a href="<?php the_permalink(); ?>" class="blog-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
        <!-- Placeholder cards shown until blog posts are published -->
        <article class="blog-card">
          <div class="blog-card__img" style="background-image: url('<?php echo esc_url( rfp_truck_img_url() ); ?>'); background-size: cover; background-position: center;"></div>
          <div class="blog-card__body">
            <span class="blog-tag">Compliance</span>
            <h3>NFPA 25: What Every Property Manager Needs to Know</h3>
            <p>Understanding your annual sprinkler inspection requirements under NFPA 25 and what to expect from a compliant inspection report.</p>
            <a href="#" class="blog-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
        <article class="blog-card">
          <div class="blog-card__img" style="background-image: url('<?php echo esc_url( rfp_bg_img_url() ); ?>'); background-size: cover; background-position: center;"></div>
          <div class="blog-card__body">
            <span class="blog-tag">Multifamily</span>
            <h3>NFPA 13R vs. 13: Which Standard Applies to Your Apartment Complex?</h3>
            <p>Understanding the difference between NFPA 13 and 13R — and which one your multifamily project requires — is critical before breaking ground.</p>
            <a href="#" class="blog-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
        <article class="blog-card">
          <div class="blog-card__img" style="background-image: url('<?php echo esc_url( rfp_truck_img_url() ); ?>'); background-size: cover; background-position: center;"></div>
          <div class="blog-card__body">
            <span class="blog-tag">Industrial</span>
            <h3>High-Piled Storage &amp; Fire Code: A Warehouse Owner's Guide</h3>
            <p>Storing commodities over 12 feet triggers specific fire code requirements. Here's what you need to know before your next AHJ inspection.</p>
            <a href="#" class="blog-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </article>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT / CTA ========== -->
  <section id="contact" class="section contact">
    <div class="container contact-container">
      <div class="contact-info reveal-left">
        <div class="section-badge">Get in Touch</div>
        <h2 class="section-title">Bid a Project or <span class="text-accent">Request a Consultation?</span></h2>
        <p class="contact-lead">We respond to all bid requests and pre-construction consultations within one business day. Send us your plans or call to talk through scope — we work fast so your schedule doesn't slip.</p>
        <div class="contact-details">
          <div class="contact-item">
            <div class="contact-item__icon"><i class="fa-solid fa-phone"></i></div>
            <div class="contact-item__content">
              <strong>Call or Text</strong>
              <a href="tel:+19168496441">(916) 849-6441</a>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item__icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="contact-item__content">
              <strong>Email</strong>
              <a href="mailto:Chris@Richardsonfirepro.com">Chris@Richardsonfirepro.com</a>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item__icon"><i class="fa-solid fa-location-dot"></i></div>
            <div class="contact-item__content">
              <strong>Office</strong>
              <span>3599 Scotland Drive, Antelope, CA 95843</span>
            </div>
          </div>
          <div class="contact-item contact-item--emergency">
            <div class="contact-item__icon"><i class="fa-solid fa-truck-fast"></i></div>
            <div class="contact-item__content">
              <strong>24/7 Emergency Line</strong>
              <a href="tel:+19168496441">(916) 849-6441</a>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form-wrap reveal-right">
        <form class="contact-form" id="contactForm" novalidate>
          <?php wp_nonce_field( 'rfp_contact', 'rfp_nonce' ); ?>
          <div class="form-row">
            <div class="form-group">
              <label for="firstName">First Name *</label>
              <input type="text" id="firstName" name="firstName" placeholder="John" required />
            </div>
            <div class="form-group">
              <label for="lastName">Last Name *</label>
              <input type="text" id="lastName" name="lastName" placeholder="Smith" required />
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" placeholder="john@company.com" required />
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="(916) 555-0100" />
          </div>
          <div class="form-group">
            <label for="serviceType">Service Needed *</label>
            <select id="serviceType" name="serviceType" required>
              <option value="">Select a service...</option>
              <option value="commercial">Commercial Fire Protection</option>
              <option value="industrial">Industrial Systems</option>
              <option value="residential">Multifamily / Apartment Complex</option>
              <option value="inspection">Inspection &amp; Testing</option>
              <option value="emergency">Emergency Service</option>
              <option value="other">Other / Not Sure</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Tell Us About Your Project</label>
            <textarea id="message" name="message" rows="4" placeholder="Facility type, square footage, number of units/floors, current system status, timeline..."></textarea>
          </div>
          <div class="form-group form-checkbox">
            <label class="checkbox-label">
              <input type="checkbox" id="consent" name="consent" required />
              <span class="checkbox-custom"></span>
              I agree to be contacted by Richardson Fire Protection.
            </label>
          </div>
          <button type="submit" class="btn btn--primary btn--block btn--lg">
            <span class="btn-text">Request a Free Quote</span>
            <i class="fa-solid fa-arrow-right"></i>
          </button>
          <div class="form-success" id="formSuccess" hidden>
            <i class="fa-solid fa-circle-check"></i>
            <strong>Message received!</strong> We'll follow up within one business day. For urgent project needs call (916) 849-6441.
          </div>
          <div class="form-error" id="formError" hidden></div>
        </form>
      </div>
    </div>
  </section>

<?php get_template_part( 'template-parts/locations-strip' ); ?>

<?php get_footer(); ?>
