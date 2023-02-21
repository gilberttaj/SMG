<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 9
);
  $my_posts = get_posts($args);

get_header();
var_dump($my_posts);

get_footer();
?>