<?php
// Team
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Team', 'funvita' ),
	'id'               => 'bt_team',
	'icon'             => 'el el-user',
	'fields'           => array(
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Team', 'funvita' ),
	'id'               => 'bt_single_team',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_team_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'funvita' ),
			'default'  => false
		),
		array(
			'id'       => 'single_team_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'funvita' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'funvita' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('single_team_fullwidth' , '=', '1'),
			'output'    => array('.single-team .bt-main-content')
		),
		array(
			'id'            => 'single_team_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'funvita' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'funvita' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'single_team_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_team_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'funvita' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'funvita' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('single_team_titlebar' , '=', '1'),
			'output'    => array('.single-team .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_team_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'funvita' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'funvita' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.single-team .bt-main-content')
		),
		array(
			'id'    => 'single_team_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'funvita' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'funvita' )
		),
		array(
			'id'       => 'single_team_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'funvita' ),
			'default'  => false
		),
		array(
			'id'       => 'single_team_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'funvita' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'funvita' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '28px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_team_title' , '=', '1'),
			'output'   => array('.single-bt_team .bt_team .bt-title')
		),
	)
) );
