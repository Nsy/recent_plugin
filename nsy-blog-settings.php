<?php
/*
   Plugin Name: NSY Blog Settings
   Plugin URI: http://www.noeliesylvain.fr/
   Description: Provides widgets and a settings page for our blog
   Version: 1.0
   Author: Sylvain Noelie
   Author URI: http://www.noeliesylvain.fr/
   License: GPL2
*/

/*
** Tag Widget
*/
class Nsy_blog_settings_tag_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'NSY Tags');
	}
	function widget($args, $instance) {
		extract($args); 
		$title = apply_filters('widget_title', $instance['title']);

		$nsy_tax = $instance['nsy_tax'];
		require ('inc/tag-front-end.php');
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['nsy_tax'] = strip_tags($new_instance['nsy_tax']);

		return $instance;
	}
	function form( $instance ) {
		$title = esc_attr($instance['title']);
		$nsy_tax = esc_attr($instance['nsy_tax']);
		require ('inc/tag-widget-fields.php' );
	}
}

/*
** Create the recent articles widget
*/
class Nsy_blog_settings_nb_articles_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'NSY Articles Récents');
	}
	function widget($args, $instance) {
		extract($args); 
		$title = apply_filters('widget_title', $instance['title']);

		$nsy_nb_articles = $instance['nsy_nb_articles'];
		require ('inc/nb-articles-front-end.php');
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['nsy_nb_articles'] = strip_tags($new_instance['nsy_nb_articles']);

		return $instance;
	}
	function form( $instance ) {
		$title = esc_attr($instance['title']);
		$nsy_nb_articles = esc_attr($instance['nsy_nb_articles']);
		require ('inc/nb-articles-widget-fields.php' );
	}
}

/*
** Create Text widget
*/
class Nsy_blog_settings_text_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'NSY Text');
	}
	function widget($args, $instance) {
		extract($args); 
		$title = apply_filters('widget_title', $instance['title']);

		$nsy_text = $instance['nsy_text'];
		require ('inc/text-front-end.php');
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['nsy_text'] = strip_tags($new_instance['nsy_text']);

		return $instance;
	}
	function form( $instance ) {
		$title = esc_attr($instance['title']);
		$nsy_text = esc_attr($instance['nsy_text']);
		require ('inc/text-widget-fields.php' );
	}
}

function nsy_blog_settings_register_widgets() {
	register_widget('Nsy_blog_settings_nb_articles_Widget');
	register_widget('Nsy_blog_settings_tag_Widget');
	register_widget('Nsy_blog_settings_text_Widget');
}
add_action( 'widgets_init', 'nsy_blog_settings_register_widgets');
