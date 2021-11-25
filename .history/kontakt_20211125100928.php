<?php
/*
Template name: Kontakt
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
    <div class="container">
        <div class="row " >
            <div class="col-12 col-md-6  pt-5">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="desription">
                    <h5>Contact Us here</h5>
                </div>
            </div>
        </div>
    </div>
  

    <hr /> <!-- need styling possibly bootstrap  -->

   

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]') ?>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="contanct info">
                <p><?php the_content();?></p>
                </div>
                <div class="iframe mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.008402642059!2d-117.92116288508075!3d33.81209623779504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd7d12b3b5e6b%3A0x2ef62f8418225cfa!2sDisneyland%20Park!5e0!3m2!1sen!2sdk!4v1637773283673!5m2!1sen!2sdk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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