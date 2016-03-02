<?php
/**
* @package arc
* @since 2.0
* @name Functions page
**/

// Theme Width
if (!isset($content_width)) {
  $content_width = 1140;
}
// Theme Defaults and Registers support
if (!function_exists('arc_setup')){
  function arc_setup(){
    // Add language text domain
    load_theme_textdomain('arc', get_template_directory() . '/language');
    // Support for Post Formats
    add_theme_support('post-formats', array('image', 'video', 'audio', 'gallery'));
    // Switch default core markup
    add_theme_support('automatic-feed-links', 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    // Add Navigation
    register_nav_menus(array(
      'primary'   => __('Primary' , 'arc'),
      'secondary' => __('Secondary', 'arc')
    ));
    // Support Post Thumbnails
    add_theme_support('post_thumbnails');
    add_image_size('', 000,000, true, array('right', 'top'));
  }
}
add_action('after_setup_theme', 'arc_setup');
// Arabic Language Attribute
function lang_attr() {
  return 'lang="ar"';
}
add_filter('language_attributes' , 'lang_attr');
// Register Widget
function arc_widget() {
  register_sidebar( array(
    'name'        => __('Right Sidebar', 'arc'),
    'id'          => 'sidebar-right',
    'description' => 'Display widgets appear on Browse page.',
  ));
}
add_action('widgets_init', 'arc_widget');
// Enqueue theme Styles and Scripts
function scripts(){
  // Add jQuery UI
  wp_register_script('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', '', '1.11.4', true);
  wp_enqueue_script('jquery-ui');
  // Add Script.JS
  wp_register_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', '', filemtime(get_stylesheet_directory() . '/assets/js/script.js'), true);
  wp_enqueue_script('theme-script');
}
add_action('wp_enqueue_scripts', 'scripts');
// Updgrade jQuery library
function jquery_update(){
  if(!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(), '2.2.0', true);
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'jquery_update');
// Add search to Primary Navigation
function search_menu($items, $args){
  if($args->theme_location == 'primary')
    return $items.= '<li class="search"><a href="#search"><i class="fa fa-search"></i></a></li>';
    return $items;
}
add_filter('wp_nav_menu_items', 'search_menu', 10, 2);
// Add AJAX handler for search Form
function ajax_search(){
  if(!isset ($_POST['search']))
    exit;
  query_posts(
    array(
      'posts_per_page' => 4,
      'no_found_rows' => true,
      'post_type' => get_post_types(array('public' => true)),
      's' => wp_unslash((string) $_post['search'] ),
      )
  );
  get_template_part('temps/content', 'ajax-search');
  exit;
}
add_action('wp_ajax_nopriv_search', 'ajax_search', 100);
add_action('wp_ajax_search', 'ajax_search', 100);
// Theme Includes
  // Add Theme customizer
  require get_template_directory() . '/inc/customizer.php';
  // Head clean
  require get_template_directory() . '/inc/clean-head.php';
  // Add Custom Post Type
  require get_template_directory() . '/inc/custom-posttype.php';
  // Add Custom Taxonomies
  require get_template_directory() . '/inc/custom-taxonomy.php';
  // Advanced Search Formats
  require_once('inc/wpas/wpas.php');
  require get_template_directory() . '/inc/advanced-search.php';