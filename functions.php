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
function my_new_contactmethods( $contactmethods ) {
  
//add Descripcion
  $contactmethods['descripcion'] = 'Descripcion';
  // Add Twitter
  $contactmethods['twitter'] = 'Twitter';
  //add Facebook
  $contactmethods['facebook'] = 'Facebook';
  //add Pinterest
  $contactmethods['pinterest'] = 'Pinterest';
  //add LinkedIN
  $contactmethods['linkedin'] = 'Linkedin';
  //add Behance
  $contactmethods['behance'] = 'Behance';
  //add Github
  $contactmethods['github'] = 'Github';
  return $contactmethods;
   // Remove Yahoo IM
  unset($contactmethods['yim']);
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);
?>