<?php add_theme_support( 'post-thumbnails');
function scripts_register_cr(){
        wp_enqueue_script('jquery');
        wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css');
        wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css');
        wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('app', get_template_directory_uri().'/assets/js/app.js',array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'scripts_register_cr');
show_admin_bar(false);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>

<?php
    add_action('init', 'about_register');

    function about_register() {
        $labels = array(
            'name' => _x('Sobre', 'Sobre'),
            'singular_name' => _x('Sobre', 'Sobre'),
            'add_new' => _x('Adicionar Sobre', 'Novo Sobre'),
            'add_new_item' => __('Novo Sobre'),
            'edit_item' => __('Editar Sobre'),
            'new_item' => __('Novo Sobre'),
            'view_item' => __('Ver Sobre'),
            'search_items' => __('Procurar Sobre'),
            'not_found' =>  __('Nenhum Sobre encontrado'),
            'not_found_in_trash' => __('Nenhum Sobre encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Sobre'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-format-aside',
            'register_meta_box_cb' => 'Sobre_meta_box',
            'supports' => array('title','editor','thumbnail')
          );

register_post_type( 'about' , $args );
flush_rewrite_rules();
}
?>


<?php
    add_action('init', 'service_register');

    function service_register() {
        $labels = array(
            'name' => _x('Serviços', 'Serviços'),
            'singular_name' => _x('Serviços', 'Serviço'),
            'add_new' => _x('Adicionar Serviços', 'Novo Serviço'),
            'add_new_item' => __('Novo Serviço'),
            'edit_item' => __('Editar Serviço'),
            'new_item' => __('Novo Serviço'),
            'view_item' => __('Ver Serviço'),
            'search_items' => __('Procurar Serviço'),
            'not_found' =>  __('Nenhum Serviço encontrado'),
            'not_found_in_trash' => __('Nenhum Serviço encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Serviços'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-hammer',
            'register_meta_box_cb' => 'Sobre_meta_box',
            'supports' => array('title','editor','thumbnail')
          );

register_post_type( 'service' , $args );
flush_rewrite_rules();
}
?>


<?php
    add_action('init', 'slides_register');

    function slides_register() {
        $labels = array(
            'name' => _x('Slides', 'Home Slides'),
            'singular_name' => _x('Ślide', 'Home Slide'),
            'add_new' => _x('Adicionar Slide', 'Novo Slide'),
            'add_new_item' => __('Novo Slide'),
            'edit_item' => __('Editar Slide'),
            'new_item' => __('Novo Slide'),
            'view_item' => __('Ver Slide'),
            'search_items' => __('Procurar Slides'),
            'not_found' =>  __('Nenhum Slide encontrado'),
            'not_found_in_trash' => __('Nenhum Slide encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Slides'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-images-alt2',
            'register_meta_box_cb' => 'Slides_meta_box',
            'supports' => array('title','editor','thumbnail')
          );

register_post_type( 'slides' , $args );
flush_rewrite_rules();
}
?>



<?php
    add_action('init', 'Equipamentos_register');

    function Equipamentos_register() {
        $labels = array(
            'name' => _x('Equipamentos', 'Home Equipamentos'),
            'singular_name' => _x('Ślide', 'Home Equipamento'),
            'add_new' => _x('Adicionar Equipamento', 'Novo Equipamento'),
            'add_new_item' => __('Novo Equipamento'),
            'edit_item' => __('Editar Equipamento'),
            'new_item' => __('Novo Equipamento'),
            'view_item' => __('Ver Equipamento'),
            'search_items' => __('Procurar Equipamentos'),
            'not_found' =>  __('Nenhum Equipamento encontrado'),
            'not_found_in_trash' => __('Nenhum Equipamento encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Equipamentos'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-archive',
            'register_meta_box_cb' => 'Equipamentos_meta_box',
            'supports' => array('title','editor','thumbnail')
          );

register_post_type( 'Equipments' , $args );
flush_rewrite_rules();
}
?>
