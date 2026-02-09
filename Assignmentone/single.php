<?php get_header(); ?>

<article class="single-post">
    <header class="post-hdr">
        <h1 class="post-titl"><?php the_title(); ?></h1>
        <div class="post-met">
            <span>By <?php the_author(); ?></span> |
            <span><?php echo get_the_date(); ?></span> |
            <span><?php comments_number('No comments', '1 comment', '% comments'); ?></span>
        </div>
    </header>



    <div class="post-cntt"><?php the_content(); ?></div>

    <footer class="post-fotr">
        <?php the_tags('<div class="post-tgs"><strong>Tags:</strong> ', ', ', '</div>'); ?>
    </footer>
</article>

<?php if (comments_open() || get_comments_number()) {
    comments_template();
} ?>

<?php get_footer(); ?>
