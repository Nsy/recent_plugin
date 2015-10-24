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

$plugin_url = WP_PLUGIN_URL . '/nsy-blog-settings';
$options = array();

/*
** Add a link to our plugin admin menu
*/
/*
function nsy_blog_settings_menu() {
	add_menu_page('Blog Widgets Options', 'Blog Widgets Options', 'manage_options', 'blog-widgets-options', 'nsy_blog_settings_page', 'dashicons-format-aside', 27);
}
add_action('admin_menu', 'nsy_blog_settings_menu');
*/

/*
** The admin page
*/
/*function nsy_blog_settings_page() {
	if (!current_user_can('manage_options')) {
		wp_die("You don't have sufficent permission to access this page");
	}

	global $plugin_url;
	global $options;

	if (isset($_POST['nsy_blog_settings_form_submitted'])) {
		$hidden_field = esc_html($_POST['nsy_blog_settings_form_submitted']);
		if ($hidden_field == 'Y') {
			$nsy_nb_articles = esc_html($_POST['nsy_nb_articles']);
			$options['nsy_nb_articles'] = $nsy_nb_articles;
			$options['last_updated'] = time();

			update_option('nsy_blog_settings', $options);
		}
	}
	$options = get_option('nsy_blog_settings');
	if ($options != '') {
		$nsy_nb_articles = $options['nsy_nb_articles'];
	}
	require('inc/nsy_blog_settings_page.php');
}
*/

/*
** Add Styles to plugin
*/
/*
function nsy_blog_settings_styles() {
	wp_enqueue_style('nsy_blog_settings_page_styles', plugins_url('nsy-blog-settings/nsy_blog_settings.css' ) );
}
add_action('admin_head', 'nsy_blog_settings_styles');
*/

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


		//$options = get_option( 'nsy_blog_settings' );
		//$nsy_nb_articles = $options['nsy_nb_articles'];
		require ('inc/front-end.php');
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
		/*$options = get_option( 'nsy_blog_settings' );
		$nsy_nb_articles = $options['nsy_nb_articles'];*/
		require ('inc/widget-fields.php' );
	}
}

function nsy_blog_settings_nb_articles_register_widgets() {
	register_widget( 'Nsy_blog_settings_nb_articles_Widget');
}
add_action( 'widgets_init', 'nsy_blog_settings_nb_articles_register_widgets');