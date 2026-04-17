<?php
/**
 * Locations Strip — reusable section included via get_template_part().
 * Shows 7 city pills linking to individual location pages.
 */
$rfp_cities = [
    [ 'name' => 'Sacramento', 'slug' => 'sacramento' ],
    [ 'name' => 'Stockton',   'slug' => 'stockton'   ],
    [ 'name' => 'Roseville',  'slug' => 'roseville'  ],
    [ 'name' => 'Rocklin',    'slug' => 'rocklin'     ],
    [ 'name' => 'Fairfield',  'slug' => 'fairfield'  ],
    [ 'name' => 'Yuba City',  'slug' => 'yuba-city'  ],
    [ 'name' => 'Davis',      'slug' => 'davis'      ],
];
?>
<section class="section locations-strip" aria-label="Service Areas">
  <div class="container">
    <div class="section-header reveal-up" style="margin-bottom: 2rem;">
      <div class="section-badge">Service Areas</div>
      <h2 class="section-title">Fire Protection Across <span class="text-accent">Northern California</span></h2>
      <p class="section-desc">We serve GCs and developers throughout the Sacramento Valley. Click your city for local AHJ info and project guidance.</p>
    </div>
    <ul class="locations-strip__list reveal-up">
      <?php foreach ( $rfp_cities as $city ) : ?>
        <li class="locations-strip__item">
          <a href="<?php echo esc_url( home_url( '/locations/' . $city['slug'] . '/' ) ); ?>"
             class="locations-strip__link">
            <i class="fa-solid fa-location-dot"></i>
            <?php echo esc_html( $city['name'] ); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="reveal-up" style="text-align: center; margin-top: 1.75rem;">
      <a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="btn btn--ghost">
        View All Service Areas <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>
