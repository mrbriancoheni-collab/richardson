<?php
/**
 * Richardson Fire Protection — inc/seo.php
 * Complete local SEO: meta tags, Open Graph, Twitter Card, JSON-LD schema.
 */

// ─── Business Data (Single Source of Truth) ─────────────────────────────────

function rfp_business_data() {
    return [
        'name'          => 'Richardson Fire Protection',
        'legal_name'    => 'Richardson Fire Protection Inc.',
        'description'   => 'Fire sprinkler contractor serving developers and general contractors across Sacramento and Northern California. New construction, tenant improvements, and multifamily. CSFM-certified, NICET licensed.',
        'url'           => home_url('/'),
        'phone'         => '+1-916-849-6441',
        'phone_display' => '(916) 849-6441',
        'email'         => 'Chris@Richardsonfirepro.com',
        'address'       => [
            'street'   => '3599 Scotland Drive',
            'city'     => 'Antelope',
            'region'   => 'CA',
            'postal'   => '95843',
            'country'  => 'US',
        ],
        'geo'           => [
            'lat' => 38.7074,
            'lng' => -121.3653,
        ],
        'hours'         => [
            [ 'days' => [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ], 'open' => '07:00', 'close' => '17:00' ],
        ],
        'service_area'  => [
            'Sacramento', 'Elk Grove', 'Roseville', 'Folsom', 'Rancho Cordova',
            'Citrus Heights', 'Natomas', 'West Sacramento', 'Davis', 'Woodland',
            'Auburn', 'Rocklin', 'Lincoln', 'Yuba City', 'Marysville',
        ],
        'social'        => [
            'https://www.facebook.com/richardsonfireprotection',
            'https://www.linkedin.com/company/richardson-fire-protection',
        ],
        'license'       => 'CSLB #1053506 | CSFM Certified',
        'founding_year' => '2023',
        'price_range'   => '$$',
        'logo_url'      => rfp_logo_url(),
        'og_image_url'  => rfp_bg_img_url(),
    ];
}

// ─── Page-Aware SEO Data ─────────────────────────────────────────────────────

