<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_role',
		'title' => 'Role',
		'fields' => array (
			array (
				'key' => 'field_57106919a747c',
				'label' => 'Summary',
				'name' => 'role_summary',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5710694ea747d',
				'label' => 'Image',
				'name' => 'role_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'role',
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
