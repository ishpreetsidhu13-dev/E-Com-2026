<?php get_header(); ?>
<main class="site-main">
    <div class="container content-wrap">
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'card page-card' ); ?>>
                <div class="card-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
