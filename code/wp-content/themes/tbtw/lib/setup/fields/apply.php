<?php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_apply',
		'title' => 'Apply',
		'fields' => array (
			array (
				'key' => 'field_56de6d2bb72f2',
				'label' => 'Apply 1 Message',
				'name' => 'apply_1_message',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56de6d75b72f5',
				'label' => 'Apply 2 Message',
				'name' => 'apply_2_message',
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
  				'value' => 'template-home.php',
  				'order_no' => 0,
  				'group_no' => 0,
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
