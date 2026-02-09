<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- site title -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- HEADER -->
<header class="site-header">
    <div class="container">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p class="tagline"><?php bloginfo('description'); ?></p>
    </div>
</header>

<!-- NAVIGATION -->
<nav class="main-nav">
    <div class="container">
<?php 
        
        wp_nav_menu(array(
            'theme_location' => 'primary', 
            'menu_id' => 'main-menu',
            'fallback_cb' => false
        )); 
        ?>
    </div>
</nav>


<main class="main-content">
