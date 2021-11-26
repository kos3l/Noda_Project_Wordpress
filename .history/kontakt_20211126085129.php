<?php
/*
Template name: Kontakt
*/
?>


<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>

    <div class="container mt-5 mb-5 ">
        <div class="row " >
            <div class="row-wrapper"></div>
            <div class="col-12 col-md-6  pt-5 ">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="description">
                    <h2>Do you want us to work for you? Do you have idea in your head and you need somebody to bring it to life? We are here to help you. Contact us!
</h2>
                </div>
            </div>
        </div>
    </div>
  
<div class="container-fluid info-background ">


   <div class="container info-bar">
       <div class="row text-center">
          
           <div class="col-12 col-md-4 ">
           <div class="col-wrapper">
               <div class="col-text">
                   <p class="text-center">
                       <span>OFFICE LINE</span>
                   </p>
               </div>
               <div class="col-title">
                   <h3 class="text-center">
                       <span>40 40 50 50</span>
                   </h3>
               </div>
               </div>
           </div>
           
           <div class="col-12 col-md-4 ">
           <div class="col-wrapper">
               <div class="col-text">
                   <p class="text-center">
                       <span>EMAIL</span>
                   </p>
               </div>
               <div class="col-title">
                   <h3 class="text-center">
                       <span>henrik@nodabyg.dk</span>
                   </h3>
               </div>
               </div>
           </div>
           
           <div class="col-12 col-md-4 ">
           <div class="col-wrapper">
               <div class="col-text">
                   <p class="text-center">
                       <span>OFFICE LINE</span>
                   </p>
               </div>
               <div class="col-title">
                   <h3 class="text-center">
                       <span>9:00 am - 5:00pm</span>
                   </h3>
               </div>
               </div>
           </div>
           
           
          
           
       </div>
   </div>
   </div>
   

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pt-5 px-md-5">
               
                <div class="contanct info">
                <?php the_content();?>
                </div>
                <div class="iframe mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.008402642059!2d-117.92116288508075!3d33.81209623779504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd7d12b3b5e6b%3A0x2ef62f8418225cfa!2sDisneyland%20Park!5e0!3m2!1sen!2sdk!4v1637773283673!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6 pt-5 px-md-5 p-sm-3">
            <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Kontakt Form"]') ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>






    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>