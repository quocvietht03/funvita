<?php
/*
Template Name: Coming Soon Template
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<?php do_action('funvita_add_content_before_header'); ?>
	<div id="bt_main_wrap" class="bt-main-wrap">
		<div class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				
			<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- #wrap -->
	<?php wp_footer(); ?>
</body>