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
        'license'       => 'CSLB #12345 | CSFM Certified',
        'founding_year' => '1985',
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
                $seo['description'] = 'Richardson Fire Protection is a family-owned fire sprinkler contractor in Antelope, CA. Trusted by Sacramento developers and GCs for on-schedule, code-compliant fire protection since 1994.';
                $seo['schema_type'] = 'about';
                break;

            case 'contact':
                $seo['title']       = 'Contact Richardson Fire Protection | Sacramento Fire Sprinkler Contractor';
                $seo['description'] = 'Reach Richardson Fire Protection for bid requests, plan reviews, or project consultations. Serving Sacramento-area developers and general contractors. Call (916) 849-6441.';
                $seo['schema_type'] = 'contact';
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
        '@type'              => [ 'LocalBusiness', 'ProfessionalService', 'FireStation' ],
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

    // ── BreadcrumbList — non-home pages ────────────────────────────
    if ( ! is_front_page() ) {
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

    // ── Output ──────────────────────────────────────────────────────
    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => $graphs,
    ];

    echo "\n<script type=\"application/ld+json\">\n";
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    echo "\n</script>\n";
}
