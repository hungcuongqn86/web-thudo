<?php get_header(); ?>
<main class="container-fluid">
    <div class="row">
        <div class="col-sm page-title">
            <h1 class="text-center">
                Đối tác của Thủ Đô
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <?php
                $partner_q = new WP_Query(array(
                    'post_type' => 'Partner',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'posts_per_page' => 1000
                ));

                if ($partner_q->have_posts()) {
                    $string = '<div class="row partner-box">';
                    while ($partner_q->have_posts()) {
                        $partner_q->the_post();
                        $string .= '<div class="col-sm-3 partner-item">';
                        $string .= '<a href="#"><img src="'. get_the_post_thumbnail_url() . '"></a>';
                        $string .= '</div>';
                    }
                    $string .= '</div>';
                    wp_reset_postdata();
                }
                ?>

                <div class="row">
                    <?php echo $string; ?>
                </div>

            </div><!-- /#content -->
        </div>
    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
