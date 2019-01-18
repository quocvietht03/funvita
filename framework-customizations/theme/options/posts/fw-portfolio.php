<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => esc_html__('Layout Settings', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'funvita' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'funvita' ),
						'type'  => 'upload',
					),
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Layout', 'funvita'),
						'desc'  => esc_html__('Select a layout of project', 'funvita'),
						'choices' => array(
							'default' => esc_html__('Default(Image Left)', 'funvita'),
							'layout1' => esc_html__('Layout 1(Image Top)', 'funvita'),
							'layout2' => esc_html__('Layout 2(Image Bottom)', 'funvita')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Select Gallery Columns', 'funvita'),
						'desc'  => esc_html__('Select gallery columns of project', 'funvita'),
						'choices' => array(
							'col-md-12' => esc_html__('1 Column', 'funvita'),
							'col-md-6' => esc_html__('2 Columns', 'funvita'),
							'col-md-4' => esc_html__('3 Columns', 'funvita'),
							'col-md-3' => esc_html__('4 Columns', 'funvita')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => esc_html__('Gallery Space', 'funvita'),
						'desc'  => esc_html__('Please, enter gallery space of project.', 'funvita'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => esc_html__('Meta Fields', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infomation',
						'label' => esc_html__('Info Title', 'funvita'),
						'desc'  => esc_html__('Please, enter info title of project.', 'funvita'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2018'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => esc_html__('Info Option', 'funvita'),
						'desc'  => esc_html__('Please configs info option of project', 'funvita'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'funvita'),
								'desc'  => esc_html__('Please, enter title of project item.', 'funvita'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Value', 'funvita'),
								'desc'  => esc_html__('Please, enter value of project item.', 'funvita'),
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