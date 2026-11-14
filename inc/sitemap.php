<?php
/**
 * Dynamic XML sitemap — accessible at /sitemap.xml
 * After deployment: visit Settings → Permalinks once to flush rewrite rules.
 */

add_action( 'init', function () {
    add_rewrite_rule( '^sitemap\.xml$', 'index.php?rfp_sitemap=1', 'top' );
} );

add_filter( 'query_vars', function ( $vars ) {
    $vars[] = 'rfp_sitemap';
    return $vars;
} );

add_action( 'after_switch_theme', function () {
    add_rewrite_rule( '^sitemap\.xml$', 'index.php?rfp_sitemap=1', 'top' );
    flush_rewrite_rules();
} );

add_action( 'template_redirect', function () {
    if ( ! get_query_var( 'rfp_sitemap' ) ) {
        return;
    }

    header( 'Content-Type: application/xml; charset=UTF-8' );
    header( 'X-Robots-Tag: noindex' );

    $now = date( 'Y-m-d' );

    // ── Core pages ───────────────────────────────────────────────────
    $urls = [
        [ 'loc' => home_url( '/' ),                              'priority' => '1.0', 'changefreq' => 'daily',   'lastmod' => $now ],

        // Service hubs
        [ 'loc' => home_url( '/services/' ),                     'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],
        [ 'loc' => home_url( '/commercial/' ),                   'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],
        [ 'loc' => home_url( '/industrial/' ),                   'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],
        [ 'loc' => home_url( '/residential/' ),                  'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-pump/' ),                    'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],
        [ 'loc' => home_url( '/emergency-repair/' ),             'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],
        [ 'loc' => home_url( '/inspection-testing/' ),           'priority' => '0.9', 'changefreq' => 'weekly',  'lastmod' => $now ],

        // Location hub
        [ 'loc' => home_url( '/locations/' ),                    'priority' => '0.7', 'changefreq' => 'weekly',  'lastmod' => $now ],

        // Authority / utility pages
        [ 'loc' => home_url( '/about/' ),                        'priority' => '0.6', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/contact/' ),                      'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/licenses/' ),                     'priority' => '0.6', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/cost-guide/' ),                   'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/portfolio/' ),                    'priority' => '0.6', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/ahj-comparison/' ),               'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/blog/' ),                         'priority' => '0.6', 'changefreq' => 'weekly',  'lastmod' => $now ],

        // Articles / guides
        [ 'loc' => home_url( '/nfpa-25-inspection-guide/' ),             'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/nfpa-13r-vs-13-apartment-sprinklers/' ),  'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/high-piled-storage-fire-code/' ),         'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/ca-fire-code-2025/' ),                    'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/wui-sprinklers/' ),                       'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/permit-guide-sacramento/' ),              'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/esfr-vs-in-rack/' ),                      'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/nfpa-13-fire-sprinkler-guide/' ),         'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/how-fire-sprinklers-work/' ),             'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-pump-installation-guide/' ),         'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-sprinkler-installation-timeline/' ), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/tenant-improvement-fire-sprinklers/' ),  'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/wet-pipe-vs-dry-pipe-sprinklers/' ),     'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/restaurant-fire-sprinkler-requirements/' ), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/mixed-use-fire-protection/' ),           'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/nfpa-13d-residential-fire-sprinklers/' ),'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-sprinkler-inspection-cost/' ),      'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-sprinkler-coordination-guide/' ),   'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/pre-action-fire-sprinkler-systems/' ),   'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-sprinkler-backflow-preventer/' ),   'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
        [ 'loc' => home_url( '/fire-sprinkler-shop-drawings/' ),        'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $now ],
    ];

    // ── City pages (both /locations/{city}/ and direct /{city}/) ────
    if ( function_exists( 'rfp_all_locations' ) ) {
        $city_service_slugs = [
            'commercial', 'industrial', 'residential',
            'fire-pump-design', 'fire-pump-installation', 'fire-pump-repair', 'fire-pump-testing',
        ];

        foreach ( rfp_all_locations() as $city_slug => $loc ) {
            // /locations/{city}/
            $urls[] = [
                'loc'        => home_url( '/locations/' . $city_slug . '/' ),
                'priority'   => '0.8',
                'changefreq' => 'weekly',
                'lastmod'    => $now,
            ];

            // /{city}/ (direct top-level city page)
            $urls[] = [
                'loc'        => home_url( '/' . $city_slug . '/' ),
                'priority'   => '0.8',
                'changefreq' => 'weekly',
                'lastmod'    => $now,
            ];

            // /{city}/{service}/ — 7 services × 7 cities = 49 pages
            foreach ( $city_service_slugs as $svc ) {
                $urls[] = [
                    'loc'        => home_url( '/' . $city_slug . '/' . $svc . '/' ),
                    'priority'   => '0.7',
                    'changefreq' => 'monthly',
                    'lastmod'    => $now,
                ];
            }
        }
    }

    // ── Merge any published WP pages not already in the list ────────
    $existing = array_column( $urls, 'loc' );

    foreach ( get_pages( [ 'post_status' => 'publish' ] ) as $p ) {
        $url = get_permalink( $p );
        if ( ! in_array( $url, $existing, true ) ) {
            $urls[]     = [ 'loc' => $url, 'priority' => '0.5', 'changefreq' => 'monthly', 'lastmod' => get_the_modified_date( 'Y-m-d', $p ) ?: $now ];
            $existing[] = $url;
        }
    }

    foreach ( get_posts( [ 'numberposts' => 100, 'post_status' => 'publish' ] ) as $post ) {
        $url = get_permalink( $post );
        if ( ! in_array( $url, $existing, true ) ) {
            $urls[] = [ 'loc' => $url, 'priority' => '0.6', 'changefreq' => 'monthly', 'lastmod' => get_the_modified_date( 'Y-m-d', $post ) ?: $now ];
        }
    }

    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ( $urls as $u ) {
        echo "  <url>\n";
        echo '    <loc>' . esc_url( $u['loc'] ) . "</loc>\n";
        echo '    <lastmod>' . esc_html( $u['lastmod'] ) . "</lastmod>\n";
        echo '    <changefreq>' . esc_html( $u['changefreq'] ) . "</changefreq>\n";
        echo '    <priority>' . esc_html( $u['priority'] ) . "</priority>\n";
        echo "  </url>\n";
    }
    echo '</urlset>';
    exit;
} );
