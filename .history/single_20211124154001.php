<?php get_header() ?>
<?php if(have_posts()):?>

    <?php while(have_posts()): the_post() ?>
       <span><?php the_post(); ?></span> 
       <span><?php the_content(); ?></span> 
        

    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>