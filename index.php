<?php get_header(); ?>

<main class="main-content" style="padding-top: 120px;">
    <div class="container">

        <?php if (have_posts()) : ?>
            <h1 style="font-family: var(--font-display); font-size: var(--text-4xl); margin-bottom: 2rem;">Latest Posts</h1>
            <?php while (have_posts()) : the_post(); ?>
                <article style="margin-bottom: 2rem; padding-bottom: 2rem; border-bottom: 1px solid var(--color-border);">
                    <h2 style="font-family: var(--font-display);">
                        <a href="<?php the_permalink(); ?>" style="color: var(--color-white);"><?php the_title(); ?></a>
                    </h2>
                    <p style="color: var(--color-text-muted); margin-top: 0.5rem;"><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p style="color: var(--color-text-muted);">No posts found.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>