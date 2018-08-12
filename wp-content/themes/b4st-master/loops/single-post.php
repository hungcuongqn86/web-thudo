<?php
/*
The Single Post
===============
*/
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="container article-detail">
        <div class="row">
            <div class="col-sm">
                <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                    <header class="mb-4">
                        <h1>
                            <?php the_title() ?>
                        </h1>
                    </header>
                    <div class="post-date-box">
                        <div class="date-box">
                            <div class="date">20.7</div>
                            <div class="year">2018</div>
                        </div>
                    </div>
                    <main>
                        <div class="row">
                            <div class="col-sm excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <?php the_post_thumbnail(); ?>
                                <p class="thumbnail-caption"><?php the_post_thumbnail_caption(); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm content">
                                <?php
                                the_content();
                                wp_link_pages();
                                ?>
                            </div>
                        </div>
                    </main>
                </article>
            </div>
        </div>
    </div>
    <?php
    $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID)));
    ?>

    <?php
    if ($related) {
        ?>
        <div class="row related-post">
            <div class="col-sm">
                <h2 class="related-post-title">Others</h2>
            </div>
        </div>
        <div class="row related-post">
            <?php
            foreach ($related as $post) {
                setup_postdata($post); ?>
                <?php get_template_part('loops/related-post', get_post_format()); ?>
            <?php }
            ?>
        </div>
        <?php
        wp_reset_postdata();
    }
    ?>

<?php
endwhile;
else :
    get_template_part('loops/404');
endif;
?>