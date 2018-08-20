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
                        <img src="/wp-content/uploads/2018/08/slide2.png">
                        <!--<div class="overslide">
                            <img src="<?php /*echo get_template_directory_uri(); */ ?>/theme/images/overslide.png">
                            <p class="caption" style="top: 100px;left: 150px;font-size: 32px;">PARTNERSHIP</p>
                            <p class="caption" style="top: 180px;left: 200px;font-size: 32px;">COLLABORATION</p>
                            <p class="caption" style="top: 260px;left: 250px;font-size: 32px;">TEAMWORK</p>
                            <p class="caption"
                               style="top: 300px;left: 700px;font-size: 48px;font-family: Serif, sans-serif;color: #cbc9c6;">
                                SUCCESSFUL</p>
                        </div>-->
                    </div>
                </li>
                <li>
                    <div class="slides-item">
                        <img src="/wp-content/uploads/2018/08/slide1.png">
                        <!--<div class="overslide">
                            <img src="<?php /*echo get_template_directory_uri(); */ ?>/theme/images/overslide1.png">
                            <p class="caption" style="top: 100px;left: 150px;font-size: 32px;">LEADERSHIP</p>
                            <p class="caption" style="top: 180px;left: 200px;font-size: 32px;">PASSIONATE</p>
                            <p class="caption" style="top: 260px;left: 250px;font-size: 32px;">LOYALTY</p>
                            <p class="caption"
                               style="top: 300px;left: 700px;font-size: 48px;font-family: Serif, sans-serif;color: #cbc9c6;">
                                SHARPENING BUSINESS</p>
                        </div>-->
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
    $lang = get_locale();
    $products_ad = array(
        array(
            'name' => 'MOBILE VAS',
            'img' => get_template_directory_uri() . '/theme/images/product-mobile.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => array(
                'vi' => home_url('/') . 'product/#bookmark_68',
                'en_US' => home_url('/') . 'product/#bookmark_66',
            )
        ),
        array(
            'name' => 'OTT TELEVISION',
            'img' => get_template_directory_uri() . '/theme/images/television.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => array(
                'vi' => home_url('/') . 'product/#bookmark_80',
                'en_US' => home_url('/') . 'product/#bookmark_82',
            )
        ),
        array(
            'name' => 'MOBILE APP',
            'img' => get_template_directory_uri() . '/theme/images/product-mobile.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => array(
                'vi' => home_url('/') . 'product/#bookmark_84',
                'en_US' => home_url('/') . 'product/#bookmark_86',
            )
        ),
        array(
            'name' => 'WEB GAMES',
            'img' => get_template_directory_uri() . '/theme/images/game.png',
            'des' => 'Value-added services are supplied either in-house by the mobile network operator themselves',
            'link' => array(
                'vi' => home_url('/') . 'product/#bookmark_72',
                'en_US' => home_url('/') . 'product/#bookmark_70',
            )
        )
    );
    ?>

    <div class="row">
        <?php foreach ($products_ad as $value) { ?>
            <div class="col-sm">
                <div class="product-item">
                    <a href="<?php echo $value['link'][$lang]; ?>">
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

    <?php
    $partner_q = new WP_Query(array(
        'post_type' => 'Partner',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 1000
    ));

    if ($partner_q->have_posts()) {
        $string = '<ul class="slides">';
        $key = 0;
        while ($partner_q->have_posts()) {
            $partner_q->the_post();
            if ($key == 0) {
                $string .= '<li><div class="img-up"><img src="'. get_the_post_thumbnail_url() . '"></div>';
                $key = 1;
            }else{
                $string .= '<div class="img-dn"><img src="'. get_the_post_thumbnail_url() . '"></div></li>';
                $key = 0;
            }
        }
        if($key == 1){
            $string .= '<div class="img-dn"></div></li>';
        }
        $string .= '</ul>';
        wp_reset_postdata();
    }
    ?>

    <div class="row">
        <div class="flex-container partner">
            <h2 class="partner-title">WE WORK WITH</h2>
            <div class="flexslider carousel-partner">
                <?php echo $string; ?>
                <div class="custom-navigation">
                    <a href="#" class="flex-prev control"><i class="fas fa-angle-left"></i></a>
                    <a href="#" class="flex-next control"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php
    $personal_q = new WP_Query(array(
        'post_type' => 'Personal',
        'post_status' => 'publish',
        'orderby' => 'rand',
        'posts_per_page' => 1,
    ));

    if ($personal_q->have_posts()) {
        $string = '<div class="row personal-box">';
        while ($personal_q->have_posts()) {
            $personal_q->the_post();
            $string .= '<div class="col-sm-4 personal-img"><img src="' . get_the_post_thumbnail_url() . '"></div>';
            $string .= '<div class="col-sm-8 personal-content">';
            $string .= '<span class="quotes d-none d-md-block">“</span>';
            $string .= '<p class="formulation">...' . $personal_q->post->post_content . '</p>';
            $string .= '<p class="personal-name">' . $personal_q->post->post_title . ' - ' . get_post_meta($personal_q->post->ID, 'position', true) . '</p>';
            $string .= '</div>';
        }
        $string .= '</div>';
        wp_reset_postdata();
        echo $string;
    }
    ?>
</main><!-- /.container -->
<?php get_footer(); ?>
