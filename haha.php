<?php 

//Código para criar Custom Post Type.
add_action('init', 'videos_registrer');
function videos_registrer(){
     $labels = array(
        'name' => _x('Vídeos', 'post type general name'),
        'singular_name' => _x('Vídeos', 'post type singular name'),
        'add_new' => _x('Adicionar vídeo', 'vídeo'),
        'add_new_item' => __('Adicionar novo vídeo'),
        'edit_item' => __('Editar vídeo'),
        'new_item' => __('Novo vídeo'),
        'view_item' => __('Ver vídeo'),
        'search_items' => __('Procurar vídeo'),
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
        'has_archive' => true, // Abilitando o uso do template de arquivo o archive-videos.php
        'menu_icon'   => 'dashicons-format-video',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'videos'), // Nome que vai ser usado para gerar o link permanente ex: http://localhost/video-aula/videos
        'menu_position' => 6,
        'supports' => array('title'),
        //'taxonomies' => array('category_noticias'), // Informado qual taxonomia (grupo de categorias) este post type vai usar
      );
    register_post_type('videos',$args);
}

// Obter ID e URL do youtube.
function base_get_youtube_id($ytURL) {
    $ytvIDlen = 11; // This is the length of YouTube's video IDs
    // The ID string starts after "v=", which is usually right after 
    // "youtube.com/watch?" in the URL
    $idStarts = strpos($ytURL, "?v=");
    // In case the "v=" is NOT right after the "?" (not likely, but I like to keep my 
    // bases covered), it will be after an "&":
    if($idStarts === FALSE)
        $idStarts = strpos($ytURL, "&v=");
    // If still FALSE, URL doesn't have a vid ID
    if($idStarts === FALSE):
        return FALSE;
        die("YouTube video ID not found. Please double-check your URL.");
    endif;  
    // Offset the start location to match the beginning of the ID string
    $idStarts +=3;
    // Get the ID string and return it
    $ytvID = substr($ytURL, $idStarts, $ytvIDlen);
    
    return $ytvID;
    
}
// Obter thumbnail do youtube
function base_the_youtube_thumb($youtube_url){
    echo '<img class="img-videos" src="http://img.youtube.com/vi/'.base_get_youtube_id($youtube_url).'/0.jpg" />';
}




//Condição verifica se é link do youtube ou vimeo.
<?php

    $url_youtube = "//www.youtube.com/embed/";
    $url_vimeo = "//player.vimeo.com/video/";
    $url_video = "";

    $textDescription = get_field('link_video_youtube_vimeo');
    $parsed     = parse_url($textDescription);
    $hostname   = $parsed['host'];
    $query      = $parsed['query'];
    $path       = $parsed['path'];
    $Arr = explode('v=',$query);
    $videoIDwithString = $Arr[1];
    $videoID = substr($videoIDwithString,0,11); // 5sRDHnTApSw
        if( (isset($videoID)) && (isset($hostname)) && ($hostname=='www.youtube.com' || $hostname=='youtube.com')){
            
            $url_video = $url_youtube .  $videoID;
        }
        else  if((isset($hostname)) && $hostname=='vimeo.com'){
            $ArrV = explode('://vimeo.com/',$path);
            $videoID = substr($ArrV[0],1,9); 
            $vimdeoIDInt = intval($videoID); 
            
            $url_video = $url_vimeo . $vimdeoIDInt;
        }
    ?>
   
    <li><iframe width="304" height="228" src="<?php echo $url_video; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe></li>