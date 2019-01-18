<header id="bt_header" class="bt-header bt-header-default">
	<div class="bt-header-desktop">
		<div class="bt-subheader">
			<div class="bt-subheader-inner container">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php funvita_logo(get_template_directory_uri() . '/assets/images/logo.png', '50'); ?>
					</div>
				</div>
				<?php if(has_nav_menu('main_navigation')){ ?>
					<div class="bt-subheader-cell bt-right">
						<div class="bt-content text-right">
							<?php funvita_nav_menu('', 'main_navigation', 'bt-menu-desktop text-left'); ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="bt-header-mobile">
		<div class="bt-subheader">
			<div class="bt-subheader-inner container">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<?php funvita_logo(get_template_directory_uri() . '/assets/images/logo.png', '50'); ?>
					</div>
				</div>
				<?php if(has_nav_menu('mobile_navigation')){ ?>
					<div class="bt-subheader-cell bt-right">
						<div class="bt-content text-right">
							<div class="bt-menu-toggle">
								<div class="bt-toggle-content"></div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php if(has_nav_menu('mobile_navigation')){ ?>
			<div class="bt-menu-mobile-wrap">
				<div class="container">
					<?php funvita_nav_menu('', 'mobile_navigation', 'bt-menu-mobile'); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</header>
