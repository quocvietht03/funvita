<?php 
	global $funvita_options;
	$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();
	
	$container_class = (isset($funvita_options['honepage_fullwidth'])&&$funvita_options['honepage_fullwidth'])?'fullwidth':'container';
	if(isset($page_options['header_fullwidth'])&&$page_options['header_fullwidth']){ $container_class = 'container'; }
	
	$header_top = (isset($funvita_options['honepage_header_top'])&&$funvita_options['honepage_header_top'])?$funvita_options['honepage_header_top']:'';
	if(isset($page_options['header_top'])&&$page_options['header_top']){ $header_top = ''; }
	
	$header_class = 'bt-header bt-header-onepage';
	
	if(isset($funvita_options['honepage_header_bottom_absolute'])&&$funvita_options['honepage_header_bottom_absolute']){
		$header_class .= ' bt-absolute';
	}
	
	$menu_assign = isset($funvita_options['honepage_menu_assign'])&&($funvita_options['honepage_menu_assign'] != 'auto')?$funvita_options['honepage_menu_assign']:'';
	if(isset($page_options['header_menu_assign'])&&$page_options['header_menu_assign'] != 'auto'){ $menu_assign = $page_options['header_menu_assign']; }
	
	$header_stick = (isset($funvita_options['honepage_header_stick'])&&$funvita_options['honepage_header_stick'])?$funvita_options['honepage_header_stick']:'';
	if(isset($page_options['header_stick'])&&$page_options['header_stick']){ $header_stick = ''; }
	if($header_stick){
		$header_class .= ' bt-stick';
	}
	
