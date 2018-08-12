<?php get_header(); ?>
    <main class="container-fluid">
        <div class="row">

            <div class="col-sm">
                <div id="content" role="main">
                    <header class="mb-4">
                        <h1 class="text-center category-title">
                            Stay up to date with us
                        </h1>
                    </header>
                    <?php get_template_part('loops/index-loop'); ?>
                </div><!-- /#content -->
            </div>
            <?php get_sidebar(); ?>
        </div><!-- /.row -->
    </main><!-- /.container -->
<?php get_footer(); ?>