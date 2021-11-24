


<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
   
                <div class="row video">
        <div
  
    <div class="container">
        <div class="row " >
            <div class="col-12 col-md-6 pt-5">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="desription">
                    <h5><?php the_content();?></h5>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>