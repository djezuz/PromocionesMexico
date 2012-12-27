<?php
function personalizar_login() {
    echo '<style type="text/css">
          h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logo.png) !important;}
          .login h1 a{
          background-size: 328px 146px !important;
          margin-top: 0px;
          padding-bottom: 80px;
          }
    </style>';
}
add_action('login_head', 'personalizar_login');
?>
<?php if (function_exists('add_theme_support')) { add_theme_support('post-thumbnails'); } ?>
<?php function limitar_palabras( $str, $num, $append_str='' ) {
  $palabras = preg_split( '/[\s]+/', $str, -1, PREG_SPLIT_OFFSET_CAPTURE );
  if( isset($palabras[$num][1]) ){
    $str = substr( $str, 0, $palabras[$num][1] ) . $append_str;
  }
  unset( $palabras, $num );
  return trim( $str );
} ?>
<?php
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
function wpc_dashboard_widgets() {
	global $wp_meta_boxes;
	// Today widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	// Last comments
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	// Incoming links
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// Plugins
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
      // Plugins
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_quick_press']);
	// Créditos
	unset($wp_meta_boxes['dashboard']['normal']['core']['wp_dashboard_widget']);
}
?>
<?php
add_action( 'admin_init', 'rw_register_meta_boxes' );
function rw_register_meta_boxes()
{
    $prefix = 'rw_';
    $meta_boxes = array();
    // Here is the code to define a meta box
    $meta_boxes[] = array(
        'title'    => 'Directorio de Empresas',
        'pages'    => array( 'post', 'page' ),
        'fields' => array(
            array(
            // Field name - Will be used as label
            'name'  => 'Promociones de la empresa',
            // Field ID, i.e. the meta key
            'id'   => $prefix . 'promociones',
            // Field description (optional)
            'desc'  => 'Si necesitas agregar más promociones, da click al signo más a la derecha',
            'type'  => 'text',
            // Default value (optional)
            'std'   => '¡Próximamente más promociones!',
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
            'clone' => true,
            ),
            array(
                'name' => 'Dirección Web',
                'id'   => $prefix . 'direccionweb',
                'std'   => 'http://www',
                'type' => 'text',
            ),
            array(
                'name' => 'Teléfono',
                'id'   => $prefix . 'telefono',
                'std'   => 'http://www',
                'type' => 'text',
            ),
            array(
                'name' => 'Facebook',
                'id'   => $prefix . 'facebookweb',
                'std'   => 'http://www',
                'type' => 'text',
            ),
            array(
                'name' => 'Twitter',
                'std'   => 'http://www',
                'id'   => $prefix . 'twitterweb',
                'type' => 'text',
            ),
            array(
                'name' => 'Dirección o Establecimiento',
                'id'   => $prefix . 'establecimiento',
                'std'   => 'http://www',
                'desc' => '<a target="_blank" href="https://maps.google.com/">Buscar Dirección</a>',
                'type' => 'text',
            ),
            array(
                'name' => 'Mapa Móviles',
                'std'   => '<iframe',
                'id'   => $prefix . 'mapamoviles',
                'type' => 'text',
            ),
            array(
                'name' => 'Mapa Web',
                'id'   => $prefix . 'mapa',
                'type' => 'text',
            ),
        )
    );
    foreach ( $meta_boxes as $meta_box )
    {
        new RW_Meta_Box( $meta_box );
    }
}
?>
<?php
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','SearchFilter');
?>