?>
<header id="bt_header" class="<?php echo esc_attr($header_class); ?>">
	<div class="bt-header-desktop">
		<?php if($header_top){ ?>
			<div class="bt-subheader bt-top">
				<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
					<div class="bt-subheader-cell bt-left">
						<div class="bt-content text-left">
							<?php
								if(isset($funvita_options['honepage_header_top_left'])&&$funvita_options['honepage_header_top_left']){
									foreach($funvita_options['honepage_header_top_left'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
					<div class="bt-subheader-cell bt-center">
						<div class="bt-content text-center">
							<?php
								if(isset($funvita_options['honepage_header_top_center'])&&$funvita_options['honepage_header_top_center']){
									foreach($funvita_options['honepage_header_top_center'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
					<div class="bt-subheader-cell bt-right">
						<div class="bt-content text-right">
							<?php
								if(isset($funvita_options['honepage_header_top_right'])&&$funvita_options['honepage_header_top_right']){
									foreach($funvita_options['honepage_header_top_right'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
		<div class="bt-subheader bt-bottom">
			<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo = isset($funvita_options['honepage_logo']['url'])?$funvita_options['honepage_logo']['url']:'';
							if(isset($page_options['header_logo']['url'])&&$page_options['header_logo']['url']){
								$logo = $page_options['header_logo']['url'];
							}
							
							$logo_height = (isset($funvita_options['honepage_logo_height'])&&$funvita_options['honepage_logo_height'])?$funvita_options['honepage_logo_height']:'24';
							if(isset($page_options['header_logo_height'])&&$page_options['header_logo_height']){
								$logo_height = $page_options['header_logo_height'];
							}
							
							funvita_logo($logo, $logo_height); 
							
							if(isset($funvita_options['honepage_menu_align'])&&$funvita_options['honepage_menu_align']=='left') {
								funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-center">
					<div class="bt-content text-center">
						<?php
							if(isset($funvita_options['honepage_menu_align'])&&$funvita_options['honepage_menu_align']=='center') {
								funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($funvita_options['honepage_menu_align'])&&$funvita_options['honepage_menu_align']=='right'||!isset($funvita_options['honepage_menu_align'])) {
								funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
							
							if(isset($funvita_options['honepage_menu_content_right'])&&$funvita_options['honepage_menu_content_right']&&isset($funvita_options['honepage_menu_content_right_element'])&&$funvita_options['honepage_menu_content_right_element']){
								echo '<div class="bt-menu-content-right">';
									foreach($funvita_options['honepage_menu_content_right_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							}
							
							if(isset($funvita_options['honepage_menu_canvas'])&&$funvita_options['honepage_menu_canvas']){
								echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<div class="bt-header-stick">
		
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo_stick = isset($funvita_options['honepage_logo_stick']['url'])?$funvita_options['honepage_logo_stick']['url']:'';
							if(isset($page_options['header_logo_stick']['url'])&&$page_options['header_logo_stick']['url']){
								$logo_stick = $page_options['header_logo_stick']['url'];
							}
							
							$logo_stick_height = isset($funvita_options['honepage_logo_stick_height'])?$funvita_options['honepage_logo_stick_height']:'24';
							if(isset($page_options['header_logo_stick_height'])&&$page_options['header_logo_stick_height']){
								$logo_stick_height = $page_options['header_logo_stick_height'];
							}
							
							funvita_logo($logo_stick, $logo_stick_height); 
							
							if(isset($funvita_options['honepage_menu_align'])&&$funvita_options['honepage_menu_align']=='left') {
								funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-center">
					<div class="bt-content text-center">
						<?php
							if(isset($funvita_options['honepage_menu_align'])&&$funvita_options['honepage_menu_align']=='center') {
								funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($funvita_options['honepage_menu_align'])&&$funvita_options['honepage_menu_align']=='right') {
								funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-desktop text-left');
							}
							
							if(isset($funvita_options['honepage_menu_content_right'])&&$funvita_options['honepage_menu_content_right']&&isset($funvita_options['honepage_menu_content_right_element'])&&$funvita_options['honepage_menu_content_right_element']){
								echo '<div class="bt-menu-content-right">';
									foreach($funvita_options['honepage_menu_content_right_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							}
							
							if(isset($funvita_options['honepage_menu_canvas'])&&$funvita_options['honepage_menu_canvas']){
								echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<div class="bt-header-mobile">
		<?php
			$mobile_header_top = (isset($funvita_options['honepage_mobile_header_top'])&&$funvita_options['honepage_mobile_header_top'])?$funvita_options['honepage_mobile_header_top']:'';
			if(isset($page_options['mobile_header_top'])&&$page_options['mobile_header_top']){ $mobile_header_top = ''; }
			
			if($mobile_header_top){ 
		?>
			<div class="bt-subheader bt-top">
				<div class="bt-subheader-inner container">
					<div class="bt-subheader-cell bt-left">
						<div class="bt-content text-left">
							<?php
								if(isset($funvita_options['honepage_header_top_left'])&&$funvita_options['honepage_header_top_left']){
									foreach($funvita_options['honepage_header_top_left'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
					<div class="bt-subheader-cell bt-center">
						<div class="bt-content text-center">
							<?php
								if(isset($funvita_options['honepage_header_top_center'])&&$funvita_options['honepage_header_top_center']){
									foreach($funvita_options['honepage_header_top_center'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
					<div class="bt-subheader-cell bt-right">
						<div class="bt-content text-right">
							<?php
								if(isset($funvita_options['honepage_header_top_right'])&&$funvita_options['honepage_header_top_right']){
									foreach($funvita_options['honepage_header_top_right'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
		<div class="bt-subheader bt-bottom">
			<div class="bt-subheader-inner container">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php
							$logo_mobile = isset($funvita_options['honepage_logo_mobile']['url'])?$funvita_options['honepage_logo_mobile']['url']:'';
							if(isset($page_options['logo_mobile']['url'])&&$page_options['logo_mobile']['url']){
								$logo_mobile = $page_options['logo_mobile']['url'];
							}
							
							$logo_mobile_height = isset($funvita_options['honepage_logo_mobile_height'])?$funvita_options['honepage_logo_mobile_height']:'24';
							if(isset($page_options['logo_mobile_height'])&&$page_options['logo_mobile_height']){
								$logo_mobile_height = $page_options['logo_mobile_height'];
							}
							
							funvita_logo($logo_mobile, $logo_mobile_height); 
						?>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<?php
							if(isset($funvita_options['honepage_menu_content_right'])&&$funvita_options['honepage_menu_content_right']&&isset($funvita_options['honepage_menu_content_right_element'])&&$funvita_options['honepage_menu_content_right_element']){
								echo '<div class="bt-menu-content-right">';
									foreach($funvita_options['honepage_menu_content_right_element'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								echo '</div>';
							}
							
							if(isset($funvita_options['honepage_menu_canvas'])&&$funvita_options['honepage_menu_canvas']){
								echo '<a href="#" class="bt-menu-canvas-toggle"><i class="fa fa-bars"></i></a>';
							}
						?>
						<div class="bt-menu-toggle">
							<div class="bt-toggle-content"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bt-menu-mobile-wrap">
			<div class="container">
				<?php funvita_nav_menu($menu_assign, 'mobile_navigation', 'bt-menu-mobile'); ?>
			</div>
		</div>
	</div>
</header>
