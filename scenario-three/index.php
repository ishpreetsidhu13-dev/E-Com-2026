<?php get_header(); ?>
<main class="site-main">
    <div class="container content-wrap">
        <?php if ( have_posts() ) : ?>
            <div class="post-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'card post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-thumb"><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php endif; ?>

                        <div class="card-content">
                            <p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <a class="button button-outline" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'scenario-three' ); ?></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination-wrap"><?php the_posts_pagination(); ?></div>
        <?php else : ?>
            <article class="card empty-state">
                <div class="card-content">
                    <h2><?php esc_html_e( 'Nothing Found', 'scenario-three' ); ?></h2>
                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'scenario-three' ); ?></p>

                </div>
            </article>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
