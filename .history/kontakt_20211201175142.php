<?php
/*
Template name: Kontakt
*/
?>


<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>


    <section class="hero-section position-relative text-center">
<img   src="<?php the_field("kontakt_billere")?>" >

 
    
</section>


    <div class="container  mb-5 ">
    <div class="row-wrapper pt-3 pb-3 block-padding">
        <div class="row " >
            
            <div class="col-12 col-md-6  pt-3 ">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-3 d-flex justify-content-md-end">
                <div class="description ">
                    <h2><?php the_field("kontakt-beskrivelse") ?>
</h2>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="to-top-container to-top-right" >
 <button onclick="topFunction()" id="scroll_top_btn" ><i class="fas fa-angle-up"></i></button>

 </div>
  
<div class="container-fluid info-background  ">


   <div class="container info-bar   ">
       <div class="row text-center each-scroll-pop-kontakt ">
             <?php the_content() ?>
        </div>
   </div>
  
   </div>
   <div class="container-fluid px-0  trigger-test-2 ">
       <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.9725967869626!2d10.667244316101504!3d55.04369605392309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x282457f564d3fa3b!2zNTXCsDAyJzM3LjMiTiAxMMKwNDAnMTAuMCJF!5e0!3m2!1sen!2sdk!4v1637916314218!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
       </div>
   </div>
   

   <div class="container-fluid form-background mb-3">
       <div class="container pt-5">
           <div class="row form-shaddow">
               <div class="col-12 col-md-7 col-lg-7 form-bg mb-3">
                <div class="form-wrapper pt-5 px-2">
                    <div class="form-title px-3">
                        <h3><?php the_field("form-titel") ?></h3>
                    </div>
                    <div class="container pt-5">
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Kontakt Form"]') ?>
                   


                            
                        </div>
                    </div>
                </div>
               </div>
               <div class="col-12 col-md-5 col-lg-5 info-bg  ">
                        <div class="info-wrapper pt-5 px-5  mb-3">
                            <div class="info-title">
                                <h3><?php the_field("kontakt-titel") ?></h3>
                            </div>
                            <div class="row d-flex flex-column pt-3 info-row">
                                <div class="col-12 col-md-12 inherit pt-md-5 ">
                                    <div class="info-sub">
                                        <div class="info-icon">
                                        <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                  <span> <?php the_field("adress") ?></span>
                                    </div>
                                   
                                </div>
                                <div class="col-12 col-md-12 inherit  pt-md-5 ">
                                   
                                <div class="info-sub col-12">
                                        <div class="info-icon">
                                        <i class="fa fa-phone"></i>
                                        </div>
                                        <span>  <?php the_field("telefonnummer") ?></span>
                                    </div>
                                   
                                </div>
                                <div class="col-12 col-md-12 inherit  pt-md-5 ">
                                   
                                <div class="info-sub col-12">
                                        <div class="info-icon">
                                        <i class="fa fa-envelope"></i>
                                        </div>
                                        <span>  <?php the_field("email") ?></span>
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