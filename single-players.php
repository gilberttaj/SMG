<?php
$args = array(
    'post_type' => 'players',
    'posts_per_page' => 30
);
 
  $my_posts = get_posts($args);

get_header();
var_dump($my_posts);
get_footer();

?>