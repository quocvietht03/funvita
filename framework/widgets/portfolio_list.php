<?php
class funvita_Portfolio_List_Widget extends funvita_Widget {
	function __construct() {
		parent::__construct(
			'funvita_portfolio_list', // Base ID
			esc_html__('Portfolio List', 'funvita'), // Name
			array('description' => esc_html__('Display a list of your posts on your site.', 'funvita'),) // Args
        );
		
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => esc_html__( 'Portfolio List', 'funvita' ),
				'label' => esc_html__( 'Title', 'funvita' )
			),
			'fw-portfolio-category' => array(
				'type'   => 'funvita_taxonomy',
				'std'    => '',
				'label'  => esc_html__( 'Categories', 'funvita' ),
			),
			'posts_per_page' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 3,
				'label' => esc_html__( 'Number of posts to show', 'funvita' )
			),
			'orderby' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Order by', 'funvita' ),
				'options' => array(
					'none'   => esc_html__( 'None', 'funvita' ),
					'comment_count'  => esc_html__( 'Comment Count', 'funvita' ),
					'title'  => esc_html__( 'Title', 'funvita' ),
					'date'   => esc_html__( 'Date', 'funvita' ),
					'ID'  => esc_html__( 'ID', 'funvita' ),
				)
			),
			'order' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => esc_html__( 'Order', 'funvita' ),
				'options' => array(
					'none'  => esc_html__( 'None', 'funvita' ),
					'asc'  => esc_html__( 'ASC', 'funvita' ),
					'desc' => esc_html__( 'DESC', 'funvita' ),
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
		
		global $portfolio;
		extract( $args );
        
		$title                  = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$category               = isset($instance['category'])? $instance['category'] : '';
		$posts_per_page         = absint( $instance['posts_per_page'] );
		$orderby                = sanitize_title( $instance['orderby'] );
		$order                  = sanitize_title( $instance['order'] );
		$el_class               = sanitize_title( $instance['el_class'] );
        
		$query_args = array(
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'fw-portfolio',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$category = array();
			foreach ((array) $cats as $cat) :
			$category[] = trim($cat);
			endforeach;
			$query_args['tax_query'] = array(
									array(
										'taxonomy' => 'fw-portfolio-category',
										'field' => 'slug',
										'terms' => $category
									)
							);
		}
		
		$wp_query = new WP_Query($query_args);                
		
		ob_start();
		
		echo apply_filters('bt_before_widget_filter', $before_widget);

		echo !empty($title) ? $before_title . $title . $after_title : ''; 
		
		if ($wp_query->have_posts()){
			?>
			<ul class="bt-portfolio-list">
				<?php while ($wp_query->have_posts()){ $wp_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><span></span></a>
						<?php if( has_post_thumbnail() ) the_post_thumbnail( 'thumbnail' ); ?>
					</li>
				<?php } ?>
			</ul>
		<?php 
		}
		
		wp_reset_postdata();

		echo apply_filters('bt_after_widget_filter', $after_widget);
		echo ob_get_clean();
		
	}
}
/* Class funvita_Portfolio_List_Widget */
function funvita_portfolio_list_widget() {
    register_widget('funvita_Portfolio_List_Widget');
}

add_action('widgets_init', 'funvita_portfolio_list_widget');
