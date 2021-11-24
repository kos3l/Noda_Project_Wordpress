<?php get_template_part('index') ?>


<?php if(have_posts()):?>

<?php while(have_posts()): the_post() ?>
    the_post();
    the_content();

<?php endwhile; ?>
        <?php endif; ?>
