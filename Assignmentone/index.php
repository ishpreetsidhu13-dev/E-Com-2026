<?php get_header(); ?>


<section class="hero">
    <h1>Hey, I'm Learning Web Dev!</h1>
    <p>Welcome to my blog.</p>
</section>

<!-- ABOUT SECTION -->
<section class="about">
    <h2>How I Started</h2>
    <p>Some few months back I was not even aware of what CSS is. I recall a time when I looked at code and realized that I thought to myself how am I going to make this code run?</p>
    <p>On some days my code either on the first attempt and I think I am a genius. The rest of the days I can spend hours correcting a single typo.</p>
    <p>The most interesting thing is that all of my mistakes make me have some new knowledge. Frustrating as it can be, I am confident that I am improving in this</p>
</section>

</section>

<!-- GOALS SECTION -->
<section class="goals">
    <h2>Whats Next</h2>
    <p>Still lots I want to learn:</p>
    <ul>
        <li>JavaScript basics</li>
        <li>More complex layouts</li>
        <li>Wordpress themes</li>
    </ul>
</section>

<!-- POSTS SECTION -->
<h2>Latest Posts</h2>

<?php if (have_posts()) : ?>
    <div class="posts-grid">
        <?php while (have_posts()) : the_post(); ?>
            <article class="post-card">
                
                <h2 class="post-tite">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                
                <div class="post-meta">
                    <span><?php echo get_the_date(); ?></span> | 
                    <span><?php the_author(); ?></span>
                </div>
                
                <div class="post-exrpt"><?php the_excerpt(); ?></div>
                
                <a href="<?php the_permalink(); ?>" class="read-bnt">Read More</a>
            </article>
        <?php endwhile; ?>
    </div>
    
    <!-- PAGINATION -->
    <nav class="pagination">
        <?php the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('&larr; Previous'),
            'next_text' => __('Next &rarr;'),
        )); ?>
    </nav>
<?php else : ?>
    <p>No posts</p>
<?php endif; ?>

<?php get_footer(); ?>
