<?php

/*
  Plugin Name: A basic plugin
  Description: This is part of a tutorial on how to build plugins in WP
  Version: 1.0
  Author: Fernando Papaqui
  Author URI: https://www.fernandopapaqui.dev
*/

add_filter('the_content', 'addToEndOfPost');

function addToEndOfPost($content) {
  if ( is_single() && is_main_query() ) {
    return $content . '<p>Author: ' . the_autor(); . '</p>';
  } 

  return $content;
}
