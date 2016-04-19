<?php
    // PATH: *

    $data = Timber::get_context();
    $data['post'] = Timber::get_post( get_option('page_on_front') );

    Timber::render('404.twig', $data);
?>
