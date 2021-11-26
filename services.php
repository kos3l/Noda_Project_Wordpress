<?php
/*
Template name: services
*/
?>

<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
    <div class="row video">
        <div
            class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
        >
   
 <!--    Replace with image the_post_thumbnail() -->
    </div>
        <div class="row " >
            <div class="col-12 col-md-6  pt-5">
                <div class="page-title px-md-5">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="desription">
                <p><?php the_content();?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row under main-body mx-0 mb-5 ">
        <div class="col-12 px-lg-5 mb-5">
            <div class="d-flex serviceBtns justify-content-between"> 
                <button data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><h5><?php the_field("service_title_1") ?></h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><h5><?php the_field("service_title_2") ?></h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><h5><?php the_field("service_title_3") ?></h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><h5><?php the_field("service_title_4") ?></h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"><h5><?php the_field("service_title_5") ?></h5></button>
            </div>
            <div class="line pt-2"></div>
        </div>
        <div class="col-12 col-lg-6 aboutImg collapse multi-collapse show px-5"  id="collapse1">
            <img src="<?php the_field("service_image_1") ?>" alt="">
        </div>
        <div class="col-12 col-lg-6 aboutImg collapse multi-collapse"  id="collapse2">
            <img src="<?php the_field("service_image_2") ?>" alt="" >
        </div>
        <div class="col-12 col-lg-6 aboutImg collapse multi-collapse"  id="collapse3">
            <img src="<?php the_field("service_image_3") ?>" alt="">
        </div>
        <div class="col-12 col-lg-6 aboutImg collapse multi-collapse"  id="collapse4">
            <img src="<?php the_field("service_image_4") ?>" alt="">
        </div>
        <div class="col-12 col-lg-6 aboutImg collapse multi-collapse"  id="collapse5">
            <img src="<?php the_field("service_image_5") ?>" alt="">
        </div>
        <div class="col-12 col-lg-6 px-0 mx-0 p-md-5 ">
            <div class="collapse multi-collapse show" id="collapse1">
                <h5 class="abouth5 pb-2"><?php the_field("service_title_1") ?></h5>
                <p>
                <?php the_field("service_body_1") ?>
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse2">
                <h5 class="abouth5 pb-2"><?php the_field("service_title_2") ?></h5>
                <p>
                    <?php the_field("service_body_2") ?>
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse3">
                <h5 class="abouth5 pb-2"><?php the_field("service_title_3") ?></h5>
                <p>
                    <?php the_field("service_body_3") ?>
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse4">
                <h5 class="abouth5 pb-2"><?php the_field("service_title_4") ?></h5>
                <p>
                    <?php the_field("service_body_4") ?>
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse5">
                <h5 class="abouth5 pb-2"><?php the_field("service_title_5") ?></h5>
                <p>
                    <?php the_field("service_body_5") ?>
                </p>
            </div>
        </div>
        
    </div>
   

   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>