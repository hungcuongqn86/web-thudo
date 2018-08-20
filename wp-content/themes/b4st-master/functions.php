<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/
/*if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}*/

function tao_taxonomy() {
    /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
     */
    $labels = array(
        'name' => 'Các loại sản phẩm',
        'singular' => 'Loại sản phẩm',
        'menu_name' => 'Loại sản phẩm'
    );

    /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
     */
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );

    /* Hàm register_taxonomy để khởi tạo taxonomy
     */
    register_taxonomy('products', array( 'page' ), $args);
}

// Hook into the 'init' action
add_action( 'init', 'tao_taxonomy', 0 );

// Register Custom Post Type
function products_post_type() {
    $label = array(
        'name' => 'Sản phẩm', //Tên post type dạng số nhiều
        'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
    );
    $args = array(
        'label'                 => __( 'Product', 'text_domain' ),
        'description'           => __( 'Product information pages.', 'text_domain' ),
        'labels'                => $label,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
        'taxonomies'            => array( 'products', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'product', $args );
}
add_action( 'init', 'products_post_type', 0 );

// Register Custom Post Type
function recruit_post_type() {
    $label = array(
        'name' => 'Tuyển dụng', //Tên post type dạng số nhiều
        'singular_name' => 'Tuyển dụng' //Tên post type dạng số ít
    );
    $args = array(
        'label'                 => __( 'Recruit', 'text_domain' ),
        'description'           => __( 'Recruit information pages.', 'text_domain' ),
        'labels'                => $label,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
        'taxonomies'            => array( 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'recruit', $args );
}
add_action( 'init', 'recruit_post_type' );

// Register Custom Post Type
function personal_post_type() {
    $label = array(
        'name' => 'Cá nhân tiêu biểu', //Tên post type dạng số nhiều
        'singular_name' => 'Cá nhân tiêu biểu' //Tên post type dạng số ít
    );
    $args = array(
        'label'                 => __( 'Personal', 'text_domain' ),
        'description'           => __( 'Personal information pages.', 'text_domain' ),
        'labels'                => $label,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'Personal', $args );
}
add_action( 'init', 'personal_post_type' );

add_action('init', function() {
    pll_register_string('contact-us', 'contact us');
});

//require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/slide.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/index-pagination.php';
require get_template_directory() . '/functions/single-split-pagination.php';
