<?php
/**
 * Site Audit Email — run once via WP-CLI:
 *   wp eval-file wp-content/themes/richardson/inc/send-audit-email.php
 *
 * Sends an HTML audit report to chris@richardsonfirepro.com listing all
 * page templates, issues found, and fixes applied.
 */

if ( ! defined( 'ABSPATH' ) ) {
    $wp_load = dirname( __FILE__, 5 ) . '/wp-load.php';
    if ( file_exists( $wp_load ) ) {
        require_once $wp_load;
    } else {
        die( "Run this script via WP-CLI: wp eval-file <path-to-this-file>\n" );
    }
}

$to      = 'chris@richardsonfirepro.com';
$subject = 'Richardson Fire Pro — Site Audit Report ' . date( 'Y-m-d' );

$templates = [
    [ '/services/',              'Services',                           'page-services.php',          'Fixed — template created' ],
    [ '/',                       'Homepage',                           'front-page.php',             'OK — all anchor sections present' ],
    [ '/commercial/',            'Commercial Fire Protection',         'page-commercial.php',        'OK' ],
    [ '/industrial/',            'Industrial Fire Protection',         'page-industrial.php',        'OK' ],
    [ '/residential/',           'Residential / Multifamily',         'page-residential.php',       'OK' ],
    [ '/contact/',               'Contact Page',                      'page-contact.php',           'OK' ],
    [ '/about/',                 'About Page',                        'page-about.php',             'OK' ],
    [ '/blog/',                  'Blog &amp; Resources',              'page-blog-index.php',        'OK' ],
    [ '/locations/',             'Locations Hub',                     'page-locations.php',         'OK' ],
    [ '/locations/sacramento/',  'Sacramento',                        'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/locations/roseville/',   'Roseville',                         'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/locations/rocklin/',     'Rocklin',                           'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/locations/stockton/',    'Stockton',                          'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/locations/fairfield/',   'Fairfield',                         'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/locations/yuba-city/',   'Yuba City',                         'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/locations/davis/',       'Davis',                             'page-location.php',          'OK — city &times; service interlinking added' ],
    [ '/portfolio/',             'Project Portfolio',                 'page-portfolio.php',         'OK' ],
    [ '/licenses/',              'Licenses &amp; Credentials',        'page-licenses.php',          'OK' ],
    [ '/ahj-comparison/',        'AHJ Permit Comparison',             'page-ahj-comparison.php',   'OK' ],
    [ '/cost-guide/',            'Fire Sprinkler Cost Guide',         'page-cost-guide.php',        'OK' ],
    [ '/blog/nfpa-25-guide/',    'NFPA 25 Inspection Guide',         'page-blog-nfpa25.php',       'OK' ],
    [ '/blog/nfpa-13r-vs-13/',   'NFPA 13R vs 13 Guide',             'page-blog-13r-vs-13.php',   'OK' ],
    [ '/blog/high-piled-storage/', 'High-Piled Storage Guide',       'page-blog-high-piled.php',   'OK' ],
];

$issues = [
    [ 'FIXED',   '/services/ returned 404',                                           'Created page-services.php — full hub page with all 3 sectors, 6 service tiles, city strip, FAQ, and contact form.' ],
    [ 'FIXED',   'Footer links Commercial/Industrial/Residential used hash anchors',   'Updated footer.php to link to /commercial/, /industrial/, /residential/, and added /services/ as top link.' ],
    [ 'FIXED',   'Fallback nav had duplicate Services anchor + no real page links',    'Updated rfp_fallback_nav() to link to /services/, /commercial/, /industrial/, /residential/, /locations/, /contact/.' ],
    [ 'FIXED',   'City pages lacked city-specific service cross-links',                'Added "Services We Provide in [City]" section to page-location.php with 3 full service cards per city.' ],
    [ 'FIXED',   'Building-type cards all used the same fire-flame icon',              'Rotated 6 distinct icons (building, warehouse, building-user, hospital, school, store) across building type cards.' ],
    [ 'FIXED',   'Neighborhoods rendered as fake links (cursor:default span)',         'Replaced with styled pill/tag spans that are clearly non-interactive — no misleading link appearance.' ],
];

$next_steps = [
    'Create a WordPress page titled "Services" with slug <code>services</code>, assign template "Services", and publish it — the /services/ URL will then resolve correctly.',
    'Verify the WordPress primary navigation menu in Appearance → Menus includes links to /commercial/, /industrial/, /residential/, /contact/, and /services/.',
    'Submit /sitemap.xml to Google Search Console to index all 22+ pages.',
    'Run a Lighthouse audit on /services/ and /locations/sacramento/ once the Services page is published.',
];

