<?php
function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts(){
    wp_enqueue_style('mountaintheme-style', get_stylesheet_uri());
    
    if(is_page_template('page-info.php') || is_page('info')){
        wp_enqueue_script('info-script', get_template_directory_uri() . '/info-script.js', array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function korony_add_mnpm($value, $post_id, $field){
    if (is_singular('korona') && $field['name'] === 'height' && !empty($value)){
        return $value . ' m n.p.m.';
    }
    return $value;
}
add_filter('acf/format_value', 'korony_add_mnpm', 10, 3);


// function cpt_korony() {
//     $labels = array(
//         'name'          => 'Korony',
//         'singular_name' => 'Korona',
//         'add_new'       => 'Dodaj nową',
//         'add_new_item'  => 'Dodaj nową koronę',
//         'edit_item'     => 'Edytuj koronę',
//         'new_item'      => 'Nowa korona',
//         'view_item'     => 'Zobacz koronę',
//         'search_items'  => 'Szukaj koron',
//         'not_found'     => 'Nie znaleziono żadnych koron',
//         'all_items'     => 'Wszystkie korony',
//     );

//     $args = array(
//         'labels'        => $labels,
//         'public'        => true,
//         'has_archive'   => true,
//         'menu_icon'     => 'dashicons-mountain',
//         'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
//         'rewrite'       => false,
//         'show_in_rest'  => true,
//     );
//     register_post_type('korony', $args);
// }
// add_action('init', 'cpt_korony');

// function register_custom_taxonomies() {
//     $services_labels = array(
//         'name'              => 'Kategorie usług',
//         'singular_name'     => 'Kategoria usług',
//         'search_items'      => 'Szukaj kategorii usług',
//         'all_items'         => 'Wszystkie kategorie usług',
//         'parent_item'       => 'Nadrzędna kategoria usług',
//         'parent_item_colon' => 'Nadrzędna kategoria usług:',
//         'edit_item'         => 'Edytuj kategorię usług',
//         'update_item'       => 'Aktualizuj kategorię usług',
//         'add_new_item'      => 'Dodaj nową kategorię usług',
//         'new_item_name'     => 'Nazwa nowej kategorii usług',
//         'menu_name'         => 'Kategorie usług',
//     );

//     $services_args = array(
//         'hierarchical'      => true,
//         'labels'            => $services_labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'kategoria-uslug'),
//         'show_in_rest'      => true,
//     );

//     register_taxonomy('service_cat', array('post', 'services'), $services_args);

//     $locations_labels = array(
//         'name'              => 'Lokalizacje',
//         'singular_name'     => 'Lokalizacja',
//         'search_items'      => 'Szukaj lokalizacji',
//         'all_items'         => 'Wszystkie lokalizacje',
//         'parent_item'       => 'Nadrzędna lokalizacja',
//         'parent_item_colon' => 'Nadrzędna lokalizacja:',
//         'edit_item'         => 'Edytuj lokalizację',
//         'update_item'       => 'Aktualizuj lokalizację',
//         'add_new_item'      => 'Dodaj nową lokalizację',
//         'new_item_name'     => 'Nazwa nowej lokalizacji',
//         'menu_name'         => 'Lokalizacje',
//     );

//     $locations_args = array(
//         'hierarchical'      => true,
//         'labels'            => $locations_labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'lokalizacja'),
//         'show_in_rest'      => true,
//     );

//     register_taxonomy('service_loc', array('post', 'services'), $locations_args);
// }
// add_action('init', 'register_custom_taxonomies');