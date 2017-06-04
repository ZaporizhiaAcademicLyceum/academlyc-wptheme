<div class="col-md-4 col-sm-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class(array('post')); ?>>
        <?php //twentysixteen_excerpt(); ?>

        <?php //twentysixteen_post_thumbnail(); ?>

        <header class="post-thumb">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </header>

        <div class="post-body">
            <?php if (is_sticky() && is_home() && !is_paged()) : ?>
                <span class="sticky-post"><?php _e('Featured', 'twentysixteen'); ?></span>
            <?php endif; ?>
            <?php the_title(sprintf('<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <?php
            /* translators: %s: Name of current post */
            the_content(false);

            wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentysixteen') . '</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>%',
                'separator' => '<span class="screen-reader-text">, </span>',
            ));
            ?>
        </div>

        <footer class="post-footer">
            <span class="post-date"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?></span>
            <?php //twentysixteen_entry_meta(); ?>
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    __('Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen'),
                    get_the_title()
                ),
                '<br><i class="fa fa-edit"></i> '
            );
            ?>
        </footer>
    </article>
</div>