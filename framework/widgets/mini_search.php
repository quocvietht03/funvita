<?php

class funvita_Widget_Mini_Search extends funvita_Widget {
	
	function __construct() {
		parent::__construct(
			'bt_widget_mini_search', // Base ID
			esc_html__('Mini Search', 'funvita'), // Name
			array('description' => esc_html__('Display the mini search in the menu right sidebar.', 'funvita'),) // Args
        );
		
		$this->settings = array(
			'type' => array(
				'type'  => 'select',
				'std'   => 'mini',
				'label' => esc_html__( 'Type', 'funvita' ),
				'options' => array(
					'mini'  => esc_html__( 'Mini', 'funvita' ),
					'popup'  => esc_html__( 'Popup', 'funvita' )
				)
			),
			'el_class'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => esc_html__( 'Extra Class', 'funvita' )
			)
		);
	}
	
	function widget( $args, $instance ) {
		extract($args);
		$type = sanitize_title( $instance['type'] );
		$el_class = sanitize_title( $instance['el_class'] );
		
		$wg_class = 'widget bt-mini-search '.$type;
		
		if(!empty($instance['el_class'])){
			$wg_class .= ' '.$instance['el_class'];
		}
		
		ob_start();
		?>
			<div class="<?php echo esc_attr($wg_class); ?>">
				<a class="bt-toggle-btn" href="#"><i class="fa fa-search"></i></a>
				<?php if($type == 'mini') echo '<div class="bt-search-form">'.get_search_form(false).'</div>'; ?>
			</div>
			
		<?php
		echo ob_get_clean();
	}
}

/**
 * Class funvita_Widget_Mini_Search
 */
function register_funvita_widget_mini_search() {
    register_widget('funvita_Widget_Mini_Search');
}
add_action('widgets_init', 'register_funvita_widget_mini_search');
