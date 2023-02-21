<?php /* Template Name: Players Template */ ?>
<?php get_header(); ?>

<?php
    $query = new WP_Query( array(
        'post_type' => 'players', 
        'tax_query' => array(
            array (
                'taxonomy' => 'players_cat',
                'field' => 'gk',
                'terms' => 3
            )
        ),
    ) );
    
    while ( $query->have_posts() ) : $query->the_post();
?>  
                <p><?php echo get_the_title() ?></p>
                <p><?php echo get_the_content() ?></p>
                <p><?php echo get_the_post_thumbnail() ?></p>
                <p><?php echo get_post_meta($post->ID, 'name_eng', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'name_jap', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'jersey_no', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'additional_info', true); ?></p>

<?php
    endwhile;
    /**
     * reset the orignal query
     * we should use this to reset wp_query
     */
    wp_reset_query();
?>



<?php get_footer(); ?>