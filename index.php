<?php get_header(); ?>
    <div class="container">
        <div class="row content-gutter">
            <?php if (have_posts()) : ?>

                <?php
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;

            // If no content, include the "No posts found" template.
            else :
                get_template_part('template-parts/content', 'none');

            endif;
            ?>
        </div>

        <?php
        if (!function_exists("wp_bs_pagination"))
            require 'inc/bs-pagination.php';
        wp_bs_pagination(); ?>
    </div>

<?php get_footer(); ?>