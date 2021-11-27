<?php
/*
Template name: gallery
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
        <div class="row " >
            <div class="col-12 col-md-6  pt-5">
                <div class="page-title px-md-5">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="desription">
                <p>Check our gallery</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row " >
            <div class="col-12">
                <div class="hero-gallery">
                    <div class="hero-title">

                    </div>                   
                </div>
            </div>
            
        </div>
    </div>


    <svg style="display:none;">
  <symbol id="one" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="white" d="M0,96L1440,320L1440,320L0,320Z"></path>
  </symbol>
  <symbol id="two" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="white" d="M0,32L48,37.3C96,43,192,53,288,90.7C384,128,480,192,576,197.3C672,203,768,149,864,138.7C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </symbol>
  <symbol id="three" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="white" d="M0,128L30,144C60,160,120,192,180,197.3C240,203,300,181,360,192C420,203,480,245,540,245.3C600,245,660,203,720,192C780,181,840,203,900,181.3C960,160,1020,96,1080,80C1140,64,1200,96,1260,122.7C1320,149,1380,171,1410,181.3L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
  </symbol>
  <symbol id="four" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="white" d="M0,192L120,192C240,192,480,192,720,165.3C960,139,1200,85,1320,58.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
  </symbol>
  <symbol id="five" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="white" d="M0,32L120,69.3C240,107,480,181,720,192C960,203,1200,149,1320,122.7L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
  </symbol>
  <symbol id="six" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="rgba(255, 255, 255, .8)" d="M0,32L120,64C240,96,480,160,720,160C960,160,1200,96,1320,64L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
  </symbol>
</svg>
<section class="hero-section position-relative">
<img src="/img/kontakt.png" alt="">

  <div class="overlay position-absolute d-flex align-items-center justify-content-center font-weight-bold text-white h2 mb-0">
    <blockquote class="p-4 mb-0">
      <p>By discovering nature, you discover yourself. </p>
      <footer class="blockquote-footer text-white text-right">Maxime Lagacé</footer>
    </blockquote>
  </div>
  <svg class="position-absolute w-100">
    <use xlink:href="#one"></use>
  </svg>
</section>

    


    <div class="container">
        <div class="row text-center">
            <div class="col-12 ">
            <?php the_content();?>
          
            </div>
        </div>
    </div>
    
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>