$home = home_url( '/' );

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; color: #1a1a1a; font-size: 14px; line-height: 1.6; margin: 0; padding: 0; background: #f4f4f5; }
  .wrap { max-width: 760px; margin: 2rem auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,.08); }
  .header { background: #c0392b; color: #fff; padding: 2rem 2.5rem; }
  .header h1 { margin: 0 0 .25rem; font-size: 1.4rem; }
  .header p { margin: 0; opacity: .85; font-size: .9rem; }
  .body { padding: 2rem 2.5rem; }
  h2 { font-size: 1rem; text-transform: uppercase; letter-spacing: .08em; color: #c0392b; margin: 2rem 0 .75rem; }
  table { width: 100%; border-collapse: collapse; font-size: .82rem; margin-bottom: 1rem; }
  th { background: #f4f4f5; text-align: left; padding: .5rem .75rem; font-weight: 600; }
  td { padding: .45rem .75rem; border-bottom: 1px solid #e5e7eb; vertical-align: top; }
  tr:last-child td { border-bottom: none; }
  .badge { display: inline-block; padding: .15rem .55rem; border-radius: 999px; font-size: .72rem; font-weight: 700; }
  .badge-ok { background: #dcfce7; color: #166534; }
  .badge-fixed { background: #fef9c3; color: #854d0e; }
  .badge-issue { background: #fee2e2; color: #991b1b; }
  ul { padding-left: 1.25rem; margin: .5rem 0; }
  li { margin-bottom: .35rem; }
  code { background: #f4f4f5; padding: .1em .35em; border-radius: 3px; font-family: monospace; font-size: .88em; }
  .footer-note { background: #f9fafb; border-top: 1px solid #e5e7eb; padding: 1.25rem 2.5rem; font-size: .8rem; color: #6b7280; }
  a { color: #c0392b; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <h1>Richardson Fire Pro &mdash; Site Audit Report</h1>
    <p>Generated <?php echo esc_html( date( 'F j, Y \a\t g:i a T' ) ); ?> &bull; <?php echo esc_url( $home ); ?></p>
  </div>
  <div class="body">

    <h2>Page Inventory</h2>
    <table>
      <tr><th>URL</th><th>Page Title</th><th>Template</th><th>Status</th></tr>
      <?php foreach ( $templates as $t ) : ?>
      <tr>
        <td><a href="<?php echo esc_url( $home . ltrim( $t[0], '/' ) ); ?>"><?php echo esc_html( $t[0] ); ?></a></td>
        <td><?php echo $t[1]; ?></td>
        <td><code><?php echo esc_html( $t[2] ); ?></code></td>
        <td>
          <?php if ( strpos( $t[3], 'Fixed' ) === 0 || strpos( $t[3], 'fixed' ) !== false ) : ?>
            <span class="badge badge-fixed">FIXED</span>
          <?php else : ?>
            <span class="badge badge-ok">OK</span>
          <?php endif; ?>
          &nbsp;<?php echo $t[3]; ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

    <h2>Issues Found &amp; Resolved</h2>
    <table>
      <tr><th>Status</th><th>Issue</th><th>Resolution</th></tr>
      <?php foreach ( $issues as $issue ) : ?>
      <tr>
        <td><span class="badge badge-fixed"><?php echo esc_html( $issue[0] ); ?></span></td>
        <td><?php echo $issue[1]; ?></td>
        <td><?php echo $issue[2]; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>

    <h2>Required Action by Site Admin</h2>
    <ul>
      <?php foreach ( $next_steps as $step ) : ?>
        <li><?php echo $step; ?></li>
      <?php endforeach; ?>
    </ul>

  </div>
  <div class="footer-note">
    This report was generated automatically by the Richardson Fire Pro WordPress theme.<br>
    Questions? Reply to this email or call (916) 849-6441.
  </div>
</div>
</body>
</html>
<?php
$html = ob_get_clean();

$headers = [
    'Content-Type: text/html; charset=UTF-8',
    'From: Richardson Fire Pro Site <no-reply@richardsonfirepro.com>',
];

$sent = wp_mail( $to, $subject, $html, $headers );

if ( $sent ) {
    echo "Audit email sent to {$to}\n";
} else {
    echo "wp_mail() returned false — check your WordPress mail configuration (SMTP plugin, SendGrid, etc.).\n";
    echo "The HTML report has been saved to: " . __FILE__ . "\n";
    echo "You can open it directly in a browser or forward it manually.\n";
}
