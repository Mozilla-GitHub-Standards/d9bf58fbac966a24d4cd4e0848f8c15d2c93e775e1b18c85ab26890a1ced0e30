<?php
/*
Template Name: Author
*/
//codex.wordpress.org/Author_Templates

    $data = Timber::get_context();

    $data['post'] = Timber::get_post( get_option('page_on_front') );
    
    //$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    //$authorPhoto = get_field( "author_photo" );
    //$author_id = get_the_author_meta( 'ID' );
    //$author_badge = get_field('author_photo', 'user_'. $author_id );
    //$data['title'] = $curauth->nickname;
    if ( isset( $wp_query->query_vars['author'] ) ) {
    	$author = new TimberUser( $wp_query->query_vars['author'] );
    	$data['author'] = $author;
    	$data['title'] = 'Posts&nbsp;by ' . $author->nickname();
    }
    
    //$data['page_hero'] = 
    
    $data['blog_posts'] = Timber::get_posts('TimberPost');
    $data['pagination'] = Timber::get_pagination();
    
    
    Timber::render('index.twig', $data);





?>
