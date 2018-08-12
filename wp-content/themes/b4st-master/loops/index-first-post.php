<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article role="article" id="post_<?php the_ID() ?>" >
    <div class="row new-item-first">
        <div class="col-sm-7 thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
        <div class="col-sm-5 info">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title() ?>
                </a>
            </h2>
            <p class="text-muted">
                <i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>
            </p>
            <?php if (has_excerpt($post->ID)) {?>
                <p class="excerpt"><?php the_excerpt(); ?></p>
                <p class="text-right read-more"><a href="<?php the_permalink(); ?>">
                    <?php _e(__('read more', 'b4st') . ' <span><i class="fas fa-arrow-alt-circle-right"></i></span>', 'b4st') ?>
                </a></p>
            <?php } else {
                the_content(__(__('read more', 'b4st') . ' <i class="fas fa-arrow-alt-circle-right"></i>', 'b4st'));
            } ?>
        </div>
    </div>
</article>
