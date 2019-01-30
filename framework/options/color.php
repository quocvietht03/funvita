<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Colors', 'funvita' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Main Color', 'funvita' ),
			'subtitle' => esc_html__( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'funvita' ),
			'default'  => '#015dc7',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Secondary Color', 'funvita' ),
			'subtitle' => esc_html__( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'funvita' ),
			'default'  => '#a200ff',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'body_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Body Color', 'funvita' ),
			'subtitle' => esc_html__( 'Controls the color of all text body.', 'funvita' ),
			'active'    => false,
			'default'  => '#585858',
			'output'   => array('body')
		),
		array(
			'id'       => 'heading_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Heading Color', 'funvita' ),
			'subtitle' => esc_html__( 'Controls the color of all heading.', 'funvita' ),
			'active'    => false,
			'default'  => '#0f3057',
			'output'   => array('h1, h2, h3, h4, h5, h6')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Link Color', 'funvita' ),
			'subtitle' => esc_html__( 'Controls the color of all text links.', 'funvita' ),
			'active'    => false,
			'default'  => array(
				'regular'  => '#585858',
				'hover'    => '#015dc7'
			),
			'output'   => array('a')
		),
		
	)
) );
