<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3><?php bloginfo( 'name' ); ?></h3>
            <p><?php bloginfo( 'description' ); ?></p>
            <p><?php esc_html_e( 'Simple classic dining with pickup and delivery.', 'scenario-three' ); ?></p>
        </div>

        <div>
            <h3><?php esc_html_e( 'Order Options', 'scenario-three' ); ?></h3>
            <p><?php esc_html_e( 'Delivery available across your local area.', 'scenario-three' ); ?></p>
            <p><?php esc_html_e( 'Fast pickup for customers on the go.', 'scenario-three' ); ?></p>
        </div>

        <div>
            
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => false,
                )
            );
            ?>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
