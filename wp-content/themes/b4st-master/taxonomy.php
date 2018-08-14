<?php get_header(); ?>
<?php
$tax = $wp_query->get_queried_object();
?>
<main class="container-fluid">
    <div class="row">
        <div class="col-sm page-title">
            <h1 class="text-center">
                WHAT WE’RE DOING
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm cat-list-box">
                            <h2 class="cat-list-title"><span class="cat-dot"></span><a
                                        href="<?php echo esc_url(get_category_link($tax->cat_ID)); ?>"><?php echo $tax->name; ?></a>
                            </h2>
                        </div>
                    </div>
                </div>

                <?php
                $product = new WP_Query(array(
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'products',
                            'terms' => $tax->term_id
                        )
                    ),
                    'order' => 'DESC',
                    'posts_per_page' => 1000
                ));
                ?>
                <div class="row">
                    <?php while ($product->have_posts()) : $product->the_post(); ?>
                        <div class="col-sm-3">
                            <div class="category-product">
                                <div class="category-product-body">
                                    <div class="category-product-body-img">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("thumbnail", array("title" => get_the_title(), "alt" => get_the_title())); ?></a>
                                    </div>
                                </div>
                                <div class="category-product-footer">
                                    <div class="row">
                                        <div class="col-sm-9 left">
                                            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        </div>
                                        <div class="col-sm-3 right">
                                            <a class="show-detail" href="<?php the_permalink(); ?>"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_query(); ?>
                </div>
            </div><!-- /#content -->
        </div>
    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
