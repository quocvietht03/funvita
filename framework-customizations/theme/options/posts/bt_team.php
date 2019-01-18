<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'team_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'team-meta' => array(
				'title' => esc_html__('Meta Fields', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => esc_html__('Position', 'funvita'),
						'desc'  => esc_html__('Please, enter position of member.', 'funvita'),
					),
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => esc_html__('Email', 'funvita'),
						'desc'  => esc_html__('Please, enter email of member.', 'funvita'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => esc_html__('Phone', 'funvita'),
						'desc'  => esc_html__('Please, enter phone number of member.', 'funvita'),
					),
					
				),
			),
			'team-social' => array(
				'title' => esc_html__('Social', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							)
						),
						'label' => esc_html__('Social', 'funvita'),
						'desc'  => esc_html__('Please configs social of member', 'funvita'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'funvita'),
								'desc'  => esc_html__('Please, enter title of social item.', 'funvita'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Icon', 'funvita'),
								'desc'  => esc_html__('Please, enter icon of social item.', 'funvita'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Url(Link)', 'funvita'),
								'desc'  => esc_html__('Please, enter link of social item.', 'funvita'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => esc_html__('Add', 'funvita'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);