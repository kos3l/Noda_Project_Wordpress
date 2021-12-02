<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
               <section class="hero-section-2 position-relative text-center">
               <video autoplay muted loop id="myVideo">
  <source src="<?php the_field("video_forside");?>" type="video/mp4">
</video>

</section>

<div class="container mt-5 mb-5 block-padding">
     <div class="row">
         <div class="col-12 col-md-6 col-lg-6">
             <div class="main title">
                 <h1><?php the_field("main_title") ?></h1>
             </div>
             <div class="main-title-description ">
                 <p ><?php the_field("iorefaldende_titel") ?> </p>
             </div>
         </div>
         <div class="col-12 col-md-6 col-lg-6">
           <div class="row">
               <div class="col-12 col-md-6 d-flex justify-content-evenly align-items-center row-class">
                   <div class="icon-phone" >
                   <i class="fa fa-phone"></i>
                   </div>
                   <div class="phone-number no-gutters">
                       <h2><?php the_field("phone_number") ?> </h2>
                   </div>
               </div>
               <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-md-end">
               <div class="button-wrapper">
                         <button class="contactBtn d-flex p-3">
                            <a class="effect effect-1" href="<?php echo get_permalink( get_page_by_path( 'contact' ) );?>" title="kontakt os">kontakt os</a>
                        </button>
                       
                     </div>
               </div>
           </div>
           </div>
         </div>
     </div>
 </div>  

 <div class="to-top-container to-top-right" >
 <button onclick="topFunction()" id="scroll_top_btn" ><i class="fas fa-angle-up"></i></button>

 </div>



 <div class="container mt-5 block-padding mb-5 ">
    <div class="row ">
        <div class="col-12 col-md-6 col-lg-6 ">
            <div class="services-main-wrapper ">
                <div class="om-us-title">
                <h2>Services</h2>
                </div>
                <div class="services-main-paragraph  trigger-picture">
                <p><?php the_field("service_section_body")?></p>
                </div>
                <div class="row main-body pt-2">

                <div class="services-main-paragraph ">
                <p><?php the_field("service_section_body_anded")?></p>
                </div>
    
        <div class="col  pt-5 ">
            <a class=" serviceLink" href="#">Discover all of our services</a>
        </div>
    </div>  <!-- Something new here -->
            </div>
           
        </div>
        <div class="col-12 col-md-6 col-lg-6 mt-3 d-flex justify-content-center">
        <div class="service-main-image-wrapper text-center picture-scroll ">
                <img  src="<?php the_field("forside_billed")?>" width="100%" alt=""  >
                </div>
        </div>
    </div>
</div>






<div class="container-fluid setup-bg d-flex flex-column intro-parall mt-4 mb-4  ">
  <div class="container my-auto  ">
    <h3 class="h3 white  text-center text-title-intro  ">
    Kvalitet og pris er altid det vigtigste 
   </h3>
    <div class="row button-row justify-content-between text-center mt-5 each-scroll-pop trigger-test-2 ">
      <div class="col-12  col-md-3 ">
                    <span style="font-size: 2.8em; color: #ffffff;  "> <i class="fas fa-toolbox "></i> </span>
                   <div class="icons-text-intro" style="color:#ffffff;">
                   <p><?php the_field("about_text_1")?></p>
                   </div>
      </div>
      <div class="col-12  col-md-3 each-scroll-pop ">
      <span style="font-size: 2.8em; color: #ffffff;  "> <i class="fas fa-hammer"></i> </span>
                   <div class="icons-text-intro" style="color:#ffffff;">
                   <p><?php the_field("about_text_2")?></p>
                   </div>
      </div>
      <div class="col-12  col-md-3 each-scroll-pop  ">
      <span style="font-size: 2.8em; color: #ffffff;  "> <i class="fas fa-truck-moving"></i> </span>
                   <div class="icons-text-intro" style="color:#ffffff;">
                   <p><?php the_field("about_text_3")?></p>
                   </div>
      </div>
    
 
    </div>
    
  </div>
</div>



  <div class="container block-padding">
  <div class="row main-body projects  mx-0 pt-3 ">
        <div class="col-12  text-center">
            <div class="project-title">
            <h2>Seneste projecter</h2>
            </div>
            <div class="project-description ">
                <p><?php the_field("projekt_titel")?></p>
            </div>
            
        </div>
        <div class="col-12">
       
          <div class="galleri-show">
              <?php echo do_shortcode('[ngg src="galleries" ids="3" display="basic_thumbnail" thumbnail_crop="0" images_per_page="6" ajax_pagination="0"]') ?>
          </div>
        </div>
    </div>
  </div>


 
   
 
    <div class="row main-body testimonials  p-md-5 mx-0 d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 col-md-12 ">
        <?php echo do_shortcode('[sp_testimonial id="323" ]'); ?>
        </div>
    </div>

  

  <div class="container-fluid mb-5 location-container">

    <div class="container"> 

   
        <div class="row main-body location ">
            <div class="col-12 col-md-6 d-flex align-items-center block-padding  ">
                <div class="contact-wrapper ">
                    <div class="contact-text">
                        <h2>Hvor man kan finde os ?</h2>
                    </div>
                    <div class="contact-paragraph">
                  <p >
                       
                    <?php the_field("location_info")?>
                  </p>
                    </div>
                    <button class="locationBtn mt-4 d-flex p-3">
               
                <a class="effect effect-1" href="<?php echo get_permalink( get_page_by_path( 'contact' ) );?>" title="kontakt os">kontakt os</a>
            </button>
                </div>
            </div>


            <div class="col-12 col-md-6 px-0 pt-5 pb-5 ">
                <div class="contact-wrapper">
                    <div class="google-map-home">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9725967869626!2d10.667244316101504!3d55.04369605392309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x282457f564d3fa3b!2zNTXCsDAyJzM3LjMiTiAxMMKwNDAnMTAuMCJF!5e0!3m2!1sen!2sdk!4v1637916314218!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
        </div> 

    </div>


    





    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>