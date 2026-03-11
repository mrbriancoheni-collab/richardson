<?php
/**
 * Richardson Fire Protection — functions.php
 * Theme setup, asset enqueueing, nav menus, and helpers.
 */

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
    $ver = wp_get_theme()->get( 'Version' );

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
        $ver
    );

    // Main JavaScript (footer)
    wp_enqueue_script(
        'rfp-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        $ver,
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

// ─── AJAX: Contact Form Handler ──────────────────────────────────────────────

function rfp_handle_contact() {
    check_ajax_referer( 'rfp_contact', 'nonce' );

    $first_name   = sanitize_text_field( $_POST['firstName']   ?? '' );
    $last_name    = sanitize_text_field( $_POST['lastName']    ?? '' );
    $email        = sanitize_email(      $_POST['email']       ?? '' );
    $phone        = sanitize_text_field( $_POST['phone']       ?? '' );
    $service_type = sanitize_text_field( $_POST['serviceType'] ?? '' );
    $message      = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $first_name ) || empty( $last_name ) || empty( $email ) || empty( $service_type ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ] );
    }

    $to      = get_option( 'admin_email' );
    $subject = 'New Quote Request — Richardson Fire Protection';
    $body    = sprintf(
        "Name: %s %s\nEmail: %s\nPhone: %s\nService: %s\n\nMessage:\n%s",
        $first_name, $last_name, $email, $phone, $service_type, $message
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
