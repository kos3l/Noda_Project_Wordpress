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
    </div>
      

    
   
    <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>