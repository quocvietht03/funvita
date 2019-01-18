<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => esc_html__('Type', 'funvita'),
				'value' => 'customize',
				'choices' => array(
					'customize' => esc_html__('Customize', 'funvita'),
					'fullwidth' => esc_html__('Fullwidth', 'funvita'),
				),
			)
		),
		'choices' => array(
			'customize' => array(
				'menu_mega_container_width' => array(
					'label' => esc_html__('Width', 'funvita'),
					'desc' => esc_html__('Please enter number with px for container width (default: 840px)', 'funvita'),
					'type' => 'short-text',
					'value' => '1000px'
				),
				'menu_mega_container_position' => array(
					'label' => esc_html__('Position', 'funvita'),
					'desc' => esc_html__('Select the sub menu display position', 'funvita'),
					'type' => 'radio',
					'value' => 'menu-item-pos-left',
					'choices' => array(
						'menu-item-pos-left' => esc_html__('Left', 'funvita'),
						'menu-item-pos-center' => esc_html__('Center', 'funvita'),
						'menu-item-pos-right' => esc_html__('Right', 'funvita'),
					),
					'inline' => true,
				),
			),
		),
	),
	'menu_mega_container_bg' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => esc_html__('Background Type', 'funvita'),
				'value' => 'color',
				'choices' => array(
					'color' => esc_html__('Color', 'funvita'),
					'image' => esc_html__('Image', 'funvita'),
				),
			)
		),
		'choices' => array(
			'color' => array(
				'bg_color' => array(
					'label' => esc_html__( 'Background Color', 'funvita' ),
					'desc'  => esc_html__( 'Choose background color for container mega menu (default: #ffffff)', 'funvita' ),
					'type'  => 'color-picker',
					'value' => '#ffffff',
				),
			),
			'image' => array(
				'bg_image' => array(
					'label' => esc_html__( 'Background Image', 'funvita' ),
					'desc'  => esc_html__( 'Choose background image for container mega menu', 'funvita' ),
					'type'  => 'upload',
				),
				'bg_image_repeat' => array(
					'label' => esc_html__( 'Background Repeat', 'funvita' ),
					'desc'  => esc_html__( 'Choose background repeat for container mega menu', 'funvita' ),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => esc_html__('No Repeat', 'funvita'),
						'repeat' => esc_html__('Repeat', 'funvita'),
					),
				),
				'bg_image_size' => array(
					'label' => esc_html__( 'Background Size', 'funvita' ),
					'desc'  => esc_html__( 'Choose background size for container mega menu', 'funvita' ),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'cover' => esc_html__('Cover', 'funvita'),
						'contain' => esc_html__('Contain', 'funvita'),
					),
				),
				'bg_image_position' => array(
					'label' => esc_html__( 'Background Position', 'funvita' ),
					'desc'  => esc_html__( 'Please enter background position for container mega menu (default: center center)', 'funvita' ),
					'type' => 'short-text',
					'value' => 'center center',
				),
			),
		),
	),
	'menu_mega_row_padding' => array(
		'label' => esc_html__('Padding', 'funvita'),
		'desc' => esc_html__('Please enter number with px or % for row padding (default: 15px 10px)', 'funvita'),
		'type' => 'short-text',
		'value' => '15px 10px'
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => esc_html__('Badge', 'funvita'),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__('No', 'funvita'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__('Yes', 'funvita'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => esc_html__('Text', 'funvita'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => esc_html__('Background Color', 'funvita'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => esc_html__('Color', 'funvita'),
						),
					),
				),
			),
		),
	),
);
