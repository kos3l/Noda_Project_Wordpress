<?php
/*
Template name: services
*/
?>

<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
                <section class="hero-section position-relative text-center">
<img   src="<?php the_field("galleri-header")?>" >

 
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
        <div class="row">
            <div class="col-12 col-md-6">
            <?php echo do_shortcode('[WPSM_AC id=203]') ?>
            </div>
            <div class="col-12 col-md-6">
                <h1>Right </h1>
            </div>
        </div>
    </div>
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>