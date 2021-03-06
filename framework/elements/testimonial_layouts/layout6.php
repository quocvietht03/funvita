<?php
$testimonial_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'testimonial_options'):array();

$positon = isset($testimonial_options['position'])?$testimonial_options['position']:'';

?>

<div class="bt-item">
	<div class="bt-thumb">
		<?php
			$thumb_size = (!empty($img_size))?$img_size:'thumbnail'; 
			$thumbnail = wpb_getImageBySize( array(
				'post_id' => get_the_ID(),
				'attach_id' => null,
				'thumb_size' => $thumb_size,
				'class' => ''
			) );
			echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
		?>
	</div>
	<h3 class="bt-title"><?php the_title(); ?></h3>
	<?php if($positon) echo '<div class="bt-position">'.$positon.'</div>'; ?>
	<div class="bt-desc"><?php echo wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more); ?></div>
</div>
