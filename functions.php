<?php 

define('MIPPCI', 1.0);

// Añade la posibilidad de RSS dentro del Sitio Web
add_theme_support('automatic-feed-links');

// Añade funcionalidades de HTML5
add_theme_support('html5', array( 'search-form', 'comment-form', 'comment-list' ));

// Añade soporte de los formatos de entradas
add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));

// Añade la funcionalidad de Soporte de Thumbnails e Imagenes Destacadas
add_theme_support('post-thumbnails');

// Añade menús al tema para personalizar su ubicación
register_nav_menus(
	array(
		'primary'	=>	'Principal', // Register the Primary menu
	)
);

// Función que permite incorporar al tema Hojas de Estilos y Scripts de javascripts
function ara_styles_scripts() {
	// Añade script para mover el form de comentarios
	if (is_singular() && comments_open() && get_option('thread_comments')):
		wp_enqueue_script( 'comment-reply' );
	endif;

	// Añade las Hojas de Estilos
	wp_enqueue_style( 'mippci_css_1', get_template_directory_uri() . '/style.css', '10000', 'all' );
	//wp_enqueue_style( 'mippci_global', get_template_directory_uri() . '/style.css', '10000', 'all' );
	//wp_enqueue_style( 'mippci_global', get_template_directory_uri() . '/style.css', '10000', 'all' );
	//wp_enqueue_style( 'mippci_global', get_template_directory_uri() . '/style.css', '10000', 'all' );
			
	// Añade JavaScripts
	//wp_enqueue_script( 'mippci_js_1', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), MIPPCI, true );
}
add_action( 'wp_enqueue_scripts', 'ara_styles_scripts' );

 ?>