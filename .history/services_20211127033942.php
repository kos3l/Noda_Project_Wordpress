<?php
/*
Template name: services
*/
?>

<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                <div class="container mt-5 mb-5 ">
    <div class="row-wrapper pt-5 pb-5">
        <div class="row " >
            
            <div class="col-12 col-md-6  pt-5 ">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="description">
                    <h2><?php the_content(); ?>
</h2>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
            <?php echo do_shortcode('[WPSM_AC id=203]') ?>
            </div>
            <div class="col-12 col-md-6">
                video.wrapper
            </div>
        </div>
    </div>
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>