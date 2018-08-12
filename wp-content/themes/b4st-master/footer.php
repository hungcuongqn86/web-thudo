<footer class="mt-5 bg-light">
    <div class="container-fluid">
        <?php if (is_active_sidebar('footer-widget-area')): ?>
            <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
                <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
        <?php endif; ?>
        <div class="row pt-3 footer-bottom">
            <div class="col-sm-8 footer-bottom-left">
                <div class="div-select">
                    <select title="Select lang" class="form-control select-lang minimal">
                        <option value="vi">Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                    <span for=""><i class="fas fa-caret-down"></i></span>
                </div>
                <div class="contact">
                    <p>Tầng 10, Tòa Tháp Hoa Kim Cương, Lô C1, Khu Đô Thị</p>
                    <p>Trung Hòa - Nhân Chính, Thanh Xuân, Hà Nội</p>
                    <p>Tel: (+84) 4 3668 7038</p>
                    <p>Email: thudojsc@gviet.vn</p>
                </div>
                <p class="copyright"><i class="far fa-copyright"></i> <?php echo date('Y'); ?> by <?php bloginfo('name'); ?>. All rights reserved </p>
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
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
