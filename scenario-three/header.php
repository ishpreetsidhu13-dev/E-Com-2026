<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">
        <div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <div class="logo-wrap"><?php the_custom_logo(); ?></div>
            <?php endif; ?>

            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
            <p class="site-tagline"><?php bloginfo( 'description' ); ?></p>
        </div>

        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
            <span></span><span></span><span></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'scenario-three' ); ?></span>
        </button>

        <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'scenario-three' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_id'        => 'primary-menu',
                    'fallback_cb'    => 'wp_page_menu',
                )
            );
            ?>

            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                <div class="header-actions">
                    <a class="header-link" href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'My Account', 'scenario-three' ); ?></a>
                    <a class="header-cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                        <?php esc_html_e( 'Cart', 'scenario-three' ); ?>
                        <span class="cart-count"><?php echo absint( WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </nav>
    </div>
</header>
