<?php
	
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_57e2bc6a1d917',
		'title' => 'Content Panel Attributes',
		'fields' => array (
			array (
				'key' => 'field_57e2bc9920054',
				'label' => 'Panel Order',
				'name' => 'panel_order',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '10',
					'class' => 'small-field',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'content_panel',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_57e2d28896338',
		'title' => 'Content Panel Builder',
		'fields' => array (
			array (
				'key' => 'field_57e2fd88abc62',
				'label' => 'Panel Type',
				'name' => 'panel_type',
				'type' => 'radio',
				'instructions' => 'Select and option to display relevant layout/content options.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'single_panel' => 'Single Panel',
					'slider_panel' => 'Panel w/ Slides',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
			),
			array (
				'key' => 'field_57e2e27a71237',
				'label' => 'Background Style',
				'name' => 'background_style',
				'type' => 'radio',
				'instructions' => 'Select a background style for the content panel.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'image' => 'Image Artwork',
					'color' => 'Solid Color',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
			),
			array (
				'key' => 'field_57e2d290438e0',
				'label' => 'Background Image Artwork',
				'name' => 'content_panel_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57e2e27a71237',
							'operator' => '==',
							'value' => 'image',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'large',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array (
				'key' => 'field_57e2e2db71238',
				'label' => 'Background Color',
				'name' => 'content_panel_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57e2e27a71237',
							'operator' => '==',
							'value' => 'color',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			),
			array (
				'key' => 'field_57e30438697a5',
				'label' => 'Slides',
				'name' => 'panel_slides',
				'type' => 'repeater',
				'instructions' => 'Add as many horizontally-sliding content panels as necessary',
				'required' => 0,
				'conditional_logic' => array (
					array (
						array (
							'field' => 'field_57e2fd88abc62',
							'operator' => '==',
							'value' => 'slider_panel',
						),
					),
				),
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => '',
				'max' => '',
				'layout' => 'row',
				'button_label' => 'Add Content Panel Slide',
				'sub_fields' => array (
					array (
						'key' => 'field_57e304c5697a6',
						'label' => 'Panel Slide Title',
						'name' => 'panel_slide_title',
						'type' => 'text',
						'instructions' => 'The title of the content panel slide.',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57eeea938a9a4',
						'label' => 'Panel Slide Subheadline',
						'name' => 'panel_slide_subheadline',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57e3073122fa8',
						'label' => 'Panel Slide Content',
						'name' => 'panel_slide_content',
						'type' => 'post_object',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'content_panel',
						),
						'taxonomy' => array (
						),
						'allow_null' => 0,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_57e407cc7c571',
						'label' => 'Panel Slide Color',
						'name' => 'panel_slide_color',
						'type' => 'color_picker',
						'instructions' => 'Select a color to overlay the background image.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
					),
					array (
						'key' => 'field_57e40d11df4bd',
						'label' => 'Panel Slide Background',
						'name' => 'panel_slide_image',
						'type' => 'image',
						'instructions' => 'Upload new background image or select a background image from the media library.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'large',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'content_panel',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	acf_add_local_field_group(array (
		'key' => 'group_57eee14436532',
		'title' => 'Content Panel Content',
		'fields' => array (
			array (
				'key' => 'field_57eee152b8a16',
				'label' => 'Panel Subheadline',
				'name' => 'panel_subheadline',
				'type' => 'text',
				'instructions' => 'Provide a 1-2 sentence text string to accompany the Content Panel title.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'content_panel',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;

?>