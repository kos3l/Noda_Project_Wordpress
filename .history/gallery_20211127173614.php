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
    <div class="row  pt-5">
        <div class="col-12 col-md-6">
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="page-title">
                <p><?php the_field("galleri-beskrivelse")?></p>
            </div>
        </div>
    </div>
</div>



<div class="col-12 col-lg-6 col-md-6">
                <div class="om-os-image-wrapper px-5">
                <img src="https://images.unsplash.com/photo-1595844730298-b960ff98fee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" width="100px" alt="">
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