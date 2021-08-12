<?php
/**
 * This file show you an improvement of better include meta box in some pages
 * based on post ID, post slug and page template
 *
 * @author Charlie Rosenbury <charlie@40digits.com>
 */

$prefix = 'kraft_';

global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] = array(
'id' => 'info',
'title' => 'Informações do Carrossel',
'pages' => array('carrossel'),
//'only_on' => array('slug' => array('carrossel')),
'fields' => array(
	array(
	'id' => "{$prefix}desc",
	'name' => 'Descrição da Imagem',
	'type' => 'text',
	),
	array(
	'id' => "{$prefix}url",
	'title' => 'URL de Destino',
	'name' => 'URL de Destino',
	'type' => 'text',
	),
)
);

//FENGSHUI - HOME
$meta_boxes[] = array(
'id' => 'block-fengshui',
'title' => 'Feng Shui',
'pages' => array('page'),
'only_on' => array('slug' => array('home')),
'fields' => array(
	array(
	'id' => "{$prefix}fengshui_text",
	'name' => 'Texto do Campo',
	'type' => 'text',
	),
	array(
	'id' => "{$prefix}fengshui_url",
	'title' => 'URL de Destino',
	'name' => 'URL de Destino',
	'type' => 'text',
	),
)
);

//AKTUELLES - HOME
$meta_boxes[] = array(
'id' => 'block-aktuelles',
'title' => 'Aktuelles',
'pages' => array('page'),
'only_on' => array('slug' => array('home')),
'fields' => array(
	array(
	'id' => "{$prefix}aktuelles_text",
	'name' => 'Texto do Campo',
	'type' => 'text',
	),
	array(
	'id' => "{$prefix}aktuelles_url",
	'title' => 'URL de Destino',
	'name' => 'URL de Destino',
	'type' => 'text',
	),
)
);

//LEISTUNG - HOME
$meta_boxes[] = array(
'id' => 'block-leistung',
'title' => 'Leistung',
'pages' => array('page'),
'only_on' => array('slug' => array('home')),
'fields' => array(
	array(
	'id' => "{$prefix}leistung_text",
	'name' => 'Texto do Campo',
	'type' => 'text',
	),
	array(
	'id' => "{$prefix}leistung_url",
	'title' => 'URL de Destino',
	'name' => 'URL de Destino',
	'type' => 'text',
	),
)
);

//PROJEKTE - HOME
$meta_boxes[] = array(
'id' => 'block-projekte',
'title' => 'Projekte',
'pages' => array('page'),
'only_on' => array('slug' => array('home')),
'fields' => array(
	array(
	'id' => "{$prefix}projekte_text",
	'name' => 'Texto do Campo',
	'type' => 'text',
	),
	array(
	'id' => "{$prefix}projekte_url",
	'title' => 'URL de Destino',
	'name' => 'URL de Destino',
	'type' => 'text',
	),
)
);

//PROJEKTE
$meta_boxes[] = array(
'id' => 'serv',
'title' => 'Serviços do Projeto',
'pages' => array('projekte'),
'fields' => array(
	array(
	'id' => "{$prefix}serv",
	'type' => 'text',
	),
)
);

