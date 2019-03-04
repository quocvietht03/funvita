<?php
class WPBakeryShortCode_bt_countdown extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'style' => 'default',
			'date_end' => '2018/12/1 0:0:0',
			'format' => 'ODHMS',
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-countdown-element',
			$style,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		$custom_script = "jQuery(document).ready(function($) {
							$('.bt-countdown-element').each(function() {
								var countdownTime = $(this).attr('data-countdown');
								var countdownFormat = $(this).attr('data-format');
								$(this).countdown({
									until: countdownTime,
									format: countdownFormat,
									padZeroes: true
								});
							});
						});";
		
		wp_add_inline_script( 'funvita-main', $custom_script );
		wp_enqueue_script('plugin');
		wp_enqueue_script('countdown');
		
		$current_date = current_time('Y/m/d H:i:s');
		$count_date = strtotime($date_end) - strtotime($current_date);
		
		$months = 0;
		if($format == 'ODHMS') {
			$months = floor($count_date/(30*24*3600));
			$count_date = $count_date%(30*24*3600);
		}
		
		$days = floor($count_date/(24*3600));
		$count_date = $count_date%(24*3600);
		
		$hours = floor($count_date/(3600));
		$count_date = $count_date%(3600);
		
		$minutes = floor($count_date/(60));
		$seconds = $count_date%(60);
		
		$until = '+'.$months.'o +'.$days.'d +'.$hours.'h +'.$minutes.'m +'.$seconds.'s';
		
		ob_start();
		?>
			<div data-countdown="<?php echo esc_attr($until); ?>" data-format="<?php echo esc_attr($format); ?>" class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>></div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Countdown', 'funvita'),
	'base' => 'bt_countdown',
	'category' => esc_html__('BT Elements', 'funvita'),
	'icon' => 'bt-icon',
    'params' => array(
		vc_map_add_css_animation(),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Style', 'funvita'),
			'param_name' => 'style',
			'value' => array(
				esc_html__('Default', 'funvita') => 'default',
				esc_html__('Style 1', 'funvita') => 'style1'
			),
			'description' => esc_html__('Select layout style in this elment.', 'funvita')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Element ID', 'funvita'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__('Enter element ID (Note: make sure it is unique and valid).', 'funvita')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Extra Class', 'funvita'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'funvita')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__('Date End', 'funvita'),
			"param_name" => "date_end",
			"value" => "",
			'group' => esc_html__('Date Setting', 'funvita'),
			"description" => esc_html__('Please, Enter date end in this element. Ex: 2018/12/1 0:0:0', 'funvita')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__('Format', 'funvita'),
			"param_name" => "format",
			"value" => "",
			'group' => esc_html__('Date Setting', 'funvita'),
			"description" => esc_html__('Please, Enter format in this element. Ex: ODHMS or DHMS', 'funvita')
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'funvita' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'funvita' ),
		)
	)
));
