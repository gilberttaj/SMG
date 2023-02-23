<?php /* Template Name: News Template */ ?>
<?php get_header(); ?>

<div class='flex w-[55%] mx-auto justify-between flex-wrap'>
    <?php

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$posts_per_page = 8;

        $query = new WP_Query( array(
            'post_type' => 'news',          // name of post type.
            'posts_per_page' => $posts_per_page,
            'paged' => $paged
        ) );
        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();
    ?>              
        <div class='w-[17%] bg-[yellow]'>
                    <p><?php echo get_the_title() ?></p>
                    <p><?php echo get_the_content() ?></p>
        </div>

        

    <?php
        endwhile;
        
        wp_reset_query();
        ?>
    <?php 
        // Display pagination links
        echo paginate_links( array('total' => $query->max_num_pages) );
        }
    ?>
    <!-- < ?php 
        $total_posts = wp_count_posts()->publish;
        echo $total_posts;
    ?> -->

</div>



<?php get_footer(); ?>