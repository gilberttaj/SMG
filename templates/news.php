<?php /* Template Name: News Template */ ?>
<?php get_header(); ?>

<div class='flex w-[55%] mx-auto justify-between flex-wrap'>
    <?php
        $query = new WP_Query( array(
            'post_type' => 'news',          // name of post type.
        ) );
        
        while ( $query->have_posts() ) : $query->the_post();
    ?>              
        <div class='w-[17%] bg-[yellow]'>
                    <p><?php echo get_the_title() ?></p>
                    <p><?php echo get_the_content() ?></p>
        </div>

    <?php
        endwhile;

      
        /**
         * reset the orignal query
         * we should use this to reset wp_query
         */
        wp_reset_query();
        
    ?>

    <!-- < ?php 
        $total_posts = wp_count_posts()->publish;
        echo $total_posts;
    ?> -->

</div>



<?php get_footer(); ?>