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
             <?php the_content() ?>
          </div>
   </div>
  
   </div>
   <div class="container-fluid px-0">
       <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9725967869626!2d10.667244316101504!3d55.04369605392309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x282457f564d3fa3b!2zNTXCsDAyJzM3LjMiTiAxMMKwNDAnMTAuMCJF!5e0!3m2!1sen!2sdk!4v1637916314218!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
       </div>
   </div>
   

   <div class="container-fluid form-background mb-3">
       <div class="container pt-5">
           <div class="row form-shaddow">
               <div class="col-12 col-md-7 col-lg-7 form-bg mb-3">
                <div class="form-wrapper pt-5 px-5">
                    <div class="form-title">
                        <h3>Send us a Message</h3>
                    </div>
                    <div class="container pt-5">
                        <div class="row">


                            <div class="col-12 col-md-6">
                            <div class="form-group">
          <label for="first">First Name</label>
          <input type="text" class="form-control" placeholder="" id="first">
        </div>

        <div class="form-group">
          <label for="first">Phone Number</label>
          <input type="text" class="form-control" placeholder="" id="first">
        </div>


                            </div>

                            <div class="col-12 col-md-6">
                            <div class="form-group">
          <label for="first">Email</label>
          <input type="text" class="form-control" placeholder="" id="first">
        </div>

        <div class="form-group">
          <label for="first">Subject</label>
          <input type="text" class="form-control" placeholder="" id="first">
        </div>

                            </div>

                            <div class="form-group">
          <label for="first">Your Message</label>
          <input type="text" class="form-control text-area" placeholder="" id="first">
        </div>
        <div class="form-button text-center">
        <button type="button" class="btn">SEND</button>
        </div>



                            
                        </div>
                    </div>
                </div>
               </div>
               <div class="col-12 col-md-5 col-lg-5 info-bg ">
                        <div class="info-wrapper pt-5 px-5  mb-3">
                            <div class="info-title">
                                <h3>Kontakt Information</h3>
                            </div>
                            <div class="row d-flex flex-column pt-3 info-row">
                                <div class="col-12 col-md-12 inherit pt-md-5 ">
                                    <div class="info-sub">
                                        <div class="info-icon">
                                        <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                    <h3>Violvænget 3 , Thurø, 5700 Svendborg</h3>
                                    </div>
                                   
                                </div>
                                <div class="col-12 col-md-12 inherit  pt-md-5">
                                   
                                <div class="info-sub col-12">
                                        <div class="info-icon">
                                        <i class="fa fa-phone"></i>
                                        </div>
                                    <h3>(+45) 21 80 00 91</h3>
                                    </div>
                                   
                                </div>
                                <div class="col-12 col-md-12 inherit  pt-md-5">
                                   
                                <div class="info-sub col-12">
                                        <div class="info-icon">
                                        <i class="fa fa-envelope"></i>
                                        </div>
                                    <h3>henrik@nodabyg.dk</h3>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
               </div>
           </div>
       </div>
   </div>


 



   


    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>