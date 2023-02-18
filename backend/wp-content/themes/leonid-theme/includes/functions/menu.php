<?php
add_action('after_setup_theme', function () {
	register_nav_menu('headerNav', 'Header navigation');
	register_nav_menu('footerNav', 'Footer navigation');
	register_nav_menu('menuNav', 'Header menu mobile');
	register_nav_menu('socialNav', 'Social menu');
});

function current_url() {
    // Протокол
    $url = ( 'on' == $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
    $url .= $_SERVER['SERVER_NAME'];
  
    // Порт
    $url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : '';
    $url .= $_SERVER['REQUEST_URI'];
    return trailingslashit( $url );
  }

// function wp_nav_custom_menu($menu_name) {
//     $current_url = current_url();

//     // $menu_name = 'nav-primary'; // specify custom menu name $marker="icon-heart"
//     if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
//         $menu = wp_get_nav_menu_object($locations[$menu_name]);
//         $menu_items = wp_get_nav_menu_items($menu->term_id);
    
//         $menu_list = '<nav class="page__nav">' ."\n";
//         foreach ((array) $menu_items as $key => $menu_item) {
            
//             $title = $menu_item->title;
//             $url = $menu_item->url;
            
//             if(urldecode($url) == urldecode($current_url) || $menu_item->object_id == get_queried_object_id()){
//                 $menu_list .= "\t\t\t\t\t". '<a class="page-link active" href="'. $url .'">'. $title .'</a>' ."\n";
//             } else {
//                 $menu_list .= "\t\t\t\t\t". '<a class="page-link" href="'. $url .'">'. $title .'</a>' ."\n";
//             }
//             $menu_list .= '</nav>';
            
//         }
//     } else {
//         // $menu_list = '<!-- no list defined -->';
//     }
//     echo $menu_list;
// }



function wp_nav_custom_menu($menu_name)
{
	// $menu_name = 'nav-primary'; // specify custom menu name $marker="icon-heart"
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = ' <nav class="page__nav">' . "\n";
		foreach ((array) $menu_items as $key => $menu_item) {

			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t" . '<a class="page-link" href="' . $url . '">' . $title . '</a>' . "\n";
		}
		$menu_list .= '</nav>';
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

  
  

function socialWpNav($menu_name)
{
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<div class="social">' . "\n";
		foreach ((array) $menu_items as $key => $menu_item) {

			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t" . '<a target="_black" class="page-link social-icon" href="' . $url . '">' . $title . '</a>' . "\n";
		}
		$menu_list .= '</div>';
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}