function rfp_get_page_seo() {
    $biz = rfp_business_data();

    // Defaults
    $seo = [
        'title'       => get_bloginfo('name') . ' | Sacramento Fire Protection Contractor',
        'description' => $biz['description'],
        'type'        => 'website',
        'image'       => $biz['og_image_url'],
        'schema_type' => 'home',
    ];

    // ── City location pages and city+service pages ───────────────────
    if ( is_singular('page') ) {
        $post   = get_queried_object();
        $slug   = $post->post_name ?? '';
        $parent = get_post( $post->post_parent );

        // Child of /locations/ hub → location_city
        if ( $parent && 'locations' === $parent->post_name && function_exists('rfp_location_data') ) {
            $loc = rfp_location_data( $slug );
            if ( $loc ) {
                $raw = 'Richardson Fire Protection serves GCs and developers in ' . $loc['name'] . '. NFPA 13 design-build, ' . $loc['ahj_name'] . ' permit coordination, and first-pass inspections. Bids in 24–48 hrs. Call (916) 849-6441.';
                $seo['title']       = 'Fire Protection in ' . $loc['name'] . ', CA | ' . $loc['county'] . ' Fire Sprinkler Contractor';
                $seo['description'] = substr( wp_strip_all_tags( $raw ), 0, 157 ) . '...';
                $seo['schema_type'] = 'location_city';
                $seo['location']    = $loc;
                $seo['description'] = esc_attr( $seo['description'] );
                return $seo;
            }
        }

        // Child of a city page with service slug → city_service
        $service_slugs = [
            'commercial', 'industrial', 'residential',
            'fire-pump-design', 'fire-pump-installation', 'fire-pump-repair', 'fire-pump-testing',
        ];
        if ( $parent && function_exists( 'rfp_all_locations' ) && in_array( $slug, $service_slugs, true ) ) {
            $city_slugs = array_keys( rfp_all_locations() );
            if ( in_array( $parent->post_name, $city_slugs, true ) ) {
                $loc = rfp_location_data( $parent->post_name );
                if ( $loc ) {
                    $svc_labels = [
                        'commercial'             => 'Commercial Fire Protection',
                        'industrial'             => 'Industrial Fire Protection',
                        'residential'            => 'Multifamily Fire Protection',
                        'fire-pump-design'       => 'Fire Pump Design',
                        'fire-pump-installation' => 'Fire Pump Installation',
                        'fire-pump-repair'       => 'Fire Pump Repair',
                        'fire-pump-testing'      => 'Fire Pump Testing',
                    ];
                    $svc_label = $svc_labels[ $slug ] ?? 'Fire Protection';
                    $seo['title']        = $svc_label . ' in ' . $loc['name'] . ', CA | Richardson Fire Protection';
                    $seo['description']  = esc_attr( substr( $svc_label . ' for GCs and developers in ' . $loc['name'] . ', CA. ' . $loc['ahj_name'] . ' coordination, design-build. Bids in 24–48 hrs. Call (916) 849-6441.', 0, 157 ) . '...' );
                    $seo['schema_type']  = 'city_service';
                    $seo['city_slug']    = $parent->post_name;
                    $seo['service_slug'] = $slug;
                    $seo['location']     = $loc;
                    return $seo;
                }
            }
        }
    }

    if ( is_front_page() ) {
        $seo['title']       = 'Richardson Fire Protection | Fire Sprinkler Contractor for Developers & GCs — Sacramento';
        $seo['description'] = 'Preferred fire sprinkler sub for developers and general contractors in Sacramento. New construction, TI, and multifamily. CSFM-certified. Clean submittals, on-schedule installs. Call (916) 849-6441.';
        $seo['schema_type'] = 'home';

    } elseif ( is_singular() ) {
        $post = get_queried_object();
        $slug = $post->post_name ?? '';

        switch ( $slug ) {
            case 'commercial':
            case 'commercial-fire-protection':
                $seo['title']       = 'Commercial Fire Sprinkler Contractor in Sacramento | Richardson Fire Protection';
                $seo['description'] = 'Fire sprinkler design-build for GCs and developers on office, retail, mixed-use, and warehouse projects in Sacramento. NFPA 13 compliant. We pull permits, coordinate the AHJ, and hit your schedule.';
                $seo['schema_type'] = 'service_commercial';
                break;

            case 'industrial':
            case 'industrial-fire-protection':
                $seo['title']       = 'Industrial Fire Protection Contractor — Sacramento | Richardson Fire Protection';
                $seo['description'] = 'Industrial fire suppression for high-bay warehouse, cold storage, and manufacturing projects in Sacramento. In-rack sprinklers, ESFR, special hazard. Trusted by GCs and industrial developers.';
                $seo['schema_type'] = 'service_industrial';
                break;

            case 'residential':
            case 'multifamily':
            case 'residential-fire-protection':
                $seo['title']       = 'Multifamily Fire Sprinkler Contractor in Sacramento | Richardson Fire Protection';
                $seo['description'] = 'NFPA 13R fire sprinkler design-build for multifamily developers and GCs in Sacramento. Apartments, condos, mixed-use. We handle permits, AHJ coordination, and rough-in through final cert.';
                $seo['schema_type'] = 'service_residential';
                break;

            case 'about':
                $seo['title']       = 'About Richardson Fire Protection | Sacramento\'s Preferred Fire Sprinkler Sub';
                $seo['description'] = 'Richardson Fire Protection is a family-owned fire sprinkler contractor in Antelope, CA. Founded in 2023, our team brings 30 years of combined experience delivering on-schedule, code-compliant fire protection to Sacramento developers and GCs.';
                $seo['schema_type'] = 'about';
                break;

            case 'contact':
                $seo['title']       = 'Contact Richardson Fire Protection | Sacramento Fire Sprinkler Contractor';
                $seo['description'] = 'Reach Richardson Fire Protection for bid requests, plan reviews, or project consultations. Serving Sacramento-area developers and general contractors. Call (916) 849-6441.';
                $seo['schema_type'] = 'contact';
                break;

            case 'locations':
                $seo['title']       = 'Fire Protection Service Areas | Richardson Fire Protection — Sacramento Valley';
                $seo['description'] = 'Richardson Fire Protection serves GCs and developers in Sacramento, Stockton, Roseville, Rocklin, Fairfield, Yuba City, and Davis. Design-build fire sprinkler contractor for Northern California.';
                $seo['schema_type'] = 'locations_hub';
                break;

            case 'services':
                $seo['title']       = 'Fire Protection Services — Sacramento Valley | Richardson Fire Protection';
                $seo['description'] = 'Complete fire sprinkler services for commercial, industrial, and residential projects in Sacramento Valley. Design, installation, inspection, and 24/7 emergency service. Call (916) 849-6441.';
                $seo['schema_type'] = 'services_hub';
                break;

            case 'fire-pump':
                $seo['title']       = 'Fire Pump Services Sacramento Valley — Design, Install, Repair & Testing | Richardson';
                $seo['description'] = 'NFPA 20 fire pump design, installation, repair, and NFPA 25 annual testing across Sacramento Valley. 24/7 emergency repair. Richardson Fire Protection — (916) 849-6441.';
                $seo['schema_type'] = 'fire_pump_hub';
                break;

            case 'ahj-comparison':
                $seo['title']       = 'AHJ Permit Timelines Compared — Sacramento Valley Fire Departments | Richardson';
                $seo['description'] = 'Compare fire sprinkler plan check timelines at Sacramento City, Roseville, Rocklin, Stockton, Fairfield, Yuba City, and Davis. Based on Richardson\'s direct project experience.';
                $seo['schema_type'] = 'ahj_comparison';
                break;

            case 'cost-guide':
            case 'fire-sprinkler-cost-guide':
                $seo['title']       = 'Fire Sprinkler Cost Guide 2025 — California Pricing by Building Type | Richardson';
                $seo['description'] = 'Fire sprinkler installation cost estimates by building type in California — office, retail, warehouse, multifamily, and more. 2025 pricing data from Richardson Fire Protection, Sacramento.';
                $seo['schema_type'] = 'cost_guide';
                break;

            case 'nfpa-25-inspection-guide':
                $seo['title']       = 'NFPA 25 Fire Sprinkler Inspection Guide California 2025 | Richardson Fire Protection';
                $seo['description'] = 'Complete NFPA 25 inspection guide for California — inspection frequencies, SB 1205 requirements, what inspectors check, and how to choose a certified fire sprinkler inspector.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            case 'nfpa-13r-vs-13-apartment-sprinklers':
                $seo['title']       = 'NFPA 13R vs NFPA 13: Which Standard Applies to Your California Building? | Richardson';
                $seo['description'] = 'When California requires NFPA 13R vs. NFPA 13 for multifamily projects — design differences, cost comparison, and California-specific code considerations for developers and GCs.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            case 'high-piled-storage-fire-code':
                $seo['title']       = 'High-Piled Storage Fire Code California: Complete Warehouse Guide | Richardson';
                $seo['description'] = 'CFC Chapter 32, commodity classification, ESFR vs. in-rack sprinklers, and the complete permit process for California high-piled storage. Richardson Fire Protection Sacramento.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            case 'ca-fire-code-2025':
                $seo['title']       = 'California Fire Code 2025: Key Changes for Sacramento Valley Contractors | Richardson';
                $seo['description'] = '2025 California Fire Code updates — sprinkler thresholds, WUI expansion, NFPA 13 2022 references, and AHJ adoption status for Sacramento, Roseville, Stockton, and more.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            case 'wui-sprinklers':
                $seo['title']       = 'WUI Fire Sprinkler Requirements California 2025: Builders\' Guide | Richardson';
                $seo['description'] = 'California WUI fire sprinkler requirements — SRA/LRA zones, CBC Chapter 7A, NFPA 13D mandates, and local WUI requirements in Placer and Sacramento Counties. 2025 update.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            case 'permit-guide-sacramento':
                $seo['title']       = 'Fire Sprinkler Permit Process in Sacramento 2025: Step-by-Step Guide | Richardson';
                $seo['description'] = 'How to get a fire sprinkler permit in Sacramento — SCFD plan check, Accela digital submittal, typical timelines, common corrections, and how Richardson streamlines the process.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            case 'esfr-vs-in-rack':
                $seo['title']       = 'ESFR vs In-Rack Sprinklers: Which Does Your California Warehouse Need? | Richardson';
                $seo['description'] = 'ESFR vs. in-rack sprinkler comparison — K-factors, ceiling height, commodity classification, cost differences, and when NFPA 13 requires each system type. California guide.';
                $seo['schema_type'] = 'article_tech';
                $seo['type']        = 'article';
                break;

            default:
                if ( is_singular('post') ) {
                    $seo['title']       = get_the_title() . ' | Richardson Fire Protection';
                    $seo['description'] = wp_strip_all_tags( get_the_excerpt() );
                    $seo['type']        = 'article';
                    $seo['schema_type'] = 'post';
                    if ( has_post_thumbnail() ) {
                        $seo['image'] = get_the_post_thumbnail_url( null, 'large' );
                    }
                } else {
                    $seo['title']       = get_the_title() . ' | Richardson Fire Protection';
                    $seo['description'] = wp_strip_all_tags( wp_trim_words( get_the_content(), 30 ) );
                }
        }

    } elseif ( is_home() || is_archive() ) {
        $seo['title']       = 'Fire Protection Resources for Developers & GCs | Richardson Fire Protection';
        $seo['description'] = 'Fire code updates, NFPA compliance guides, and project insights for Sacramento developers and general contractors — from Richardson Fire Protection.';
        $seo['schema_type'] = 'blog';

    } elseif ( is_search() ) {
        $seo['title']       = 'Search Results | Richardson Fire Protection';
        $seo['description'] = 'Search results from Richardson Fire Protection, Sacramento\'s preferred fire sprinkler contractor for developers and GCs.';

    } elseif ( is_404() ) {
        $seo['title']       = 'Page Not Found | Richardson Fire Protection';
        $seo['description'] = 'The page you\'re looking for doesn\'t exist. Find fire protection services, contact info, and more at Richardson Fire Protection Sacramento.';
    }

    // Ensure description is trimmed and safe
    $seo['description'] = esc_attr( wp_strip_all_tags( $seo['description'] ) );
    if ( strlen( $seo['description'] ) > 160 ) {
        $seo['description'] = substr( $seo['description'], 0, 157 ) . '...';
    }

    return $seo;
}

// ─── Document Title Filter ───────────────────────────────────────────────────

add_filter( 'document_title_parts', function( $title ) {
    $seo = rfp_get_page_seo();

    // Return plain parts; WP will assemble with separator
    // We override the full title string via wp_head meta instead,
    // but we still clean up the WP-generated <title> tag here.
    if ( ! empty( $seo['title'] ) && ( is_front_page() || is_page() || is_singular('post') || is_home() || is_search() || is_404() ) ) {
        // Split on ' | ' to extract the "tagline" piece WP adds separately
        $parts = explode( ' | ', $seo['title'], 2 );
        $title['title'] = $parts[0];
        if ( isset( $parts[1] ) ) {
            $title['site'] = $parts[1];
        }
        unset( $title['tagline'] );
    }

    return $title;
} );

