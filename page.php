<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-single">
                        <div class="page-header">
                            <h1 class="title"><?php single_post_title(); ?></h1>
                        </div>
                        <div class="body">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php get_footer();