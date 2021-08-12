<?php

include "metaboxes.php";

function codex_custom_init() {
  
  //CARROSSEL
  $labels = array(
    'name' => 'Carrossel',
    'singular_name' => 'Carrossel',
    'add_new' => 'Adicionar Novo',
    'add_new_item' => 'Adicionar Nova Imagem',
    'edit_item' => 'Editar Imagem',
    'new_item' => 'Nova Imagem',
    'all_items' => 'Todos as Imagens',
    'view_item' => 'Ver Imagem',
    'search_items' => 'Procurar Imagem',
    'not_found' => 'Não encontrado',
    'not_found_in_trash' => 'Não está na lixeira', 
    'parent_item_colon' => '',
    'menu_name' => 'Carrossel',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array('slug' => 'carrossel'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array( 'title', 'thumbnail' )
  ); 
  register_post_type('Carrossel',$args);
  
    //PROJEKTE
  $labels = array(
    'name' => 'Projekte',
    'singular_name' => 'Projekte',
    'add_new' => 'Adicionar Novo',
    'add_new_item' => 'Adicionar Novo Projeto',
    'edit_item' => 'Editar Projeto',
    'new_item' => 'Novo Projeto',
    'all_items' => 'Todos os Projetos',
    'view_item' => 'Ver Projetos',
    'search_items' => 'Procurar Projeto',
    'not_found' => 'Não encontrado',
    'not_found_in_trash' => 'Não está na lixeira', 
    'parent_item_colon' => '',
    'menu_name' => 'Projekte',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array('slug' => 'projekte'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array( 'title', 'editor' )
  ); 
  register_post_type('Projekte',$args);
  reset_editor();
}
add_action( 'init', 'codex_custom_init' );

function reset_editor()
{
     global $_wp_post_type_features;
	 
	 $exc = array(
	 'empresa/atuacao',
	 'empresa/clientes',
	 'contato'
	 );
	 
	 $pag = pages_excluidas($exc);
		
		if(in_array($_REQUEST['post'], $pag)) {
     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
		}
}

function pages_excluidas(array $a = NULL) {
	
	foreach($a as &$b) {
		$b = get_page_by_path($b, ARRAY_N);	
	}

	foreach($a as &$p) {
	$p = $p[0];	
	}

	return $a;
}
?>