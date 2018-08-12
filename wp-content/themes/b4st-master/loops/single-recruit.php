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
                <div class="col-sm">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </main>
    </article>
<?php
endwhile;
else :
    get_template_part('loops/404');
endif;
?>
