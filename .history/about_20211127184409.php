<?php
/*
Template name: About
*/
?>
<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
   
 <section class="hero-section position-relative text-center">
        <img   src="<?php the_field("om_os_header")?>" >
</section>

<div class="container">
    <div class="row  pt-5">
        <div class="col-12 col-md-6">
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-md-end">
            <div class="page-title">
                <p><?php the_field("om_os_beskrivelse"); ?></p>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-6">
            <div class="om-us-wrapper">
            <div class="om-us-title">
                <h2><?php the_field("primær_titel"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("primær_beskrivelse"); ?>
                </p>
            </div>
            </div>
            <div class="om-us-second-wrapper ">
            <div class="om-us-title">
                <h2><?php the_field("secundær_titel"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("secundær_beskrivelse"); ?>
                </p>
            </div>
            </div>
            </div>
            
            <div class="col-12 col-lg-6 col-md-6  d-flex justify-content-center align-items-center ">
                <div class="om-os-image-wrapper ">
                <img src="https://images.unsplash.com/photo-1595844730298-b960ff98fee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" width="100%" alt="">
                </div>
        </div>
        </div>
       
      
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-6">

        <div class="om-os-image-wrapper ">
                <img src="https://www.handyvan.com/getattachment/Our-Services/MAN-WITH-A-VAN/Man-and-Van-Delivery-Services.jpg.aspx?width=1000&height=667" width="100%" alt="">
                </div>
        </div>

        <div class="col-12 col-lg-6 col-md-6">
        <div class="om-us-wrapper ">
            <div class="om-us-title">
                <h2><?php the_field("dit_navn_title"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("dit_navn_beskrivelse"); ?>
                </p>
            </div>
            </div>
            <div class="om-us-second-wrapper mt-5">
            <div class="om-us-title">
                <h2><?php the_field("beskæftiger_titel"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("beskæftiger_titel"); ?>
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container-fluid info-background mb-5">
        <div class="container info-bar">
            <div class="row text-center">
            <?php the_content()?>
            </div>
        </div>
    </div>




   <!--  <div class="row under main-body mx-0 mb-5 ">
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

    </div> -->

   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>