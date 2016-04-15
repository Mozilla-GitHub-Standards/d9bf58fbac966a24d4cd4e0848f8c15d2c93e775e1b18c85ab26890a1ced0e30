<?php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_feature-double',
		'title' => 'Feature: Double',
		'fields' => array (
			array (
				'key' => 'field_570fd247b71fe',
				'label' => 'Content - Left',
				'name' => 'page_feature_double_left',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_570fd4fbb71ff',
				'label' => 'Content - Right',
				'name' => 'page_feature_double_right',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
      array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'role',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
