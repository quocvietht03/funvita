<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'General', 'funvita' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Less Design', 'funvita' ),
			'subtitle' => esc_html__( 'Enable less design to generate css over time...', 'funvita' ),
			'default'  => true,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => esc_html__('Site Layout', 'funvita'),
			'subtitle' => esc_html__('Control the site layout.', 'funvita'),
			'options' => array(
				'wide' => esc_html__('Wide', 'funvita'), 
				'boxed' => esc_html__('Boxed', 'funvita'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Site Width', 'funvita' ),
			'subtitle'      => esc_html__( 'Control the overall site width.', 'funvita' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Boxed Background', 'funvita' ),
			'subtitle' => esc_html__( 'Control the background color of the boxed.', 'funvita' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed .bt-main-wrap')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => esc_html__( 'Boxed Space', 'funvita' ),
			'subtitle' => esc_html__( 'Control the space top and bottom of boxed.', 'funvita' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed .bt-main-wrap')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Body Background', 'funvita' ),
			'subtitle' => esc_html__( 'Control the background of the body.', 'funvita' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Mobile Width', 'funvita' ),
			'subtitle'      => esc_html__( 'Controls the width to enable mobile.', 'funvita' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'particles_effect',
			'type'     => 'switch',
			'title'    => esc_html__( 'Particles Effect', 'funvita' ),
			'subtitle' => esc_html__( 'Use particles effect.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => esc_html__( 'Smooth Scroll', 'funvita' ),
			'subtitle' => esc_html__( 'Use smooth scroll.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'       => 'nice_scroll_bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Nice Scroll Bar', 'funvita' ),
			'subtitle' => esc_html__( 'Use nice scroll bar.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'=>'nice_scroll_bar_element',
			'type' => 'textarea',
			'title' => esc_html__('Nice Scroll Bar Elements', 'funvita'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'funvita'),
			'default' => 'html, .bt-header-vertical .bt-vertical-menu-wrap',
			'required' 		=> array('nice_scroll_bar' , '=', '1')
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Back To Top', 'funvita' ),
			'subtitle' => esc_html__( 'Control button back to top.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Back To Top Style', 'funvita' ),
			'subtitle' => esc_html__( 'Select style button back to top.', 'funvita' ),
			'options'  => array(
				'square' => esc_html__( 'Square', 'funvita' ),
				'rounded' => esc_html__( 'Rounded', 'funvita' ),
				'circle' => esc_html__( 'Circle', 'funvita' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => esc_html__( 'Site Loading', 'funvita' ),
			'subtitle' => esc_html__( 'Control animation before site load complete.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => esc_html__( 'Spinner Style', 'funvita' ),
			'subtitle' => esc_html__( 'Select style spinner.', 'funvita' ),
			'options'  => array(
				'spinner0' => esc_html__( 'Default', 'funvita' ),
				'spinner1' => esc_html__( 'Style 1', 'funvita' ),
				'spinner2' => esc_html__( 'Style 2', 'funvita' ),
				'spinner3' => esc_html__( 'Style 3', 'funvita' ),
				'spinner4' => esc_html__( 'Style 4', 'funvita' ),
				'spinner5' => esc_html__( 'Style 5', 'funvita' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Site Loading Background', 'funvita' ),
			'subtitle' => esc_html__( 'Control the background of site loading.', 'funvita' ),
			'default'  => array(
				'background-color' => '#015dc7',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('.bt-site-loading')
		),
		array(
			'id'       => 'nav_dots_style',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Nav & Dots Style', 'funvita' ),
			'subtitle' => esc_html__( 'Select a navigaiton & dots style for carousel.', 'funvita' ),
			'options'  => array(
				'0' => array(
					'alt' => esc_html__( 'Nav & Dots Default', 'funvita' ),
					'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-default.jpg'
				),
				'1' => array(
					'alt' => esc_html__( 'Nav & Dots Style 1', 'funvita' ),
					'img' => get_template_directory_uri() . '/assets/images/button/nav-dots-style1.jpg'
				)
			),
			'default'  => '0'
		),
		array(
			'id'       => 'pagination_style',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Pagination Style', 'funvita' ),
			'subtitle' => esc_html__( 'Select a pagination style.', 'funvita' ),
			'options'  => array(
				'0' => array(
					'alt' => esc_html__( 'Pagination Style default', 'funvita' ),
					'img' => get_template_directory_uri() . '/assets/images/button/pagination-default.jpg'
				),
				'1' => array(
					'alt' => esc_html__( 'Pagination Style 1', 'funvita' ),
					'img' => get_template_directory_uri() . '/assets/images/button/pagination-style1.jpg'
				)
			),
			'default'  => '0'
		),
		array(
			'id'       => 'pagination_prev_text',
			'type'     => 'text',
			'title'    => esc_html__( 'Previous', 'funvita' ),
			'subtitle' => esc_html__( 'Enter previous text of pagination.', 'funvita' ),
			'default'  => esc_html__( 'Previous', 'funvita' )
		),
		array(
			'id'       => 'pagination_next_text',
			'type'     => 'text',
			'title'    => esc_html__( 'Next', 'funvita' ),
			'subtitle' => esc_html__( 'Enter next text of pagination.', 'funvita' ),
			'default'  => esc_html__( 'Next', 'funvita' )
		),
	)
) );
