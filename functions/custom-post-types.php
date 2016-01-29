<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado */
add_action('init', 'blog_register');
function blog_register() {
	 $labels = array(
			'name' => 'Serviços',
			'singular_name' => 'Post',
			'all_items' => 'Todos Serviços',
			'add_new' => 'Adicionar Serviço',
			'add_new_item' => 'Adicionar novo Serviço',
			'edit_item' => 'Editar Serviço',
			'new_item' => 'Novo Serviço',
			'view_item' => 'Ver Serviço',
			'search_items' => 'Procurar Serviço',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('categoria-servicos'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery'),
			'rewrite' => array('slug' => 'item-servicos')
	  );
	register_post_type('servicos',$args);
}

/* ----------------------------------------------------- */
/* Taxonomias */
/* ----------------------------------------------------- */
/* Criando uma Taxonomia Personalizada */
register_taxonomy("categoria-servicos", array("servicos"), 
	array(
		"hierarchical" => true, 
		"label" => "categoria-servicos", 
		"singular_label" => "categoria servicos",
		'rewrite' => array( 'slug' => 'categoria-servicos' )
	)
);

/*******************************************************/


?>