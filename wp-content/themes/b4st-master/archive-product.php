<?php get_header(); ?>
<?php
$args_list = array(
    'taxonomy' => 'products',
    'show_count' => true,
    'hierarchical' => true,
    'echo' => '0',
);
$categories = get_categories($args_list);
?>
<main class="container-fluid">
    <div class="row">
        <div class="col-sm page-title">
            <h1 class="text-center">
                Sản phẩm của chúng tôi
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <?php
                foreach ($categories as $value) { ?>
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm cat-list-box">
                                <h2 class="cat-list-title"><span class="cat-dot"></span><a id="bookmark_<?php echo $value->cat_ID; ?>"
                                            href="<?php echo esc_url(get_category_link($value->cat_ID)); ?>"><?php echo $value->name; ?></a>
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
                                'terms' => $value->term_id
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
                                            <div class="col-sm left">
                                                <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                                <p class="description">
                                                <?php echo get_post_field('post_excerpt', $product->post->ID); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </div>
                <?php }
                ?>
            </div><!-- /#content -->
        </div>

    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
