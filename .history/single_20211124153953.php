<?php get_header() ?>
<?php if(have_posts()):?>

    <?php while(have_posts()): the_post() ?>
       <span><?php the_post(); ?></span> 
        the_content();

    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>