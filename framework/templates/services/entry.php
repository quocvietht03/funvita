<?php
	global $funvita_options;
	$post_title = isset($funvita_options['services_title']) ? $funvita_options['services_title']: true;
	$post_featured = isset($funvita_options['services_featured']) ? $funvita_options['services_featured']: true;
	$post_image_size = isset($funvita_options['services_image_size']) ? $funvita_options['services_image_size']: '';
	$post_meta = isset($funvita_options['services_meta']) ? $funvita_options['services_meta']: true;
	$post_excerpt = isset($funvita_options['services_excerpt']) ? $funvita_options['services_excerpt']: true;
	$post_excerpt_length = (int) isset($funvita_options['services_excerpt_length']) ? $funvita_options['services_excerpt_length']: 55;
	$post_excerpt_more = isset($funvita_options['services_excerpt_more']) ? $funvita_options['services_excerpt_more']: '[...]';
	$post_readmore = isset($funvita_options['services_readmore']) ? $funvita_options['services_readmore']: true;
	$post_readmore_label = isset($funvita_options['services_readmore_label'])&&$funvita_options['services_readmore_label'] ? $funvita_options['services_readmore_label']: esc_html__('Read More', 'funvita');
	
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'services_options'):array();

	$icon_font = isset($post_options['icon_font'])?$post_options['icon_font']:'';
	$icon_image = isset($post_options['icon_image'])?$post_options['icon_image']:'';
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<?php if($post_featured && has_post_thumbnail()){ ?>
			<div class="bt-media">
				<?php echo funvita_post_featured_render($post_image_size); ?>
			</div>
		<?php } ?>
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
