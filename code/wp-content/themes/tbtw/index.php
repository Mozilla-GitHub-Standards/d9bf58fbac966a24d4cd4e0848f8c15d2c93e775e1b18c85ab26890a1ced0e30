<?php
/*
Template Name: Updates
*/

    $data = Timber::get_context();

    $data['post'] = Timber::get_post( get_option('page_on_front') );
    
    $data['blog_posts'] = Timber::get_posts('TimberPost');
    $data['pagination'] = Timber::get_pagination();
    
    
    Timber::render('index.twig', $data);

?>
