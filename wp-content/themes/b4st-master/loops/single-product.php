<?php
/*
The Single Post
===============
*/
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
        <header class="mb-4">
            <h1>
                <?php the_title() ?>
            </h1>
        </header>
        <main>
            <div class="row">
                <div class="col-6">      <?php

                    the_content();
                    wp_link_pages();
                    ?></div>
                <div class="col-6"><?php the_post_thumbnail(); ?></div>
            </div>

        </main>
    </article>
<?php
endwhile;
else :
    get_template_part('loops/404');
endif;
?>


<div class="row mt-5 border-top pt-3">
    <div class="col">
        <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> Previous post: ' . '%title'); ?>
    </div>
    <div class="col text-right">
        <?php next_post_link('%link', 'Next post: ' . '%title' . ' <i class="fas fa-fw fa-arrow-right"></i>'); ?>
    </div>
</div>
