<?php
function register_menu() {
    register_nav_menu('header-menu',__('Header Menu'));
}
add_action('init','register_menu');
add_theme_support( 'custom-background' );
