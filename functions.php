<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

register_nav_menus(array(
    'main-top' => 'Menu Principal Haut',
    'main-bottom' => 'Menu Principal Bas',
    'footer' => 'Bas de page',
));

wp_enqueue_style(
    'main',
    get_template_directory_uri() . '/css/main.css',
    array(),
    '1.0'
);

add_action('init', 'cp_change_post_object');
// Change dashboard Posts to News
function cp_change_post_object()
{
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $labels->name = 'Publications';
    $labels->singular_name = 'Publications';
    $labels->add_new = 'Ajouter une Publications';
    $labels->add_new_item = 'Ajouter une Publications';
    $labels->edit_item = 'Editer une Publications';
    $labels->new_item = 'Publications';
    $labels->view_item = 'Voir une Publications';
    $labels->search_items = 'Rechercher une Publications';
    $labels->not_found = 'Pas de Publications trouvées';
    $labels->not_found_in_trash = 'No Publications found in Trash';
    $labels->all_items = 'Toutes les Publications';
    $labels->menu_name = 'Publications';
    $labels->name_admin_bar = 'Publications';
}
