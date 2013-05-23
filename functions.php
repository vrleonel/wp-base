<?php

/* =======================================
 * Configurações
 =========================================*/
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// Registrando widget
register_sidebar( array(
                 'id'          => 'side1',
                 'name'        => 'Side 1',
                 'description' => 'Esse sidebar é o primeiro que aparece na lateral',
                 ) );
register_nav_menu('main-menu','Main Menu');
register_nav_menu('social-menu','Social Menu');


add_filter('excerpt_more', 'new_excerpt_more');

/* Menu */
/*
$main_menu_args = array(
  'theme_location'  => 'main-menu',
  'container'       => 'div',
  'menu_id'         => 'main-menu',
  'menu_class'      => 'left',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);

$social_menu_args = array(
  'theme_location'  => 'social-menu',
  'container'       => 'div',
  'menu_id'         => 'social-menu',
  'menu_class'      => 'right social-links',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
);
*/

/******** Funções do tema ********/
function smart_excerpt($string, $limit) {
  $words = explode(" ",$string);
  if ( count($words) >= $limit) $dots = '...';
  echo implode(" ",array_splice($words,0,$limit)).$dots;
}

function new_excerpt_more($more) {
  return '[.....]';
}




?>
