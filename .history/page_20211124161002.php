


<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
    <div class="row video">
        <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
     
    </div>
    </div>
    <!-- <div class="row px-0 mx-0 main-body" >
        <div class="col d-flex justify-content-between align-items-center px-md-5 pt-5 flex-lg-row flex-column">
            <div> 
                <h1></h1>
          
            </div>
           <div class="desription p-md-4">
           <p class="px-3 mb-0"></p>
           </div>
         
        </div>
    </div>   --> 
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="desription">
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>