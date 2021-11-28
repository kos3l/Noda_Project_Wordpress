<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>

               <!--  Section for video  -->
               <section class="hero-section-2 position-relative text-center">
               <video autoplay muted loop id="myVideo">
  <source src="https://assets.mixkit.co/videos/preview/mixkit-carpenter-sanding-a-piece-of-lumber-776-large.mp4" type="video/mp4">
</video>

</section>




 <div class="container mt-5 mb-5">
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
               <div class="col-6 d-flex justify-content-center align-items-center">
                   <div class="test no-gutters">
                       <h5>40 40 40 40 </h5>
                   </div>
               </div>
               <div class="col-12 col-md-6 col-lg-6">
               <div class="button-wrapper">
                        <button class="contactBtn p-md-4">
                            <h4 class="px-3 mb-0">CONTACT US</h4>
                        </button>
                     </div>
               </div>
           </div>
           </div>
         </div>
     </div>
 </div>  


 <div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="services-main-wrapper">
                <div class="om-us-title">
                <h2>Services</h2>
                </div>
                <div class="services-main-paragraph">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repudiandae obcaecati ab assumenda modi, sit libero labore facere eligendi. Maxime assumenda nobis libero doloribus architecto nisi dolores nam soluta id!</p>
                </div>
                <div class="row main-body pt-5 mx-0">
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
        <div class="col px-0 pt-5 mx-0  ">
            <h2 class=" serviceLink">Discover all of our services</h2>
        </div>
    </div>
            </div>
           
        </div>
        <div class="col-12 col-md-6 col-lg-6 ">
        <div class="service-main-image-wrapper text-center ">
                <img src="https://images.unsplash.com/photo-1595844730298-b960ff98fee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" width="100%" alt="">
                </div>
        </div>
    </div>
</div>

<div class="container-fluid introduction-section mt-5">


<div class="container mt-5">
<div class="row main-body  p-md-5 mx-0 ">
    <div class="main-title text-center">
        <h2>Quality First !</h2>
    </div>
        <div class="col-12 col-lg-6 mb-5 mt-5">
        <img src="https://images.unsplash.com/photo-1595844730298-b960ff98fee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" width="100%" alt="">
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
</div>

</div>


  <div class="container">
  <div class="row main-body projects  p-md-5 mx-0 pt-5 ">
        <div class="col-12  text-center">
            <div class="project-title">
            <h2>RECENT PROJECTS</h2>
            </div>
            <div class="project-description ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dicta.</p>
            </div>
            
        </div>
        <div class="col-12">
       
          <div class="galleri-show">
              <?php echo do_shortcode('[ngg src="galleries" ids="3" display="basic_thumbnail" thumbnail_crop="0" images_per_page="6" ajax_pagination="0"]') ?>
          </div>
        </div>
    </div>
  </div>


 
   
 
    <div class="row main-body testimonials  p-md-5 mx-0 mt-5">
        <div class="col-12 d-flex justify-content-center">
            <h2>TESTIMONIALS</h2>
        </div>
        <div class="col-12">
        <?php echo do_shortcode('[sp_testimonial id="273"]'); ?>
        </div>
    </div>

  

    <div class="row main-body location   mx-0 mb-5 ">
        <div class="col-12 col-sm-6 p-md-5 d-flex  justify-content-center align-items-center ">
            <div class="contact-wrapper text-center">
            <h2>WHERE TO FIND US</h2>
            
            
            <p><?php the_field("location_info")?>
            </p>
            <button class="locationBtn p-md-4 mt-4">
                <h4 class="px-3 mb-0">CONTACT US</h4>
            </button>
            </div>
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