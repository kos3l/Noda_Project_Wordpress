<?php
/*
Template name: About
*/
?>

<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
   
 <section class="hero-section position-relative text-center">
        <img   src="<?php the_field("om_os_header")?>" >
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
                <p><?php the_field("om_os_beskrivelse"); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="to-top-container to-top-right" >
 <button onclick="topFunction()" id="scroll_top_btn" ><i class="fas fa-angle-up"></i></button>

 </div>

<div class="container mt-5">
    <div class="row block-padding">
        <div class="col-12 col-md-6 col-lg-6 ">
            <div class="om-us-wrapper">
                <div class="om-us-title">
                <h2><?php the_field("primær_titel"); ?></h2>
                </div>
                <div class="om-us-paragraph">
                <p><?php the_field("primaer_beskrivelse"); ?></p>
                </div>
            </div>
            <div class="om-us-second-wrapper">
                <div class="om-os-title">
                <h2><?php the_field("sekundær_titel"); ?></h2>
                </div>
                <div class="om-os-paragraph">
                <p>
                <?php the_field("sekundaer_beskrivelse"); ?>
                </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
        <div class="om-os-image-wrapper ">
        <img src="<?php the_field("mascot_firste_titel");?>" width="100%" alt="">
                </div>
        </div>
    </div>
</div>


<div class="container  mb-5">
    <div class="row block-padding">
        <div class="col-12 col-lg-6 col-md-6 d-flex align-items-center">

        <div class="om-os-image-wrapper mt-5 ">
                <img src="<?php the_field("om_os_andet_billede")?>" width="100%" alt="">
                </div>
        </div>

        <div class="col-12 col-lg-6 col-md-6 mt-5">
        <div class="om-us-wrapper ">
            <div class="om-us-title">
                <h2><?php the_field("dit_navn_title"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("dit_navn_beskrivelse"); ?>
                </p>
            </div>
            </div>
        
    </div>
</div>
</div>







   
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>