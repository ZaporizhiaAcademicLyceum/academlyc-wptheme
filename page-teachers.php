<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <?php while (have_posts()) : the_post();
        $teachers = json_decode(get_the_content()); ?>
        <article class="post-single">
          <header>
            <h1 class="h2"><?php single_post_title(); ?></h1>
          </header>
          <div class="body">
            <div class="row">
              <?php foreach($teachers as $teacher): ?>
              <div class="col-sm-3 col-xs-6">
                <div class="card card-teacher">
                  <img src="<?php echo $teacher->image .'?v=19032018'; ?>" class="img-fluid card-img-top">
                  <div class="teacher__detail">
                    <div class="teacher__detail-name"><?php echo $teacher->name; ?></div>
                    <div class="teacher__detail-desc"><?php echo $teacher->desc; ?></div>
                    <div class="teacher__detail-links">
                      <?php if ($teacher->blog): ?>
                        <a href="<?php echo $teacher->blog; ?>" alt="Блог"><i class="fa fa-link"></i></a>
                      <?php endif; ?>
                      <?php if ($teacher->facebook): ?>
                        <a href="<?php echo $teacher->facebook; ?>" alt="Сторінка у Facebook"><i class="fa fa-facebook"></i></a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer();
