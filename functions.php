<?php

/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/moshi.php',							//Moshi	
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ($understrap_includes as $file) {
	require_once get_theme_file_path($understrap_inc_dir . $file);
}

// add_filter( 'the_title', function ($title) { return "";});

function wpb_list_child_pages()
{
	global $post;

	if (is_page() && $post->post_parent)

		$childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0');
	else
		$childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');

	if ($childpages) {

		$string = '<ul class="wpb_page_list">' . $childpages . '</ul>';
	}

	return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');


function post_about_us()
{
	$labels = array(
		'name'                  => _x('Nosotros', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Nosotros', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Nosotros', 'text_domain'),
		'name_admin_bar'        => __('Nosotros', 'text_domain'),
		'archives'              => __('Listado de Nosotros', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Items', 'text_domain'),
		'add_new_item'          => __('Agregue Nuevos Aspectos sobre el Proyecto', 'text_domain'),
		'add_new'               => __('Agregar Nuevo', 'text_domain'),
		'new_item'              => __('Nuevo Proyecto', 'text_domain'),
		'edit_item'             => __('Editar Proyecto', 'text_domain'),
		'update_item'           => __('Actualizar Proyecto', 'text_domain'),
		'view_item'             => __('Ver Proyecto', 'text_domain'),
		'view_items'            => __('Ver Proyecto', 'text_domain'),
		'search_items'          => __('Buscar Proyecto', 'text_domain'),
		'not_found'             => __('No se encuentra', 'text_domain'),
		'not_found_in_trash'    => __('No se encuentra en papelera', 'text_domain'),
		'featured_image'        => __('Portada de Proyecto', 'text_domain'),
		'set_featured_image'    => __('Establecer Portada', 'text_domain'),
		'remove_featured_image' => __('Remover Portada', 'text_domain'),
		'use_featured_image'    => __('Usar Imagen destacada', 'text_domain'),
		'insert_into_item'      => __('Insertar dentro de Programa', 'text_domain'),
		'uploaded_to_this_item' => __('Subido al Proyecto', 'text_domain'),
		'items_list'            => __('Lista de Proyecto', 'text_domain'),
		'items_list_navigation' => __('Navegación de la lista de Nosotros', 'text_domain'),
		'filter_items_list'     => __('Filtrar Lista de Nosotros', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Post Nosotro', 'text_domain'),
		'description'           => __('Post Type Description', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'comments'),
		'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cover-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'nosotros',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('post_type_about_us', $args);
}
add_action('init', 'post_about_us', 0);

// Register Custom Post Type
function post_projects() {

	$labels = array(
		'name'                  => _x( 'Proyectos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Proyectos', 'text_domain' ),
		'name_admin_bar'        => __( 'Proyectos', 'text_domain' ),
		'archives'              => __( 'Archivos del Proyecto', 'text_domain' ),
		'attributes'            => __( 'Atributos del Proyecto', 'text_domain' ),
		'parent_item_colon'     => __( 'Proyecto padre', 'text_domain' ),
		'all_items'             => __( 'Todos los proyectos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar Nuevo Proyecto', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Proyecto', 'text_domain' ),
		'edit_item'             => __( 'Editar Proyecto', 'text_domain' ),
		'update_item'           => __( 'Actualizar Proyecto', 'text_domain' ),
		'view_item'             => __( 'Ver Proyecto', 'text_domain' ),
		'view_items'            => __( 'Ver todos los proyectos', 'text_domain' ),
		'search_items'          => __( 'Buscar Proyecto', 'text_domain' ),
		'not_found'             => __( 'No se encuentra el Proyecto', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra el Proyecto en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada del Proyecto', 'text_domain' ),
		'set_featured_image'    => __( 'Detalles de la imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen destacada del Proyecto', 'text_domain' ),
		'use_featured_image'    => __( 'Elegir ésta magen para el Proyecto', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar dentro del Proyecto', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Proyecto', 'text_domain' ),
		'description'           => __( 'Proyectos de la Campaña', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'post_projects', 0 );
function video_function()
{
	add_theme_support('post-thumbnails');

	// Asignamos entre comillados el nombre que llevara la funcion especial.
	register_post_type('videos', array(
		'labels' => array(
			'name' => 'Video Promocional',
			// 'add_new_item' => 'Agregar Testimonio'
		),
		'public' => true,
		'menu_icon' => 'dashicons-heart',
		'show_ui' => true,
		'show_in_menu' => 'themes.php',
		'supports' => array('title', 'editor', 'custom-fields')
	));
}
// add_action('after_setup_theme', video_function());

// function network_update_function()
// {
// 	add_theme_support('post-thumbnails');

// 	register_post_type('networkUpdate', array(
// 		'labels' => array(
// 			'name' => 'Visitas',
// 			'add_new_item' => 'Agregar Nueva Entrada'
// 		),
// 		'public' => true,
// 		'menu_icon' => 'dashicons-networking',
// 		'show_ui' => true,
// 		'show_in_menu' => 'themes.php',
// 		'supports' => array('title', 'editor', 'thumbnail')
// 	));
// }
// add_action('after_setup_theme', network_update_function());

// function testimonials_function()
// {
// 	add_theme_support('post-thumbnails');
// 	register_post_type('testimonials', array(
// 		'labels' => array(
// 			'name' => 'Testimonios',
// 			'add_new_item' => 'Agregar Testimonio'
// 		),
// 		'public' => true,
// 		'menu_icon' => 'dashicons-heart',
// 		'show_ui' => true,
// 		'show_in_menu' => 'themes.php',
// 		'supports' => array('title', 'editor', 'thumbnail')
// 	));
// }
// add_action('after_setup_theme', testimonials_function());
