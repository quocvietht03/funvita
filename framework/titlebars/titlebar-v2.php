<?php
	global $funvita_options;
	$fullwidth = isset($funvita_options['titlebar_fullwidth'])&&$funvita_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
?>
<div class="bt-titlebar bt-titlebar-v2">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<div class="bt-page-title">
							<?php
								if(isset($funvita_options['titlebar_page_title_before'])&&$funvita_options['titlebar_page_title_before']&&isset($funvita_options['titlebar_page_title_before_content'])&&$funvita_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$funvita_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo funvita_page_title(); ?></h2>
							<?php
								if(isset($funvita_options['titlebar_page_title_after'])&&$funvita_options['titlebar_page_title_after']&&isset($funvita_options['titlebar_page_title_after_content'])&&$funvita_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$funvita_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<div class="bt-breadcrumb">
							<?php
								if(isset($funvita_options['titlebar_breadcrumb_before'])&&$funvita_options['titlebar_breadcrumb_before']&&isset($funvita_options['titlebar_breadcrumb_before_content'])&&$funvita_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$funvita_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($funvita_options['titlebar_breadcrumb_home_text'])&&$funvita_options['titlebar_breadcrumb_home_text'])?$funvita_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($funvita_options['titlebar_breadcrumb_delimiter'])&&$funvita_options['titlebar_breadcrumb_delimiter'])?$funvita_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo funvita_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($funvita_options['titlebar_breadcrumb_after'])&&$funvita_options['titlebar_breadcrumb_after']&&isset($funvita_options['titlebar_breadcrumb_after_content'])&&$funvita_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$funvita_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>