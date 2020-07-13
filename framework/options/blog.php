<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Archive Blog', 'funvita' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
		array(
			'id'       => 'blog_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'funvita' ),
			'default'  => false
		),
		array(
			'id'       => 'blog_fullwidth_space',
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
			'required' 		=> array('blog_fullwidth' , '=', '1'),
			'output'    => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'            => 'blog_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Columns', 'funvita' ),
			'subtitle'      => esc_html__( 'Controls the number columns of list items.', 'funvita' ),
			'default'       => 1,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text'
		),
		array(
			'id'            => 'blog_sidebar_width',
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
			'id'       => 'blog_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'funvita' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'funvita' ),
			'default'  => array(
				'background-color' => '#0f3057',
			),
			'required' 	=> array('blog_titlebar' , '=', '1'),
			'output'    => array('.category .bt-titlebar .bt-titlebar-inner, .tag .bt-titlebar .bt-titlebar-inner, .search .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'blog_content_sapce',
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
			'output'   => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'    => 'blog_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'funvita' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'funvita' )
		),
		array(
			'id'       => 'post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'funvita' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'funvita' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '38px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'funvita' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'funvita' ),
			'default'  => 'full',
			'required' 		=> array('post_featured' , '=', '1')
		),
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'post_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'funvita' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'funvita' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li, .tag .bt-post-item .bt-meta > li, .search .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'post_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'funvita' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'funvita' ),
			'default'  => '55',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'funvita' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'funvita' ),
			'default'  => '[...]',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'post_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'funvita' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'funvita' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_readmore' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-readmore, .tag .bt-post-item .bt-readmore, .search .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'post_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'funvita' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'funvita' ),
			'default'  => esc_html__( 'Read More', 'funvita' ),
			'required' 		=> array('post_readmore' , '=', '1'),
		),
		array(
			'id'       => 'blog_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'funvita' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'funvita' ),
			'default'  => array(
				'margin-bottom' => '40px'
			),
			'output'    => array('.category .bt-post-item, .tag .bt-post-item, .search .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Post', 'funvita' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'post_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'funvita' ),
			'default'  => false
		),
		array(
			'id'       => 'post_fullwidth_space',
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
			'required' 		=> array('post_fullwidth' , '=', '1'),
			'output'    => array('.single-post .bt-main-content')
		),
		array(
			'id'            => 'post_sidebar_width',
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
			'id'       => 'post_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'post_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'funvita' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'funvita' ),
			'default'  => array(
				'background-color' => '#0f3057',
			),
			'required' 	=> array('post_titlebar' , '=', '1'),
			'output'    => array('.single-post .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'post_content_sapce',
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
			'output'   => array('.single-post .bt-main-content')
		),
		array(
			'id'       => 'single_post_navigation',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Navigation', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the post navigation.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Author', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the author.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Comment', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the comment.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'    => 'single_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'funvita' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'funvita' )
		),
		array(
			'id'       => 'single_post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'funvita' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'funvita' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'funvita' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '28px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'funvita' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'funvita' ),
			'default'  => 'full',
			'required' 		=> array('single_post_featured' , '=', '1')
		),
		array(
			'id'       => 'single_post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'funvita' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'funvita' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'single_post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_tag',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Tags', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the tags.', 'funvita' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_tag_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Tags Label', 'funvita' ),
			'subtitle' => esc_html__( 'Please, Enter label of the tags. Leave empty to use "Tags:" label.', 'funvita' ),
			'default'  => esc_html__( 'Tags:', 'funvita' ),
			'required' 		=> array('single_post_tag' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'funvita' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_share_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Share Label', 'funvita' ),
			'subtitle' => esc_html__( 'Please, Enter label of the share. Leave empty to use "Share:" label.', 'funvita' ),
			'default'  => esc_html__( 'Share:', 'funvita' ),
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__( 'Facebook', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the facebook share.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Twitter', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the twitter share.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_google_plus',
			'type'     => 'switch',
			'title'    => esc_html__( 'Google Plus', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the google plus share.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__( 'Linkedin', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the linkedin share.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__( 'Pinterest', 'funvita' ),
			'subtitle' => esc_html__( 'Turn on to show the pinterest share.', 'funvita' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'funvita' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'funvita' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-post .bt-post-item')
		),
		
	)
) );
