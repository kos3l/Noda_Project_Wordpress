<?php
/*
Template name: services
*/
?>

<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
    <div class="row video">
        <div
            class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
        >
   
 <!--    Replace with image the_post_thumbnail() -->
    </div>
       <!--  <div class="row " >
            <div class="col-12 col-md-6  pt-5">
                <div class="page-title px-md-5">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-12 col-md-6 px-md-5 pt-5 d-flex justify-content-md-end">
                <div class="desription">
                <p><?php the_content();?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row under main-body mx-0 mb-5 ">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
                </button>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-12"></div>
            <div class="col-12"></div>
        </div>
    </div>
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>