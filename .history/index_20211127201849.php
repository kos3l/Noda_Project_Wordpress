<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>

               <!--  Section for video  -->
               <section class="hero-section-2 position-relative text-center">
<img   src="<?php the_field("forside_video")?>" >

</section>


 <div class="container pt-5">
     <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
             <div class="main title">
                 <h1>DEAL IS A DEAL</h1>
             </div>
             <div class="main-title-description">
                 <p>Great quality for lower prices </p>
             </div>
         </div>
         <div class="col-12 col-md-6 col-lg-6">
           <div class="row">
               <div class="col-6">
                   
               </div>
               <div class="col-6"><h1>Test</h1></div>
           </div>
         </div>
     </div>
 </div>  


 <div class="row">
                 <div class="col-12 col-md-6">
                     <div class="phone-wrapper">
                     <i class="fa fa-phone"></i>
                                        </div>
                                    <h3>60 60 60 60 </h3>
                     </div>
                 </div>
                 <div class="col-12 col-md-6">
                     <div class="button-wrapper">
                        <button class="contactBtn p-md-4">
                            <h4 class="px-3 mb-0">CONTACT US</h4>
                        </button>
                     </div>
                 </div>
             </div>





    <div class="row px-0 mx-0 main-body" >
        <div class="col d-flex flex-column-reverse flex-row-lg-reverse justify-content-between align-items-center px-md-5 pt-5 flex-lg-row flex-column">
            <div> 
                <h1>DEAL IS A DEAL</h1>
                <p ><?php the_field("under_title")?> </p>
            </div>
            <h5 class="d-flex align-items-center"><span style="font-size: 1.4em; color: #333399; padding-right:1rem; "><i class="fas fa-phone"></i></span> <?php the_field("phone_number")?></h5>
            <button class="contactBtn p-md-4">
                <h4 class="px-3 mb-0">CONTACT US</h4>
            </button>
        </div>
    </div>
    <div class="row under main-body  p-md-5 mx-0 ">
        <div class="col-12 col-lg-6 pe-5 mx-0 d-flex flex-column justify-content-center">
            <h4>SERVICES</h4>
            <p>
            <?php the_field("service_section_body")?>
            </p>
        </div>
        <div class="col-12 col-lg-6 homeImg ">
            <img src="<?php the_field('home_service_introduction') ?>" alt="">
        </div>
    </div>
    <div class="row main-body p-md-5 mx-0">
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4  mx-0">
            <h6 class="mb-0 px-4"><?php the_field("service_1")?></h6>
        </div>
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4 mx-0">
            <h6 class="mb-0 px-4"><?php the_field("service_2")?></h6>
        </div>
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4 mx-0">
            <h6 class="mb-0 px-4"><?php the_field("service_3")?></h6>
        </div>
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4 mx-0 d-flex justify-content-end ">
            <h5 class="mb-0 px-4 serviceLink">DISCOVER ALL OUR SERVICES</h5>
        </div>
    </div>
    <div class="row main-body  p-md-5 mx-0 ">
        <div class="col-12 col-lg-6 pe-5 homeImg">
            <img src="<?php the_field('home_about_us_introduction') ?>" alt="">
        </div>
        <div class="col-12 col-lg-6 px-0 mx-0 ps-5 d-flex flex-column justify-content-around">
            <p class=" d-flex align-items-center">
                <span style="font-size: 3em; color: #333399; padding-right:2rem; "> <i class="far fa-smile"></i> </span>
                <?php the_field("about_text_1")?>
            </p>
            <p class=" d-flex align-items-center">
                <span style="font-size: 3em; color: #333399;padding-right:2rem;"><i class="fas fa-hammer"></i></span> 
                <?php the_field("about_text_2")?>
            </p>
            <p class=" d-flex align-items-center">
                <span style="font-size: 3em; color: #333399;padding-right:2rem;"><i class="fas fa-truck-moving"></i></span> 
                <?php the_field("about_text_3")?>
            </p>
        </div>
    </div>
    <div class="row main-body testimonials  p-md-5 mx-0 mt-5">
        <div class="col-12 d-flex justify-content-center">
            <h2>TESTIMONIALS</h2>
        </div>
        <div class="col-12"></div>
    </div>
    <div class="row main-body projects  p-md-5 mx-0 ">
        <div class="col-12 d-flex justify-content-center">
            <h2>RECENT PROJECTS</h2>
            
        </div>
        <div class="col-12">
       
          
        </div>
    </div>
    <div class="row main-body location   mx-0 mb-5 ">
        <div class="col-12 col-sm-6 p-md-5 d-flex flex-column justify-content-center ">
            <h3>WHERE TO FIND US</h3>
            <p><?php the_field("location_info")?>
            </p>
            <button class="locationBtn p-md-4 mt-4">
                <h4 class="px-3 mb-0">CONTACT US</h4>
            </button>
        </div>
        <div class="col-12 col-sm-6 px-0">
            <div class="google-map-home">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9725967869626!2d10.667244316101504!3d55.04369605392309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x282457f564d3fa3b!2zNTXCsDAyJzM3LjMiTiAxMMKwNDAnMTAuMCJF!5e0!3m2!1sen!2sdk!4v1637916314218!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>