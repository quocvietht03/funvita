<?php
global $funvita_options;
$post_title = isset($funvita_options['single_services_title']) ? $funvita_options['single_services_title']: true;
$post_featured = isset($funvita_options['single_services_featured']) ? $funvita_options['single_services_featured']: true;
$post_image_size = isset($funvita_options['single_services_image_size']) ? $funvita_options['single_services_image_size']: '';
$post_meta = isset($funvita_options['single_services_meta']) ? $funvita_options['single_services_meta']: true;
$post_content = isset($funvita_options['single_services_content']) ? $funvita_options['single_services_content']: true;

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
		<?php if($post_meta) the_terms( get_the_ID(), 'bt_services_category', '<div class="bt-term">', ', ', '</div>' ); ?>
		<?php if($post_title){ ?>
			<h3 class="bt-title"><?php the_title(); ?></h3>
		<?php } ?>
		<?php if($post_content){ ?>
			<div class="bt-content"><?php the_content(); ?></div>
		<?php } ?>
	</div>
</article>