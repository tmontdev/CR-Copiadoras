<?php add_theme_support( 'post-thumbnails');
function scripts_register_cr(){
        wp_enqueue_script('jquery');
        wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css');
        wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css');
        wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('app', get_template_directory_uri().'/assets/js/app.js',array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/jquery.drawsvg.min.js',array('drawsvg'), null, true);
}
add_action('wp_enqueue_scripts', 'scripts_register_cr');
show_admin_bar(false);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

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
'register_meta_box_cb' => 'noticias_meta_box',       
            'supports' => array('title','editor','thumbnail')
          );
 
register_post_type( 'slides' , $args );
flush_rewrite_rules();
}
?>




<?php /*
add_action('init', 'slides_registrer');
function slides_registrer(){
     $labels = array(
        'name' => _x('Slides', 'post type general name'),
        'singular_name' => _x('Slides', 'post type singular name'),
        'add_new' => _x('Adicionar slide', 'slide'),
        'add_new_item' => __('Adicionar novo slide'),
        'edit_item' => __('Editar slide'),
        'new_item' => __('Novo slide'),
        'view_item' => __('Ver slide'),
        'search_items' => __('Procurar slide'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true, // Abilitando o uso do template de arquivo o archive-slides.php
        'menu_icon'   => 'dashicons-format-video',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'slides'), // Nome que vai ser usado para gerar o link permanente ex: http://localhost/slide-aula/slides
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks'),
        //'taxonomies' => array('category_noticias'), // Informado qual taxonomia (grupo de categorias) este post type vai usar
      );
    register_post_type('slides',$args);
}
 ?>

<?php 
function wptester_admin_tabs( $current = 'homepage' ) {
    $tabs = array( 'homepage' => 'Home', 'about' => 'About', 'services' => 'Services', 'downloads' => 'Downloads', 'news' => 'News', 'contact' => 'Contact' );
    $links = array();
    echo '<div id="icon-themes" class="icon32"><br></div>';
    echo '<h2 class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
        echo "<a class='nav-tab$class' href='?page=theme-settings&tab=$tab'>$name</a>";
 
    }
    echo '</h2>';
}
 ?>

<?php 
function wptester_settings_page() {
    global $pagenow;
    $settings = get_option( "wptester_theme_settings" );
 
        //some html and code goes here...
 
        if ( isset ( $_GET['tab'] ) ) wptester_admin_tabs($_GET['tab']); else wptester_admin_tabs('homepage');
 
//...
*/
 ?>