// ─── Meta Tags (wp_head priority 1) ─────────────────────────────────────────

add_action( 'wp_head', 'rfp_seo_meta', 1 );

function rfp_seo_meta() {
    $seo = rfp_get_page_seo();
    $biz = rfp_business_data();

    $canonical = esc_url( is_singular() ? get_permalink() : ( is_front_page() ? home_url('/') : get_pagenum_link() ) );
    $title_esc  = esc_attr( $seo['title'] );
    $desc_esc   = $seo['description']; // already esc_attr'd in rfp_get_page_seo()
    $image_esc  = esc_url( $seo['image'] );
    $url_esc    = $canonical;

    echo "\n<!-- Richardson Fire Protection — SEO Meta -->\n";

    // ── Core meta ──────────────────────────────────────────────────
    echo "<meta name=\"description\" content=\"{$desc_esc}\" />\n";
    echo "<link rel=\"canonical\" href=\"{$url_esc}\" />\n";

    // ── Geo / Local ─────────────────────────────────────────────────
    $lat = $biz['geo']['lat'];
    $lng = $biz['geo']['lng'];
    echo "<meta name=\"geo.region\" content=\"US-CA\" />\n";
    echo "<meta name=\"geo.placename\" content=\"Antelope, California\" />\n";
    echo "<meta name=\"geo.position\" content=\"{$lat};{$lng}\" />\n";
    echo "<meta name=\"ICBM\" content=\"{$lat}, {$lng}\" />\n";

    // ── Open Graph ──────────────────────────────────────────────────
    $og_type = ( $seo['type'] === 'article' ) ? 'article' : 'website';
    echo "<meta property=\"og:type\"        content=\"{$og_type}\" />\n";
    echo "<meta property=\"og:title\"       content=\"{$title_esc}\" />\n";
    echo "<meta property=\"og:description\" content=\"{$desc_esc}\" />\n";
    echo "<meta property=\"og:url\"         content=\"{$url_esc}\" />\n";
    echo "<meta property=\"og:image\"       content=\"{$image_esc}\" />\n";
    echo "<meta property=\"og:image:width\"  content=\"1200\" />\n";
    echo "<meta property=\"og:image:height\" content=\"630\" />\n";
    echo "<meta property=\"og:image:alt\"   content=\"{$title_esc}\" />\n";
    echo "<meta property=\"og:site_name\"   content=\"Richardson Fire Protection\" />\n";
    echo "<meta property=\"og:locale\"      content=\"en_US\" />\n";

    if ( $seo['type'] === 'article' && is_singular('post') ) {
        $pub  = esc_attr( get_the_date('c') );
        $mod  = esc_attr( get_the_modified_date('c') );
        $auth = esc_attr( get_the_author() );
        echo "<meta property=\"article:published_time\" content=\"{$pub}\" />\n";
        echo "<meta property=\"article:modified_time\"  content=\"{$mod}\" />\n";
        echo "<meta property=\"article:author\"         content=\"{$auth}\" />\n";
        echo "<meta property=\"article:section\"        content=\"Fire Protection\" />\n";
    }

    // ── Twitter Card ────────────────────────────────────────────────
    echo "<meta name=\"twitter:card\"        content=\"summary_large_image\" />\n";
    echo "<meta name=\"twitter:title\"       content=\"{$title_esc}\" />\n";
    echo "<meta name=\"twitter:description\" content=\"{$desc_esc}\" />\n";
    echo "<meta name=\"twitter:image\"       content=\"{$image_esc}\" />\n";

    // ── Robots / Indexing hints ─────────────────────────────────────
    if ( is_search() || is_404() ) {
        echo "<meta name=\"robots\" content=\"noindex, follow\" />\n";
    } else {
        echo "<meta name=\"robots\" content=\"index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1\" />\n";
    }

    echo "<!-- / SEO Meta -->\n\n";
}

// ─── JSON-LD Schema (wp_head priority 99) ───────────────────────────────────

add_action( 'wp_head', 'rfp_schema_markup', 99 );

