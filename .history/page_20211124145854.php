<?php get_header() ?>

<?php if(have_posts()):?>
                <?php while(have_posts()): the_post() ?>

                    the_post();
                    the_content();
                    the_title()
                <?php endwhile; ?>
            <?php endif; ?>
<?php get_footer() ?>