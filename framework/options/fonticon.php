<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Font Icons', 'funvita' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Awesome', 'funvita' ),
			'subtitle' => esc_html__( 'Use font awesome.', 'funvita' ),
			'default'  => true,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Pe Icon 7 Stroke', 'funvita' ),
			'subtitle' => esc_html__( 'Use font pe icon 7 stroke.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'       => 'font_themify_icon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Themify Icon', 'funvita' ),
			'subtitle' => esc_html__( 'Use font themify icon.', 'funvita' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Flaticon', 'funvita' ),
			'subtitle' => esc_html__( 'Use font flaticon.', 'funvita' ),
			'default'  => false,
		),
	)
) );