function rfp_schema_markup() {
    $biz    = rfp_business_data();
    $seo    = rfp_get_page_seo();
    $graphs = [];

    // ── WebSite (sitelinks searchbox) — all pages ───────────────────
    $graphs[] = [
        '@type'            => 'WebSite',
        '@id'              => home_url('/#website'),
        'url'              => home_url('/'),
        'name'             => $biz['name'],
        'description'      => $biz['description'],
        'potentialAction'  => [
            '@type'       => 'SearchAction',
            'target'      => [
                '@type'       => 'EntryPoint',
                'urlTemplate' => home_url('/?s={search_term_string}'),
            ],
            'query-input' => 'required name=search_term_string',
        ],
    ];

    // ── LocalBusiness — all pages ───────────────────────────────────
    $hours_schema = [];
    foreach ( $biz['hours'] as $slot ) {
        $hours_schema[] = [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => $slot['days'],
            'opens'     => $slot['open'],
            'closes'    => $slot['close'],
        ];
    }

    $area_served = array_map( function( $city ) use ( $biz ) {
        return [
            '@type'       => 'City',
            'name'        => $city . ', ' . $biz['address']['region'],
            'addressRegion' => $biz['address']['region'],
            'addressCountry' => $biz['address']['country'],
        ];
    }, $biz['service_area'] );

    $local_business = [
        '@type'              => [ 'LocalBusiness', 'ProfessionalService' ],
        '@id'                => home_url('/#localbusiness'),
        'name'               => $biz['name'],
        'legalName'          => $biz['legal_name'],
        'description'        => $biz['description'],
        'url'                => $biz['url'],
        'telephone'          => $biz['phone'],
        'email'              => $biz['email'],
        'foundingDate'       => $biz['founding_year'],
        'priceRange'         => $biz['price_range'],
        'logo'               => [
            '@type' => 'ImageObject',
            'url'   => $biz['logo_url'],
        ],
        'image'              => $biz['og_image_url'],
        'address'            => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $biz['address']['street'],
            'addressLocality' => $biz['address']['city'],
            'addressRegion'   => $biz['address']['region'],
            'postalCode'      => $biz['address']['postal'],
            'addressCountry'  => $biz['address']['country'],
        ],
        'geo'                => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => $biz['geo']['lat'],
            'longitude' => $biz['geo']['lng'],
        ],
        'openingHoursSpecification' => $hours_schema,
        'areaServed'         => $area_served,
        'sameAs'             => $biz['social'],
        'knowsAbout'         => [
            'NFPA 13 Fire Sprinkler Systems',
            'NFPA 13R Multifamily Sprinkler Systems',
            'NFPA 13D Residential Sprinkler Systems',
            'NFPA 72 Fire Alarm Systems',
            'NFPA 25 Inspection Testing and Maintenance',
            'Commercial Fire Protection',
            'Industrial Fire Suppression',
            'AHJ Permit Coordination',
            'California Building Code Chapter 9',
            'High-Piled Storage Fire Protection',
            'ESFR Sprinkler Systems',
            'Special Hazard Suppression Systems',
        ],
        'aggregateRating'    => [
            '@type'       => 'AggregateRating',
            'ratingValue' => '5.0',
            'ratingCount' => '47',
            'reviewCount' => '47',
            'bestRating'  => '5',
            'worstRating' => '1',
        ],
        'hasCredential'      => [
            [
                '@type'              => 'EducationalOccupationalCredential',
                'name'               => 'CSLB C-16 Fire Protection Contractor License',
                'credentialCategory' => 'license',
                'recognizedBy'       => [ '@type' => 'Organization', 'name' => 'California Contractors State License Board' ],
                'identifier'         => '1053506',
                'sameAs'             => 'https://www.cslb.ca.gov/onlineservices/checklicenseII/checklicense.aspx',
            ],
            [
                '@type'              => 'EducationalOccupationalCredential',
                'name'               => 'NICET Fire Protection Engineering Technology Certification',
                'credentialCategory' => 'certification',
                'recognizedBy'       => [ '@type' => 'Organization', 'name' => 'National Institute for Certification in Engineering Technologies' ],
            ],
            [
                '@type'              => 'EducationalOccupationalCredential',
                'name'               => 'California State Fire Marshal Registered Contractor',
                'credentialCategory' => 'registration',
                'recognizedBy'       => [ '@type' => 'Organization', 'name' => 'California State Fire Marshal' ],
            ],
        ],
        'speakable'          => [
            '@type'       => 'SpeakableSpecification',
            'cssSelector' => [ '.hero-title', '.hero-desc', '.section-title', '.section-desc', '.faq-answer p', '.service-card__title', '.service-card__desc', '.contact-lead' ],
        ],
        'hasOfferCatalog'    => [
            '@type'       => 'OfferCatalog',
            'name'        => 'Fire Protection Services',
            'itemListElement' => [
                [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Commercial Fire Sprinkler Installation' ] ],
                [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Industrial Fire Suppression Systems' ] ],
                [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Residential Fire Sprinkler Systems' ] ],
                [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Fire Sprinkler Inspection & Testing' ] ],
                [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Fire Sprinkler Repair & Maintenance' ] ],
                [ '@type' => 'Offer', 'itemOffered' => [ '@type' => 'Service', 'name' => 'Fire Sprinkler System Design' ] ],
            ],
        ],
    ];
    $graphs[] = $local_business;

    // ── Location City — city-specific pages ─────────────────────────
    if ( $seo['schema_type'] === 'location_city' && ! empty( $seo['location'] ) ) {
        $loc      = $seo['location'];
        $city_url = home_url( '/locations/' . $loc['slug'] . '/' );

        $graphs[] = [
            '@type'            => 'Service',
            '@id'              => $city_url . '#service',
            'name'             => 'Fire Protection Services in ' . $loc['name'] . ', CA',
            'description'      => 'NFPA 13 fire sprinkler design-build, permit coordination with ' . $loc['ahj_name'] . ', and installation for GCs and developers in ' . $loc['name'] . ', CA.',
            'url'              => $city_url,
            'provider'         => [ '@id' => home_url('/#localbusiness') ],
            'areaServed'       => [
                '@type'          => 'City',
                'name'           => $loc['name'] . ', CA',
                'addressRegion'  => 'CA',
                'addressCountry' => 'US',
                'geo'            => [
                    '@type'     => 'GeoCoordinates',
                    'latitude'  => $loc['lat'],
                    'longitude' => $loc['lng'],
                ],
            ],
            'serviceType'      => 'Fire Sprinkler Contractor',
            'availableChannel' => [
                '@type'        => 'ServiceChannel',
                'serviceUrl'   => $city_url,
                'servicePhone' => $biz['phone'],
            ],
        ];

        if ( ! empty( $loc['faqs'] ) ) {
            $faq_entities = [];
            foreach ( $loc['faqs'] as $faq ) {
                $faq_entities[] = [
                    '@type'          => 'Question',
                    'name'           => $faq['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => $faq['a'],
                    ],
                ];
            }
            $graphs[] = [
                '@type'      => 'FAQPage',
                '@id'        => $city_url . '#faq',
                'url'        => $city_url,
                'mainEntity' => $faq_entities,
            ];
        }

        $graphs[] = [
            '@type'           => 'BreadcrumbList',
            '@id'             => $city_url . '#breadcrumb',
            'itemListElement' => [
                [ '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',       'item' => home_url('/') ],
                [ '@type' => 'ListItem', 'position' => 2, 'name' => 'Locations',  'item' => home_url('/locations/') ],
                [ '@type' => 'ListItem', 'position' => 3, 'name' => $loc['name'], 'item' => $city_url ],
            ],
        ];
    }

    // ── BreadcrumbList — non-home pages ────────────────────────────
    if ( ! is_front_page() && $seo['schema_type'] !== 'location_city' ) {
        $crumbs = [
            [
                '@type'    => 'ListItem',
                'position' => 1,
                'name'     => 'Home',
                'item'     => home_url('/'),
            ],
        ];

        if ( is_singular() ) {
            $post = get_queried_object();
            if ( is_singular('post') ) {
                // Blog post: Home > Blog > Post Title
                $crumbs[] = [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => 'Blog',
                    'item'     => get_permalink( get_option('page_for_posts') ) ?: home_url('/?page_for_posts'),
                ];
                $crumbs[] = [
                    '@type'    => 'ListItem',
                    'position' => 3,
                    'name'     => get_the_title(),
                    'item'     => get_permalink(),
                ];
            } else {
                // Page: Home > Page Title
                $crumbs[] = [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => get_the_title(),
                    'item'     => get_permalink(),
                ];
            }
        } elseif ( is_home() ) {
            $crumbs[] = [
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => 'Blog',
                'item'     => get_pagenum_link(),
            ];
        } elseif ( is_search() ) {
            $crumbs[] = [
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => 'Search: ' . esc_html( get_search_query() ),
                'item'     => get_pagenum_link(),
            ];
        } elseif ( is_archive() ) {
            $crumbs[] = [
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => get_the_archive_title(),
                'item'     => get_pagenum_link(),
            ];
        }

        $graphs[] = [
            '@type'           => 'BreadcrumbList',
            '@id'             => get_pagenum_link() . '#breadcrumb',
            'itemListElement' => $crumbs,
        ];
    }

    // ── Service Schema — service pages ──────────────────────────────
    $service_schemas = [
        'service_commercial' => [
            'name'        => 'Commercial Fire Protection',
            'description' => 'Commercial fire sprinkler system design, installation, inspection, and repair for offices, retail centers, restaurants, hotels, and warehouses in Sacramento, CA. NFPA 13 compliant.',
            'url'         => home_url('/commercial/'),
            'provider_type' => 'Fire Sprinkler Contractor',
        ],
        'service_industrial' => [
            'name'        => 'Industrial Fire Protection',
            'description' => 'Industrial fire suppression systems for high-piled storage, manufacturing, and special hazard occupancies in the Sacramento Valley. NFPA 30, NFPA 409, FM Global compliant.',
            'url'         => home_url('/industrial/'),
            'provider_type' => 'Fire Sprinkler Contractor',
        ],
        'service_residential' => [
            'name'        => 'Residential Fire Sprinkler Systems',
            'description' => 'Residential fire sprinkler installation for apartments, condominiums, townhomes, and single-family homes in Sacramento, CA. NFPA 13R and NFPA 13D systems.',
            'url'         => home_url('/residential/'),
            'provider_type' => 'Fire Sprinkler Contractor',
        ],
    ];

    if ( isset( $service_schemas[ $seo['schema_type'] ] ) ) {
        $s = $service_schemas[ $seo['schema_type'] ];
        $graphs[] = [
            '@type'            => 'Service',
            '@id'              => $s['url'] . '#service',
            'name'             => $s['name'],
            'description'      => $s['description'],
            'url'              => $s['url'],
            'provider'         => [ '@id' => home_url('/#localbusiness') ],
            'areaServed'       => [
                '@type'           => 'State',
                'name'            => 'California',
                'addressRegion'   => 'CA',
                'addressCountry'  => 'US',
            ],
            'serviceType'      => $s['provider_type'],
            'availableChannel' => [
                '@type'               => 'ServiceChannel',
                'serviceUrl'          => $s['url'],
                'servicePhone'        => $biz['phone'],
                'availableLanguage'   => [ '@type' => 'Language', 'name' => 'English' ],
            ],
        ];
    }

    // ── Article / BlogPosting — single posts ────────────────────────
    if ( $seo['schema_type'] === 'post' && is_singular('post') ) {
        $image_url = has_post_thumbnail()
            ? get_the_post_thumbnail_url( null, 'large' )
            : $biz['og_image_url'];

        $graphs[] = [
            '@type'            => 'BlogPosting',
            '@id'              => get_permalink() . '#article',
            'headline'         => get_the_title(),
            'description'      => wp_strip_all_tags( get_the_excerpt() ),
            'url'              => get_permalink(),
            'datePublished'    => get_the_date('c'),
            'dateModified'     => get_the_modified_date('c'),
            'author'           => [
                '@type' => 'Person',
                'name'  => get_the_author(),
            ],
            'publisher'        => [
                '@id' => home_url('/#localbusiness'),
            ],
            'image'            => [
                '@type' => 'ImageObject',
                'url'   => $image_url,
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id'   => get_permalink(),
            ],
            'articleSection'   => 'Fire Protection',
            'keywords'         => 'fire sprinkler, fire protection, Sacramento, NFPA',
            'inLanguage'       => 'en-US',
        ];
    }

    // ── Review Schema — front page testimonials ─────────────────────
    if ( is_front_page() ) {
        $rfp_reviews = [
            [ 'Mike Ramirez',   'General Manager, Pacific West Distribution', 'Richardson installed our entire sprinkler system for our 80,000 sq ft warehouse. On time, on budget, zero issues with the AHJ inspection. I wouldn\'t use anyone else.' ],
            [ 'Tina Sato',      'Owner, Sato\'s Kitchen & Bar, Sacramento',   'They retrofitted sprinklers into our restaurant without closing for a single day. The crew was professional, respectful of our space, and finished ahead of schedule.' ],
            [ 'David Kim',      'Property Manager, Granite Bay Residential',  'Called at 2am when a sprinkler head broke at our apartment complex. Technician was on-site within the hour. That kind of response is why we\'ve been a customer for 12 years.' ],
            [ 'Patricia Lee',   'VP of Facilities, Meridian Commercial REIT', 'Richardson Fire Protection has handled all our inspections and maintenance for our entire commercial portfolio. Reliable, thorough, and their reports are always clean.' ],
        ];
        foreach ( $rfp_reviews as $r ) {
            $graphs[] = [
                '@type'        => 'Review',
                '@id'          => home_url( '/#review-' . sanitize_title( $r[0] ) ),
                'itemReviewed' => [ '@id' => home_url( '/#localbusiness' ) ],
                'reviewRating' => [ '@type' => 'Rating', 'ratingValue' => '5', 'bestRating' => '5' ],
                'name'         => 'Review by ' . $r[0],
                'reviewBody'   => $r[2],
                'author'       => [ '@type' => 'Person', 'name' => $r[0], 'description' => $r[1] ],
                'publisher'    => [ '@id' => home_url( '/#localbusiness' ) ],
            ];
        }
    }

    // ── HowTo Schema — permit process on service pages ───────────────
    $how_to_types = [ 'service_commercial', 'service_industrial', 'service_residential' ];
    if ( in_array( $seo['schema_type'], $how_to_types, true ) ) {
        $graphs[] = [
            '@type'       => 'HowTo',
            '@id'         => get_permalink() . '#howto',
            'name'        => 'How to Start a Fire Sprinkler Project with Richardson Fire Protection',
            'description' => 'The four steps to getting a fire sprinkler system designed, permitted, and installed in Sacramento Valley — from initial bid to AHJ certificate.',
            'totalTime'   => 'P8W',
            'step'        => [
                [
                    '@type'    => 'HowToStep',
                    'position' => 1,
                    'name'     => 'Request a Bid',
                    'text'     => 'Send your plans or call (916) 849-6441. We review your project scope, building type, and AHJ jurisdiction, then return a complete itemized bid within 24–48 hours.',
                    'url'      => home_url( '/contact/' ),
                ],
                [
                    '@type'    => 'HowToStep',
                    'position' => 2,
                    'name'     => 'Design & Engineering',
                    'text'     => 'Our NICET-certified designers produce hydraulic calculations and stamped construction drawings to NFPA standards. Design phase typically takes 1–2 weeks depending on building complexity.',
                    'url'      => get_permalink(),
                ],
                [
                    '@type'    => 'HowToStep',
                    'position' => 3,
                    'name'     => 'Permit & AHJ Coordination',
                    'text'     => 'We submit directly to the Authority Having Jurisdiction and manage all plan check comments. Permit approval typically takes 3–6 weeks depending on AHJ and project type.',
                    'url'      => get_permalink(),
                ],
                [
                    '@type'    => 'HowToStep',
                    'position' => 4,
                    'name'     => 'Installation & Final Inspection',
                    'text'     => 'Field installation is phased to your construction schedule: rough-in, above-ceiling, and trim-out. We coordinate the AHJ final inspection and deliver your certificate of completion.',
                    'url'      => get_permalink(),
                ],
            ],
        ];
    }

    // ── City + Service pages ─────────────────────────────────────────
    if ( $seo['schema_type'] === 'city_service' && ! empty( $seo['location'] ) ) {
        $loc      = $seo['location'];
        $svc_slug = $seo['service_slug'] ?? '';
        $page_url = is_singular() ? get_permalink() : get_pagenum_link();
        $post_obj = get_queried_object();
        $par_obj  = $post_obj ? get_post( $post_obj->post_parent ) : null;
        $city_url = $par_obj ? get_permalink( $par_obj->ID ) : home_url('/');

        $svc_labels = [
            'commercial'             => 'Commercial Fire Protection',
            'industrial'             => 'Industrial Fire Protection',
            'residential'            => 'Multifamily Fire Protection',
            'fire-pump-design'       => 'Fire Pump Design',
            'fire-pump-installation' => 'Fire Pump Installation',
            'fire-pump-repair'       => 'Fire Pump Repair',
            'fire-pump-testing'      => 'Fire Pump Testing',
        ];
        $svc_types = [
            'commercial'             => 'NFPA 13 Fire Sprinkler Contractor',
            'industrial'             => 'NFPA 13 Industrial Fire Suppression',
            'residential'            => 'NFPA 13R/13D Residential Fire Sprinkler Contractor',
            'fire-pump-design'       => 'NFPA 20 Fire Pump Design Engineer',
            'fire-pump-installation' => 'NFPA 20 Fire Pump Installation Contractor',
            'fire-pump-repair'       => 'Fire Pump Repair & Emergency Service',
            'fire-pump-testing'      => 'NFPA 25 Fire Pump Testing & Inspection',
        ];
        $svc_label = $svc_labels[ $svc_slug ] ?? 'Fire Protection';
        $svc_type  = $svc_types[ $svc_slug ] ?? 'Fire Sprinkler Contractor';

        $graphs[] = [
            '@type'            => 'Service',
            '@id'              => $page_url . '#service',
            'name'             => $svc_label . ' in ' . $loc['name'] . ', CA',
            'description'      => $svc_label . ' for GCs and developers in ' . $loc['name'] . ', ' . $loc['county'] . '. ' . $loc['ahj_name'] . ' coordination, design-build, and installation.',
            'url'              => $page_url,
            'provider'         => [ '@id' => home_url('/#localbusiness') ],
            'areaServed'       => [
                '@type'          => 'City',
                'name'           => $loc['name'] . ', CA',
                'addressRegion'  => 'CA',
                'addressCountry' => 'US',
                'geo'            => [
                    '@type'     => 'GeoCoordinates',
                    'latitude'  => $loc['lat'],
                    'longitude' => $loc['lng'],
                ],
            ],
            'serviceType'      => $svc_type,
            'availableChannel' => [
                '@type'        => 'ServiceChannel',
                'serviceUrl'   => $page_url,
                'servicePhone' => $biz['phone'],
            ],
        ];

        if ( ! empty( $loc['faqs'] ) ) {
            $faq_entities = [];
            foreach ( array_slice( $loc['faqs'], 0, 5 ) as $faq ) {
                $faq_entities[] = [
                    '@type'          => 'Question',
                    'name'           => $faq['q'],
                    'acceptedAnswer' => [ '@type' => 'Answer', 'text' => $faq['a'] ],
                ];
            }
            $graphs[] = [
                '@type'      => 'FAQPage',
                '@id'        => $page_url . '#faq',
                'url'        => $page_url,
                'mainEntity' => $faq_entities,
            ];
        }

        $graphs[] = [
            '@type'           => 'BreadcrumbList',
            '@id'             => $page_url . '#breadcrumb',
            'itemListElement' => [
                [ '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',       'item' => home_url('/') ],
                [ '@type' => 'ListItem', 'position' => 2, 'name' => $loc['name'], 'item' => $city_url ],
                [ '@type' => 'ListItem', 'position' => 3, 'name' => $svc_label,   'item' => $page_url ],
            ],
        ];

        $graphs[] = [
            '@type'       => 'HowTo',
            '@id'         => $page_url . '#howto',
            'name'        => 'How to Start a ' . $svc_label . ' Project in ' . $loc['name'],
            'description' => 'The four steps to getting a fire sprinkler system designed, permitted by ' . $loc['ahj_name'] . ', and installed in ' . $loc['name'] . '.',
            'totalTime'   => 'P8W',
            'step'        => [
                [ '@type' => 'HowToStep', 'position' => 1, 'name' => 'Request a Bid',               'text' => 'Send your plans or call (916) 849-6441. We return a complete bid in 24–48 hours.', 'url' => home_url('/contact/') ],
                [ '@type' => 'HowToStep', 'position' => 2, 'name' => 'Design & Engineering',        'text' => 'NICET-certified designers produce hydraulic calculations and stamped drawings to ' . $svc_type . ' standards.', 'url' => $page_url ],
                [ '@type' => 'HowToStep', 'position' => 3, 'name' => 'Permit & AHJ Coordination',   'text' => 'We submit to ' . $loc['ahj_name'] . ' and manage all plan check comments through permit issuance.', 'url' => $page_url ],
                [ '@type' => 'HowToStep', 'position' => 4, 'name' => 'Installation & Final Inspection', 'text' => 'Field installation phased to your schedule. We coordinate the ' . $loc['ahj_name'] . ' final inspection.', 'url' => $page_url ],
            ],
        ];
    }

    // ── WebPage + Speakable for hub / guide pages ────────────────────
    $speakable_page_types = [ 'services_hub', 'ahj_comparison', 'cost_guide', 'fire_pump_hub' ];
    if ( in_array( $seo['schema_type'], $speakable_page_types, true ) && is_singular() ) {
        $page_url = get_permalink();
        $graphs[] = [
            '@type'     => 'WebPage',
            '@id'       => $page_url . '#webpage',
            'url'       => $page_url,
            'name'      => get_the_title(),
            'speakable' => [
                '@type'       => 'SpeakableSpecification',
                'cssSelector' => [ '.hero-title', '.hero-desc', '.section-title', '.section-desc', '.faq-answer p', '.service-card__title' ],
            ],
        ];
    }

    // ── TechArticle for static article page templates ────────────────
    if ( $seo['schema_type'] === 'article_tech' && is_singular('page') ) {
        $page_url = get_permalink();
        $pid      = get_queried_object_id();
        $graphs[] = [
            '@type'            => 'TechArticle',
            '@id'              => $page_url . '#article',
            'headline'         => get_the_title(),
            'description'      => $seo['description'],
            'url'              => $page_url,
            'datePublished'    => get_post_field( 'post_date', $pid ),
            'dateModified'     => get_post_field( 'post_modified', $pid ),
            'author'           => [
                '@type'    => 'Person',
                'name'     => 'Chris Richardson',
                'jobTitle' => 'Fire Protection Engineer',
                'worksFor' => [ '@id' => home_url('/#localbusiness') ],
            ],
            'publisher'        => [ '@id' => home_url('/#localbusiness') ],
            'image'            => [
                '@type' => 'ImageObject',
                'url'   => $biz['og_image_url'],
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id'   => $page_url,
            ],
            'speakable'        => [
                '@type'       => 'SpeakableSpecification',
                'cssSelector' => [ '.hero-desc', '.section-desc', '.faq-answer p', '.section-title' ],
            ],
            'articleSection'   => 'Fire Protection',
            'inLanguage'       => 'en-US',
            'about'            => [ '@id' => home_url('/#localbusiness') ],
        ];
    }

    // ── Output ──────────────────────────────────────────────────────
    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => $graphs,
    ];

    echo "\n<script type=\"application/ld+json\">\n";
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    echo "\n</script>\n";

    // FAQPage schema for homepage and service pages
    $rfp_faq_map = [
        'home' => [
            [ 'q' => 'What areas does Richardson Fire Protection serve?',
              'a' => 'Richardson Fire Protection serves the greater Sacramento Valley, including Sacramento, Stockton, Roseville, Rocklin, Fairfield, Yuba City, Davis, and surrounding communities across Northern California.' ],
            [ 'q' => 'How quickly can Richardson return a bid?',
              'a' => 'We turn around competitive, detailed bids in 24–48 hours after receiving plans. For large or complex projects, contact us to discuss your schedule.' ],
            [ 'q' => 'Is Richardson licensed and insured in California?',
              'a' => 'Yes. Richardson Fire Protection holds CSLB C-16 License #1053506, is registered with the California State Fire Marshal (CSFM), carries NICET-certified designers on staff, and maintains general liability, workers\' compensation, umbrella, and commercial auto coverage.' ],
            [ 'q' => 'What fire protection services does Richardson offer?',
              'a' => 'We offer full design-build fire sprinkler installation (commercial, industrial, multifamily), fire alarm systems, annual NFPA 25 inspection and testing, system repairs, and 24/7 emergency service across Northern California.' ],
            [ 'q' => 'How does Richardson handle AHJ permit coordination?',
              'a' => 'Richardson manages the entire permit process: hydraulic calculations, plan set preparation, permit submittal, AHJ responses, and inspection scheduling. We pass AHJ final on the first attempt — no re-inspections, no CO delays.' ],
        ],
        'service_commercial' => [
            [ 'q' => 'What fire protection systems are required for commercial buildings in California?',
              'a' => 'Most California commercial buildings over 5,000 sq ft require a fire sprinkler system per CFC Section 903. Systems are designed to NFPA 13 and must be permitted through the local AHJ. Fire alarm systems per NFPA 72 are also required for most commercial occupancies.' ],
            [ 'q' => 'How much does a commercial fire sprinkler system cost?',
              'a' => 'Commercial fire sprinkler systems in California typically run $3–$7 per square foot installed, depending on occupancy type, ceiling height, and local AHJ requirements. Office and light commercial spaces are at the lower end; restaurants and higher-hazard occupancies run higher. Call (916) 849-6441 for a project estimate.' ],
            [ 'q' => 'How long does it take to get a fire sprinkler permit in Sacramento?',
              'a' => 'Sacramento City fire sprinkler permit review typically takes 3–6 weeks for commercial projects. Richardson submits complete, code-compliant plan sets to minimize comments and keep your project on schedule.' ],
            [ 'q' => 'Do I need sprinklers for a tenant improvement (TI)?',
              'a' => 'Often yes. California requires sprinkler coverage in the TI area when any of these triggers apply: change of occupancy, increase in hazard level, the building already has sprinklers, or the TI area exceeds thresholds in CBC Chapter 9. Richardson reviews your TI scope and confirms applicability before pricing.' ],
            [ 'q' => 'What is the difference between wet-pipe and dry-pipe sprinkler systems?',
              'a' => 'Wet-pipe systems keep water in the pipes at all times — they are the most common, least expensive, and most reliable. Dry-pipe systems use pressurized air or nitrogen instead of water, with water only entering when a sprinkler activates — required in spaces subject to freezing.' ],
            [ 'q' => 'Does Richardson design and pull permits, or just install?',
              'a' => 'We are a full design-build contractor. Richardson\'s NICET-certified designers produce the hydraulic calculations and stamped plan sets, submit for permit, respond to AHJ corrections, and complete the installation through final inspection — one sub, zero gaps.' ],
        ],
        'service_industrial' => [
            [ 'q' => 'Does my warehouse need ESFR or in-rack sprinklers?',
              'a' => 'It depends on your commodity class, storage height, and rack configuration. ESFR (Early Suppression Fast Response) ceiling sprinklers can often protect storage up to 40 ft without in-rack heads. Above that, or for high-hazard commodities (Group A plastics, flammables), in-rack systems may be required. Richardson performs the commodity analysis and recommends the most cost-effective compliant system.' ],
            [ 'q' => 'What is a commodity classification and why does it matter?',
              'a' => 'NFPA 13 classifies stored goods as Class I–IV or Group A, B, or C plastics based on combustibility. Higher classifications require more powerful sprinkler systems with higher water demand. Misclassifying your commodity can result in an under-designed system that fails an inspection. Richardson performs on-site commodity analysis for every warehouse project.' ],
            [ 'q' => 'Does cold storage require a different system than a standard warehouse?',
              'a' => 'Yes. Cold storage and freezer spaces require dry-pipe or pre-action systems to prevent water from freezing in the pipes. They also require freeze-rated sprinkler heads and special pipe support requirements per NFPA 13. Richardson has cold storage experience across the Sacramento Valley and San Joaquin Valley.' ],
            [ 'q' => 'What NFPA standard applies to my industrial facility?',
              'a' => 'NFPA 13 governs most commercial and industrial fire sprinkler systems. For specific hazards: NFPA 30 for flammable liquids storage, NFPA 33 for spray finishing, NFPA 72 for fire alarms, and NFPA 25 for ongoing inspection and testing. Richardson applies the correct standards for each occupancy.' ],
            [ 'q' => 'How does FM Global\'s design criteria differ from NFPA 13?',
              'a' => 'FM Global (Factory Mutual) is an insurance-driven design standard that typically requires higher water density and more robust suppression than NFPA 13 code minimums. If your facility carries FM Global property insurance, your sprinkler system must meet FM Data Sheet requirements — which Richardson designs to when required.' ],
            [ 'q' => 'How often does an industrial fire sprinkler system need inspection?',
              'a' => 'NFPA 25 requires quarterly inspector checks, annual internal inspections, and 5-year obstruction investigations. California SB 1205 also requires that inspections be performed by a CSFM-certified contractor. Richardson provides NFPA 25 compliant inspection and testing for all system types.' ],
        ],
        'services_hub' => [
            [ 'q' => 'What fire protection services does Richardson offer?',
              'a' => 'Richardson Fire Protection provides commercial, industrial, and multifamily fire sprinkler design-build, annual NFPA 25 inspection and testing, system repairs, and 24/7 emergency service across the Sacramento Valley and Northern California.' ],
            [ 'q' => 'Does Richardson handle both new construction and tenant improvements?',
              'a' => 'Yes. We work on ground-up new construction, tenant improvement retrofits, change-of-occupancy upgrades, and system expansions. Our NICET-certified design team handles all project types from a single office TI to a 500,000 sq ft warehouse.' ],
            [ 'q' => 'How is commercial fire protection different from industrial fire protection?',
              'a' => 'Commercial fire protection typically covers NFPA 13 wet-pipe systems for offices, retail, restaurants, and hotels. Industrial fire protection addresses higher-hazard occupancies — high-piled storage, manufacturing, and cold storage — and may involve ESFR ceiling sprinklers, in-rack systems, dry-pipe systems, and special hazard suppression. Richardson designs both.' ],
            [ 'q' => 'Does Richardson manage the permit process end-to-end?',
              'a' => 'Yes. Richardson is a full design-build contractor. We prepare hydraulic calculations and stamped construction drawings, submit to the AHJ, respond to plan check comments, pull the permit, complete installation, and coordinate the final inspection — one sub, no gaps.' ],
            [ 'q' => 'How quickly can Richardson return a bid?',
              'a' => 'We return itemized bids within 24–48 hours of receiving your plans or project scope. For large or phased projects, call (916) 849-6441 to discuss your schedule and we will prioritize accordingly.' ],
        ],
        'ahj_comparison' => [
            [ 'q' => 'Which Sacramento-area fire department has the fastest plan check turnaround?',
              'a' => 'Based on Richardson\'s project experience, Roseville Fire Department and Davis Fire Department typically complete fire sprinkler plan check in 2–4 weeks. Sacramento City Fire Department usually runs 4–8 weeks for commercial projects. Stockton Fire Department and Fairfield Fire Department are typically 3–5 weeks, while Yuba City runs 2–4 weeks and Rocklin runs 3–6 weeks depending on project complexity.' ],
            [ 'q' => 'What documents do I need to submit for fire sprinkler plan check?',
              'a' => 'A standard fire sprinkler plan check submittal includes: stamped construction drawings with scaled floor plans, hydraulic calculations, a cut sheet package (sprinkler heads, pipe, fittings, hangers), a water supply test report (flow test), and a completed permit application. Some AHJs also require a contractor license verification form and proof of insurance.' ],
            [ 'q' => 'Does Sacramento City Fire Department accept digital plan submittals?',
              'a' => 'Yes. Sacramento City Fire Department uses Accela for permit applications and accepts digital plan submittals via their online portal. Richardson submits digitally to SCFD for faster processing and easier tracking of plan check status.' ],
            [ 'q' => 'What causes fire sprinkler plan check corrections?',
              'a' => 'Common plan check corrections include: insufficient water supply documentation, missing or incorrect hydraulic calculation basis of design, non-compliant sprinkler head spacing or coverage, missing seismic bracing calculations, incorrect occupancy or commodity classification, and missing code compliance notes. Richardson\'s NICET-certified design team produces first-pass-compliant submittals to minimize corrections.' ],
            [ 'q' => 'How do I find out which AHJ has jurisdiction over my project?',
              'a' => 'Fire sprinkler permit jurisdiction follows the local fire department or fire prevention division of the city or county where the project is located. Unincorporated areas of Sacramento County fall under Sacramento County Fire; incorporated cities use their own fire departments. For projects on state-regulated facilities (schools, hospitals), the California State Fire Marshal (CSFM) may have concurrent jurisdiction.' ],
        ],
        'fire_pump_hub' => [
            [ 'q' => 'When does a building require a fire pump?',
              'a' => 'A fire pump is required by NFPA 13 when the available municipal water supply — pressure, flow, or both — is insufficient to meet the hydraulic demand of the fire sprinkler system. This is common in multi-story buildings where static pressure drops significantly at upper floors, large warehouses with high water demand, and sites where municipal mains cannot provide the required flow. Richardson performs a water supply analysis on every project to determine whether a fire pump is needed.' ],
            [ 'q' => 'What types of fire pumps does Richardson install?',
              'a' => 'Richardson installs electric motor-driven fire pumps (horizontal split-case, end-suction, and vertical in-line), diesel engine-driven fire pumps, and vertical turbine pumps (VTPs) for underground water supply. All installations comply with NFPA 20 and are submitted to the local AHJ — Sacramento City Fire Department, Roseville Fire, Stockton Fire, and all other Sacramento Valley jurisdictions we serve.' ],
            [ 'q' => 'How often does a fire pump need to be tested in California?',
              'a' => 'NFPA 25 requires weekly churn tests (no-flow test), monthly inspection of all components, and an annual full-flow performance test. The annual test produces a certified pump curve at churn, rated, and peak flow that must be documented and kept on file for the AHJ and property insurer. California SB 1205 requires all NFPA 25 testing to be performed by a CSLB C-16 licensed contractor — Richardson meets that requirement.' ],
            [ 'q' => 'What causes fire pump failures and how are they repaired?',
              'a' => 'Common fire pump failures include: mechanical seal leaks (wear from inadequate weekly testing), impeller wear (reduces pump output below rated capacity), controller malfunctions (pressure switch drift, contactor failure, transfer switch faults), and suction or discharge piping issues. Richardson\'s technicians diagnose the root cause, perform the repair, and document corrections with a written report accepted by the AHJ and insurer. We respond 24/7 to pump failures because an impaired fire pump triggers a required fire watch.' ],
            [ 'q' => 'How long does fire pump installation take?',
              'a' => 'A standard electric-drive fire pump installation — concrete pad, suction and discharge piping, controller, and commissioning — typically takes 2–4 weeks from permit issuance for a commercial project. Diesel-drive installations add 1–2 weeks for fuel tank coordination and exhaust routing. Richardson coordinates the installation with your construction schedule and performs the NFPA 20 acceptance test before turning over to the AHJ for final inspection.' ],
        ],
        'cost_guide' => [
            [ 'q' => 'How much does a commercial fire sprinkler system cost in California?',
              'a' => 'Commercial fire sprinkler systems in California typically run $3.50–$8.00 per square foot installed for most occupancies. Light commercial (office, retail under 10,000 sq ft) runs $4–$7/sf; restaurants and higher-hazard occupancies run $6–$10/sf; warehouses run $2.50–$5/sf depending on commodity and system type. These ranges include design, materials, installation, and permit fees but vary by AHJ, water supply conditions, and building complexity.' ],
            [ 'q' => 'What factors affect fire sprinkler installation cost the most?',
              'a' => 'The biggest cost drivers are: (1) occupancy type and hazard classification — higher hazard requires higher density systems; (2) ceiling height — taller spaces need more pipe and larger heads; (3) water supply — insufficient municipal supply may require a fire pump, adding $15,000–$45,000; (4) building construction type — exposed steel vs. finished ceilings changes labor significantly; (5) AHJ — plan check fees and correction cycle length vary by jurisdiction.' ],
            [ 'q' => 'Is it cheaper to install fire sprinklers during new construction or retrofit?',
              'a' => 'New construction is significantly cheaper — typically 30–50% less per square foot than a retrofit. In new construction, sprinkler pipe is installed before drywall and can be coordinated with other trades. Retrofit requires cutting walls and ceilings, patching, and working around occupied spaces. If you are planning a renovation that triggers a sprinkler requirement, budget for the retrofit premium.' ],
            [ 'q' => 'Does the cost estimate include permits and AHJ plan check fees?',
              'a' => 'Richardson\'s bids include all design, engineering, materials, installation labor, permit application fees, and inspection coordination. AHJ plan check fees vary by jurisdiction and project valuation — for Sacramento City, fire sprinkler plan check fees typically run $800–$3,500 for commercial projects. We itemize permit fees separately so you see the full cost.' ],
            [ 'q' => 'How do I get an accurate fire sprinkler estimate for my project?',
              'a' => 'Send us your architectural floor plans and we will return a detailed, itemized bid within 24–48 hours. For projects still in design, we can provide a preliminary range estimate from square footage and occupancy type. Call (916) 849-6441 or submit your plans through our contact form.' ],
            [ 'q' => 'What is the cost of a fire sprinkler inspection in California?',
              'a' => 'NFPA 25 annual inspections in California typically cost $250–$500 for small commercial properties (under 5,000 sq ft), $500–$1,200 for mid-size commercial, $1,200–$3,500 for large warehouses, and $400–$1,000 per building for multifamily. The 5-year internal pipe inspection adds $800–$2,500 depending on system size. Richardson provides itemized inspection quotes with no hidden fees.' ],
        ],
        'service_residential' => [
            [ 'q' => 'Does my apartment complex in California require fire sprinklers?',
              'a' => 'Yes. California requires fire sprinklers in virtually all new multifamily residential buildings. The specific NFPA standard depends on building height and type: NFPA 13D for 1–2 family dwellings, NFPA 13R for residential up to 4 stories, and NFPA 13 for buildings over 4 stories or with mixed occupancies.' ],
            [ 'q' => 'What is the difference between NFPA 13, 13R, and 13D?',
              'a' => 'NFPA 13D covers one- and two-family dwellings — the most basic standard. NFPA 13R covers low-rise residential up to 4 stories with some attic and floor joist space exemptions. NFPA 13 is the full commercial standard required for all occupancies over 4 stories or mixed use. Each has different water supply, coverage area, and inspection requirements.' ],
            [ 'q' => 'How much does a multifamily fire sprinkler system cost per unit?',
              'a' => 'Multifamily fire sprinkler systems typically run $800–$1,800 per unit for NFPA 13R garden-style apartments, depending on unit count, building height, and water supply conditions. High-rise NFPA 13 systems cost more. Richardson provides detailed per-unit estimates based on your plans.' ],
            [ 'q' => 'Can sprinklers be installed in an occupied building?',
              'a' => 'Yes, with proper planning. Richardson has experience retrofitting occupied multifamily buildings. We work unit-by-unit or wing-by-wing on resident-friendly schedules, coordinate temporary out-of-service procedures with management, and restore service promptly after each section.' ],
            [ 'q' => 'What is required for a fire sprinkler inspection on a multifamily property?',
              'a' => 'NFPA 25 requires annual inspection of all sprinkler system components, with 5-year internal pipe inspections. California SB 1205 requires the inspector to hold a CSFM C-16 certificate. Richardson provides NFPA 25 inspections for all multifamily property types.' ],
            [ 'q' => 'Does a new townhome or single-family home in California need fire sprinklers?',
              'a' => 'Yes. California adopted a statewide residential sprinkler mandate in 2011 (CBC Section 903.3.1.3) requiring all new one- and two-family dwellings to have NFPA 13D fire sprinkler systems. Richardson installs NFPA 13D systems for homebuilders and custom home GCs throughout Northern California.' ],
        ],
    ];

    $rfp_schema_type = $seo['schema_type'] ?? '';
    if ( $rfp_schema_type && isset( $rfp_faq_map[ $rfp_schema_type ] ) ) {
        $rfp_faq_schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => [],
        ];
        foreach ( $rfp_faq_map[ $rfp_schema_type ] as $rfp_item ) {
            $rfp_faq_schema['mainEntity'][] = [
                '@type'          => 'Question',
                'name'           => $rfp_item['q'],
                'acceptedAnswer' => [ '@type' => 'Answer', 'text' => $rfp_item['a'] ],
            ];
        }
        echo "\n<script type=\"application/ld+json\">\n";
        echo wp_json_encode( $rfp_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
        echo "\n</script>\n";
    }
}
