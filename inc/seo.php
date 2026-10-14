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
                $seo['title']       = 'Fire Protection ' . $loc['name'] . ', CA | ' . $loc['county'] . ' Fire Sprinkler Contractor';
                $seo['description'] = substr( wp_strip_all_tags( $raw ), 0, 157 ) . '...';
                $seo['schema_type'] = 'location_city';
                $seo['location']    = $loc;
                $seo['description'] = esc_attr( $seo['description'] );
                return $seo;
            }
        }

        // Top-level direct city pages (e.g. /sacramento/) not under /locations/
        if ( function_exists('rfp_location_data') && ! $post->post_parent ) {
            $loc = rfp_location_data( $slug );
            if ( $loc ) {
                $raw = 'Richardson Fire Protection is ' . $loc['name'] . '\'s preferred fire sprinkler sub for GCs and developers — NFPA 13 design-build, ' . $loc['ahj_name'] . ' permit coordination, and 24/7 ITM service. C-16 #1053506.';
                $seo['title']       = 'Fire Protection ' . $loc['name'] . ', CA | NFPA 13 Design & Installation | Richardson';
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
                $seo['title']       = 'Industrial Fire Sprinkler Systems | ESFR, In-Rack & NFPA 13 Warehouse Protection | Richardson';
                $seo['description'] = 'Industrial fire sprinkler design-build for high-bay warehouses, cold storage, and manufacturing in Sacramento Valley. ESFR, in-rack, and special hazard systems. CSLB C-16 #1053506.';
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
                $seo['title']       = 'Fire Sprinkler Cost Guide 2026 — California Pricing by Building Type | Richardson';
                $seo['description'] = 'Fire sprinkler installation cost estimates by building type in California — office, retail, warehouse, multifamily, and more. 2026 pricing data from Richardson Fire Protection, Sacramento.';
                $seo['schema_type'] = 'cost_guide';
                break;

            case 'nfpa-25-inspection-guide':
                $seo['title']       = 'NFPA 25 Fire Sprinkler Inspection Guide California 2026 | Richardson Fire Protection';
                $seo['description'] = 'Complete NFPA 25 inspection guide for California — inspection frequencies, SB 1205 requirements, what inspectors check, and how to choose a certified fire sprinkler inspector.';
                $seo['schema_type'] = 'nfpa25_guide';
                $seo['type']        = 'article';
                break;

            case 'nfpa-13r-vs-13-apartment-sprinklers':
                $seo['title']       = 'NFPA 13R vs NFPA 13: Which Standard Applies to Your California Building? | Richardson';
                $seo['description'] = 'When California requires NFPA 13R vs. NFPA 13 for multifamily projects — design differences, cost comparison, and California-specific code considerations for developers and GCs.';
                $seo['schema_type'] = 'article_13r_vs_13';
                $seo['type']        = 'article';
                break;

            case 'high-piled-storage-fire-code':
                $seo['title']       = 'High-Piled Storage Fire Code California: Complete Warehouse Guide | Richardson';
                $seo['description'] = 'CFC Chapter 32, commodity classification, ESFR vs. in-rack sprinklers, and the complete permit process for California high-piled storage. Richardson Fire Protection Sacramento.';
                $seo['schema_type'] = 'high_piled_guide';
                $seo['type']        = 'article';
                break;

            case 'ca-fire-code-2025':
                $seo['title']       = 'California Fire Code 2025: Key Changes for Sacramento Valley Contractors | Richardson';
                $seo['description'] = '2025 California Fire Code updates — sprinkler thresholds, WUI expansion, NFPA 13 2022 references, and AHJ adoption status for Sacramento, Roseville, Stockton, and more.';
                $seo['schema_type'] = 'ca_fire_code_guide';
                $seo['type']        = 'article';
                break;

            case 'wui-sprinklers':
                $seo['title']       = 'WUI Fire Sprinkler Requirements California 2026: Builders\' Guide | Richardson';
                $seo['description'] = 'California WUI fire sprinkler requirements — SRA/LRA zones, CBC Chapter 7A, NFPA 13D mandates, and local WUI requirements in Placer and Sacramento Counties. 2026 update.';
                $seo['schema_type'] = 'wui_guide';
                $seo['type']        = 'article';
                break;

            case 'permit-guide-sacramento':
                $seo['title']       = 'Fire Sprinkler Permit Process in Sacramento 2026: Step-by-Step Guide | Richardson';
                $seo['description'] = 'How to get a fire sprinkler permit in Sacramento — SCFD plan check, Accela digital submittal, typical timelines, common corrections, and how Richardson streamlines the process.';
                $seo['schema_type'] = 'permit_guide';
                $seo['type']        = 'article';
                break;

            case 'esfr-vs-in-rack':
                $seo['title']       = 'ESFR vs In-Rack Sprinklers: Which Does Your California Warehouse Need? | Richardson';
                $seo['description'] = 'ESFR vs. in-rack sprinkler comparison — K-factors, ceiling height, commodity classification, cost differences, and when NFPA 13 requires each system type. California guide.';
                $seo['schema_type'] = 'esfr_guide';
                $seo['type']        = 'article';
                break;

            case 'emergency-repair':
            case 'emergency-fire-sprinkler-repair':
                $seo['title']       = 'Emergency Fire Sprinkler Repair | 24/7 Service — Sacramento Valley | Richardson';
                $seo['description'] = '24/7 emergency fire sprinkler repair in Sacramento, Roseville, Stockton, and Northern California. Leaks, burst heads, controller failures. CSLB C-16 #1053506. Call (916) 849-6441 now.';
                $seo['schema_type'] = 'emergency_repair';
                break;

            case 'inspection-testing':
            case 'nfpa-25-inspection':
            case 'fire-sprinkler-inspection':
                $seo['title']       = 'Fire Sprinkler Inspection & Testing (NFPA 25) | Sacramento Valley | Richardson';
                $seo['description'] = 'NFPA 25 fire sprinkler inspection, testing, and ITM services for commercial buildings in Sacramento Valley. SB 1205 certified reports. Annual testing, deficiency documentation. Call (916) 849-6441.';
                $seo['schema_type'] = 'inspection_testing';
                break;

            case 'nfpa-13-fire-sprinkler-guide':
            case 'nfpa-13-guide':
                $seo['title']       = 'What is NFPA 13? The Complete 2026 Guide for Building Owners & GCs | Richardson';
                $seo['description'] = 'NFPA 13 explained: what it covers, which buildings must comply, key requirements for sprinkler system design, and how California adopts and amends the standard. Written by a C-16 licensed contractor.';
                $seo['schema_type'] = 'nfpa13_guide';
                $seo['type']        = 'article';
                break;

            case 'how-fire-sprinklers-work':
                $seo['title']       = 'How Does a Fire Sprinkler System Work? The Complete Explanation | Richardson';
                $seo['description'] = 'How fire sprinklers activate, why only the head nearest the fire opens, wet-pipe vs. dry-pipe differences, and how the water supply and fire pump connect. Written by C-16 licensed contractor Chris Richardson.';
                $seo['schema_type'] = 'how_sprinklers_work';
                $seo['type']        = 'article';
                break;

            case 'fire-pump-installation-guide':
            case 'fire-pump-guide':
                $seo['title']       = 'Fire Pump Installation Guide: Sizing, Costs & NFPA 20 Requirements | Richardson';
                $seo['description'] = 'When does a building require a fire pump? NFPA 20 pump room requirements, electric vs. diesel vs. vertical turbine options, installation timeline in Sacramento Valley, and cost ranges. C-16 licensed guide.';
                $seo['schema_type'] = 'fire_pump_guide';
                $seo['type']        = 'article';
                break;

            case 'fire-sprinkler-installation-timeline':
                $seo['title']       = 'How Long Does Fire Sprinkler Installation Take? Phase-by-Phase Timeline | Richardson';
                $seo['description'] = 'Fire sprinkler installation timeline broken down by phase — design, permit review, rough-in, trim-out, and final inspection. AHJ timelines by city in Sacramento Valley. Written by C-16 licensed contractor.';
                $seo['schema_type'] = 'installation_timeline';
                $seo['type']        = 'article';
                break;

            case 'portfolio':
                $seo['title']       = 'Project Portfolio | Richardson Fire Protection — Sacramento Valley';
                $seo['description'] = 'Fire sprinkler projects completed by Richardson Fire Protection — commercial, industrial, and multifamily. Sacramento Valley and Northern California. CSLB C-16 #1053506.';
                $seo['schema_type'] = 'portfolio';
                break;

            case 'licenses':
            case 'about-licenses':
                $seo['title']       = 'Licenses & Certifications | Richardson Fire Protection — CSLB C-16 #1053506';
                $seo['description'] = 'Richardson Fire Protection holds CSLB C-16 License #1053506, CSFM Contractor Registration, and NICET-certified design staff. Fully licensed and insured in California.';
                $seo['schema_type'] = 'licenses';
                break;

            case 'resources':
            case 'blog':
            case 'fire-protection-resources':
                $seo['title']       = 'Fire Protection Resources for GCs & Developers | Richardson Fire Protection';
                $seo['description'] = 'NFPA compliance guides, fire code updates, and technical articles for Sacramento Valley general contractors and developers. Written by Richardson\'s C-16 licensed team.';
                $seo['schema_type'] = 'resources_hub';
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
                    $seo['schema_type'] = 'page_generic';
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

    if ( $seo['type'] === 'article' && ( is_singular('post') || is_singular('page') ) ) {
        if ( is_singular('post') ) {
            $pub  = esc_attr( get_the_date('c') );
            $mod  = esc_attr( get_the_modified_date('c') );
            $auth = esc_attr( get_the_author() );
        } else {
            $pid  = get_queried_object_id();
            $pub  = esc_attr( get_post_field( 'post_date', $pid, 'raw' ) );
            $mod  = esc_attr( get_post_field( 'post_modified', $pid, 'raw' ) );
            $auth = 'Chris Richardson';
        }
        echo "<meta property=\"article:published_time\" content=\"{$pub}\" />\n";
        echo "<meta property=\"article:modified_time\"  content=\"{$mod}\" />\n";
        echo "<meta property=\"article:author\"         content=\"{$auth}\" />\n";
        echo "<meta property=\"article:section\"        content=\"Fire Protection\" />\n";
        echo "<meta property=\"article:tag\"            content=\"NFPA, fire sprinkler, Sacramento, California fire code\" />\n";
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

    // Article schema types — defined here so BreadcrumbList and TechArticle blocks both see it
    $rfp_article_schema_types = [
        'article_tech',
        'nfpa25_guide', 'article_13r_vs_13', 'high_piled_guide',
        'ca_fire_code_guide', 'wui_guide', 'permit_guide', 'esfr_guide',
        'nfpa13_guide', 'how_sprinklers_work', 'fire_pump_guide', 'installation_timeline',
    ];

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
            'NFPA 20 Fire Pump Installation',
            'NFPA 25 Inspection Testing and Maintenance',
            'NFPA 72 Fire Alarm Systems',
            'Commercial Fire Protection',
            'Industrial Fire Suppression',
            'Emergency Fire Sprinkler Repair',
            'AHJ Permit Coordination',
            'California Building Code Chapter 9',
            'California Fire Code',
            'California SB 1205 Compliance',
            'High-Piled Storage Fire Protection',
            'ESFR Sprinkler Systems',
            'In-Rack Sprinkler Systems',
            'Seismic Sprinkler Bracing',
            'Hydraulic Calculation and System Design',
            'Fire Sprinkler Installation Timelines',
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
                // Blog post: Home > Resources & Guides > Post Title
                $crumbs[] = [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => 'Resources & Guides',
                    'item'     => home_url('/resources/'),
                ];
                $crumbs[] = [
                    '@type'    => 'ListItem',
                    'position' => 3,
                    'name'     => get_the_title(),
                    'item'     => get_permalink(),
                ];
            } elseif ( is_singular('page') && in_array( $seo['schema_type'], $rfp_article_schema_types, true ) ) {
                // Article page: Home > Resources & Guides > Article Title
                $crumbs[] = [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => 'Resources & Guides',
                    'item'     => home_url('/resources/'),
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

    // ── Person Schema — about page ───────────────────────────────────
    if ( $seo['schema_type'] === 'about' && is_singular() ) {
        $graphs[] = [
            '@type'         => 'Person',
            '@id'           => home_url('/#founder'),
            'name'          => 'Chris Richardson',
            'jobTitle'      => 'Owner and Fire Protection Contractor',
            'worksFor'      => [ '@id' => home_url('/#localbusiness') ],
            'description'   => 'Chris Richardson is the owner of Richardson Fire Protection Inc., a CSLB C-16 licensed fire sprinkler contractor serving Sacramento Valley with 20+ years of Northern California fire protection experience.',
            'url'           => home_url('/about/'),
            'knowsAbout'    => [ 'NFPA 13', 'NFPA 13R', 'NFPA 20', 'NFPA 25', 'NFPA 72', 'California Fire Code', 'AHJ Permit Coordination', 'Hydraulic Calculations', 'Fire Pump Design', 'High-Piled Storage Fire Protection' ],
            'hasCredential' => [
                [
                    '@type'              => 'EducationalOccupationalCredential',
                    'name'               => 'CSLB C-16 Fire Protection Contractor License #1053506',
                    'credentialCategory' => 'license',
                    'recognizedBy'       => [ '@type' => 'Organization', 'name' => 'California Contractors State License Board' ],
                ],
                [
                    '@type'              => 'EducationalOccupationalCredential',
                    'name'               => 'NICET Level II Fire Protection Engineering Technology',
                    'credentialCategory' => 'certification',
                    'recognizedBy'       => [ '@type' => 'Organization', 'name' => 'National Institute for Certification in Engineering Technologies' ],
                ],
                [
                    '@type'              => 'EducationalOccupationalCredential',
                    'name'               => 'California State Fire Marshal Contractor Registration',
                    'credentialCategory' => 'registration',
                    'recognizedBy'       => [ '@type' => 'Organization', 'name' => 'California State Fire Marshal' ],
                ],
            ],
        ];
    }

    // ── WebPage + Speakable for hub / guide pages ────────────────────
    $speakable_page_types = [ 'services_hub', 'ahj_comparison', 'cost_guide', 'fire_pump_hub', 'emergency_repair', 'inspection_testing', 'locations_hub' ];
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
    if ( in_array( $seo['schema_type'], $rfp_article_schema_types, true ) && is_singular('page') ) {
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
            'lastReviewed'     => '2026-10-01',
            'author'           => [
                '@type'       => 'Person',
                'name'        => 'Chris Richardson',
                'jobTitle'    => 'Fire Protection Contractor, NICET Level II',
                'worksFor'    => [ '@id' => home_url('/#localbusiness') ],
                'knowsAbout'  => [ 'NFPA 13', 'NFPA 20', 'NFPA 25', 'NFPA 72', 'California Fire Code', 'AHJ Permit Coordination' ],
                'hasCredential' => [
                    '@type'              => 'EducationalOccupationalCredential',
                    'name'               => 'CSLB C-16 Fire Protection Contractor License #1053506',
                    'credentialCategory' => 'license',
                ],
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
                'cssSelector' => [ '.hero-title', '.hero-desc', '.faq-answer p', '.section-title', '.section-desc' ],
            ],
            'articleSection'   => 'Fire Protection',
            'inLanguage'       => 'en-US',
            'about'            => [ '@id' => home_url('/#localbusiness') ],
            'mentions'         => [ '@id' => home_url('/#localbusiness') ],
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
        'emergency_repair' => [
            [ 'q' => 'Is a leaking or burst fire sprinkler head an emergency?',
              'a' => 'Yes. A flowing sprinkler head will discharge 10–25 gallons per minute, causing immediate property damage. The system must be taken offline at the main control valve, the head replaced, and the system restored and tested before the building can reoccupy without a fire watch. Call Richardson 24/7 at (916) 849-6441 for same-day response in Sacramento Valley.' ],
            [ 'q' => 'Can I shut off just one sprinkler head without turning off the whole system?',
              'a' => 'Yes — a sprinkler stop (wedge tool) can temporarily stop discharge at a single flowing head without shutting down the main system. However, CFC Section 901.7 requires a fire watch anytime any portion of the system is impaired. Richardson carries all necessary repair parts and restores full service on the same call.' ],
            [ 'q' => 'Does my insurance cover emergency fire sprinkler repair?',
              'a' => 'Most commercial property policies cover sudden and accidental discharge from a sprinkler system, including property damage from the water and the cost of system repair. Richardson provides documented repair records, cause-of-failure reports, and before/after photos to support your insurance claim.' ],
            [ 'q' => 'How long does emergency fire sprinkler repair take?',
              'a' => 'Most emergency repairs — burst heads, leaking fittings, mechanical damage — can be completed in 2–4 hours. Complex repairs involving significant pipe damage, controller replacement, or coordination with the AHJ may require a same-day or next-day return visit. Richardson aims to restore full system service the same day we are called.' ],
            [ 'q' => 'Do I need to notify SCFD or my AHJ when my sprinkler system is offline for repair?',
              'a' => 'Yes. California Fire Code Section 901.7 requires the AHJ to be notified when a fire protection system is out of service for more than 4 hours. Richardson notifies the appropriate AHJ on your behalf and can coordinate a fire watch if required by the fire department during extended repairs.' ],
        ],
        'inspection_testing' => [
            [ 'q' => 'How often is fire sprinkler inspection required in California under NFPA 25?',
              'a' => 'NFPA 25 requires: weekly no-flow (churn) test for fire pumps; monthly visual inspection of sprinkler heads, gauges, and alarm valves; quarterly inspection of antifreeze systems and dry-pipe valves; annual flow tests and comprehensive inspection; and 5-year internal pipe inspection. California SB 1205 requires annual certification records submitted to the State Fire Marshal.' ],
            [ 'q' => 'What happens if my building fails NFPA 25 inspection?',
              'a' => 'Deficiencies are documented in a written report. Minor deficiencies — impaired sprinkler heads, missing escutcheons, corroded components — must be corrected within 30 days. Critical deficiencies that impair system function require immediate corrective action and may trigger AHJ enforcement. Richardson schedules deficiency corrections at the same time as the inspection when possible.' ],
            [ 'q' => 'Do I need to notify my fire department before annual sprinkler testing?',
              'a' => 'Many AHJs in Sacramento Valley — including SCFD and Roseville Fire — require advance notification before annual flow tests that will activate the fire alarm system. Richardson handles AHJ notification as part of every inspection and testing contract, so building owners never miss this step.' ],
            [ 'q' => 'How much does fire sprinkler inspection cost in Sacramento?',
              'a' => 'Annual NFPA 25 inspection for a commercial building in Sacramento typically costs $200–$600 for a basic wet-pipe system. Buildings with dry-pipe, pre-action, or fire pump systems cost more due to additional testing procedures. Richardson provides flat-rate inspection contracts with no hidden fees and delivers written NFPA 25 reports upon completion.' ],
            [ 'q' => 'What is SB 1205 and does it apply to my Sacramento building?',
              'a' => 'SB 1205 (2018) requires all commercial and multi-family residential building owners in California to certify annual fire protection system inspections with the State Fire Marshal. Failure to certify can result in enforcement action by your local AHJ. Richardson provides SB 1205-compliant inspection reports submitted directly to the California State Fire Marshal database.' ],
        ],
        'nfpa13_guide' => [
            [ 'q' => 'Is NFPA 13 mandatory in California?',
              'a' => 'Yes. California Building Code Section 903 and the California Fire Code together mandate fire sprinkler systems for most new commercial construction. Most California cities and counties have adopted requirements even stricter than the CFC. Once a fire sprinkler system is required, it must comply with NFPA 13 (or NFPA 13R/13D for residential) as adopted by the local AHJ.' ],
            [ 'q' => 'What is a hydraulic calculation and why is it required for NFPA 13?',
              'a' => 'A hydraulic calculation is a computer-modeled analysis of water flow through every pipe in the sprinkler system, demonstrating that the most demanding design area will receive the required water density. California AHJs require stamped hydraulic calculations from a licensed C-16 contractor as part of the permit submittal package.' ],
            [ 'q' => 'How often does NFPA 13 change?',
              'a' => 'NFPA publishes a new edition of NFPA 13 every three years. California\'s adoption lag means the currently enforced edition may be 3–6 years behind the most recent NFPA publication. As of 2026, most California AHJs are enforcing the 2022 edition. Always verify with your local AHJ which edition applies to your project.' ],
            [ 'q' => 'Does every floor of a building need fire sprinklers under NFPA 13?',
              'a' => 'Generally yes. NFPA 13 requires complete sprinkler coverage throughout the building, including basements, attics above 55 inches (with limited exceptions), elevator shafts, and concealed combustible spaces. Some exceptions exist for small closets and certain exterior architectural features, but these are narrowly defined.' ],
            [ 'q' => 'Who can design an NFPA 13 sprinkler system in California?',
              'a' => 'A California CSLB C-16 (Fire Protection Contractor) license is required for all fire sprinkler design, installation, and modification work in California. Additionally, a CSFM contractor registration is required. Richardson holds both — CSLB C-16 #1053506 — and our design staff holds NICET certification for hydraulic calculations.' ],
        ],
        'how_sprinklers_work' => [
            [ 'q' => 'Do all fire sprinkler heads go off at once?',
              'a' => 'No. Each sprinkler head activates independently based on the heat in its immediate vicinity. Only the heads above or near the fire, where ceiling temperatures have reached the head\'s activation threshold, will open. In the vast majority of fires, fewer than four heads control the incident. This is why a properly designed NFPA 13 system causes far less water damage than a fire hose.' ],
            [ 'q' => 'Does smoke set off fire sprinklers?',
              'a' => 'No. Sprinkler heads are activated by heat, not smoke. The glass bulb in the head must reach a specific temperature — typically 135°F for ordinary-rated heads — before it shatters and allows water to discharge. Smoke detectors and pull stations may trigger the fire alarm panel, but they have no direct connection to the sprinkler heads.' ],
            [ 'q' => 'How much water does a fire sprinkler head discharge?',
              'a' => 'A standard commercial sprinkler head discharges approximately 13–26 gallons per minute (GPM) depending on system pressure and the head\'s K-factor. By comparison, a fire hose used by the fire department flows 100–250 GPM. Fire sprinklers are far more effective at minimizing water damage than waiting for fire department response — they apply precisely targeted water at low volume while the fire is still small.' ],
            [ 'q' => 'Can a sprinkler head be accidentally activated?',
              'a' => 'Yes, but it is rare and almost always caused by physical damage or installation error. Accidental discharge from thermal activation requires temperatures well above normal building conditions — ordinary-rated heads require 135°F at the bulb. Pre-action systems are specifically designed to protect spaces where even accidental water discharge would be catastrophic.' ],
            [ 'q' => 'What maintenance does a fire sprinkler system require?',
              'a' => 'NFPA 25 mandates a formal inspection, testing, and maintenance (ITM) program: weekly fire pump churn tests, monthly visual inspection, quarterly alarm valve inspections, annual full-system inspection and flow tests, and a 5-year internal pipe obstruction investigation. California SB 1205 requires annual certification records submitted to the State Fire Marshal.' ],
        ],
        'fire_pump_guide' => [
            [ 'q' => 'When is a fire pump required under NFPA 13?',
              'a' => 'A fire pump is required when the available water supply — measured at the building\'s point of connection — cannot deliver the pressure and flow rate the hydraulic calculation demands. This is commonly triggered in multi-story buildings, large warehouses with high-piled storage, and buildings served by aging water infrastructure.' ],
            [ 'q' => 'What is the difference between an electric-drive and diesel-drive fire pump?',
              'a' => 'An electric-drive fire pump uses a dedicated electrical feeder from the utility service entrance. It is simpler to maintain, lower in operating cost, and preferred by most California AHJs for urban buildings with reliable utility power. A diesel-drive pump uses an on-board engine with its own fuel supply, providing full independence from the electrical grid — required where electric supply reliability is insufficient.' ],
            [ 'q' => 'How long does it take to get a fire pump installation permitted in Sacramento?',
              'a' => 'From design start to permit issuance, expect 8–12 weeks in most Sacramento Valley jurisdictions: 2–3 weeks for design and water supply testing, 1 week for submittal preparation, and 3–6 weeks for AHJ plan check. Sacramento City FD averages 4 weeks for fire pump plan check; Roseville and Stockton are often 2–4 weeks.' ],
            [ 'q' => 'What does an annual fire pump flow test involve?',
              'a' => 'The annual NFPA 25 fire pump flow test measures pump performance at three points: churn (no flow), rated flow (100%), and 150% of rated flow. Suction pressure, discharge pressure, and flow rate are recorded at each point and compared to the pump\'s acceptance test baseline. California SB 1205 requires annual certification records including fire pump test data.' ],
            [ 'q' => 'Can a fire pump be installed as part of a tenant improvement?',
              'a' => 'Yes, but it requires coordination between the building owner, the C-16 contractor, the electrical contractor, and the AHJ. The fire pump room must meet NFPA 20 construction requirements (2-hour fire-rated), a dedicated electrical feeder must be added, and the existing sprinkler riser must be modified. Richardson manages fire pump TI installations as design-build projects under a single contract.' ],
        ],
        'installation_timeline' => [
            [ 'q' => 'How long does fire sprinkler installation take in California?',
              'a' => 'From design start to AHJ final inspection, most new commercial projects in Sacramento Valley take 3–5 months. The biggest variable is AHJ plan check, which ranges from 2 weeks (small projects, fast-turnaround AHJs like Roseville) to 6+ weeks (Sacramento City FD on large industrial projects with corrections). The actual rough-in installation is usually 2–6 weeks depending on building size.' ],
            [ 'q' => 'How long does fire sprinkler permit review take in Sacramento?',
              'a' => 'Sacramento City FD typically takes 3–5 weeks for fire sprinkler plan check. Projects with corrections take an additional 2–3 weeks per correction cycle. Over-the-counter review is available for small tenant improvements. Submitting complete, code-compliant documents on the first submittal is the best way to avoid delays.' ],
            [ 'q' => 'Can fire sprinklers be installed while the building is occupied?',
              'a' => 'Yes, with proper planning. NFPA 13 and the CFC allow work in occupied buildings, but require the AHJ to be notified when the system is impaired, and a fire watch must be established during system shutdowns exceeding 4 hours. Most AHJs require an impairment permit. Richardson coordinates impairment notifications and fire watch scheduling for occupied TI projects.' ],
            [ 'q' => 'How long does a fire sprinkler tenant improvement take?',
              'a' => 'A typical commercial TI takes 4–8 weeks from design start to AHJ final inspection: 1–2 weeks for design, 2–4 weeks for plan check (over-the-counter review when available), 2–5 days for rough-in and trim-out, and 1–2 weeks to schedule the final inspection. The GC\'s ceiling finish schedule is often the critical path, not the sprinkler work.' ],
            [ 'q' => 'What is the fastest way to get a fire sprinkler permit in Sacramento Valley?',
              'a' => 'The fastest path is: engage the sprinkler contractor early before CDs are finalized; submit a complete first package with all required AHJ-specific forms, stamped calculations, and material submittals to avoid correction cycles; use over-the-counter review when available for small TIs; and in jurisdictions like Roseville or Lodi, direct communication with the fire marshal can resolve minor issues in hours instead of weeks.' ],
        ],
        'nfpa25_guide' => [
            [ 'q' => 'What is NFPA 25 and why does it matter?',
              'a' => 'NFPA 25 is the Standard for the Inspection, Testing, and Maintenance of Water-Based Fire Protection Systems. It establishes legally enforceable minimum frequencies for inspecting and testing fire sprinklers, standpipes, fire pumps, and backflow preventers. California AHJs reference NFPA 25 in enforcement actions, and California SB 1205 (2018) requires CSFM-certified annual inspection records for all commercial and multifamily buildings.' ],
            [ 'q' => 'Is NFPA 25 inspection required in California?',
              'a' => 'Yes. California Fire Code Section 901.6 requires all fire protection systems to be maintained per NFPA 25. SB 1205 adds a state-level requirement that annual inspection records be submitted to the California State Fire Marshal (CSFM). Building owners who cannot produce current inspection records face enforcement action from their local AHJ.' ],
            [ 'q' => 'What does an NFPA 25 annual inspection include?',
              'a' => 'A full NFPA 25 annual inspection covers: visual inspection of all sprinkler heads for corrosion, paint, and damage; control valve position and tamper switch testing; waterflow alarm testing; main drain test; inspection of hangers, pipe supports, and signage; gauge inspection; and for systems with fire pumps, annual pump performance testing. The inspector delivers a written report documenting any deficiencies.' ],
            [ 'q' => 'Can a building owner perform their own NFPA 25 inspection in California?',
              'a' => 'No. California requires that fire protection system inspections be performed by a CSLB C-16 licensed contractor with a CSFM contractor registration. Self-inspection does not satisfy SB 1205 and will not produce the required certification record. Richardson holds CSLB C-16 #1053506 and is CSFM-registered to provide compliant NFPA 25 inspections throughout Sacramento Valley.' ],
            [ 'q' => 'How long does an NFPA 25 inspection take?',
              'a' => 'For a typical commercial wet-pipe system, an annual NFPA 25 inspection takes 2–4 hours on-site. Buildings with dry-pipe valves, fire pumps, or standpipes take longer — often a half-day or full day — because these components require additional testing procedures. Richardson coordinates AHJ notification and schedules inspections to minimize disruption to your building operations.' ],
        ],
        'article_13r_vs_13' => [
            [ 'q' => 'Do California apartments require NFPA 13 or NFPA 13R?',
              'a' => 'It depends on building height and type. California Building Code requires NFPA 13R for residential buildings up to 4 stories, and full NFPA 13 for buildings taller than 4 stories or with non-residential occupancies. Podium mixed-use buildings — retail or parking at the ground floor with residential above — often require full NFPA 13 because of the mixed occupancy.' ],
            [ 'q' => 'What is the main difference between NFPA 13 and NFPA 13R?',
              'a' => 'NFPA 13 requires complete sprinkler coverage throughout a building — every floor, every attic, every concealed combustible space. NFPA 13R allows sprinkler omissions in certain attic spaces, floor joist cavities, and small closets in residential buildings. This reduces materials and labor, lowering the installation cost. However, NFPA 13R is only available for residential occupancies up to 4 stories.' ],
            [ 'q' => 'How much cheaper is NFPA 13R compared to NFPA 13 for apartment buildings?',
              'a' => 'NFPA 13R can reduce fire sprinkler installation costs by 15–25% per unit compared to full NFPA 13 on a comparable building, primarily because attic and floor cavity sprinklers are omitted. For a 50-unit garden-style apartment, that savings can be $40,000–$80,000. Richardson can model both options for your project to show the actual cost difference.' ],
            [ 'q' => 'What is the maximum building height for NFPA 13R in California?',
              'a' => 'NFPA 13R applies to residential buildings up to and including 4 stories above grade. California Building Code also limits NFPA 13R to occupancies classified as R (residential) — R-1 hotels and motels, R-2 apartments, and similar. A 5-story apartment building must use full NFPA 13, which requires complete coverage including all attic and concealed spaces.' ],
        ],
        'high_piled_guide' => [
            [ 'q' => 'What storage height triggers high-piled storage requirements in California?',
              'a' => 'California Fire Code Chapter 32 defines high-piled storage as solid-piled, palletized, rack, bin box, or shelf storage exceeding 12 feet in height. For Group A plastics (the most hazardous commodity class), the threshold drops to 6 feet. Once triggered, the building owner must comply with CFC Chapter 32 requirements including a high-piled storage permit and an approved fire protection plan.' ],
            [ 'q' => 'Do I need ESFR or in-rack sprinklers for my warehouse?',
              'a' => 'ESFR (Early Suppression Fast Response) ceiling sprinklers can protect most palletized and rack storage commodities up to 40–45 feet of ceiling height when the commodity class and rack configuration fall within the K-25 or K-33 ESFR design criteria. In-rack sprinklers are required for high-pile storage that exceeds ESFR capacity — such as very high storage of Group A plastics — or where multiple levels of in-rack heads are needed. Richardson performs the commodity and design analysis to determine the right system.' ],
            [ 'q' => 'What is a commodity classification and why does fire protection require one?',
              'a' => 'A commodity classification is a formal analysis of stored goods based on combustibility, packaging, and configuration, assigning them to NFPA 13 classes (I–IV) or plastic groups (A, B, C). The classification determines the required sprinkler density and system design. Misclassifying stored goods — even inadvertently — can result in an under-designed system that fails to control a fire. Richardson performs commodity classification as part of every warehouse fire protection project.' ],
            [ 'q' => 'Do I need a new fire protection permit if I change my warehouse racking layout?',
              'a' => 'Yes, in most cases. CFC Chapter 32 requires AHJ approval for any change to storage height, commodity type, or rack configuration that affects the fire protection design. You must submit a revised high-piled storage plan showing the new layout and confirm your sprinkler system still meets NFPA 13 for the new storage scenario. Richardson handles revised plan submittals for warehouse reconfigurations throughout Sacramento Valley.' ],
            [ 'q' => 'How long does a high-piled storage fire protection permit take in Sacramento Valley?',
              'a' => 'High-piled storage plan check in Sacramento Valley typically takes 4–8 weeks, with Sacramento City FD and Stockton FD on the longer end for large industrial projects. Submitting a complete package — commodity classification analysis, rack layout drawings, hydraulic calculations, and cut sheets — on the first attempt is the best way to avoid correction cycles and delays.' ],
        ],
        'ca_fire_code_guide' => [
            [ 'q' => 'How often does the California Fire Code change?',
              'a' => 'California adopts a new fire code on a 3-year cycle, synchronized with the International Fire Code publication schedule. The 2025 California Fire Code (effective January 1, 2026) is the current enforced edition. California\'s adoption always lags 1–3 years behind the most recent NFPA editions, so there is often a gap between what NFPA publishes and what California enforces.' ],
            [ 'q' => 'What are the key sprinkler-related changes in the 2025 California Fire Code?',
              'a' => 'The 2025 CFC incorporates the 2022 edition of NFPA 13 by reference, which updates sprinkler coverage requirements for concealed spaces, modifies rack storage design criteria, and introduces new extended coverage sprinkler requirements. The 2025 CFC also expands WUI overlay zones in many Northern California counties and tightens SB 1205 reporting deadlines for commercial building owners.' ],
            [ 'q' => 'Does Sacramento City enforce the 2025 California Fire Code?',
              'a' => 'Yes. Sacramento City FD and most other Sacramento Valley AHJs adopted the 2025 CFC effective January 1, 2026. Some jurisdictions may have local amendments; Sacramento County and Stockton City have historically adopted the statewide CFC without significant local modifications. Richardson monitors AHJ adoption status so your project uses the correct code edition.' ],
            [ 'q' => 'What changed for warehouse fire protection in the 2025 CFC?',
              'a' => 'The 2025 CFC (via NFPA 13-2022) updated rack storage protection criteria for Group A plastics and clarified when ESFR systems can be used as an alternative to in-rack systems. It also introduced new requirements for automated storage and retrieval systems (ASRS) that were not addressed in prior editions. Buildings permitted before January 1, 2026 use the prior edition; new permits must comply with 2025 CFC.' ],
            [ 'q' => 'Can local AHJs amend the California Fire Code?',
              'a' => 'Yes. California Health & Safety Code allows local jurisdictions to adopt amendments to the statewide CFC that are at least as restrictive. Common local amendments include lower occupancy thresholds for sprinkler requirements and additional WUI construction measures. Richardson tracks local amendments for all seven Sacramento Valley AHJs we serve, ensuring every project meets the jurisdiction-specific requirements.' ],
        ],
        'wui_guide' => [
            [ 'q' => 'What is a WUI zone in California and does my property fall in one?',
              'a' => 'WUI stands for Wildland-Urban Interface — areas where structures and other human development meet or intermingle with undeveloped wildland vegetation. California\'s State Responsibility Area (SRA) designates lands where the state bears primary fire protection responsibility; Local Responsibility Area (LRA) Very High Fire Hazard Severity Zones (VHFHSZ) are declared by cities and counties. To find out if your property is in a WUI zone, check Cal Fire\'s online FHSZ viewer or contact your local fire department.' ],
            [ 'q' => 'Does being in a WUI zone require fire sprinklers for new construction?',
              'a' => 'CBC Chapter 7A requires fire-resistance and ignition-resistance measures for new construction in SRA and VHFHSZ zones, but does not by itself mandate fire sprinklers unless local amendments require them. However, many California cities — including areas of Placer and El Dorado Counties in the Sacramento Valley — have adopted local ordinances requiring NFPA 13D sprinklers in new single-family homes in designated WUI areas.' ],
            [ 'q' => 'How do WUI zones affect fire sprinkler system design?',
              'a' => 'In WUI areas, NFPA 13D systems may need to address exterior exposure hazards that are not typical in urban construction, including extended water supply duration (from a larger storage tank) and heads positioned to protect eaves and decks. Some California jurisdictions with WUI overlays require attic sprinklers under CBC Chapter 7A, which are not standard in NFPA 13D systems. Richardson designs WUI-compliant systems for Sacramento Valley foothills projects.' ],
            [ 'q' => 'Does Rocklin or Placer County require fire sprinklers for WUI homes?',
              'a' => 'Placer County has active WUI overlay zones in its unincorporated foothills areas. New construction in State Responsibility Areas (SRA) of Placer County is subject to CBC Chapter 7A ignition-resistant construction, and local amendment may require NFPA 13D sprinklers. Rocklin city limits fall in a Local Responsibility Area; check with Rocklin Fire Department for any VHFHSZ local amendments on your specific project.' ],
            [ 'q' => 'How much do WUI requirements add to NFPA 13D system cost?',
              'a' => 'WUI requirements add approximately 10–25% to a standard NFPA 13D residential system cost, depending on the specific local amendments and the presence of attic or exterior sprinklers. A standard NFPA 13D system for a 2,500 sq ft home in Sacramento runs $4,000–$9,000; WUI-enhanced systems run $5,500–$12,000. Richardson itemizes WUI-specific requirements in every bid so you understand what each line item is for.' ],
        ],
        'permit_guide' => [
            [ 'q' => 'How long does fire sprinkler plan check take at Sacramento City Fire Department?',
              'a' => 'Sacramento City FD (SCFD) typically takes 3–5 weeks for a first-submittal commercial fire sprinkler plan check. Projects with corrections require a re-submittal cycle of 2–3 additional weeks. Over-the-counter same-day review is available for small tenant improvements (under 2,500 sq ft with limited scope). Richardson designs to SCFD\'s standard plan check checklist to pass on the first attempt.' ],
            [ 'q' => 'Can I submit fire sprinkler plans digitally to Sacramento City Fire Department?',
              'a' => 'Yes. SCFD accepts digital plan submittals through the City\'s Accela online portal. All drawings, hydraulic calculations, cut sheet packages, and permit applications are submitted electronically. Richardson uses digital submittal for all Sacramento City projects to speed processing and track plan check status in real time.' ],
            [ 'q' => 'What are the most common fire sprinkler plan check corrections in Sacramento?',
              'a' => 'Common first-round corrections from Sacramento Valley AHJs include: missing or incomplete hydraulic calculation basis of design; flow test report older than 1 year; sprinkler head spacing exceeding coverage limits; missing seismic bracing calculations or details; incorrect occupancy or hazard classification; missing escutcheon and cover plate cut sheets; and incomplete valve schedule. Richardson\'s NICET-certified team produces first-pass-compliant submittals to avoid these delays.' ],
            [ 'q' => 'Do I need a C-16 license to submit fire sprinkler plans in California?',
              'a' => 'Yes. California Business & Professions Code requires a CSLB C-16 (Fire Protection Contractor) license for all fire sprinkler design, installation, and modification. Permit applications must list a licensed C-16 contractor. Additionally, plans must be prepared or reviewed by a CSFM-registered contractor. Richardson holds CSLB C-16 #1053506 and CSFM registration, satisfying both requirements.' ],
            [ 'q' => 'Can Richardson handle the entire fire sprinkler permit process end-to-end?',
              'a' => 'Yes. Richardson is a full design-build contractor. We produce the hydraulic calculations and stamped drawings, compile the complete submittal package, submit to the AHJ, respond to all plan check comments, pull the permit, install the system, and coordinate the final inspection. Building owners and GCs have a single point of contact from design through certificate of completion.' ],
        ],
        'esfr_guide' => [
            [ 'q' => 'What is the minimum ceiling height required for ESFR sprinklers?',
              'a' => 'ESFR systems require a minimum ceiling height of approximately 25 feet (generally measured at the sprinkler deflector) to develop the required suppression pattern. K-25 ESFR heads are designed for rack storage up to 40 feet below the ceiling, and K-33 heads extend that protection to approximately 45 feet of ceiling height. Low-bay warehouses under 25 feet should use a different system design approach.' ],
            [ 'q' => 'When does NFPA 13 require in-rack sprinklers instead of ESFR?',
              'a' => 'In-rack sprinklers are required when commodity class, storage height, or rack configuration exceeds what ESFR ceiling sprinklers can protect. Common scenarios include: Group A plastic storage in high-rise racks above 40 ft; multi-tier open-rack storage that exceeds ESFR K-factor tables; and any configuration where the storage arrangement creates a horizontal barrier that ESFR water cannot penetrate. Richardson reviews your storage design and prescribes the minimum-cost compliant solution.' ],
            [ 'q' => 'How does commodity classification affect the choice between ESFR and in-rack systems?',
              'a' => 'ESFR systems are specifically designed for certain commodity classes and storage configurations. K-25 ESFR heads (the most common) can protect Group A plastics on pallets and standard rack storage up to NFPA 13 table limits. Higher K-factor ESFR heads extend protection to more challenging scenarios. For truly high-hazard commodities — encapsulated Group A plastics, aerosols, or flammable liquids — in-rack sprinklers are typically the only compliant option regardless of ceiling height.' ],
            [ 'q' => 'Can I switch from an in-rack system to ESFR if I raise my warehouse roof?',
              'a' => 'Potentially yes, if the new ceiling height and commodity class fall within ESFR design criteria. However, this requires a new hydraulic calculation, a full NFPA 13 re-design, AHJ permit submittal, and an acceptance test of the new system. Richardson has managed ESFR conversion projects for Sacramento Valley warehouse owners and can evaluate the technical and cost feasibility of switching your system.' ],
            [ 'q' => 'How much does ESFR sprinkler installation cost in California?',
              'a' => 'ESFR installations in California warehouses typically run $2.50–$4.50 per square foot, compared to $1.80–$3.50 for standard wet-pipe systems in the same space. The premium reflects larger pipe sizes (driven by high flow demands), specialized K-25 or K-33 heads, and more robust seismic bracing. In-rack systems add $0.80–$2.00 per square foot on top of the ceiling system. Richardson provides itemized ESFR bids within 48 hours of receiving your plans.' ],
        ],
        'locations_hub' => [
            [ 'q' => 'What cities does Richardson Fire Protection serve?',
              'a' => 'Richardson Fire Protection serves the greater Sacramento Valley, including Sacramento, Elk Grove, Roseville, Rocklin, Stockton, Fairfield, Yuba City, Davis, Folsom, Rancho Cordova, Citrus Heights, West Sacramento, Woodland, Auburn, and Lincoln. We cover all seven AHJ jurisdictions in our service area for new construction, tenant improvements, inspection, and emergency repair.' ],
            [ 'q' => 'Does Richardson serve both Sacramento City and Sacramento County?',
              'a' => 'Yes. Richardson works under both Sacramento City Fire Department (SCFD) jurisdiction for projects within city limits, and Sacramento County Fire for unincorporated county areas. Each AHJ has its own plan check process and permit fees. Richardson\'s team is experienced with both jurisdictions and handles submittal and AHJ coordination for projects in either area.' ],
            [ 'q' => 'Can Richardson coordinate permits with multiple AHJs on the same project or portfolio?',
              'a' => 'Yes. Richardson regularly manages projects for clients with buildings in multiple Sacramento Valley cities — each with its own AHJ. We maintain relationships with plan check staff at all seven primary AHJs in our service area, submit to each jurisdiction in the correct format, and track permit status across multiple active submittals simultaneously.' ],
            [ 'q' => 'How far does Richardson travel for fire sprinkler projects?',
              'a' => 'Our primary service area is the greater Sacramento Valley — roughly a 60-mile radius from Antelope, CA. We regularly serve Sacramento, Stockton, Roseville, Rocklin, Fairfield, Yuba City, and Davis. For larger projects, we also work in the San Francisco Bay Area, Modesto, and other Northern California locations. Call (916) 849-6441 to discuss your project location.' ],
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
