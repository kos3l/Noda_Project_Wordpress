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
    <div class="row  pt-5">
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


<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-6">
            <div class="om-us-wrapper">
            <div class="om-us-title">
                <h2><?php the_field("primær_titel"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("primaer_beskrivelse"); ?>
                </p>
            </div>
            </div>
            <div class="om-us-second-wrapper ">
            <div class="om-us-title">
                <h2><?php the_field("sekundær_titel"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("sekundaer_beskrivelse"); ?>
                </p>
            </div>
            </div>
            </div>
            
            <div class="col-12 col-lg-6 col-md-6  d-flex justify-content-center align-items-center ">
                <div class="om-os-image-wrapper ">
                <img src="https://images.unsplash.com/photo-1595844730298-b960ff98fee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" width="100%" alt="">
                </div>
        </div>
        </div>
       
      
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
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

                </div>
                <div class="om-os-paragraph">
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
        <div class="om-os-image-wrapper ">
                <img src="https://images.unsplash.com/photo-1595844730298-b960ff98fee0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" width="100%" alt="">
                </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-6">

        <div class="om-os-image-wrapper ">
                <img src="https://www.handyvan.com/getattachment/Our-Services/MAN-WITH-A-VAN/Man-and-Van-Delivery-Services.jpg.aspx?width=1000&height=667" width="100%" alt="">
                </div>
        </div>

        <div class="col-12 col-lg-6 col-md-6">
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
            <div class="om-us-second-wrapper mt-5">
            <div class="om-us-title">
                <h2><?php the_field("beskaeftiger_titel"); ?></h2>
            </div>
            <div class="om-us-paragraph">
                <p>
                <?php the_field("beskaeftiger_beskrivelse"); ?>
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container-fluid info-background mb-5">
        <div class="container info-bar">
            <div class="row text-center">
            <?php the_content()?>
            </div>
        </div>
    </div>




   
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>