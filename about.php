<?php
/*
Template name: About
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
        <div class="col-12 col-lg-6 px-0 mx-0 p-md-5 ">
            <div>
                <h5 class="abouth5 pb-2">Who we are?</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for companies that prioritize money 
                    over quality. We have decided to establish our own high-quality 
                    carpentry company, which will offer people various services that 
                    you can learn more about on this site.

                    Our customers are a priority for us and this is evidenced by the 
                    number of satisfied people from Norway and Denmark. Our task 
                    is not to leave people without the job being 100% finished.
                </p>
            </div>
            <div class=" mt-5">
                <h5 class="abouth5 pb-2">Why are we different from others?</h5>
                <p>
                    Unlike other companies, we care about the quality of our products. 
                    We also think about the price and offer unrivaled quality at a reasonable 
                    price. In our work, we follow the motto deal is deal, which maintains our 
                    loyalty and trust. We offer various carpentry work to our customers,
                    where we can also agree on non-traditional work, which they would be 
                    interested in. We can adapt to our customers and we will do our best to 
                    achieve the desired goal.
                </p>
            </div>
        </div>
        <div class="col-12 col-lg-6 aboutImg">
            <img src="" alt="">
        </div>
    </div>
    <div class="row under main-body mx-0 mb-5 ">
        <div class="col-12 col-lg-6 ">
            <img src="" alt="">
        </div>
        <div class="col-12 col-lg-6 px-0 mx-0 p-md-5 ">
            <div>
                <h5 class="abouth5 pb-2">THE BOSS</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for companies that prioritize money 
                    over quality. We have decided to establish our own high-quality 
                    carpentry company, which will offer people various services that 
                    you can learn more about on this site.

                    Our customers are a priority for us and this is evidenced by the 
                    number of satisfied people from Norway and Denmark. Our task 
                    is not to leave people without the job being 100% finished.
                </p>
            </div>
            <div class=" mt-5">
                <h5 class="abouth5 pb-2">THE CREW</h5>
                <p>
                    Unlike other companies, we care about the quality of our products. 
                    We also think about the price and offer unrivaled quality at a reasonable 
                    price. In our work, we follow the motto deal is deal, which maintains our 
                    loyalty and trust. We offer various carpentry work to our customers,
                    where we can also agree on non-traditional work, which they would be 
                    interested in. We can adapt to our customers and we will do our best to 
                    achieve the desired goal.
                </p>
            </div>
        </div>

    </div>

   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>