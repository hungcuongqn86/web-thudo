<?php
    get_header();
    $subMenu = wp_get_nav_menu_items('product-sub-vi');
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
        <div class="col-sm page-sub-menu">
            <ul>
                <?php
                foreach ($subMenu as $value) { ?>
                    <li><a href="<?php echo esc_url($value->url); ?>"><?php echo $value->title; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <?php get_template_part('loops/single-product', get_post_format()); ?>
            </div><!-- /#content -->
        </div>

        <?php get_sidebar(); ?>

    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
