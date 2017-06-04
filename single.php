<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-single">
                        <header>
                            <div class="page-header">
                                <h1 class="title"><?php single_post_title(); ?></h1>
                            </div>
                        </header>
                        <div class="body">
                            <?php the_content(); ?>
                        </div>
                        <footer class="footer">
                            <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                            <i class="fa fa-comment"></i> <?php comments_number(); ?>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>