<?php get_header(); ?>
<?php
global $funvita_options;
$fullwidth = isset($funvita_options['blog_fullwidth'])&&$funvita_options['blog_fullwidth'] ? 'fullwidth': 'container';
$sidebar_width = (int) isset($funvita_options['blog_sidebar_width']) ?  $funvita_options['blog_sidebar_width']: 3;
$sidebar_width_md = $sidebar_width + 1;

$sidebar_class = 'col-md-'.$sidebar_width_md.' col-lg-'.$sidebar_width;
$content_class = 'col-md-12';
if ( is_active_sidebar( 'main-sidebar' ) ) {
	$content_class = 'col-md-'.(12 - $sidebar_width_md).' col-lg-'.(12 - $sidebar_width);
}

funvita_titlebar();
?>
	<div class="bt-main-content">
		<div class="<?php echo esc_attr($fullwidth); ?>">
			<div class="row">
				<div class="bt-content <?php echo esc_attr($content_class); ?>">
					<?php
					if( have_posts() ) {
						while ( have_posts() ) : the_post();
							get_template_part( 'framework/templates/blog/entry');
						endwhile;
						
						funvita_paging_nav();
					}else{
						get_template_part( 'framework/templates/entry', 'none');
					}
					?>
				</div>
				<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
					<div class="bt-sidebar bt-right-sidebar <?php echo esc_attr($sidebar_class); ?>">
						<div class="bt-sidebar-inner"><?php echo get_sidebar(); ?></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
