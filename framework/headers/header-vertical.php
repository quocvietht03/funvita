<?php 
	global $funvita_options;
	
?>
<div class="bt-menu-toggle"></div>
<header id="bt_header" class="bt-header bt-header-vertical">
	
	<div class="bt-header-inner">
		<div class="bt-logo">
			<?php
				$logo = isset($funvita_options['hvertical_logo']['url'])?$funvita_options['hvertical_logo']['url']:'';
				
				$logo_height = (isset($funvita_options['hvertical_logo_height'])&&$funvita_options['hvertical_logo_height'])?$funvita_options['hvertical_logo_height']:'24';
				
				funvita_logo($logo, $logo_height); 
			?>
		</div>
		
		<div class="bt-vertical-menu-wrap">
			<?php
				$menu_assign = isset($funvita_options['hvertical_menu_assign'])&&($funvita_options['hvertical_menu_assign'] != 'auto')?$funvita_options['hvertical_menu_assign']:'';
				funvita_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
			?>
		</div>
		
		<div class="bt-sidebar">
			<?php
				if(isset($funvita_options['hvertical_content_bottom_element'])&&$funvita_options['hvertical_content_bottom_element']&&isset($funvita_options['hvertical_content_bottom_element'])&&$funvita_options['hvertical_content_bottom_element']){
					echo '<div class="bt-menu-content-right">';
						foreach($funvita_options['hvertical_content_bottom_element'] as $sidebar_id){
							dynamic_sidebar( $sidebar_id );
						}
					echo '</div>'; 
				}
			?>
		</div>
		
	</div>
		
</header>