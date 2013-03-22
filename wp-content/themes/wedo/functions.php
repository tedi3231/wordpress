<?php
    
function wedo_test(){
	return 'wedo';
}

function formaturlwithlanguage($url)
{
	$rooturl = site_url();

	if( strpos($rooturl,'/')){
		$url = $rooturl . $url;
	}
	else{
		$url = $rooturl . '/' . $url;
	}

	if( function_exists('qtrans_getLanguage')){
		$lang = qtrans_getLanguage();
		if(strrpos($url,'/') == (strlen($url)-1))
			$url = $url . '?lang=' . $lang;
		else
			$url = $url . '&lang=' . $lang;
	}


	echo $url;
}

/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'wedo_setup' );

if ( ! function_exists( 'wedo_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyten_setup() in a child theme, add your own twentyten_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails, custom headers and backgrounds, and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function wedo_setup() {
	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'wedo', get_template_directory() . '/languages' );

   	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'wedo' ),
	) );

	add_filter('wp_nav_menu_objects', 'wp_nav_menu_objects_tip');
	function wp_nav_menu_objects_tip($menu_items) {
   		//print_r($menu_items); if you need to see them
   		if (function_exists('qtrans_getLanguage')) {
      		foreach ($menu_items as &$item) {
	      		//home menu url with language
	      		if(!strpos($item->url,'&lang=') && !strpos($item->url,'/?lang=') ){
	      			$lang = qtrans_getLanguage();
	      			if( strpos($item->url,'/?') ){
	      				$item->url = $item->url . '&lang=' .$lang;
	      			}else{
	      				$item->url = $item->url . '?lang='.$lang;
	      			}
	      		}
      	}
    	return $menu_items;
    	}
	}
}
endif;
?>
