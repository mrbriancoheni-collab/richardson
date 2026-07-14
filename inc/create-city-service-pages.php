<?php
/**
 * Bulk-create 21 city + service pages (7 cities × 3 services).
 *
 * Run via WP-CLI:
 *   wp eval-file wp-content/themes/richardson/inc/create-city-service-pages.php
 *
 * Prerequisites:
 *   - Each city page must already exist as a published WordPress page.
 *     The script matches city pages by slug (e.g. "sacramento").
 *   - The richardson theme must be active (rfp_all_locations() must be callable).
 *
 * What it creates (example for Sacramento):
 *   Parent: /sacramento/   → slug: sacramento
 *   Children:
 *     /sacramento/commercial/    title: "Commercial Fire Protection in Sacramento"
 *     /sacramento/industrial/    title: "Industrial Fire Protection in Roseville"
 *     /sacramento/residential/   title: "Multifamily Fire Protection in Sacramento"
 *
 * The page-city-service.php template is applied automatically via the
 * template_include filter in functions.php — no manual template assignment needed.
 *
 * Safe to re-run: skips pages that already exist (matching parent + slug).
 */

if ( ! defined( 'ABSPATH' ) ) {
    $wp_load = dirname( __FILE__, 5 ) . '/wp-load.php';
    if ( file_exists( $wp_load ) ) {
        require_once $wp_load;
    } else {
        die( "Run via WP-CLI: wp eval-file <path>\n" );
    }
}

$service_titles = [
    'commercial'  => 'Commercial Fire Protection in %s',
    'industrial'  => 'Industrial Fire Protection in %s',
    'residential' => 'Multifamily Fire Protection in %s',
];

$all_locs = rfp_all_locations();
$created  = 0;
$skipped  = 0;
$errors   = [];

foreach ( $all_locs as $city_slug => $loc ) {
    $city_name = $loc['name'];

    // Find the existing city page by slug
    $city_page = get_page_by_path( $city_slug );
    if ( ! $city_page ) {
        $errors[] = "City page not found for slug: {$city_slug} — create it in WP Admin first.";
        continue;
    }

    foreach ( $service_titles as $svc_slug => $title_pattern ) {
        $title = sprintf( $title_pattern, $city_name );

        // Check if child page already exists
        $existing = get_page_by_path( $city_slug . '/' . $svc_slug );
        if ( $existing && $existing->post_parent === $city_page->ID ) {
            echo "SKIP  {$city_slug}/{$svc_slug} — already exists (ID {$existing->ID})\n";
            $skipped++;
            continue;
        }

        $page_id = wp_insert_post( [
            'post_title'   => $title,
            'post_name'    => $svc_slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $city_page->ID,
            'post_content' => '',
            'post_author'  => 1,
            'menu_order'   => 0,
        ], true );

        if ( is_wp_error( $page_id ) ) {
            $errors[] = "ERROR creating {$city_slug}/{$svc_slug}: " . $page_id->get_error_message();
        } else {
            echo "OK    {$city_slug}/{$svc_slug} — created (ID {$page_id}) → " . get_permalink( $page_id ) . "\n";
            $created++;
        }
    }
}

echo "\n";
echo "Done. Created: {$created}  |  Skipped: {$skipped}  |  Errors: " . count( $errors ) . "\n";
if ( $errors ) {
    echo "\nErrors:\n";
    foreach ( $errors as $e ) {
        echo "  - {$e}\n";
    }
}
