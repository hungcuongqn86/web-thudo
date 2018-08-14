<?php
get_header();
?>
<main class="container-fluid">
    <div class="row d-none d-md-block"
    ">
    <div class="flex-container">
        <div class="flexslider flexslider-slide">
            <ul class="slides">
                <li>
                    <div class="slides-item">
                        <img src="/wp-content/uploads/2018/08/Layer-39@1X.png">
                        <div class="overslide">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/overslide.png">
                            <p class="caption" style="top: 100px;left: 150px;font-size: 32px;">PARTNERSHIP</p>
                            <p class="caption" style="top: 180px;left: 200px;font-size: 32px;">COLLABORATION</p>
                            <p class="caption" style="top: 260px;left: 250px;font-size: 32px;">TEAMWORK</p>
                            <p class="caption"
                               style="top: 300px;left: 700px;font-size: 48px;font-family: Serif, sans-serif;color: #cbc9c6;">
                                SUCCESSFUL</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slides-item">
                        <img style="float: right;"
                             src="<?php echo get_template_directory_uri(); ?>/theme/images/slide1.png">
                        <div class="overslide">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/overslide1.png">
                            <p class="caption" style="top: 100px;left: 150px;font-size: 32px;">LEADERSHIP</p>
                            <p class="caption" style="top: 180px;left: 200px;font-size: 32px;">PASSIONATE</p>
                            <p class="caption" style="top: 260px;left: 250px;font-size: 32px;">LOYALTY</p>
                            <p class="caption"
                               style="top: 300px;left: 700px;font-size: 48px;font-family: Serif, sans-serif;color: #cbc9c6;">
                                SHARPENING BUSINESS</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slides-item">
                        <img src="/wp-content/uploads/2018/08/Layer-39@1X.png">
                        <div class="overslide">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/overslide.png">
                            <p class="caption" style="top: 100px;left: 150px;font-size: 32px;">SLIDE 3</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>

    <div class="row out-objectives dottedbg">
        <div class="col-sm">
            <h2 class="text-center out-objectives-title">OUR OBJECTIVES</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-sm col-objectives">
            <div class="object-box">
                <div class="row">
                    <div class="col-3 object-index">
                        <p>01</p>
                    </div>
                    <div class="col-9 object-content">
                        <p class="object-title">Progressively developing</p>
                        <p class="object-description">advanced and basic VAS services</p>
                    </div>
                </div>
            </div>
            <div class="object-box">
                <div class="row">
                    <div class="col-3 object-index">
                        <p>02</p>
                    </div>
                    <div class="col-9 object-content">
                        <p class="object-title">Expanding our reach</p>
                        <p class="object-description">to global markets</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm col-objectives">
            <div class="object-box">
                <div class="row">
                    <div class="col-3 object-index">
                        <p>03</p>
                    </div>
                    <div class="col-9 object-content">
                        <p class="object-title">Researching & developing</p>
                        <p class="object-description">mobile apps & online games</p>
                    </div>
                </div>
            </div>
            <div class="object-box">
                <div class="row">
                    <div class="col-3 object-index">
                        <p>04</p>
                    </div>
                    <div class="col-9 object-content">
                        <p class="object-title">Flourishing new technology</p>
                        <p class="object-description">to global markets</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-objectives-mockup"></div>
    </div>

    <?php
    $products_ad = array(
        array(
            'name' => 'MOBILE VAS',
            'img' => get_template_directory_uri() . '/theme/images/product-mobile.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => home_url('/') . 'products/mobile-vas/'
        ),
        array(
            'name' => 'OTT TELEVISION',
            'img' => get_template_directory_uri() . '/theme/images/television.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => home_url('/') . 'products/ott-television/'
        ),
        array(
            'name' => 'MOBILE APP',
            'img' => get_template_directory_uri() . '/theme/images/product-mobile.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => home_url('/') . 'products/mobile-app/'
        ),
        array(
            'name' => 'WEB GAMES',
            'img' => get_template_directory_uri() . '/theme/images/game.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => home_url('/') . 'products/web-game/'
        )
    );
    ?>

    <div class="row">
        <?php foreach ($products_ad as $value) { ?>
        <div class="col-sm">
            <div class="product-item">
                <a href="<?php echo $value['link']; ?>">
                    <div class="product-body">
                        <div class="product-body-img"><img src="<?php echo $value['img']; ?>"></div>
                        <h3 class="product-title"><?php echo $value['name']; ?></h3>
                        <p class="product-description"><?php echo $value['des']; ?></p>
                    </div>
                    <div class="product-footer">
                        <p>Read more</p>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="row">
        <div class="flex-container partner">
            <h2 class="partner-title">WE WORK WITH</h2>
            <div class="flexslider carousel-partner">
                <ul class="slides">
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/logofpt.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                    </li>
                    <li>
                        <div class="img-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                        <div class="img-dn">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/vnp.png">
                        </div>
                    </li>
                </ul>
                <div class="custom-navigation">
                    <a href="#" class="flex-prev control"><i class="fas fa-angle-left"></i></a>
                    <a href="#" class="flex-next control"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row personal-box">
        <div class="col-sm-4 personal-img">
            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/personal.png">
        </div>
        <div class="col-sm-8 personal-content">
            <span class="quotes d-none d-md-block">“</span>
            <p class="formulation">
                ...Đây là nơi tôi tìm thấy năng lực của mình, được cống hiến được cộng tác với những đồng nghiệp tuyệt
                vời, dành cả thanh xuân để làm việc :P
            </p>
            <p class="personal-name">ĐỨC CƯỜNG - CTO</p>
        </div>
    </div>
</main><!-- /.container -->
<?php get_footer(); ?>
