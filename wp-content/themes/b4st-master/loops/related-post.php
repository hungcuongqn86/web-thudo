<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>
<div class="col-sm-4 new-item">
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="info">
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title() ?>
            </a>
        </h2>
        <p class="text-muted">
            <i class="far fa-calendar-alt"></i>&nbsp;<?php b4st_post_date(); ?>
        </p>
    </div>
</div>
