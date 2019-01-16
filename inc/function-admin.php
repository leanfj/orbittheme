<?php

    /* 
        @package orbittheme

        ======================
            ADMIN PAGE
        ======================

    */

function orbit_add_admin_page () {
    /*
        add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )
        Add a top-level menu page.  
    */
    // Generate Orbit Admin Page
    add_menu_page('Orbit theme options', 'Orbit', 'manage_options', 'lfwi_orbit_general', 'orbit_theme_general_page',get_template_directory_uri() . '/img/orbit-icon.png', 110);
    

    /*
        add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )
        Add a submenu page.
     */
    // Generate Orbit Admin sub pages
    add_submenu_page( 'lfwi_orbit_general', 'Orbit theme options', 'General Settings', 'manage_options', 'lfwi_orbit_general', 'orbit_theme_general_page' );
    add_submenu_page( 'lfwi_orbit_general', 'Orbit theme CSS options', 'CSS Settings', 'manage_options', 'lfwi_orbit_css', 'orbit_theme_settings_page' );

}

/*
add_action( string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1 )
Hooks a function on to a specific action.
*/
add_action('admin_menu', 'orbit_add_admin_page');

function orbit_theme_general_page () {
    //generate admin page for orbit theme
    require_once(get_template_directory() . '/inc/templates/orbit-admin.php');
}

function orbit_theme_settings_page () {
    //generate subadmin sections page for orbit theme
    require_once(get_template_directory() . '/inc/templates/orbit-css.php');

}