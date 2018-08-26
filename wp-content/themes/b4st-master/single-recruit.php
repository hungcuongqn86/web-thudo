<?php
    get_header();
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-sm page-title">
            <h1 class="text-center">
                Join our team
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm page-sub-menu">
            <ul>
                <li><a href="/moi-truong-lam-viec">Môi trường làm việc</a></li>
                <li class="active"><a href="/recruit">Vị trí tuyển dụng</a></li>
                <li><a href="/chuong-trinh-tai-nang">Chương trình tài năng</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div id="content" role="main">
                <?php get_template_part('loops/single-recruit', get_post_format()); ?>
            </div><!-- /#content -->
        </div>

        <?php get_sidebar(); ?>

    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
