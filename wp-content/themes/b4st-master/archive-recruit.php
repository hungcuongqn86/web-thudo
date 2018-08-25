<?php get_header(); ?>
<main class="container-fluid">
    <div class="row">
        <div class="col-sm page-title">
            <h1 class="text-center">
                Cơ hội việc làm tại Thủ Đô
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <?php
                $product = new WP_Query(array(
                    'post_type' => 'recruit',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'posts_per_page' => 1000
                ));

                ?>
                <div class="row">
                    <div class="container recruit-box">
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
                                        <span class="number"><?php echo get_post_meta(get_the_ID(), 'recruit_count', true); ?></span>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="col-sm-3 right">
                                        <a><?php echo get_post_meta(get_the_ID(), 'deadline', true); ?></a>
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
