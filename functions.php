<?php
/**
 * Richardson Fire Protection — functions.php
 * Theme setup, asset enqueueing, nav menus, and helpers.
 */

// ─── Location Data ───────────────────────────────────────────────────────────
require get_template_directory() . '/inc/location-data.php';

// ─── SEO Module ─────────────────────────────────────────────────────────────
require get_template_directory() . '/inc/seo.php';

// ─── Auto-route city pages to page-location.php ──────────────────────────────
add_filter( 'template_include', function( $template ) {
    if ( ! is_singular( 'page' ) ) return $template;
    $post   = get_queried_object();
    $parent = get_post( $post->post_parent );
    if ( $parent && 'locations' === $parent->post_name ) {
        $city_tpl = get_template_directory() . '/page-location.php';
        if ( file_exists( $city_tpl ) ) return $city_tpl;
    }
    return $template;
} );

// ─── Blog Categories (seed on after_switch_theme) ────────────────────────────
// These categories target the GC / developer ICP reading the blog.
add_action( 'after_switch_theme', 'rfp_seed_categories' );
function rfp_seed_categories() {
    $categories = [
        [
            'name'        => 'Code & Compliance',
            'slug'        => 'code-compliance',
            'description' => 'NFPA code updates, California Title 19 changes, AHJ bulletins, and what they mean for your next project.',
        ],
        [
            'name'        => 'New Construction',
            'slug'        => 'new-construction',
            'description' => 'Fire sprinkler design and installation tips for ground-up commercial, industrial, and multifamily construction projects.',
        ],
        [
            'name'        => 'Multifamily & Developers',
            'slug'        => 'multifamily-developers',
            'description' => 'NFPA 13R/13D guidance, development checklists, and fire protection considerations for apartment and condo developers.',
        ],
        [
            'name'        => 'General Contractor Resources',
            'slug'        => 'general-contractor-resources',
            'description' => 'Scheduling guides, scope-of-work tips, pre-construction checklists, and sub coordination advice for GCs.',
        ],
        [
            'name'        => 'Inspections & Maintenance',
            'slug'        => 'inspections-maintenance',
            'description' => 'Annual inspection requirements, NFPA 25 guidance, and maintenance best practices for building owners and property managers.',
        ],
        [
            'name'        => 'Project Spotlights',
            'slug'        => 'project-spotlights',
            'description' => 'Behind-the-scenes look at completed commercial, industrial, and multifamily fire protection projects across Sacramento.',
        ],
    ];

    foreach ( $categories as $cat ) {
        if ( ! term_exists( $cat['slug'], 'category' ) ) {
            wp_insert_term( $cat['name'], 'category', [
                'slug'        => $cat['slug'],
                'description' => $cat['description'],
            ] );
        }
    }
}

// ─── Theme Setup ────────────────────────────────────────────────────────────

function rfp_setup() {
    // Let WordPress manage the <title> tag
    add_theme_support( 'title-tag' );

    // Featured images on posts/pages
    add_theme_support( 'post-thumbnails' );

    // HTML5 markup for core elements
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );

    // Custom logo support
    add_theme_support( 'custom-logo', [
        'height'      => 110,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ] );

    // Selective refresh for widgets in Customizer
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Register navigation menu locations
    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'richardson-fp' ),
        'footer'  => __( 'Footer Navigation',  'richardson-fp' ),
    ] );
}
add_action( 'after_setup_theme', 'rfp_setup' );

// ─── Enqueue Styles & Scripts ────────────────────────────────────────────────

