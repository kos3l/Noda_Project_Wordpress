<?php get_header() ?>
<?php get_template_part('index') ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
   <div class="container">
       <div class="row">
           <div class="col-12">
           <h1><?php the_title();?></h1>
           </div>
       </div>
   </div>
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>