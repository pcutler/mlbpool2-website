<?php

add_action('login_head', 'bi_custom_login_logo');
 
if ( ! function_exists('bi_custom_login_logo') ) :

	function bi_custom_login_logo() {

		if( bi_get_data('custom_login_logo') !== '' ) {
			$custom_login_logo_css = '';
			$custom_login_logo_css .= '<style type="text/css">';
			$custom_login_logo_css .= 'h1 a {';
			$custom_login_logo_css .= 'background-image:url('. bi_get_data('custom_login_logo') .') !important;width: auto !important;background-size: auto !important;';
			if(bi_get_data('custom_login_logo_height')) {
				$custom_login_logo_css .= 'height: '.bi_get_data('custom_login_logo_height').' !important;';
			}
			$custom_login_logo_css .= '}</style>';
	
			echo $custom_login_logo_css;
		}
	}

endif;