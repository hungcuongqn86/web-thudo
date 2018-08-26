<?php
$lang = get_locale();
?>
<footer class="mt-5 bg-light">
    <div class="container-fluid">
        <?php if (is_active_sidebar('footer-widget-area')): ?>
            <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
                <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
        <?php endif; ?>
        <div class="row pt-3 footer-bottom">
            <div class="col-sm-4 footer-bottom-left">
                <div class="div-select-lang">
                    <ul><?php pll_the_languages(); ?></ul>
                </div>
                <div class="contact">
                    <p>Tầng 10, Tòa Tháp Hoa Kim Cương, Lô C1, Khu Đô Thị</p>
                    <p>Trung Hòa - Nhân Chính, Thanh Xuân, Hà Nội</p>
                    <p><a href="tel:+84436687038">Tel: (+84) 4 3668 7038</a></p>
                    <p><a href="mailto:thudojsc@gviet.vn">Email: thudojsc@gviet.vn</a></p>
                </div>
                <p class="copyright"><i class="far fa-copyright"></i> <?php echo date('Y'); ?>
                    by <?php bloginfo('name'); ?>. All rights reserved </p>
            </div>
            <div class="col-sm-4 footer-bottom-right">
                <p class="follow">FOLLOW US</p>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/theme/images/facebook.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/theme/images/google.png"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/theme/images/instagram.png"></li>
                </ul>
                <p class="online-help">ONLINE HELP</p>
            </div>
            <div class="col-sm-4 footer-bottom-right">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdacsanque.top%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1205774589445826"
                        width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </div>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="607317919426663"
         logged_in_greeting="Xin chào, tôi có thể giúp gì bạn?!"
         logged_out_greeting="Xin chào, tôi có thể giúp gì bạn?!">
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
