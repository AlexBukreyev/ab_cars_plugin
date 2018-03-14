<?php
add_action( 'init', 'ab_cars_register', 0 );

function ab_cars_register() {
    $args = array(
        'labels' => array(
            'name' => _x( 'Cars', 'Post Type General Name', 'text_domain' ),
            'all_items' => __( 'All Cars' ),
            'singular_name'      => 'Car (one)',
            'add_new'            => 'Add car',
            'add_new_item'       => 'Add car',
            'edit_item'          => 'Edit car',
            //'parent_item_colon'  => 'car',
            'menu_name'          => 'cars',
        ),

        'description' => '',
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),

        'map_meta_cap' => null,
        'hierarchical' => false,

        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'register_meta_box_cb' => null,
        'taxonomies' => array('taxcars'),
        'has_archive' => false,
        'rewrite' => array(
            'slug' => 'cars',
            'with_front' => false,
            'feeds' => false,
            'pages' => true,
        ),
        'permalink_epmask' => EP_PERMALINK,
        'query_var' => true,
        'can_export' => true,
        'delete_with_user' => null,
        'show_in_rest' => false,
        'rest_base' => $post_type,
        '_builtin' => false,
    );
    register_post_type( 'cars', $args );
}

//add_action ('wp_insert_post', 'ab_insert_cars');
//function ab_insert_cars(){
//
//}

//wp_update_post_meta('year');
// Создаем массив данных новой записи
$post_data = array(
    'post_type' => 'cars',
    'post_title'    => 'title_888999',
    'post_content'  => 'sdbvbbsbsb',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'year' => '2018',
    'марка' => 'qwertyuiop',

    //'post_category' => array( 8,39 )
);
//add_post_meta(get_the_ID(), 'марка', 'lkfififi');
// Вставляем запись в базу данных
$my_post_id = wp_insert_post( $post_data, $wp_error );


//add_theme_support( 'post-thumbnails' );




