/*//METABOX ATUAÇÃO: PRÉ-OPERACIONAL
$meta_boxes[] = array(
	'id'		=> 'atuacao-pre',
	'title'		=> 'Fase Pré-Operacional',
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('atuacao')),
	'fields' => array(
	array(
	'id' => "{$prefix}preop",
	'name' => '<b>Texto de Abertura</b>',
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 4,
	),
	array(
	'id' => "{$prefix}preop_item",
	'name' => '<b>Serviços</b>/<br/><small>Descrição (opcional)</small>',
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 2,
	'clone' => true,
	'desc' => 'Use &lt;br&gt; para pular uma linha. A primeira linha fica em negrito.',
	)
	),

);

//METABOX ATUAÇÃO: PRÉ-OPERACIONAL
$meta_boxes[] = array(
	'id'		=> 'atuacao-op',
	'title'		=> 'Fase Operacional',
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('atuacao')),
	'fields' => array(
	array(
	'id' => "{$prefix}op",
	'name' => '<b>Texto de Abertura</b>',
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 4,
	),
	array(
	'id' => "{$prefix}op_item",
	'name' => '<b>Serviços</b>/<br/><small>Descrição (opcional)</small>',
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 2,
	'clone' => true,
	'desc' => 'Use &lt;br&gt; para pular uma linha. A primeira linha fica em negrito.',
	)
	),

);

//METABOX CLIENTES: ESTADOS
$meta_boxes[] = array(
	'id'		=> 'atuacao-estados',
	'title'		=> 'Estados Com Clientes',
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('clientes')),
	'fields' => array(
	array(
	'id' => "{$prefix}estados",
	'type' => 'checkbox_list',
	'class' => 'extended',
	'multiple' => 'true',
	'desc' => 'Marque aqui e salve para aparecer as caixas dos estados.',
	'options' => array(
		'ac' => 'Acre',
		'al' => 'Alagoas',
		'ap' => 'Amapá',
		'am' => 'Amazonas',
		'ba' => 'Bahia',
		'ce' => 'Ceará',
		'df' => 'Distrito Federal',
		'go' => 'Goiás',
		'es' => 'Espírito Santo',
		'ma' => 'Maranhão',
		'mt' => 'Mato Grosso',
		'ms' => 'Mato Grosso do Sul',
		'mg' => 'Minas Gerais',
		'pa' => 'Pará',
		'pb' => 'Paraiba',
		'pr' => 'Paraná',
		'pe' => 'Pernambuco',
		'pi' => 'Piauí',
		'rj' => 'Rio de Janeiro',
		'rn' => 'Rio Grande do Norte',
		'rs' => 'Rio Grande do Sul',
		'ro' => 'Rondônia',
		'rr' => 'Roraima',
		'sp' => 'São Paulo',
		'sc' => 'Santa Catarina',
		'se' => 'Sergipe',
		'to' => 'Tocantins',
		)
	),
	),
);

$page_clientes = get_page_by_path('empresa/clientes');
$estados = get_post_meta($page_clientes->ID, 'r4_estados', false);

foreach($estados as $e):
	$x = estadoGenero($e);
//METABOX ATUAÇÃO: ESTADO
$meta_boxes[] = array(
	'id'		=> "clientes-{$e}",
	'title'		=> "Clientes d{$x}",
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('clientes')),
	'fields' => array(
	array(
	'id' => "{$prefix}estado_{$e}",
	'name' => '<b>Nome do Shopping</b>/<br/>Serviços',
	'type' => 'textarea',
	'class' => 'extended',
	'clone' => true,
	'desc' => 'Use &lt;br&gt; para pular uma linha. A primeira linha (nome do Shopping) fica em negrito.',
	'rows' => 4,
	'class' => 'cb_estados',
	),
	),

);
endforeach;

function estadoGenero($e) {
		if($e=='ac') return 'o Acre'; elseif($e=='al') return 'e Alagoas';
		elseif($e=='ap') return 'o Amapá'; elseif($e=='am') return 'o Amazonas';
		elseif($e=='ba') return 'a Bahia'; elseif($e=='ce') return 'o Ceará';
		elseif($e=='df') return 'o Distrito Federal'; elseif($e=='go') return 'e Goiás';
		elseif($e=='es') return 'o Espírito Santo'; elseif($e=='ma') return 'o Maranhão';
		elseif($e=='mt') return 'o Mato Grosso'; elseif($e=='ms') return 'o Mato Grosso do Sul';
		elseif($e=='mg') return 'e Minas Gerais'; elseif($e=='pa') return 'o Pará';
		elseif($e=='pb') return 'a Paraiba'; elseif($e=='pr') return 'o Paraná';
		elseif($e=='pe') return 'e Pernambuco'; elseif($e=='pi') return 'o Piauí';
		elseif($e=='rj') return 'o Rio de Janeiro'; elseif($e=='rn') return 'o Rio Grande do Norte';
		elseif($e=='rs') return 'o Rio Grande do Sul'; elseif($e=='ro') return 'e Rondônia';
		elseif($e=='rr') return 'e Roraima'; elseif($e=='sp') return 'e São Paulo';
		elseif($e=='sc') return 'e Santa Catarina'; elseif($e=='se') return 'e Sergipe';
		elseif($e=='to') return 'o Tocantins';
}

function estadoNome($e) {
	$e = estadoGenero($e);
	$e = preg_replace('%[aeo]\s{1}(.*)%u', '$1', $e);
	return $e;
}

//METABOX COMERCIALIZAÇÃO
$meta_boxes[] = array(
	'id'		=> 'comercial-1',
	'title'		=> 'Texto de Abertura',
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('comercializacao')),
	'fields' => array(
	array(
	'id' => "{$prefix}abertura",
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 6,
	'desc' => 'Tags disponíveis: &lt;b&gt;&lt;/b&gt para Negrito, &lt;i&gt;&lt;/i&gt Itálico, &lt;u&gt;&lt;/u&gt Sublinhando. &lt;br&gt; 	    Para quebra de linha.'
	),
	),
);

query_posts(array('post_type' => 'shoppings', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'));
if(have_posts()): while(have_posts()): the_post();
$title = get_the_title();
$slug = $post->post_name;

//METABOX COMERCIALIZAÇÃO-2
$meta_boxes[] = array(
	'id'		=> "comercial-2-{$slug}",
	'title'		=> "Contatos do {$title}",
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('comercializacao')),
	'fields' => array(
	array(
	'name' => 'Visível na Tabela?',
	'id' => "{$prefix}visible_{$slug}",
	'type' => 'checkbox',
	'class' => 'extended',
	'std' => 0,
	),
	array(
	'name' => 'Nome do Contato',
	'id' => "{$prefix}nome_{$slug}",
	'type' => 'text',
	'class' => 'extended',
	'size' => 50,
	'rows' => 1,
	),
	array(
	'name' => 'Telefone',
	'id' => "{$prefix}telefone_{$slug}",
	'type' => 'text',
	'class' => 'extended',
	'desc' => 'Formato (XX) [9]1234-5678. Use <b>/</b> para separar múltiplos telefones.',
	'rows' => 1,
	),
	array(
	'name' => 'E-Mail',
	'id' => "{$prefix}mail_{$slug}",
	'type' => 'text',
	'class' => 'extended',
	'size' => 40,
	'rows' => 1,
	),
	array(
	'name' => '<span style="text-decoration:line-through">Manual de Publicidade</span>',
	'id' => "{$prefix}manual_{$slug}",
	'desc' => 'Recurso ainda não disponível.',
	'type' => 'file',
	'class' => 'extended',
	'size' => 40,
	'rows' => 1,
	'max_files' => 1,
	'clone' => false,
	),
	),
);

endwhile; endif; wp_reset_query();

//METABOX CONTATO-1
$meta_boxes[] = array(
	'id'		=> 'contato-1',
	'title'		=> 'Contatos',
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('contato')),
	'fields' => array(
	array(
	'name' => '<b>Nome do Contato</b>/ <br/>E-mail',
	'id' => "{$prefix}contato",
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 2,
	'clone' => true,
	'desc' => 'E-mail reconhecido automaticamente, desde que no formato usuario@empresa.com(.xx)',
	),
	),
);

//METABOX CONTATO-2
$meta_boxes[] = array(
	'id'		=> 'contato-2',
	'title'		=> 'Texto de Encerramento',
	'pages'		=> array( 'page' ),
	'only_on' => array('slug' => array('contato')),
	'fields' => array(
	array(
	'id' => "{$prefix}encerramento",
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 6,
	'desc' => 'Tags disponíveis: &lt;b&gt;&lt;/b&gt para Negrito, &lt;i&gt;&lt;/i&gt Itálico, &lt;u&gt;&lt;/u&gt Sublinhado. &lt;br&gt; 	    Para quebra de linha.'
	),
	),
);

//METABOX SHOPPINGS-1
$meta_boxes[] = array(
	'id'		=> 'shoppings-1',
	'title'		=> 'Informações Básicas',
	'pages'		=> array( 'shoppings' ),
	'fields' => array(
	array(
	'name' => 'Localização',
	'id' => "{$prefix}localizacao",
	'type' => 'text',
	'class' => 'extended',
	'size' => 40,
	),
	array(
	'name' => 'Site',
	'id' => "{$prefix}site",
	'type' => 'text',
	'class' => 'extended',
	'size' => 70,
	),
	array(
	'name' => 'Serviços Prestados',
	'id' => "{$prefix}servicos",
	'type' => 'text',
	'class' => 'extended',
	'size' => 70,
	),
	array(
	'name' => 'Dados Técnicos',
	'id' => "{$prefix}dados",
	'type' => 'textarea',
	'class' => 'extended',
	'rows' => 6,
	'desc' => 'Use &lt;br&gt; para quebras de linha.'
	),
	),
);

//METABOX SHOPPINGS-2
$meta_boxes[] = array(
	'id'		=> 'shoppings-2',
	'title'		=> 'Galeria de Imagens',
	'pages'		=> array( 'shoppings' ),
	'fields' => array(
	array(
	'id' => "{$prefix}galeria",
	'type' => 'plupload_image',
	'max_file_uploads' => '9',
	),
	),
);*/



function rw_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;


	foreach ( $meta_boxes as $meta_box )
	{
		if ( isset( $meta_box['only_on'] ) && !rw_maybe_include( $meta_box['only_on'] ) )
			continue;

		new RW_Meta_Box( $meta_box );
	}
}

add_action( 'admin_init', 'rw_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include($conditions)
{
	// Include in back-end only
	if ( !defined( 'WP_ADMIN' ) || !WP_ADMIN )
		return false;

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX )
		return true;


	if ( isset( $_GET['post'] ) )
		$post_id = $_GET['post'];
	elseif ( isset( $_POST['post_ID'] ) )
		$post_id = $_POST['post_ID'];
	else
		$post_id = false;

	$post_id = (int) $post_id;

	foreach ( $conditions as $cond => $v )
	{
		// Catch non-arrays too
		if ( !is_array( $v ) )
			$v = array( $v );

		switch ( $cond )
		{
			case 'id':
				if ( in_array( $post_id, $v ) )
					return true;
			break;
			case 'slug':
				$post = get_post( $post_id );
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) )
					return true;
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) )
					return true;
			break;
		}
	}

	// If no condition matched
	return false;
}