<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>

                  <h1> <?php the_title(); ?></h1>
                    
                <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>



<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
    <div class="row video">
        <!-- <div class="col-12"></div> -->
        <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
     
    </div>
    </div>
    <div class="row px-0 mx-0 main-body" >
        <div class="col d-flex justify-content-between align-items-center px-md-5 pt-5 flex-lg-row flex-column">
            <div> 
                <h1>DEAL IS A DEAL</h1>
                <p >We are a trustworthy company that offer Great quality for lower prices  </p>
            </div>
           
            <button class="contactBtn p-md-4">
                <h4 class="px-3 mb-0">CONTACT US</h4>
            </button>
        </div>
    </div>
    <div class="row main-body p-md-5 mx-0 ">
        <div class="col-12 col-lg-6 px-0 mx-0">
            <h4>SERVICES</h4>
            <p>
                Noda Byg Aps is a carpentry company that provides mid to high
                custom carpentry work. We specialize in interior and also exterior
                work using only the best materials and joinery techniques. 


                Our work includes building custom furniture, windows, doors, 
                terraces, roofs, flooring and painting.
            </p>
        </div>
        <div class="col-12 col-lg-6">
            <img src="" alt="">
        </div>
    </div>
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>