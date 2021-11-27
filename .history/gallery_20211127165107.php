<?php
/*
Template name: gallery
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