<?php get_header(); ?>
this is posted from "投稿" on administrator screen.
<?php if (have_posts()):
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
endif; ?>
<?php previous_post_link(); ?>
<?php next_post_link(); ?>
<?php get_footer(); ?>