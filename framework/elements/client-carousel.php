<?php
class WPBakeryShortCode_bt_client_carousel extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'layout' => 'default',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'rows' => 1,
			'items' => '',
			'margin' => '',
			'outer_visible' => '',
			'loop' => '',
			'autoplay' => '',
			'autoplayhoverpause' => '',
			'smartspeed' => '',
			'nav' => '',
			'dots' => '',
			
			'items_md' => '',
			'items_sm' => '',
			'items_xs' => '',
			'nav_xs' => '',
			'dots_xs' => '',
			
			'css' => ''
			
		), $atts));
		
		global $funvita_options;
		$nav_dots = (isset($funvita_options['nav_dots_style'])&&$funvita_options['nav_dots_style'])?'nav-dots-style'.$funvita_options['nav_dots_style']:'nav-dots-style0';
		
		$space_class = ( ! empty( $margin ) ) ? 'space'.$margin : 'space0'; 
		$outer_class = ( ! empty( $outer_visible ) ) ? 'bt-outer-visible' : 'bt-outer-hidden';
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-client-carousel-element',
			$layout,
			$nav_dots,
			$space_class,
			$outer_class,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Owl */
		$owl_attributes = array();
		$owl_attributes['items'] = ( ! empty( $items ) ) ? $items : 4;
		$owl_attributes['margin'] = ( ! empty( $margin ) ) ? (int)$margin : 0;
		$owl_attributes['loop'] = ( ! empty( $loop ) ) ? true : false;
		$owl_attributes['autoplay'] = ( ! empty( $autoplay ) ) ? true : false;
		$owl_attributes['autoplayHoverPause'] = ( ! empty( $autoplayhoverpause ) ) ? true : false;
		$owl_attributes['smartSpeed'] = ( ! empty( $smartspeed ) ) ? (int)$smartspeed : 500;
		$owl_attributes['nav'] = ( ! empty( $nav ) ) ? true : false;
		if ( ! empty( $nav ) ) $owl_attributes['navText'] = array('<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>');
		$owl_attributes['dots']= ( ! empty( $dots ) ) ? true : false;
		
		if($items != 1){
			$items_md = ( ! empty( $items_md ) ) ? $items_md : 3;
			$items_sm = ( ! empty( $items_sm ) ) ? $items_sm : 2;
			$items_xs = ( ! empty( $items_xs ) ) ? $items_xs : 1;
		}else{
			$items_md = $items_sm = $items_xs = 1;
		}
		
		if(! empty( $nav )){
			$nav_xs = ( ! empty( $nav_xs ) ) ? false : true;
		}else{
			$nav_xs = false;
		}
		
		if(! empty( $dots )){
			$dots_xs = ( ! empty( $dots_xs ) ) ? false : true;
		}else{
			$dots_xs = false;
		}
		
		$owl_attributes['responsive'] = array(
			1200 => array(
				'items' => $items
			),
			992 => array(
				'items' => $items_md
			),
			768 => array(
				'items' => $items_sm
			),
			0 => array(
				'items' => $items_xs,
				'nav' => $nav_xs,
				'dots' => $dots_xs
			),
		);
		
		$owl_json = json_encode($owl_attributes);
		
		/* Data */
		$client_logo = vc_param_group_parse_atts( $atts['client_logo'] );
		
		$custom_script = "jQuery(document).ready(function($) {
							if ($('.bt-client-carousel-element .owl-carousel').length) {
								$('.bt-client-carousel-element .owl-carousel').each(function() {
									$(this).owlCarousel($(this).data('owl'));
								});
							}
						});";
		
		wp_add_inline_script( 'funvita-main', $custom_script );
		wp_enqueue_script('owl-carousel');
		wp_enqueue_style('owl-carousel');
		
		ob_start();
		
		if(!empty($client_logo)){
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>">
				<div class="owl-carousel" data-owl="<?php echo esc_attr($owl_json); ?>">
					<?php
						if($rows == 1){
							foreach($client_logo as $logo){
								/* Link */
								$link = isset($logo['link'])?vc_build_link( $logo['link'] ):array();
								$link_attributes = array();
								$link_attributes[] = 'class="bt-link"';
								if(!empty($link)){
									if ( ! empty( $link['url'] ) ) {
										$link_attributes[] = 'href="' . esc_attr( $link['url'] ) . '"';
									}
									
									if ( ! empty( $link['target'] ) ) {
										$link_attributes[] = 'target="' . esc_attr( $link['target'] ) . '"';
									}
									
									if ( ! empty( $link['rel'] ) ) {
										$link_attributes[] = 'rel="' . esc_attr( $link['rel'] ) . '"';
									}
									
									if ( ! empty( $link['title'] ) ) {
										$link_attributes[] = 'title="'.esc_attr($link['title']).'"';
									}
								}
								
								/* Logo */
								$attachment_image = wp_get_attachment_image_src($logo['logo'], 'full', false);
								$logo_img = $attachment_image[0]?'<img src="'.esc_url($attachment_image[0]).'" alt="'.esc_attr($logo['name']).'"/>':'';
								
								if($logo_img){
									echo '<div class="bt-item">
										<a '.implode(' ', $link_attributes).'>'.$logo_img.'</a>
									</div>';
								}
							}
						}else{
							$client_logo_count = count($client_logo);
							$count = 0;
							
							foreach($client_logo as $logo){
								/* Link */
								$link = isset($logo['link'])?vc_build_link( $logo['link'] ):array();
								$link_before = $link_after = '';
								$link_attributes = array();
								$link_attributes[] = 'class="bt-link"';
								if(!empty($link)){
									if ( ! empty( $link['url'] ) ) {
										$link_attributes[] = 'href="' . esc_attr( $link['url'] ) . '"';
									}
									
									if ( ! empty( $link['target'] ) ) {
										$link_attributes[] = 'target="' . esc_attr( $link['target'] ) . '"';
									}
									
									if ( ! empty( $link['rel'] ) ) {
										$link_attributes[] = 'rel="' . esc_attr( $link['rel'] ) . '"';
									}
									
									if ( ! empty( $link['title'] ) ) {
										$link_attributes[] = 'title="'.esc_attr($link['title']).'"';
									}
									$link_before = '<a '.implode(' ', $link_attributes).'>';
									$link_after = '</a>';
								}
								
								/* Logo */
								$attachment_image = wp_get_attachment_image_src($logo['logo'], 'full', false);
								$logo_img = $attachment_image[0]?'<img src="'.esc_url($attachment_image[0]).'" alt="'.esc_attr($logo['name']).'"/>':'';
								
								if($count == 0 || $count%$rows == 0) echo '<div class="bt-items">';
									if($logo_img){
										echo '<div class="bt-item">'.$link_before.$logo_img.$link_after.'</div>';
									}
									$count++;
								if($count == $client_logo_count || $count%$rows == 0) echo '</div>';
							}
						}
					?>
				</div>
			</div>
		<?php
		}
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Client Carousel', 'funvita'),
	'base' => 'bt_client_carousel',
	'category' => esc_html__('BT Elements', 'funvita'),
	'icon' => 'bt-icon',
    'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Layout', 'funvita'),
			'param_name' => 'layout',
			'value' => array(
				esc_html__('Default', 'funvita') => 'default'
			),
			'admin_label' => true,
			'description' => esc_html__('Select layout of items display in this element.', 'funvita')
		),
		vc_map_add_css_animation(),
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
			'type' => 'param_group',
			'heading' => esc_html__('Client Logo', 'funvita'),
			'param_name' => 'client_logo',
			'value' => '',
			'group' => esc_html__('Data Setting', 'funvita'),
			'description' => esc_html__('Please, select logo for option - client_logo.', 'funvita'),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Name',
					'param_name' => 'name',
					'value' => 'Logo name',
					'description' => esc_html__('Enter text used as name of logo.', 'funvita'),
					'admin_label' => true,
				),
				array(
					'type' => 'attach_image',
					'heading' => esc_html__('Logo', 'funvita'),
					'param_name' => 'logo',
					'value' => '',
					'description' => esc_html__('Select client logo in this element.', 'funvita')
				),
				array(
					'type' => 'vc_link',
					'heading' => esc_html__('URL (Link)', 'funvita'),
					'param_name' => 'link',
					'description' => esc_html__('Add link of logo in this element.', 'funvita')
				),
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items', 'funvita'),
			'param_name' => 'rows',
			'value' => array(
				esc_html__('1 Row', 'funvita') => 1,
				esc_html__('2 Rows', 'funvita') => 2,
				esc_html__('3 Rows', 'funvita') => 3
				
			),
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('The number of rows you want to see on the screen.', 'funvita')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items', 'funvita'),
			'param_name' => 'items',
			'value' => array(
				esc_html__('6 Items', 'funvita') => 6,
				esc_html__('5 Items', 'funvita') => 5,
				esc_html__('4 Items', 'funvita') => 4,
				esc_html__('3 Items', 'funvita') => 3,
				esc_html__('2 Items', 'funvita') => 2,
				esc_html__('1 Item', 'funvita') => 1
			),
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('The number of items you want to see on the screen.', 'funvita')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Margin', 'funvita'),
			'param_name' => 'margin',
			'value' => array(
				esc_html__('0px', 'funvita') => 0,
				esc_html__('10px', 'funvita') => 10,
				esc_html__('20px', 'funvita') => 20,
				esc_html__('30px', 'funvita') => 30
			),
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('Margin-right(px) on item.', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Outer Visible', 'funvita'),
			'param_name' => 'outer_visible',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('visible on the outer stage.', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Loop', 'funvita'),
			'param_name' => 'loop',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('Infinity loop. Duplicate last and first items to get loop illusion.', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Autoplay.', 'funvita'),
			'param_name' => 'autoplay',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('Autoplay.', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('AutoplayHoverPause', 'funvita'),
			'param_name' => 'autoplayhoverpause',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('Pause on mouse hover.', 'funvita')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('SmartSpeed', 'funvita'),
			'param_name' => 'smartspeed',
			'value' => 500,
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__( 'Speed Calculate.', 'funvita' )
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Nav', 'funvita'),
			'param_name' => 'nav',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('Show next/prev buttons.', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Dots', 'funvita'),
			'param_name' => 'dots',
			'value' => '',
			'group' => esc_html__('Owl Setting', 'funvita'),
			'description' => esc_html__('Show dots navigation.', 'funvita')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items Medium Screen', 'funvita'),
			'param_name' => 'items_md',
			'value' => array(
				esc_html__('Auto', 'funvita') => '',
				esc_html__('6 Items', 'funvita') => 6,
				esc_html__('5 Items', 'funvita') => 5,
				esc_html__('4 Items', 'funvita') => 4,
				esc_html__('3 Items', 'funvita') => 3,
				esc_html__('2 Items', 'funvita') => 2,
				esc_html__('1 Item', 'funvita') => 1
			),
			'group' => esc_html__('Responsive', 'funvita'),
			'description' => esc_html__('The number of items you want to see on the screen(>=992px and <1199px).', 'funvita')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items Small Screen', 'funvita'),
			'param_name' => 'items_sm',
			'value' => array(
				esc_html__('Auto', 'funvita') => '',
				esc_html__('4 Items', 'funvita') => 4,
				esc_html__('3 Items', 'funvita') => 3,
				esc_html__('2 Items', 'funvita') => 2,
				esc_html__('1 Item', 'funvita') => 1
			),
			'group' => esc_html__('Responsive', 'funvita'),
			'description' => esc_html__('The number of items you want to see on the screen(>=768px and <992px).', 'funvita')
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Items Extra Screen', 'funvita'),
			'param_name' => 'items_xs',
			'value' => array(
				esc_html__('Auto', 'funvita') => '',
				esc_html__('4 Items', 'funvita') => 4,
				esc_html__('3 Items', 'funvita') => 3,
				esc_html__('2 Items', 'funvita') => 2,
				esc_html__('1 Item', 'funvita') => 1
			),
			'group' => esc_html__('Responsive', 'funvita'),
			'description' => esc_html__('The number of items you want to see on the screen(<768px).', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Disable Nav On Extra Screen', 'funvita'),
			'param_name' => 'nav_xs',
			'value' => '',
			'group' => esc_html__('Responsive', 'funvita'),
			'description' => esc_html__('Disable next/prev buttons on the screen(<768px).', 'funvita')
		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Disable Dots On Extra Screen', 'funvita'),
			'param_name' => 'dots_xs',
			'value' => '',
			'group' => esc_html__('Responsive', 'funvita'),
			'description' => esc_html__('Disable dots navigation on the screen(<768px).', 'funvita')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__('CSS box', 'funvita'),
			'param_name' => 'css',
			'group' => esc_html__('Design Options', 'funvita'),
		)
	)
));
