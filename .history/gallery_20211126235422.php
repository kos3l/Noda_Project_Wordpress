<?php
/*
Template name: gallery
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
                <p>Check our gallery</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row " >
            <div class="col-12">
                <div class="hero">
                   
                </div>
            </div>
            
        </div>
    </div>


    


    <div class="container">
        <div class="row text-center">
            <div class="col-12 ">
            <?php the_content();?>
          
            </div>
        </div>
    </div>
    
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>