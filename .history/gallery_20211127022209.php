<?php
/*
Template name: gallery
*/
?>

<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
    <!-- <div class="row video">
        <div
            class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
        > -->

 <!--    Replace with image the_post_thumbnail() -->
   <!--  </div> -->

   <!-- https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/unsplash_nature6.jpg -->
   <section class="hero-section position-relative text-center">
<img src="<?php the_post_thumbnail(); ?>" >

 
  <div class="hero-title centered">
        <h1><?php the_title(); ?></h1>
        <div class="hero-description text-center">
            <p><?php the_field("galleri-beskrivelse") ?>
</hp>
        </div>
  </div>
  <div class="custom-shape-divider-bottom-1637968348">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M1200 0L0 0 598.97 114.72 1200 0z" class="shape-fill"></path>
    </svg>
</div>
    
</section>


 <div class="container">
        <div class="row p-5 ">
            <div class="col-12 ">
            <?php the_content();?>
          
            </div>
        </div>
    </div>
    
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>