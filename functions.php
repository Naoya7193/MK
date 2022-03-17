<?php

// CSSの読み込み
function theme_enqueue_styles()
{
	wp_enqueue_style('base', get_stylesheet_directory_uri() . '/css/base.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');

	if (is_page('syusyu')) {
		wp_enqueue_style('syusyu', get_stylesheet_directory_uri() . '/css/syusyu.css');
	}

	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 0000, true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



// タイトルタグの読み込み
add_theme_support('title-tag');