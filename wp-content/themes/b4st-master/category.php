<?php get_header(); ?>
    <main class="container-fluid">
        <div class="row">
            <div class="col-sm page-title">
                <h1 class="text-center">
                    Stay up to date with us
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div id="content" role="main">
                    <?php get_template_part('loops/index-loop'); ?>
                </div><!-- /#content -->
            </div>
            <?php get_sidebar(); ?>
        </div><!-- /.row -->
    </main><!-- /.container -->
<?php get_footer(); ?>