function rfp_enqueue_assets() {
    // filemtime() versions — any file save immediately busts browser/CDN cache.
    $css_ver = filemtime( get_template_directory() . '/css/style.css' );
    $js_ver  = filemtime( get_template_directory() . '/js/main.js' );

    // Google Fonts
    wp_enqueue_style(
        'rfp-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Oswald:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'rfp-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );

    // Main stylesheet
    wp_enqueue_style(
        'rfp-style',
        get_template_directory_uri() . '/css/style.css',
        [ 'rfp-google-fonts', 'rfp-font-awesome' ],
        $css_ver
    );

    // Main JavaScript (footer)
    wp_enqueue_script(
        'rfp-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        $js_ver,
        true
    );

    // Pass site URL to JS for any dynamic links
    wp_localize_script( 'rfp-main', 'rfpData', [
        'homeUrl' => esc_url( home_url( '/' ) ),
        'ajaxUrl' => esc_url( admin_url( 'admin-ajax.php' ) ),
        'nonce'   => wp_create_nonce( 'rfp_contact' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'rfp_enqueue_assets' );

// ─── Site Image URLs ─────────────────────────────────────────────────────────

/**
 * Logo — white version for dark backgrounds (nav, footer).
 * Change the path here if the upload location ever changes.
 */
function rfp_logo_url() {
    return site_url( '/wp-content/uploads/2026/02/cropped-richardson-fire-protection-logo-w-small.png' );
}

/** Hero / parallax background — full-width section backdrop. */
function rfp_bg_img_url() {
    return site_url( '/wp-content/uploads/2026/02/richardson-fire-protection-paralax.jpg' );
}

/** Truck / team photo — About sections and blog post fallback. */
function rfp_truck_img_url() {
    return site_url( '/wp-content/uploads/2026/02/richardson-truck.jpg' );
}

// ─── Navigation ──────────────────────────────────────────────────────────────

/**
 * Add nav-link class to all primary menu anchor tags.
 */
function rfp_nav_link_attributes( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        $classes         = isset( $atts['class'] ) ? $atts['class'] . ' nav-link' : 'nav-link';
        $atts['class']   = $classes;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'rfp_nav_link_attributes', 10, 3 );

/**
 * Fallback nav rendered when no primary menu has been assigned in WP admin.
 */
function rfp_fallback_nav() {
    $home = home_url( '/' );
    ?>
    <ul id="navLinks" class="nav-links">
        <li><a href="<?php echo esc_url( $home . '#about' );       ?>" class="nav-link">About</a></li>
        <li><a href="<?php echo esc_url( $home . '#commercial' );  ?>" class="nav-link">Commercial</a></li>
        <li><a href="<?php echo esc_url( $home . '#industrial' );  ?>" class="nav-link">Industrial</a></li>
        <li><a href="<?php echo esc_url( $home . '#residential' ); ?>" class="nav-link">Residential</a></li>
        <li><a href="<?php echo esc_url( $home . '#services' );    ?>" class="nav-link">Services</a></li>
        <li><a href="<?php echo esc_url( $home . '#blog' );        ?>" class="nav-link">Blog</a></li>
    </ul>
    <?php
}

// ─── Content Helpers ─────────────────────────────────────────────────────────

/** Trim excerpt length. */
function rfp_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'rfp_excerpt_length' );

/** Remove the default "[…]" more string. */
function rfp_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'rfp_excerpt_more' );

// ─── Widget Areas ────────────────────────────────────────────────────────────

function rfp_widgets_init() {
    register_sidebar( [
        'name'          => __( 'Blog Sidebar', 'richardson-fp' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Widgets shown on blog post pages.', 'richardson-fp' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'rfp_widgets_init' );

// ─── Comment Callback ────────────────────────────────────────────────────────

/**
 * Custom comment template used by comments.php.
 * Renders each comment with branded avatar and styling.
 *
 * @param WP_Comment $comment
 * @param array      $args
 * @param int        $depth
 */
function rfp_comment( $comment, $args, $depth ) {
    $initials = strtoupper( substr( $comment->comment_author, 0, 2 ) );
    ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'rfp-comment' ); ?>>
      <article style="display: flex; gap: 1.25rem; padding: 1.5rem 0; border-bottom: 1px solid #f0f0f0;">
        <div style="width: 48px; height: 48px; border-radius: 50%; background: #1a1a1a; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">
          <?php echo esc_html( $initials ); ?>
        </div>
        <div style="flex: 1;">
          <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem; flex-wrap: wrap;">
            <strong style="font-size: 0.95rem;"><?php echo esc_html( $comment->comment_author ); ?></strong>
            <time style="font-size: 0.8rem; color: #9ca3af;" datetime="<?php comment_date( 'c' ); ?>">
              <?php comment_date( 'F j, Y' ); ?>
            </time>
            <?php comment_reply_link( array_merge( $args, [
                'reply_text' => '<i class="fa-solid fa-reply"></i> Reply',
                'depth'      => $depth,
                'max_depth'  => $args['max_depth'],
            ] ) ); ?>
          </div>
          <?php if ( '0' === $comment->comment_approved ) : ?>
            <p style="font-size: 0.8rem; color: #f59e0b; background: #fef3c7; padding: 0.35rem 0.75rem; border-radius: 4px; display: inline-block; margin-bottom: 0.5rem;">
              <i class="fa-solid fa-clock"></i> Your comment is awaiting moderation.
            </p>
          <?php endif; ?>
          <div style="font-size: 0.95rem; color: #374151; line-height: 1.65;">
            <?php comment_text(); ?>
          </div>
        </div>
      </article>
    </li>
    <?php
}

// ─── AJAX: Contact Form Handler ──────────────────────────────────────────────

function rfp_handle_contact() {
    check_ajax_referer( 'rfp_contact', 'rfp_nonce' );

    $first_name   = sanitize_text_field(    $_POST['firstName']     ?? '' );
    $last_name    = sanitize_text_field(    $_POST['lastName']      ?? '' );
    $email        = sanitize_email(         $_POST['email']         ?? '' );
    $phone        = sanitize_text_field(    $_POST['phone']         ?? '' );
    $service_type = sanitize_text_field(    $_POST['serviceType']   ?? '' );
    $message      = sanitize_textarea_field($_POST['message']       ?? '' );
    $city         = sanitize_text_field(    $_POST['location_city'] ?? '' );

    if ( empty( $first_name ) || empty( $last_name ) || empty( $email ) || empty( $service_type ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ] );
    }

    $to      = 'Chris@Richardsonfirepro.com';
    $subject = 'New Quote Request — Richardson Fire Protection';
    $city_line = $city ? "City: {$city}\n" : '';
    $body    = sprintf(
        "Name: %s %s\nEmail: %s\nPhone: %s\nService: %s\n%s\nMessage:\n%s",
        $first_name, $last_name, $email, $phone, $service_type, $city_line, $message
    );
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email,
    ];

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Message received!' ] );
    } else {
        wp_send_json_error( [ 'message' => 'Unable to send. Please call us directly.' ] );
    }
}
add_action( 'wp_ajax_nopriv_rfp_contact', 'rfp_handle_contact' );
add_action( 'wp_ajax_rfp_contact',        'rfp_handle_contact' );
