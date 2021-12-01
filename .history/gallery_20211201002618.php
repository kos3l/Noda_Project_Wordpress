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

 
    
</section>


<div class="container">
    <div class="row  pt-5 block-padding">
        <div class="col-12 col-md-6">
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-md-end">
            <div class="page-title">
                <p><?php the_field("galleri-beskrivelse")?></p>
            </div>
        </div>
    </div>
</div>





 <div class="container">
        <div class="row ">
            <div class="col-12 ">
            <?php the_content();?>
          
            </div>
        </div>
    </div>
    
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>