<?php get_header() ?>
<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>
   <div class="container">
       <div class="row">
           col
       </div>
   </div>
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>