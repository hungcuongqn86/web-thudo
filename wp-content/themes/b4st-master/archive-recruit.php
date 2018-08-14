<?php get_header(); ?>
<main class="container-fluid">
    <div class="row">
        <div class="col-sm page-title">
            <h1 class="text-center">
                Join our team
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
                        <p class="text-right m-4" ><img style="width: 25px; margin-right: 10px;" src="<?php echo get_template_directory_uri(); ?>/theme/images/download.png"><a style="color: rgba(245, 130, 32, 255);    padding: 3px;
    border-bottom: 1px dotted; cursor: pointer;">Download CV Template</a> </p>
                    </div>
                </div>

            </div><!-- /#content -->
        </div>
    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
