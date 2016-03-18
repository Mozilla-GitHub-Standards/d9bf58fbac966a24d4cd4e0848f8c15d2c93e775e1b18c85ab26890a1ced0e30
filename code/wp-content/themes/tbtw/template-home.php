<?php
/*
Template Name: Home
*/

$data = Timber::get_context();
$post = new TimberPost();
$data['post'] = $post;

Timber::render('template-home.twig', $data);

?>
