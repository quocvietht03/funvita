<?php
	global $funvita_options;
	$post_title = isset($funvita_options['portfolio_title']) ? $funvita_options['portfolio_title']: true;
	$post_featured = isset($funvita_options['portfolio_featured']) ? $funvita_options['portfolio_featured']: true;
	$post_image_size = isset($funvita_options['portfolio_image_size']) ? $funvita_options['portfolio_image_size']: '';
	$post_meta = isset($funvita_options['portfolio_meta']) ? $funvita_options['portfolio_meta']: true;
	$post_meta_author = isset($funvita_options['portfolio_meta_author']) ? $funvita_options['portfolio_meta_author']: true;
	$post_meta_author_label = isset($funvita_options['portfolio_meta_author_label'])&&$funvita_options['portfolio_meta_author_label'] ? $funvita_options['portfolio_meta_author_label']: esc_html__('By:', 'funvita');
	$post_meta_date = isset($funvita_options['portfolio_meta_date']) ? $funvita_options['portfolio_meta_date']: true;
	$post_meta_date_label = isset($funvita_options['portfolio_meta_date_label'])&&$funvita_options['portfolio_meta_date_label'] ? $funvita_options['portfolio_meta_date_label']: esc_html__('Date:', 'funvita');
	$post_meta_date_format = isset($funvita_options['portfolio_meta_date_format'])&&$funvita_options['portfolio_meta_date_format'] ? $funvita_options['portfolio_meta_date_format']: get_option('date_format');
	$post_meta_category = isset($funvita_options['portfolio_meta_category']) ? $funvita_options['portfolio_meta_category']: true;
	$post_meta_category_label = isset($funvita_options['portfolio_meta_category_label'])&&$funvita_options['portfolio_meta_category_label'] ? $funvita_options['portfolio_meta_category_label']: esc_html__('Category:', 'funvita');
	$post_excerpt = isset($funvita_options['portfolio_excerpt']) ? $funvita_options['portfolio_excerpt']: true;
	$post_excerpt_length = (int) isset($funvita_options['portfolio_excerpt_length']) ? $funvita_options['portfolio_excerpt_length']: 55;
	$post_excerpt_more = isset($funvita_options['portfolio_excerpt_more']) ? $funvita_options['portfolio_excerpt_more']: '[...]';
	$post_readmore = isset($funvita_options['portfolio_readmore']) ? $funvita_options['portfolio_readmore']: true;
	$post_readmore_label = isset($funvita_options['portfolio_readmore_label'])&&$funvita_options['portfolio_readmore_label'] ? $funvita_options['portfolio_readmore_label']: esc_html__('Read More', 'funvita');
	
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'portfolio_options'):array();
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media">
				<?php echo funvita_post_featured_render($post_image_size); ?>
			</div>
		<?php } ?>
		
		<?php if($post_meta){ ?>
			<ul class="bt-meta">
				<?php if($post_meta_author){ ?>
					<li><?php echo '<i class="fa fa-user"></i> '.esc_html__('by ', 'funvita'); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></li>
				<?php } ?>
				<?php if($post_meta_date){ ?>
					<li><?php echo '<i class="fa fa-calendar"></i> '.esc_html__('on ', 'funvita'); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_date(get_option('date_format')); ?></a></li>
				<?php } ?>
				<?php if($post_meta_category){ ?>
					<?php the_terms( get_the_ID(), 'fw-portfolio-category', '<li class="bt-term"><i class="fa fa-folder"></i> '.esc_html__('in ', 'funvita'), ', ', '</li>' ); ?>
				<?php } ?>
			</ul>
		<?php } ?>
		
		<?php if($post_excerpt){ ?>
			<div class="bt-excerpt">
				<?php echo wp_trim_words(get_the_excerpt(), $post_excerpt_length, $post_excerpt_more); ?>
			</div>
		<?php } ?>
		
		<?php if($post_readmore){ ?>
			<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo esc_html($post_readmore_label); ?></a>
		<?php } ?>
		
	</div>
</article>
