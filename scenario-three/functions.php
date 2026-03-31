<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function stb_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'html5',
        array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
    );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 120,
            'width'       => 240,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'scenario-three-bistro' ),
            'footer'  => __( 'Footer Menu', 'scenario-three-bistro' ),
        )
    );
}
add_action( 'after_setup_theme', 'stb_setup' );


function stb_enqueue_assets() {
    wp_enqueue_style(
        'stb-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'stb-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );


}
add_action( 'wp_enqueue_scripts', 'stb_enqueue_assets' );


function stb_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'scenario-three' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here.', 'scenario-three' ),
            'before_widget' => '<section class="widget card">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'stb_widgets_init' );


function stb_body_classes( $classes ) {
    if ( class_exists( 'WooCommerce' ) ) {
        $classes[] = 'stb-woo-ready';
    }

    return $classes;
}
add_filter( 'body_class', 'stb_body_classes' );


function stb_customize_cart_fragments( $fragments ) {
    if ( ! class_exists( 'WooCommerce' ) ) {
        return $fragments;
    }

    ob_start();
    ?>
    <a class="header-cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
        <?php esc_html_e( 'Cart', 'scenario-three' ); ?>
        <span class="cart-count"><?php echo absint( WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?></span>
    </a>
    <?php
    $fragments['a.header-cart-link'] = ob_get_clean();

    return $fragments;
}

if ( class_exists( 'WooCommerce' ) ) {
    add_filter( 'woocommerce_add_to_cart_fragments', 'stb_customize_cart_fragments' );
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

function stb_woocommerce_wrapper_before() {
    echo '<main class="site-main"><div class="container content-wrap">';
}

function stb_woocommerce_wrapper_after() {
    echo '</div></main>';
}

add_action( 'woocommerce_before_main_content', 'stb_woocommerce_wrapper_before', 5 );
add_action( 'woocommerce_after_main_content', 'stb_woocommerce_wrapper_after', 50 );
