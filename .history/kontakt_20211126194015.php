<?php
/*
Template name: Kontakt
*/
?>


<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>

    <div class="container mt-5 mb-5 ">
    <div class="row-wrapper pt-5 pb-5">
        <div class="row " >
            
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
   <div class="container-fluid px-0">
       <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9725967869626!2d10.667244316101504!3d55.04369605392309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x282457f564d3fa3b!2zNTXCsDAyJzM3LjMiTiAxMMKwNDAnMTAuMCJF!5e0!3m2!1sen!2sdk!4v1637916314218!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
       </div>
   </div>
   

   <div class="container-fluid form-background">
       <div class="container pt-5">
           <div class="row form-shaddow">
               <div class="col-12 col-md-7 col-lg-7 form-bg">
                <div class="form-wrapper">
                    <div class="form-title">
                        <h3>Send us a Message</h3>
                    </div>
                </div>
               </div>
               <div class="col-12 col-md-5 col-lg-5 info-bg">
                        
               </div>
           </div>
       </div>
   </div>


 



   


    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>