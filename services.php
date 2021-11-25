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
        <div class="row " >
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
        <div class="col-12 px-lg-5 mb-5">
            <div class="d-flex serviceBtns justify-content-between"> 
                <button data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><h5>Service1</h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><h5>Service2</h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><h5>Service3</h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><h5>Service4</h5></button>
                <button data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"><h5>Service5</h5></button>
            </div>
            <div class="line pt-2"></div>
        </div>
        <div class="col-12 col-lg-6 px-0 mx-0 p-md-5 ">
            <div class="collapse multi-collapse show" id="collapse1">
                <h5 class="abouth5 pb-2">Who we are?</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for companies that prioritize money 
                    over quality. We have decided to establish our own high-quality 
                    carpentry company, which will offer people various services that 
                    you can learn more about on this site.

                    Our customers are a priority for us and this is evidenced by the 
                    number of satisfied people from Norway and Denmark. Our task 
                    is not to leave people without the job being 100% finished.
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse2">
                <h5 class="abouth5 pb-2">Who we are?</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for companies that prioritize money 
                    over quality. We have decided to establish our own high-quality 
                    carpentry company, which will offer people various services that 
                    you can learn more about on this site.
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse3">
                <h5 class="abouth5 pb-2">Who we are?</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for companies that prioritize money 
                    over quality. We have decided to establish our own high-quality 
                    carpentry company,
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse4">
                <h5 class="abouth5 pb-2">Who we are?</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for companies that prioritize money 
                    over quality. 
                </p>
            </div>
            <div class="collapse multi-collapse" id="collapse5">
                <h5 class="abouth5 pb-2">Who we are?</h5>
                <p>
                    Noda Byg ApS is a small private company based in Copenhagen. 
                    Our company was founded in Year of foundation, as a decision that 
                    we didn't want to work longer for compani
                </p>
            </div>
            
        </div>
        <div class="col-12 col-lg-6 aboutImg">
            <img src="" alt="">
        </div>
    </div>
   

   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>