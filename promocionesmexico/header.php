<!DOCTYPE html> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->

  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>  	
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
  <meta name="description" content="Promociones México es...">
  <meta name="author" content="Conexion Web">
  <meta name="robots" content="all">
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />      
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 	

  <!-- Mobile Specific Metas
  ================================================== -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS
  ================================================== -->
<link href="<?php bloginfo('template_directory'); ?>/css/normalize.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/allinone_contentSlider.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/example.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/grid-slider.css"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />  


  <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
  
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Facebook Specific Metas (Agregados en functions.php)
  ================================================== -->

  <meta property="og:title" content="Promociones México"/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="fb:admins" content="10151083850065357"/>
  <meta property="og:description" content=""/>
    


  <!-- Favicons
  ================================================== -->

  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/imago.ico" />
  

  <!-- JS Scripts
  ================================================== -->
     	
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.js"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>

     <script src="<?php bloginfo('template_directory'); ?>/js/allinone_contentSlider.js" type="text/javascript"></script>
     <script src="<?php bloginfo('template_directory'); ?>/js/reflection.js" type="text/javascript"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.grid-slider.js"></script>
     
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/analytics.js"></script>
     


<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->


</head> 
<body> 

    <!-- Primary Page Layout
  ================================================== -->

    <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <header>
  <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" />
  <div class="bloquederecho">
    <?php get_search_form(); ?>
    <a href="http://www.facebook.com/promomexico" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" class="facebook" />
    </a>
    <a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twit.png" /></a>
    <a href="http://www.pinterest.com/promocionesm" target="_blank">
      <img src="<?php bloginfo('template_directory'); ?>/img/pinterest.png" />
    </a>
  </div>
</header>
<nav>
  <ul>
    <li>
      <a href="<?php echo site_url() ?>/index"><img src="<?php bloginfo('template_directory'); ?>/img/home.png" />
      Home
      </a>
    </li>
    <li>
      <a href="<?php echo site_url() ?>/quienessomos">
      <img src="<?php bloginfo('template_directory'); ?>/img/somos.png" />
      ¿Quiénes Somos?
      </a>
    </li>
    <li>
      <a href="<?php echo site_url() ?>/directorio">
      <img src="<?php bloginfo('template_directory'); ?>/img/lupita.png" />
      Directorio de Empresas
      </a>
    </li>
    <li>
      <a href="<?php echo site_url() ?>/blog">
      <img src="<?php bloginfo('template_directory'); ?>/img/blog.png" />
      Blog
      </a>
    </li>
    <li>
      <a href="#contacto">
      <img src="<?php bloginfo('template_directory'); ?>/img/contactanos.png" />
      Contáctanos
      </a>
        <div class="lb-overlay" id="contacto">
          <a href="#page" class="lb-close">x Cerrar</a>
          <div>
            <div class="parrafocontacto">
            <p>
              ¿Necesitas apoyo para organizar tu evento social?
            </p>
            <p>
              ¿Eres una empresa relacionada con la organización de eventos sociales y te interesa estar en el directorio?
            </p>
            
            <p>¡Contáctanos!</p>
            <br />
            
            
              <p style="font-weight: bold">promocionesmexico@ejemplo.com</p>
              <br />
              <br />
              <a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/face.png" /></a>
              <a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" /></a>
              <a href="http://www.pinterest.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/pin.png" /></a>

          </div>
          </div>
        </div>
    </li>
</nav>