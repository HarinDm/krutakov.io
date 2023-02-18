<?php

define('DF_DIR_CSS', get_template_directory_uri() . '/css/');
define('DF_DIR_JS', get_template_directory_uri() . '/js/');
define('DF_DIR_LIBS', get_template_directory_uri() . '/libs/');
define('DF_DIR_IMAGES', get_template_directory_uri() . '/assets/images/');


add_action('wp_enqueue_scripts', function () {
	//string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, bool $in_footer = false
	wp_enqueue_style('libs', DF_DIR_LIBS . 'css/swiper/swiper-bundle.min.css');
	wp_enqueue_style('sprites', DF_DIR_CSS . 'styles-sprites.css');

	wp_enqueue_style('base', DF_DIR_CSS . 'base-styles.css');
	wp_enqueue_style('calc', DF_DIR_CSS . 'styles-calc.css');
	
	

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery');

	wp_enqueue_script('libs', DF_DIR_LIBS . '/js/swiper/swiper-bundle.min.js', [], false, false);

	wp_enqueue_script('sharer', DF_DIR_LIBS . '/js/sharer.min.js', [], false, true);
	wp_enqueue_script('tabs', DF_DIR_LIBS . '/js/_all/tabs.js', [], false, true);

	wp_enqueue_script('header', DF_DIR_JS . '/header/header.component.js', [], false, true);
	wp_enqueue_script('swiper', DF_DIR_JS . 'swiper.js', [], false, true);
	wp_enqueue_script('main', DF_DIR_JS . 'main.js', [], false, true);

	wp_localize_script('main', '_SERVER_DATA', [
		'ajaxurl' => admin_url('admin-ajax.php')
	]);
});



// Удаление ненужных размеров миниатюр
add_action('after_setup_theme', 'remove_plugin_image_sizes', 999);
function remove_plugin_image_sizes(){
    remove_image_size('thumbnail');
    remove_image_size('medium');
    remove_image_size('medium_large');
    remove_image_size('large');
}

// Включаем поддержку миниатюр
add_theme_support('post-thumbnails');


// Удаление лишней информации из wp_head()
add_action('init', 'remove_else_link');
function remove_else_link() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links_extra', 3);
    // Отключение Emojii
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}


function wptest_post_categories()
{
	wptest_post_terms('category');
}

function wptest_post_tags(){
	wptest_post_terms('post_tag');
}

function wptest_post_terms($taxonomy, $id = 0)
{
	the_terms(
		$id,
		$taxonomy,
		'<ul class="list-group"><li class="list-group-item">',
		'</li><li class="list-group-item">',
		'</li>'
	);
}



// Подключаем кастомные типы записей и таксономий
include_once('includes/functions/post-types.php');


// Подключаем меню
include_once('includes/functions/menu.php');

