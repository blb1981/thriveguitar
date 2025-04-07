<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="bg-primary-500 text-white mb-4 p-4">
    <h1><?php bloginfo('name'); ?></h1>
  </header>
  <nav>
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
      'items_wrap' => '<ul>%3$s</ul>',
    ]);
    ?>
  </nav>