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
        <div class="col-12 col-md-6 d-flex justify-content-end">
            <div class="page-title">
                <h2><?php the_field("galleri-beskrivelse")?></h2>
            </div>
        </div>
    </div>
</div>


<div class="to-top-container to-top-right" >
 <button onclick="topFunction()" id="scroll_top_btn" ><i class="fas fa-angle-up"></i></button>

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