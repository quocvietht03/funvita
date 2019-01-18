<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_general' => array(
				'title' => esc_html__('General', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'funvita' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'funvita' ),
						'type'  => 'upload',
					),
				),
			),
			'post_gallery' => array(
				'title' => esc_html__('Gallery', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'funvita' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'funvita' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => esc_html__('Video', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'funvita' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'funvita' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'funvita' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'funvita' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'funvita' ),
						'desc'  => esc_html__( 'Please video caption.', 'funvita' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => esc_html__('Audio', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => esc_html__('Audio Types', 'funvita'),
								'desc' => esc_html__('Choose the audio type.', 'funvita'),
								'value' => 'html5',
								'choices' => array(
									'html5' => esc_html__('HTML5', 'funvita'),
									'embed' => esc_html__('Embed', 'funvita')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => esc_html__('Format', 'funvita'),
									'desc'  => esc_html__('Choose the audio format.', 'funvita'),
									'choices' => array(
										'audio/mpeg' => esc_html__('MP3', 'funvita'),
										'audio/ogg' => esc_html__('Ogg', 'funvita'),
										'audio/wav' => esc_html__('Wav', 'funvita')
									)
								),
								'src' => array(
									'label' => esc_html__('Src', 'funvita'),
									'desc' => esc_html__('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'funvita'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => esc_html__('Embed', 'funvita'),
									'desc' => esc_html__('Please enter embed code(SoundCloud, ...)', 'funvita'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => esc_html__('Quote', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'funvita' ),
						'desc'  => esc_html__( 'Please enter quote.', 'funvita' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => esc_html__('Link', 'funvita'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'funvita' ),
						'desc'  => esc_html__( 'Please enter url.', 'funvita' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
