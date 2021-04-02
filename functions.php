<?php 
  
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme','add_suport_theme');


add_action('init', 'videos_registrer');
function videos_registrer(){
     $labels = array(
        'name' => _x('Vídeos', 'post type general name'),
        'singular_name' => _x('Videos', 'post type singular name'),
        'add_new' => _x('Adicionar video', 'video'),
        'add_new_item' => __('Adicionar item'),
        'edit_item' => __('Editar item'),
        'new_item' => __('Novo item'),
        'view_item' => __('Ver item'),
        'search_items' => __('Procurar item'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search'   => false,
        'supports' => array('title','editor','thumbnail'),
      );
    register_post_type('videos',$args);
}
  
add_action( 'init', 'create_cw_hierarchical_taxonomy', 0 );
 function create_cw_hierarchical_taxonomy() {
$labels = array(
'name' => _x( 'Categorias', 'taxonomy general name' ),
'singular_name' => _x( 'Categorias', 'taxonomy singular name' ),
'search_items' => __( 'Buscar' ),
'all_items' => __( 'Todas as categorias videos' ),
'parent_item' => __( 'Categoria ascendente' ),
'parent_item_colon' => __( 'Categoria ascendente:' ),
'edit_item' => __( 'Editar item' ),
'update_item' => __( 'Atualizar item' ),
'add_new_item' => __( 'Adicionar novo item' ),
'new_item_name' => __( 'Editar o nome do item' ),
'menu_name' => __( 'Categorias' ),
);
 
register_taxonomy('cate',array('videos'), array(
'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'assistir' ),
));
} 

 
 
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_606396999fce2',
            'title' => 'Informações do vídeo',
            'fields' => array(
                array(
                    'key' => 'field_606396b75b999',
                    'label' => 'Vídeo',
                    'name' => 'video',
                    'type' => 'oembed',
                ),
                array(
                    'key' => 'field_606396e65b99a',
                    'label' => 'Sinopse',
                    'name' => 'sinopse',
                    'type' => 'text',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_606396f35b99b',
                    'label' => 'Tempo de duração',
                    'name' => 'tempo_de_duracao',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'videos',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
        ));
        
        endif;


        function special_nav_class ($classes, $item) {
            if (in_array('current_page_item', $classes) ){
              $classes[] = 'active ';
            }
            return $classes;
          }
          
          add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
 
?>