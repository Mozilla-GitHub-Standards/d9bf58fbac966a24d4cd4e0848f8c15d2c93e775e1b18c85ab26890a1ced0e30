<?php
/*
Template Name: Home
*/

$data = Timber::get_context();

$post = new TimberPost();
$data['post'] = $post;

//$args = get_option( 'sticky_posts' );
//$args = 'post_type=post&numberposts=4&orderby=rand';
$args = array(
  'posts_per_page' => 4,
  'post__in'  => get_option( 'sticky_posts' ),
  'ignore_sticky_posts' => 1
);
$data['blog_posts'] = Timber::get_posts($args);

$args2 = 'post_type=role&numberposts=3&orderby=menu_order';
$data['roles'] = Timber::get_posts($args2);

Timber::render('template-home.twig', $data);

?>
