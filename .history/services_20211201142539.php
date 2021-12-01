<?php
/*
Template name: services
*/
?>

<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
       
   <section class="hero-section position-relative text-center">
<img   src="<?php the_field("services_header")?>" >

 
    
</section>

<div class="to-top-container to-top-right" >
 <button onclick="topFunction()" id="scroll_top_btn" ><i class="fas fa-angle-up"></i></button>

 </div>
<div class="container">
    <div class="row  pt-5">
        <div class="col-12 col-md-6">
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-md-end">
            <div class="description text-end">
                <h2><?php the_content(); ?></h2>
            </div>
        </div>
    </div>
</div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-6 mt-5">
            <?php echo do_shortcode('[WPSM_AC id=203]') ?>
            </div>
            <div class="col-12 col-md-6 mt-4 d-flex justify-content-center align-items-center">
                <div class="video-wrapper">
              <iframe  width="360" height="315" src="<" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                
            </div>
            </div>
        </div>
    </div>

   
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>