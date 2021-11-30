</div>
<div class="container-fluid px-0 mx-0">
    <div class="row footerNoda mx-0 align-items-center">
            <div class="col-sm-12 px-lg-5 line-height">
                <div class="line-footer"></div>
            </div>
        <div class="col-sm d-flex flex-column justify-content-center align-items-start align-items-lg-end "> 
            <div>            
                <h3 class="pb-2"><?php the_field("footer_titel_1") ?></h3> 
                <p>
                <?php the_field("footer_body_1") ?>
                </p>
            </div>
        </div>
        <div class="col-sm  d-flex flex-column justify-content-center align-items-start align-items-lg-center ">
            <div>            
                <h3 class="pb-2"><?php the_field("footer_titel_2") ?></h3> 
                <p>
                <?php the_field("footer_body_2") ?>
                </p>
            </div>
        </div>
        <div class="col-sm  d-flex flex-column justify-content-center align-items-start ">
            <div>            
                <h3 class="pb-2"><?php the_field("footer_titel_3") ?></h3> 
                <p>
                <?php the_field("footer_body_3") ?>
                </p>
            </div>
        </div>

    </div>
    </div>

    <div class="container">
        <div class="row">
            .col-12
        </div>
    </div>


<?php wp_footer(); ?>
</body>
</html>