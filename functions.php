<?php
function thriveguitar_theme_setup()
{
  load_theme_textdomain('thriveguitar', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

  register_nav_menus([
    'primary' => __('Primary Menu', 'thriveguitar')
  ]);
}
add_action('after_setup_theme', 'thriveguitar_theme_setup');

function thriveguitar_enqueue_styles()
{
  // Load the main style.css file
  wp_enqueue_style('thriveguitar-style', get_stylesheet_uri());

  // Enqueue the main.css
  wp_enqueue_style('thriveguitar-main-style', get_template_directory_uri() . '/assets/css/style.css');

  // Enqueue the main.js
  wp_enqueue_script('thriveguitar-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'thriveguitar_enqueue_styles');

function thriveguitar_widgets_init()
{
  register_sidebar([
    'name' => __('Sidebar', 'thriveguitar'),
    'id' => 'sidebar-1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ]);

  for ($i = 1; $i <= 3; $i++) {
    register_sidebar([
      'name' => sprintf(__('Footer %d', 'thriveguitar'), $i),
      'id' => 'footer-' . $i,
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ]);
  }
}
add_action('widgets_init', 'thriveguitar_widgets_init');
