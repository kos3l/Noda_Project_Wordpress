<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
    <div class="row video">
        <!-- <div class="col-12"></div> -->
        <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
     
    </div>
    </div>
    <div class="row px-0 mx-0 main-body" >
        <div class="col d-flex justify-content-between align-items-center px-md-5 pt-5 flex-lg-row flex-column">
            <div> 
                <h1>DEAL IS A DEAL</h1>
                <p >We are a trustworthy company that offer Great quality for lower prices  </p>
            </div>
            <h5>(+45) 50 50 50 50</h5>
            <button class="contactBtn p-md-4">
                <h4 class="px-3 mb-0">CONTACT US</h4>
            </button>
        </div>
    </div>
    <div class="row under main-body  p-md-5 mx-0 ">
        <div class="col-12 col-lg-6 px-0 mx-0">
            <h4>SERVICES</h4>
            <p>
                Noda Byg Aps is a carpentry company that provides mid to high
                custom carpentry work. We specialize in interior and also exterior
                work using only the best materials and joinery techniques. 


                Our work includes building custom furniture, windows, doors, 
                terraces, roofs, flooring and painting.
            </p>
        </div>
        <div class="col-12 col-lg-6">
            <img src="" alt="">
        </div>
    </div>
    <div class="row main-body p-md-5 mb-5 mx-0">
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4  mx-0">
            <h6 class="mb-0 px-4">ROOFING</h6>
        </div>
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4 mx-0">
            <h6 class="mb-0 px-4">DOORS</h6>
        </div>
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4 mx-0">
            <h6 class="mb-0 px-4">WINDOWS</h6>
        </div>
        <div class="col-sm-12 px-0 line-height">
            <div class="line"></div>
        </div>
        <div class="col px-0 py-4 mx-0 d-flex justify-content-end ">
            <h5 class="mb-0 px-4 serviceLink">DISCOVER ALL OUR SERVICES</h5>
        </div>
    </div>
    <div class="row main-body  p-md-5 mx-0 ">
        <div class="col-12 col-lg-6">
            <img src="" alt="">
        </div>
        <div class="col-12 col-lg-6 px-0 mx-0">
            <h4>ABOUT US</h4>
            <p>
                Noda Byg Aps is a carpentry company that provides mid to high
                custom carpentry work. We specialize in interior and also exterior
                work using only the best materials and joinery techniques. 


                Our work includes building custom furniture, windows, doors, 
                terraces, roofs, flooring and painting.
            </p>
        </div>
    </div>
    <div class="row main-body testimonials  p-md-5 mx-0 ">
        <div class="col-12 d-flex justify-content-center">
            <h2>TESTIMONIALS</h2>
        </div>
        <div class="col-12"></div>
    </div>
    <div class="row main-body projects  p-md-5 mx-0 ">
        <div class="col-12 d-flex justify-content-center">
            <h2>RECENT PROJECTS</h2>
            
        </div>
        <div class="col-12">
        <div>
          
        </div>
    </div>
    <div class="row main-body location  p-md-5 mx-0 mb-5 ">
        <div class="col-12 col-sm-6 d-flex flex-column justify-content-center ">
            <h3>WHERE TO FIND US</h3>
            <p>
                We are closer than you think. You can find our company at:
                Address
                Post number
                Address

                And if you have any further question, send us message or call us.
            </p>
            <button class="locationBtn p-md-4 mt-4">
                <h4 class="px-3 mb-0">CONTACT US</h4>
            </button>
        </div>
        <div class="col-12 col-sm-6 "></div>
    </div>
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>