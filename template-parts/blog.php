<section class="blog">
    <div class="container">
        <p class="section-label">Latest Insights</p>
        <h2 class="section-title">From Our <span class="accent">Blog</span></h2>
        <p class="section-sub">Tips, strategies and updates from the YiScroll team.</p>

        <div class="blog-grid">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            );
            $blog_posts = new WP_Query($args);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
                <article class="blog-card">
                    <div class="blog-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <div class="blog-placeholder">
                                <i class="ri-article-line"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="blog-info">
                        <span class="blog-date"><?php echo get_the_date('M d, Y'); ?></span>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        <a href="<?php the_permalink(); ?>" class="blog-link">Read More →</a>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p class="no-posts">No blog posts yet. Check back soon!</p>
            <?php endif; ?>
        </div>

        <div style="text-align:center; margin-top: var(--space-8);">
            <a href="<?php echo home_url('/blog'); ?>" class="btn-outline">View All Posts →</a>
        </div>
    </div>
</section>