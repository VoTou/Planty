<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
    // Chargement du css/theme.css pour nos personnalisations
wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));


// Ajout du menu admin
add_filter( 'wp_nav_menu_items', 'ajout_admin_menu', 10, 2 );
function ajout_admin_menu( $items, $args ) {
    if (is_super_admin() && $args->theme_location == 'primary' || is_super_admin() && $args->theme_location == 'mobile_menu' ) {
        $items .= '
                <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39">
                    <a href="http://localhost/planty/nous-rencontrer/" class="menu-link">Nous rencontrer</a>
                </li>
                <li id="menu-admin" class="menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="http://localhost/planty/wp-admin/" class="menu-link">Admin</a>
                </li>
                <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
                    <a href="http://localhost/planty/commander/" class="menu-link">Commander</a>
                </li>
                ';
    } else if ($args->theme_location == 'primary') {
        $items .= '
        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39">
            <a href="http://localhost/planty/nous-rencontrer/" class="menu-link">Nous rencontrer</a>
        </li>
        <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
            <a href="http://localhost/planty/commander/" class="menu-link">Commander</a>
        </li>
        ';
    }
    return $items;
}
    


