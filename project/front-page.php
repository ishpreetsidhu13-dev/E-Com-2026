<?php get_header(); ?>
<main class="site-main">
    <section class="hero-section">
        <div class="hero-media" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/MOF-Dining-Top-Layered-Image-scaled.jpg' ); ?>');"></div>
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <p class="eyebrow"><?php esc_html_e( 'Classic Taste • Modern Ordering', 'scenario-three' ); ?></p>
            <h1><?php esc_html_e( 'Family restaurant dining, now online.', 'scenario-three-bistro' ); ?></h1>
            <p class="hero-text"><?php esc_html_e( 'Enjoy warm comfort food with easy pickup and delivery.', 'scenario-three' ); ?></p>

            <div class="hero-actions">
                <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                    <a class="button" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"><?php esc_html_e( 'Order Food', 'scenario-three' ); ?></a>
                    <a class="button button-outline button-light" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><?php esc_html_e( 'View Cart', 'scenario-three' ); ?></a>
                <?php else : ?>
                    <a class="button" href="#featured-menu"><?php esc_html_e( 'Explore Menu', 'scenario-three' ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="info-strip">
        <div class="container info-grid">
            <div class="card info-card">
                <h3><?php esc_html_e( 'Pickup Ready', 'scenario-three' ); ?></h3>
                <p><?php esc_html_e( 'Customers can place an order online and collect it fresh from the restaurant.', 'scenario-three' ); ?></p>
            </div>
            <div class="card info-card">
                <h3><?php esc_html_e( 'Fast Delivery', 'scenario-three-bistro' ); ?></h3>
                <p><?php esc_html_e( 'Families can order from home and get meals delivered to their door.', 'scenario-three' ); ?></p>
            </div>
            <div>
            </div class="card info-card">
                <h3><?php esc_html_e( 'Dine in ', 'scenario-three-bistro' ); ?></h3>
                <p><?php esc_html_e( 'Experiece Great Food,Served Fresh at you table.', 'scenario-three' ); ?></p>
            </div>
            
        </div>
    </section>

    <section id="featured-menu" class="featured-products">
        <div class="container">
            <div class="section-heading">
                <p class="eyebrow"><?php esc_html_e( 'Featured Menu', 'scenario-three' ); ?></p>
                <h2><?php esc_html_e( 'Our Signature Favourites Crafted with Tradition', 'scenario-three' ); ?></h2>
                
            </div>

            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date" order="DESC"]' ); ?>
            <?php else : ?>
                <div class="fallback-grid">
                    <article class="card menu-card"><div class="card-content"><h3>Butter Chicken</h3><p>Creamy tomato curry with tender chicken.</p></div></article>
                    <article class="card menu-card"><div class="card-content"><h3>Paneer Butter Masala</h3><p>Rich curry with paneer cubes and butter gravy.</p></div></article>
                    <article class="card menu-card"><div class="card-content"><h3>Garlic Naan</h3><p>Soft naan bread finished with fresh garlic.</p></div></article>
                    <article class="card menu-card"><div class="card-content"><h3>Family Meal Combo</h3><p>A complete meal bundle for pickup or delivery.</p></div></article>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="two-column-section">
        <div class="container split-layout">
            

            <div class="split-card card">
                <div class="card-content">
                    <h3><?php esc_html_e( 'explore more Delicious Options', 'scenario-three' ); ?></h3>
                    
                    <a class="button button-outline" href="<?php echo esc_url( class_exists( 'WooCommerce' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/' ) ); ?>">
                        <?php esc_html_e( 'Go to Shop', 'scenario-three' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
