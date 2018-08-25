<?php
/*
The Single Post
===============
*/
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="col-sm product-detail-box">
        <div class="product-detail">
            <div class="row product-detail-task">
                <div class="col-sm">
                    <a href="javascript:history.back()" class="btn-back-product"><span class="back-icon"></span>SẢN PHẨM KHÁC</a>
                </div>
            </div>
            <div class="row product-detail-body">
                <div class="col-sm-3">
                    <h1 class="product-title">
                        <?php the_title() ?>
                    </h1>
                </div>
                <div class="col-sm-7">
                    <?php
                    the_content();
                    ?>
                </div>
                <div class="col-sm-2 product-attr">
                    <p><img src="<?php echo get_template_directory_uri(); ?>/theme/images/menu-icon/tag.png"> Mobile Vas</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/theme/images/menu-icon/calendar.png"> Released June, 2014.</p>
                    <p class="web"><img src="<?php echo get_template_directory_uri(); ?>/theme/images/menu-icon/web.png"> <span class="lik">www.bidaonline.com</span></p>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
else :
    get_template_part('loops/404');
endif;
?>
