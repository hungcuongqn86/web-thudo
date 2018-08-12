<?php get_header(); ?>
<main class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <header class="mb-4">
                    <h1 class="text-center category-title">
                        Join our team
                    </h1>
                </header>
                <?php
                $product = new WP_Query(array(
                    'post_type' => 'recruit',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'posts_per_page' => 1000
                ));
                wp_get_post_terms($post_id, $taxonomy, $args);

                ?>
                <div class="row">
                    <div class="col-sm recruit-box">
                        <div class="recruit-list">
                            <div class="row recruit-header">
                                <div class="col-sm-9 left">
                                    OPEN JOBS
                                </div>
                                <div class="col-sm-3 right">
                                    EXPIRED ON
                                </div>
                            </div>
                            <?php while ($product->have_posts()) :
                                $product->the_post(); ?>

                                <div class="row recruit-item">
                                    <div class="col-sm-9 left">
                                        <span class="number">01</span>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="col-sm-3 right">
                                        <a>2018.09.12</a>
                                    </div>
                                </div>

                            <?php endwhile;
                            wp_reset_query(); ?>
                        </div>
                    </div>
                </div>

            </div><!-- /#content -->
        </div>
    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
