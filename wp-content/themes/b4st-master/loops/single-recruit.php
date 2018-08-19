<?php
/*
The Single Post
===============
*/
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="col-sm recruit-detail-box">
        <div class="recruit-detail">
            <div class="row recruit-detail-header">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">
                    OPEN JOBS
                </div>
            </div>
            <div class="row recruit-detail-title">
                <div class="col-sm-1">
                    <span class="number"><?php echo get_post_meta(get_the_ID(), 'recruit_count', true); ?></span>
                </div>
                <div class="col-sm-11">
                    <h1 class="recruit-title">
                        <?php the_title() ?> <span class="certificate"></span>
                    </h1>
                </div>
            </div>
            <div class="row recruit-detail-body">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-9">
                    <?php
                    the_content();
                    ?>
                </div>
                <div class="col-sm-2 appl-box">
                    <p><strong>Job ID: MNT2289</strong></p>
                    <p><strong>Hạn nộp CV</strong></p>
                    <p><?php echo get_post_meta(get_the_ID(), 'deadline', true); ?></p>
                    <a class="btn-apply">APPLY NOW</a>
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
