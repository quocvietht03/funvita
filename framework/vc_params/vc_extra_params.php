<?php
//vc_section
vc_add_params( 'vc_section', array(
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Particles Effect', 'funvita'),
		'param_name' => 'particles_effect',
		'value' => array(
			esc_html__('None', 'funvita') => 'none',
			esc_html__('Default', 'funvita') => 'default',
			esc_html__('Nasa', 'funvita') => 'nasa',
			esc_html__('Bubble', 'funvita') => 'bubble',
			esc_html__('Snow', 'funvita') => 'snow',
			esc_html__('Nyan', 'funvita') => 'nyan',
			esc_html__('Custom', 'funvita') => 'custom'
		),
		'group' => esc_html__('Particles', 'funvita'),
		'description' => esc_html__('Select particles effect in this section.', 'funvita')
	),
	array(
		'type' => 'textarea',
		'heading' => esc_html__('Particles Json', 'funvita'),
		'param_name' => 'particles_json',
		'value' => '',
		'group' => esc_html__('Particles', 'funvita'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => esc_html__('Enter text json config particles effect.', 'funvita')
	),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Disable Background Image', 'funvita'),
		'param_name' => 'disable_bg_image',
		'value' => array(
			esc_html__('None', 'funvita') => 'none',
			esc_html__('Screen less than 1200', 'funvita') => 'md',
			esc_html__('Screen less than 992', 'funvita') => 'sm',
			esc_html__('Screen less than 768', 'funvita') => 'xs'
		),
		'group' => esc_html__('Design Options', 'funvita'),
		'description' => esc_html__('Disable background image in this section.', 'funvita')
	),
) );

//vc_row
vc_add_params( 'vc_row', array(
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Row Style', 'funvita'),
		'param_name' => 'row_container',
		'value' => array(
			esc_html__('Full Width', 'funvita') => 'fullwidth',
			esc_html__('Container', 'funvita') => 'container'
		),
		'weight' => 1,
		'description' => esc_html__('Select row style.', 'funvita')
	),
	array(
		'type' => 'textfield',
		'heading' => esc_html__('Content Max Width', 'funvita'),
		'param_name' => 'row_content_max_width',
		'value' => '',
		'weight' => 1,
		'dependency' => array(
			'element'=>'row_container',
			'value'=> 'fullwidth'
		),
		'description' => esc_html__('Enter number with px to set content max with. Ex: 1240px', 'funvita')
	),
	array(
		'type' => 'checkbox',
		'heading' => esc_html__('Columns no gap', 'funvita'),
		'param_name' => 'columns_no_gap',
		'value' => '',
		'weight' => 1,
		'description' => esc_html__('Enable no gap between columns in row.', 'funvita')
	),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Delay', 'funvita'),
        'param_name' => 'animate_delay',
        'value' => '0.3',
		'group' => esc_html__('Animation', 'funvita'),
        'description' => esc_html__('Animate delay (s). Example: 0.5', 'funvita')
    ),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Duration', 'funvita'),
        'param_name' => 'animate_duration',
        'value' => '1.2',
		'group' => esc_html__('Animation', 'funvita'),
        'description' => esc_html__('Animate duration (s). Example: 0.6', 'funvita')
    ),
	array(
		'type' => 'dropdown',
		'heading' => esc_html__('Particles Effect', 'funvita'),
		'param_name' => 'particles_effect',
		'value' => array(
			esc_html__('None', 'funvita') => 'none',
			esc_html__('Default', 'funvita') => 'default',
			esc_html__('Nasa', 'funvita') => 'nasa',
			esc_html__('Bubble', 'funvita') => 'bubble',
			esc_html__('Snow', 'funvita') => 'snow',
			esc_html__('Nyan', 'funvita') => 'nyan',
			esc_html__('Custom', 'funvita') => 'custom'
		),
		'group' => esc_html__('Particles', 'funvita'),
		'description' => esc_html__('Enable particles effect in this section.', 'funvita')
	),
	array(
		'type' => 'textarea',
		'heading' => esc_html__('Particles Json', 'funvita'),
		'param_name' => 'particles_json',
		'value' => '',
		'group' => esc_html__('Particles', 'funvita'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => esc_html__('Enter text json config particles effect.', 'funvita')
	)
) );

vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );

//vc_column
vc_add_params( 'vc_column', array(
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Delay', 'funvita'),
        'param_name' => 'animate_delay',
        'value' => '0.3',
		'group' => esc_html__('Animation', 'funvita'),
        'description' => esc_html__('Animate delay (s). Example: 0.5', 'funvita')
    ),
	array(
        'type' => 'textfield',
        'heading' => esc_html__('Animate Duration', 'funvita'),
        'param_name' => 'animate_duration',
        'value' => '1.2',
		'group' => esc_html__('Animation', 'funvita'),
        'description' => esc_html__('Animate duration (s). Example: 0.6', 'funvita')
    )
) );

//vc_custom_heading
vc_add_param( 'vc_custom_heading', array(
    'type' => 'textarea',
    'heading' => esc_html__('Custom Style', 'funvita'),
    'param_name' => 'custom_style',
    'value' => '',
    'description' => esc_html__('Enter custom style for heading element', 'funvita'),
	'group' => esc_html__('Extra Options', 'funvita')
) );

// vc_hoverbox
vc_add_param( 'vc_hoverbox', array(
    'type' => 'textfield',
    'heading' => esc_html__('Oder Number', 'funvita'),
    'param_name' => 'oder_number',
    'value' => '',
	'weight' => 1,
    'description' => esc_html__('Enter oder number.', 'funvita')
) );
