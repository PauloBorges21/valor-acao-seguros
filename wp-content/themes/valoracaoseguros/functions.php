<?php
// Include
//require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/variaveis.php';

// Hooks
//add_action('wp_enqueue_scripts', 'seguradora_av_theme_style');


//Custom Types


// Register Custom Post Type
function custom_post_type_seguradoras_av()
{

    $labels = array(
        'name' => _x('Seguradora', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Seguradora', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Seguradoras', 'text_domain'),
        'name_admin_bar' => __('Post Type', 'text_domain'),
        'archives' => __('Item Archives', 'text_domain'),
        'attributes' => __('Item Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'add_new' => __('Adicionar Novo', 'text_domain'),
        'new_item' => __('New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'view_items' => __('View Items', 'text_domain'),
        'search_items' => __('Search Item', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('seguradoras_av', 'text_domain'),
        'description' => __('Post Type Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'custom-fields', 'post-formats', 'thumbnail', 'revisions'),
        'taxonomies' => array('category', 'post_tag', 'servico'),
        //'taxonomies' =>'',
        'menu_icon' => 'dashicons-building',
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('seguradoras_av', $args);

    register_taxonomy(
        'servico',
        'seguradoras_av',

        array(
            'label' => 'Serviço',
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'rewrite' => array('slug' => 'servico')
        )
    );

}

add_action('init', 'custom_post_type_seguradoras_av', 0);

function custom_post_type_equipe_av()
{

    $labels = array(
        'name' => _x('Equipe', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Equipe', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Equipe', 'text_domain'),
        'name_admin_bar' => __('Post Type', 'text_domain'),
        'archives' => __('Item Archives', 'text_domain'),
        'attributes' => __('Item Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'add_new' => __('Adicionar Novo', 'text_domain'),
        'new_item' => __('New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'view_items' => __('View Items', 'text_domain'),
        'search_items' => __('Search Item', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('equipe_av', 'text_domain'),
        'description' => __('Post Type Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'custom-fields', 'post-formats', 'thumbnail', 'revisions'),
        //'taxonomies' =>'',
        'menu_icon' => 'dashicons-groups',
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('equipe_av', $args);


}

add_action('init', 'custom_post_type_equipe_av', 0);


function ed_support_thumbnails()
{
    add_theme_support('post-thumbnails'); // thumbnails
}

add_action('after_setup_theme', 'ed_support_thumbnails'); // carrega parametros de suporte do tema

function iconesServicos($indice)
{
    if ($indice == 'cooperacao') {
        $icone = 'fa fa-people-carry-box';
        return $icone;
    } elseif ($indice == 'cooperacao2') {
        $icone = 'fa fa-people-arrows-left-right';
        return $icone;
    } elseif ($indice == 'suporte') {
        $icone = 'fa fa-user-gear';
        return $icone;
    } elseif ($indice == 'grafico') {
        $icone = 'fa fa-chart-pie';
        return $icone;
    } elseif ($indice == 'seguranca') {
        $icone = 'fa fa-unlock-keyhole';
        return $icone;
    } elseif ($indice == 'alinhamento') {
        $icone = 'fa fa-handshake-simple';
        return $icone;
    } elseif ($indice == 'checklist') {
        $icone = 'fa fa-clipboard';
        return $icone;
    }


}

function iconesDestaque($indice)
{

    if ($indice == 1) {
        $icone = 'fa fa-chart-pie';
    } elseif ($indice == 2) {
        $icone = 'fa fa-unlock-keyhole';
    } elseif ($indice == 3) {
        $icone = 'fa fa-handshake-simple';
    } else {
        $icone = 'fa fa-clipboard';
    }

    return $icone;

}
