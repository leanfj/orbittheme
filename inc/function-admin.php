<?php

    /* 
        @package orbittheme

        ======================
            ADMIN PAGE
        ======================

    */

function orbit_add_admin_page () {
    add_menu_page('Orbit theme option', 'Orbit', 'manage_options', 'lfwi-orbit', 'orbit_theme_create_page',get_template_directory_uri() . '/img/orbit-icon.png', 110);
}

add_action('admin_menu', 'orbit_add_admin_page');

function orbit_theme_create_page () {
    //generate admin page for orbit theme
}