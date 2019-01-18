<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$menu_slug_opt = array();
$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$menu_slug_opt['auto'] = 'Auto';
foreach ( $menus_obj as $menu_obj ) {
	$menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => esc_html__('General', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Title Bar', 'funvita'),
						'desc' => esc_html__('Turn on to disable title bar in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => esc_html__('Header', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Header Layout', 'funvita'),
						'desc'  => esc_html__('Select a header layout in current page', 'funvita'),
						'choices' => array(
							'default' => esc_html__('Default', 'funvita'),
							'1' => esc_html__('Header 1', 'funvita'),
							'2' => esc_html__('Header 2', 'funvita'),
							'3' => esc_html__('Header 3', 'funvita'),
							'onepage' => esc_html__('Header One Page', 'funvita'),
							'onepagescroll' => esc_html__('Header One Page Scroll', 'funvita'),
							'vertical' => esc_html__('Header Vertical', 'funvita'),
							'minivertical' => esc_html__('Header Mini Vertical', 'funvita')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Full Width (100%)', 'funvita'),
						'desc' => esc_html__('Turn on to disable header full width (100%) in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'header_absolute' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Absolute', 'funvita'),
						'desc' => esc_html__('Turn on to disable header absolute in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Top', 'funvita'),
						'desc' => esc_html__('Turn on to disable header top in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo', 'funvita'),
						'desc'  => esc_html__('Select image to change the logo in current page.', 'funvita'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'funvita'),
						'desc'  => esc_html__('Controls the height of the logo in current page. EX: 50', 'funvita')
					),
					'header_menu_assign' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Menu Assign', 'funvita'),
						'desc'  => esc_html__('Select a menu assign of header layout in current page', 'funvita'),
						'choices' => $menu_slug_opt
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Sticky', 'funvita'),
						'desc' => esc_html__('Turn on to disable header stick in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo Stick', 'funvita'),
						'desc'  => esc_html__('Select image to change the logo stick in current page.', 'funvita'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'funvita'),
						'desc'  => esc_html__('Controls the height of the logo stick in current page. EX: 40', 'funvita')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Top Mobile', 'funvita'),
						'desc' => esc_html__('Turn on to disable header top mobile in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo Mobile', 'funvita'),
						'desc'  => esc_html__('Select image to change the logo mobile in current page.', 'funvita'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'funvita'),
						'desc'  => esc_html__('Controls the height of the logo mobile in current page. EX: 30', 'funvita')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => esc_html__('Title Bar', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Title Bar Layout', 'funvita'),
						'desc'  => esc_html__('Select a title bar layout in current page', 'funvita'),
						'choices' => array(
							'default' => esc_html__('Default', 'funvita'),
							'1' => esc_html__('Title Bar 1', 'funvita'),
							'2' => esc_html__('Title Bar 2', 'funvita')
						)
					),
					'page_titlebar_space' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Title Bar Space', 'funvita'),
						'desc' => esc_html__('Turn on to disable space between title bar and content in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'page_titlebar_background' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Title Bar Background', 'funvita'),
						'desc'  => esc_html__('Select image to change the title bar background in current page.', 'funvita'),
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => esc_html__('Footer', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Footer Layout', 'funvita'),
						'desc'  => esc_html__('Select a footer layout in current page', 'funvita'),
						'choices' => array(
							'default' => esc_html__('Default', 'funvita'),
							'1' => esc_html__('Footer 1', 'funvita'),
							'2' => esc_html__('Footer 2', 'funvita')
						)
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Footer Space', 'funvita'),
						'desc' => esc_html__('Turn on to disable space between footer and content in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'footer_fixed' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Fixed', 'funvita'),
						'desc' => esc_html__('Turn on to disable footer fixed in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'footer_fullwidth' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Full Width (100%)', 'funvita'),
						'desc' => esc_html__('Turn on to disable footer full width (100%) in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
					'footer_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Footer Top', 'funvita'),
						'desc' => esc_html__('Turn on to disable footer top in current page.', 'funvita'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'funvita'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'funvita'),
						),
					),
				),
			),
		),
	),
	
);