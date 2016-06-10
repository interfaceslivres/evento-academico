<?php

  
function my_pre_save_post( $post_id )
{
    // check if this is to be a new post
    if( $post_id != 'new' )
    {
        return $post_id;
    }
  
    // Create a new post
    $post = array(
        'post_status'  => 'draft' ,
        'post_title'  => $_POST['fields']['field_56cdb15761efa'],
        'post_type'  => 'post' ,
    ); 
  
    // insert the post
    $post_id = wp_insert_post( $post );
  
    // return the new ID
    return $post_id;
}
  
add_filter('acf/pre_save_post' , 'my_pre_save_post' );
 
// CRIAR A TAXONOMIA DOS ESTADOS
// Register Custom Taxonomy
function estados() {

    $labels = array(
        'name'                       => _x( 'Estados', 'Taxonomy General Name', 'estados' ),
        'singular_name'              => _x( 'Estado', 'Taxonomy Singular Name', 'estados' ),
        'menu_name'                  => __( 'Estados do Brasil', 'estados' ),
        'all_items'                  => __( 'Todos os Estados', 'estados' ),
        'parent_item'                => __( 'Estado Pai', 'estados' ),
        'parent_item_colon'          => __( 'Estado Pai:', 'estados' ),
        'new_item_name'              => __( 'Nome do Novo Estado', 'estados' ),
        'add_new_item'               => __( 'Adicionar Novo Estado', 'estados' ),
        'edit_item'                  => __( 'Editar Estado', 'estados' ),
        'update_item'                => __( 'Atualizar Estado', 'estados' ),
        'view_item'                  => __( 'Ver Estado', 'estados' ),
        'separate_items_with_commas' => __( 'Separe os estados com virgula', 'estados' ),
        'add_or_remove_items'        => __( 'Adicioonar ou Remover Estados', 'estados' ),
        'choose_from_most_used'      => __( 'Escolher dos Mais Usados', 'estados' ),
        'popular_items'              => __( 'Estados Populares', 'estados' ),
        'search_items'               => __( 'Procurar Estados', 'estados' ),
        'not_found'                  => __( 'Não Encontrado', 'estados' ),
        'no_terms'                   => __( 'Sem Estados', 'estados' ),
        'items_list'                 => __( 'Lista de Estados', 'estados' ),
        'items_list_navigation'      => __( 'Navegação entre Estados', 'estados' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'estados', array( 'post' ), $args );

}
add_action( 'init', 'estados', 0 );


// CRIAR A TAXONOMIA DOS MESES
// Register Custom Taxonomy
function meses_do_ano() {

    $labels = array(
        'name'                       => 'Meses',
        'singular_name'              => 'Mês',
        'menu_name'                  => 'Meses',
        'all_items'                  => 'Todos os Meses',
        'parent_item'                => 'Parent Item',
        'parent_item_colon'          => 'Parent Item:',
        'new_item_name'              => 'Nome do Novo Mês',
        'add_new_item'               => 'Adicionar Novo Mês',
        'edit_item'                  => 'Editar Mês',
        'update_item'                => 'Atualizar Mês',
        'view_item'                  => 'Ver Mês',
        'separate_items_with_commas' => 'Separe os itens com vírgula',
        'add_or_remove_items'        => 'Adicionar ou Remover',
        'choose_from_most_used'      => 'Escolher dos Mais Usados',
        'popular_items'              => 'Popular Itens',
        'search_items'               => 'Buscar Meses',
        'not_found'                  => 'Não Encontrado',
        'no_terms'                   => 'Sem Mês',
        'items_list'                 => 'Items list',
        'items_list_navigation'      => 'Items list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'meses', array( 'post' ), $args );

}
add_action( 'init', 'meses_do_ano', 0 );

// CRIAR A TAXONOMIA DOS ANOS
// Register Custom Taxonomy
function ano() {

    $labels = array(
        'name'                       => _x( 'Anos', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Ano', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Anos', 'text_domain' ),
        'all_items'                  => __( 'Todos os Anos', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'Novo Ano', 'text_domain' ),
        'add_new_item'               => __( 'Adicionar Novo Ano', 'text_domain' ),
        'edit_item'                  => __( 'Editar Ano', 'text_domain' ),
        'update_item'                => __( 'Atualizar Ano', 'text_domain' ),
        'view_item'                  => __( 'Ver Ano', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Procurar Anos', 'text_domain' ),
        'not_found'                  => __( 'Não Encontrado', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'ano', array( 'post' ), $args );

}
add_action( 'init', 'ano', 0 );

// Register ÁREA DE CONHECIMENTO
function area_de_conhecimento() {

    $labels = array(
        'name'                       => _x( 'Áreas de Conhecimento', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Área de Conhecimento', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Área Conhecim.', 'text_domain' ),
        'all_items'                  => __( 'Ver Todas', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'Nome da Nova Área', 'text_domain' ),
        'add_new_item'               => __( 'Nova Área', 'text_domain' ),
        'edit_item'                  => __( 'Editar Área', 'text_domain' ),
        'update_item'                => __( 'Atualizar Área', 'text_domain' ),
        'view_item'                  => __( 'Ver Área', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separe com vírgulas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Adicionar ou Remover', 'text_domain' ),
        'choose_from_most_used'      => __( 'Mais Usados', 'text_domain' ),
        'popular_items'              => __( 'Áreas Populares', 'text_domain' ),
        'search_items'               => __( 'Procurar Áreas', 'text_domain' ),
        'not_found'                  => __( 'Não Encontrado', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'area_de_conhecimento', array( 'post' ), $args );

}
add_action( 'init', 'area_de_conhecimento', 0 );



// adicionando widgets
function ourWidgetsInit() {
    
    register_sidebar( array(
        'name' => 'Form',
        'id' => 'form',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'ourWidgetsInit');
?>