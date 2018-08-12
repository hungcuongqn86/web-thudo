<?php
/**!
 * The Default Loop (used by index.php, category.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages,
 * use the [---more---] line within blog posts.
 */
?>
<?php $Inc = 0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php if ($Inc == 0) : ?>
        <div class="row">
            <div class="col-sm">
                <?php get_template_part('loops/index-first-post', get_post_format()); ?>
            </div>
        </div>
    <?php else : ?>
        <?php if ($Inc == 1) : ?>
            <div class="row">
        <?php endif; ?>
        <?php get_template_part('loops/index-post', get_post_format()); ?>
    <?php endif; ?>
    <?php $Inc++; ?>
<?php endwhile; ?>
    <?php if ($Inc > 1) : ?>
        </div>
    <?php endif; ?>

    <?php if (function_exists('b4st_pagination')) {
        b4st_pagination();
    } else if (is_paged()) { ?>
        <ul class="pagination">
            <li class="page-item older">
                <?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
            <li class="page-item newer">
                <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fas fa-arrow-right"></i>') ?></li>
        </ul>
    <?php } ?>

<?php
else :
    get_template_part('loops/404');
endif;
?>
