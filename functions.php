<?php 

require_once('config.php');
require_once('inc/functions-theme.php');
 

function et_enqueue()
{
	wp_enqueue_style('bootstrap', get_bloginfo('template_url') . '/css/bootstrap.css');
	wp_enqueue_style('etstyle', get_bloginfo('template_url') . '/css/style.css');
	
	//wp_enqueue_script( 'scripts_js', get_bloginfo('template_url') . '/js/scripts.js', array('jquery'), true , true );
	wp_localize_script( 'scripts_js', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));  
}
add_action('wp_enqueue_scripts','et_enqueue');








//ADD MENUS
function theme_menu() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'et2' ),
        'meta' => __( 'Meta Menu', 'et2' ), 
		'social' => __( 'Social Links', 'et2' ),
		'etheader' => __( 'Top menu', 'et2' ),
	) );
}
add_action( 'after_setup_theme', 'theme_menu' );
add_theme_support( 'post-thumbnails' );

/* POST TYPES */

// OUR TEAM
add_action('init', 'et_custom_posts');
function et_custom_posts() 
{

	/* memy */
	$labels = array(
		'name' => _x('Memy', 'post type general name'),
		'singular_name' => _x('Memy', 'post type singular name'),
		'add_new' => _x('Dodaj nowy mem', 'Mem'),
		'add_new_item' => __('Dodaj nowy mem'),
		'edit_item' => __('Edycja'),
		'new_item' => __('Nowa'),
		'view_item' => __('Zobacz'),
		'search_items' => __('Szukaj'),
		'not_found' =>  __('Nie znaleziono żadnych memów'),
		'not_found_in_trash' => __('Nie znaleziono żadnych memów w koszu'), 
		'parent_item_colon' => '',
		'has_archive' => 'mem'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => array(
				'slug' => 'mem',
				'with_front' => false
				),
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => 15,
		'supports' => array('title','thumbnail'),
		'has_archive' => false,
		'taxonomies'  => array( 'post_tag' ),
		'show_in_rest' => true,
	); 
	register_post_type('mem',$args);


  	/* news */
	$labels = array(
		'name' => _x('News', 'post type general name'),
		'singular_name' => _x('News', 'post type singular name'),
		'add_new' => _x('Dodaj nowy news', 'News'),
		'add_new_item' => __('Dodaj nowy news'),
		'edit_item' => __('Edycja'),
		'new_item' => __('Nowa'),
		'view_item' => __('Zobacz'),
		'search_items' => __('Szukaj'),
		'not_found' =>  __('Nie znaleziono żadnych newsów'),
		'not_found_in_trash' => __('Nie znaleziono żadnych newsów w koszu'), 
		'parent_item_colon' => '',
		'has_archive' => 'news'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => array(
				'slug' => 'news',
				'with_front' => false
				),
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => 15,
		'supports' => array('title', 'thumbnail', 'editor', 'comments', 'author'),
		'has_archive' => false,
		'taxonomies'  => array( 'category', 'post_tag' ),
		'show_in_rest' => true,
	); 
	register_post_type('news',$args);



	/* video */
	$labels = array(
		'name' => _x('Video', 'post type general name'),
		'singular_name' => _x('Video', 'post type singular name'),
		'add_new' => _x('Dodaj nowe video', 'Video'),
		'add_new_item' => __('Dodaj nowy video'),
		'edit_item' => __('Edycja'),
		'new_item' => __('Nowa'),
		'view_item' => __('Zobacz'),
		'search_items' => __('Szukaj'),
		'not_found' =>  __('Nie znaleziono żadnych video'),
		'not_found_in_trash' => __('Nie znaleziono żadnych video w koszu'), 
		'parent_item_colon' => '',
		'has_archive' => 'video'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => array(
				'slug' => 'video',
				'with_front' => false
				),
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => 15,
		'supports' => array('title', 'thumbnail', 'editor', 'comments', 'author'),
		'has_archive' => false,
		'taxonomies'  => array( 'post_tag' ),
		'show_in_rest' => true,
	); 
	register_post_type('video',$args);


}














/*

//custom wrong password page
function site_login_fail( $username ) {
	$referrer = $_SERVER['HTTP_REFERER'];
	if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
	  wp_redirect( $referrer . '?error' );
	  exit;
	}
  }
  add_action( 'wp_login_failed', 'site_login_fail' );  // hook failed login
  
  //redirect non-admin users from wp-admin to home
  function site_redirect_non_admin_users() {
	$current_user = wp_get_current_user();
	  if ( $current_user->user_login !== 'admin' &&
	  '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
			wp_redirect( get_bloginfo('url') );
			exit;
	  }
  }
  add_action( 'admin_init', 'site_redirect_non_admin_users' );
  
  //redrecting wp-login.php
  function site_custom_login() {
	global $pagenow;
	if ( 'wp-login.php' == $pagenow && !isset( $_POST['redirect_to'] ) &&
	  !isset( $_GET['action'] ) && $_GET['action'] != 'logout' ) {
		wp_redirect( get_bloginfo('url') );
		exit();
	}
  }
  add_action( 'init', 'site_custom_login' );
*/

?>