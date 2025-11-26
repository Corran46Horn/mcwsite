<?php

// include_once( 'gutenberg-blocks.php' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'main' => __('Main', 'mac'),
      'footer' => __('Footer', 'mac'),
    )
  );
}
add_action('init', 'register_theme_menus');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(
		array(
			'page_title' => 'Opcje motywu',
		)
	);
}

add_theme_support( 'post-thumbnails' );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .wp-block { max-width: 100% !important; }
  </style>';
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function wpdocs_codex_member_init() {
  $labels = array(
    'name'                  => _x( 'Wizyta studyjna', 'Post type general name', 'mac' ),
    'singular_name'         => _x( 'Wizyta studyjna', 'Post type singular name', 'mac' ),
    'menu_name'             => _x( 'Wizyta studyjna', 'Admin Menu text', 'mac' ),
    'name_admin_bar'        => _x( 'Wizyta studyjna', 'Add New on Toolbar', 'mac' ),
    'add_new'               => __( 'Dodaj nową wizytę studyjną', 'mac' ),
    'add_new_item'          => __( 'Dodaj nową wizytę studyjną', 'mac' ),
    'new_item'              => __( 'Nowa wizyta', 'mac' ),
    'edit_item'             => __( 'Edytuj dane', 'mac' ),
    'view_item'             => __( 'Zobacz', 'mac' ),
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'editor', 'thumbnail', 'author', 'excerpt'),
    'show_in_rest'       => true,
    'menu_icon'          => 'dashicons-admin-site-alt',
  );
  register_post_type( 'visits', $args );
}
add_action( 'init', 'wpdocs_codex_member_init' );


