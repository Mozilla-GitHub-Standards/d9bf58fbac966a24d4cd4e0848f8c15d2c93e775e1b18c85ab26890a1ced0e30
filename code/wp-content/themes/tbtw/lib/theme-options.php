<?php
    function theme_options( $wp_customize ) {

        //
        // Footer Section
        //

        $wp_customize->add_section( 'footer', array(
            'title'     =>  'Footer',
            'priority'  =>  20
        ));

        // Fields

        $wp_customize->add_setting( 'footer_legal', array(
            'default' => ''
        ));
        $wp_customize->add_control( new Textarea_Custom_Control( $wp_customize, 'footer_legal', array(
            'label'     => 'Footer Legal',
            'section'   => 'footer',
            'settings'  => 'footer_legal',
        )));

        $wp_customize->add_setting( 'footer_privacy_url', array(
            'default' => ''
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_privacy_url', array(
            'label'     => 'Footer privacy url',
            'section'   => 'footer',
            'settings'  => 'footer_privacy_url',
        )));

        $wp_customize->add_setting( 'footer_terms_url', array(
            'default' => ''
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_terms_url', array(
            'label'     => 'Footer terms url',
            'section'   => 'footer',
            'settings'  => 'footer_terms_url',
        )));

        //
        // Site Config
        //

        $wp_customize->add_section( 'site', array(
            'title'     =>  'Site',
            'priority'  =>  20
        ));

        // Fields

        $wp_customize->add_setting( 'fb_app_id', array(
            'default' => ''
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb_app_id', array(
            'label'     => 'Facebook App Id',
            'section'   => 'site',
            'settings'  => 'fb_app_id',
        )));

        $wp_customize->add_setting( 'ga_id', array(
            'default' => ''
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ga_id', array(
            'label'     => 'Google Analytics ID',
            'section'   => 'site',
            'settings'  => 'ga_id',
        )));

        $wp_customize->add_setting( 'gtm_id', array(
            'default' => ''
        ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gtm_id', array(
            'label'     => 'Google Tag Manager Id',
            'section'   => 'site',
            'settings'  => 'gtm_id',
        )));


    }

    add_action('customize_register', 'theme_options');
?>
