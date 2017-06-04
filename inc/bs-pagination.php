<?php

function wp_bs_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged))
        $paged = 1;

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages)
            $pages = 1;
    }

    if ($pages != 1) { ?>
        <div class="text-center">
            <nav>
                <ul class="pagination">
                    <li class="disabled hidden-xs"><span aria-hidden="true"><?php printf(__('Сторінка %d з %d'), $paged, $pages); ?></span></li>
                    <?php if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) : ?>
                        <li><a href="<?php echo get_pagenum_link(1); ?>" aria-label="<?php echo __('Перша', 'academlyc'); ?>">&laquo;<span class="hidden-xs"> <?php echo __('Перша', 'academlyc'); ?></span></a></li>
                    <?php endif;
                    if ($paged > 1 && $showitems < $pages): ?>
                        <li><a href="<?php echo get_pagenum_link($paged - 1); ?>" aria-label="<?php echo __('Попередня', 'academlyc'); ?>">&lsaquo;<span class="hidden-xs"> <?php echo __('Попередня', 'academlyc'); ?></span></a></li>
                    <?php endif;
                        for ($i = 1; $i <= $pages; $i++) {
                            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                                echo ($paged == $i)
                                    ? '<li class="active"><span>' . $i . '<span class="sr-only">( ' . __('поточна', 'academlyc') . ')</span></span></li>'
                                    : '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                            }
                        }
                    if ($paged < $pages && $showitems < $pages) : ?>
                        <li><a href="<?php echo get_pagenum_link($paged + 1); ?>" aria-label="<?php echo __('Наступна', 'academlyc'); ?>"><span class="hidden-xs"><?php echo __('Наступна', 'academlyc'); ?> </span>&rsaquo;</a></li>
                    <?php endif;
                    if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) : ?>
                        <li><a href="<?php echo get_pagenum_link($pages); ?>" aria-label="<?php echo __('Остання', 'academlyc'); ?>"><span class="hidden-xs"><?php echo __('Остання', 'academlyc'); ?> </span>&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    <?php
    }
}