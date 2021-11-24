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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]') ?>
                </div>
            </div>
            <div class="col-12 col-md-6">

            </div>
        </div>
    </div>

    <hr />

<div class="row">

  <div class="col-md-4">
    [text* your-name class:form-control placeholder "Name (required)"]
    
  </div>

  <div class="col-md-4">
    [email* your-email class:form-control placeholder "Email (required)"]
  </div>
    
  <div class="col-md-4">
    [text your-subject class:form-control placeholder "Subject"]
  </div>
    
</div> <!-- end of .row -->

<hr />

<div class="row">
  <div class="col-md-12">
    [textarea your-message class:form-control placeholder "Message"]
  </div>
</div>

<hr />

<div class="row">
  <div class="col-sm-12">
    [submit class:btn-block class:btn class:btn-primary class:btn-lg "Send" ]
  </div>
</div>



    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>