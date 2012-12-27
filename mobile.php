<?php
/*
Template Name: Versión Móvil
*/
?>

<!DOCTYPE html>	
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<!-- Basic Page Needs
  ================================================== -->
	
	  <title><?php bloginfo('name'); ?></title>  	
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" />
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jqm-icon-pack-2.0-original.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mobile.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<!-- Facebook Specific Metas
  ================================================== -->
	<meta property="og:title" content="Promociones México"/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="fb:admins" content="10151083850065357"/>
	<meta property="og:description" content=""/>

<!-- JS Scripts
  ================================================== -->

	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img//imago.ico" type="image/x-icon" />

</head>
<body>
	
		<!-- Primary Page Layout
	================================================== -->

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<section id="home" data-role="page">
	<header data-role="header" class="ui-title ui-bar-b"> 
			<h1></h1> 
	</header> 
	<div data-role="content">		
			<figure class="ajuste">
				<img src="<?php bloginfo('template_directory'); ?>/img//logo.png" />
			</figure>
		</div><!--/content-primary-->
		<div class="content-primary">
			<nav>
				<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
					<li data-role="list-divider"></li>
					<li><a href="#quienes">¿Quiénes Somos?</a></li>
					<li><a href="#directorio">Directorio de Empresas</a></li>
					<li><a href="#bloglista">Blog</a></li>
					<li><a data-rel="dialog" href="#suscribete">¡Suscríbete!</a></li>
				</ul>
			</nav>
		</div>
	<footer data-role="footer" class="footer-docs ui-footer ui-bar-b" data-theme="b" data-position="fixed">
		<figure class="iconos">
			<a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//face.png"></a>
			<a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//twitter.png"></a>
			<a href="http://pinterest.com/promocionesm/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//pin.png"></a>

		</figure>
	</footer>

</section>

<!-- Quienes Somos -->

	<div id="quienes" data-role="page">
		<header data-role="header" class="ui-title ui-bar-b"> 
			<h1> </h1>
			<a href="#home" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-left ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Home"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a>
		</header> 
		<div data-role="content">
				<figure class="ajuste">
					<h1 id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></h1>
				</figure>
			<?php query_posts('category_name=sliderquienes&showposts=10'); ?>		
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<section class="descripcion">
				<article>
					<p><?php the_content(); ?></p>
					<br />
				<figure class="ajuste">
					<?php the_post_thumbnail() ?>
				</figure>
			</section>
			<?php endwhile ?> 
			<?php else : ?>
			<?php endif; ?>
		</div>
		<footer data-role="footer" class="footer-docs ui-footer ui-bar-b" data-theme="b" data-position="fixed">
			<figure class="iconos">
				<a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//face.png"></a>
				<a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//twitter.png"></a>
				<a href="http://pinterest.com/promocionesm/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//pin.png"></a>

			</figure>
		</footer>
	</div>

<!-- Directorio de Empresas -->

	<div id="directorio" data-role="page">
		<header data-role="header" class="ui-title ui-bar-b"> 
			<h1> </h1>
			<a href="#home" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-left ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Home"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a>
		</header> 	
		<ul data-role="listview" class="ui-listview">
			<?php
            // get all the categories from the database
            $cats = get_categories('exclude=1,4,22'); 
                // loop through the categries
                foreach ($cats as $cat) {
                    // setup the category ID
                    $cat_id= $cat->term_id;
                    // Make a header for the cateogry
                    echo "<li data-role='list-divider'>".$cat->name."</li>";
                    // create a custom wordpress query
                    query_posts("cat=$cat_id");
                    // start the wordpress loop!
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php // create our link now that the post is setup ?>
                        <li class="ui-li ui-li-static ui-btn-up-c ui-li-has-thumb">
          			<?php $counter = get_the_ID(); ?>
			<?php the_post_thumbnail(array('class' => 'ul-li-thumb')); ?>
			<h3 class="ui-li-heading"><a href="<?php echo '#negocio' . $counter ?>"><?php the_title(); ?></a></h3>
			<p class="ui-li-desc">Click para ver promociones</p>
		</li>

                    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                <?php } // done the foreach statement ?>
		</ul>
		<footer data-role="footer" class="footer-docs ui-footer ui-bar-b" data-theme="b" data-position="fixed">
			<figure class="iconos">
				<a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//face.png"></a>
				<a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//twitter.png"></a>
				<a href="http://pinterest.com/promocionesm/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//pin.png"></a>

			</figure>
		</footer>	
	</div>

<!-- Empresas -->
<?php
$cats = get_categories('exclude=>1,4,22'); 
foreach ($cats as $cat) {
$cat_id= $cat->term_id;
query_posts("cat=$cat_id");
if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $contador = get_the_ID(); ?>
<section id="<?php echo 'negocio' . $contador ?>" data-role="page">
	<div>		
	<header data-role="header" class="ui-title ui-bar-b"> 
		<br />
		<br />
		<a href="#directorio" data-icon="back" data-transition="fade" class="ui-btn-left ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Back"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"> </span><span class="ui-icon ui-icon-back ui-icon-shadow">&nbsp;</span></span></a>
		<a href="#home" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Home"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a>
	</header> 

	<h2><?php the_title(); ?></h1>
			<figure class="ajuste">
				<?php the_post_thumbnail(); ?>
			</figure>

			<div data-role="navbar" data-iconpos="top">
		<ul>
			<li><a href="<?php echo rwmb_meta( 'rw_direccionweb' ); ?>" data-icon="star" data-theme="b" target="_blank">Website</a></li>
			<li><a href="<?php echo rwmb_meta( 'rw_facebookweb' ); ?>" data-icon="facebook" data-theme="b" target="_blank">Facebook</a></li>
			<li><a href="<?php echo rwmb_meta( 'rw_mapamoviles' ); ?>" data-icon="mappin" data-theme="b" target="_blank">Ubicación</a></li>
			<li><a href="<?php echo 'tel:' . rwmb_meta('rw_telefono'); ?>" data-icon="grid" data-theme="b" target="_blank">Llamar</a></li>
		</ul>
	</div><!-- /navbar -->
	</div><!--/content-primary-->
	<div class="content-primary">
	<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-bar-b"><?php echo rwmb_meta('rw_telefono'); ?></li>
	<li data-role="list-divider" role="heading" class="ui-li ui-li-divider ui-bar-b"><?php echo rwmb_meta('rw_establecimiento'); ?></li>
		<!-- AddThis Button BEGIN -->
<div style="margin-left:10px;" class="addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>"
                    addthis:title="<?php the_title(); ?>"
                    addthis:description:"the_excerpt();">
                    <br />
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<br />
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d926e16f47b2bf"></script>
<!-- AddThis Button END -->
			<nav>
			<p><?php echo the_content(); ?></p>
			<?php 
        		$promociones = rwmb_meta('rw_promociones', 'type=text');
        		foreach ( $promociones as $promocion )
		{
    			echo '<p><blockquote>' . $promocion . '</blockquote></p>';
		}
        		?>
			</nav>
		</div>	
		<footer data-role="footer" class="footer-docs ui-footer ui-bar-b" data-theme="b" data-position="fixed">
			<figure class="iconos">
				<a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//face.png"></a>
				<a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//twitter.png"></a>
				<a href="http://pinterest.com/promocionesm/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//pin.png"></a>
			</figure>
		</footer>	
</section>

<?php endwhile ?>
<?php else : ?>
<?php endif; ?>
<?php } // done the foreach statement ?>

<!-- Blog - Lista -->

<div id="bloglista" data-role="page">
		<header data-role="header" class="ui-title ui-bar-b"> 
			<h1> </h1>
			<a href="#home" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-left ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Home"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a>
		</header> 	
		<ul data-role="listview" class="ui-listview">
			<?php
            // get all the categories from the database
            $cats = get_categories('include=1'); 
                // loop through the categries
                foreach ($cats as $cat) {
                    // setup the category ID
                    $cat_id= $cat->term_id;
                    // Make a header for the cateogry
                    echo "<li data-role='list-divider'>".$cat->name."</li>";
                    // create a custom wordpress query
                    query_posts("cat=$cat_id");
                    // start the wordpress loop!
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php // create our link now that the post is setup ?>
                        <li class="ui-li ui-li-static ui-btn-up-c ui-li-has-thumb">
          			<?php $counter = get_the_ID(); ?>
			<?php the_post_thumbnail(array('class' => 'ul-li-thumb')); ?>
			<h3 class="ui-li-heading"><a href="<?php echo '#blog' . $counter ?>"><?php the_title(); ?></a></h3>
			<p class="ui-li-desc"><?php the_author(); ?> | <?php the_date(); ?></p>
		</li>

                    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                <?php } // done the foreach statement ?>
		</ul>
		<footer data-role="footer" class="footer-docs ui-footer ui-bar-b" data-theme="b" data-position="fixed">
			<figure class="iconos">
				<a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//face.png"></a>
				<a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//twitter.png"></a>
				<a href="http://pinterest.com/promocionesm/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//pin.png"></a>

			</figure>
		</footer>	
	</div>

<!-- Blog - Contenido -->

<?php
$cats = get_categories('include,1'); 
foreach ($cats as $cat) {
$cat_id= $cat->term_id;
query_posts("cat=$cat_id");
if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $contador = get_the_ID(); ?>
<section id="<?php echo 'blog' . $contador ?>" data-role="page">
	<div>		
	<header data-role="header" class="ui-title ui-bar-b"> 
		<br />
		<br />
		<a href="#bloglista" data-icon="back" data-transition="fade" class="ui-btn-left ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Back"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text"> </span><span class="ui-icon ui-icon-back ui-icon-shadow">&nbsp;</span></span></a>
		<a href="#home" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right ui-btn ui-shadow ui-btn-corner-all ui-btn-icon-notext ui-btn-up-b" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b" title="Home"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Home</span><span class="ui-icon ui-icon-home ui-icon-shadow">&nbsp;</span></span></a>
	</header> 

	<h2><?php the_title(); ?></h1>
			<figure class="ajuste">
				<?php the_post_thumbnail(); ?>
			</figure>
	</div><!--/content-primary-->
	<div class="content-primary">
		<p><b>Fecha:</b> <?php the_date(); ?> </p>
		<p><b>Por:</b> <?php the_author(); ?></p>
		<!-- AddThis Button BEGIN -->
<div style="margin-left:10px;" class="addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>"
                    addthis:title="<?php the_title(); ?>"
                    addthis:description:"the_excerpt();">
                    <br />
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<br />
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d926e16f47b2bf"></script>
<!-- AddThis Button END -->
			<p><?php echo the_content(); ?></p>
		</div>	
		<footer data-role="footer" class="footer-docs ui-footer ui-bar-b" data-theme="b" data-position="fixed">
			<figure class="iconos">
				<a href="http://www.facebook.com/promomexico" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//face.png"></a>
				<a href="http://www.twitter.com/promocionesm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//twitter.png"></a>
				<a href="http://pinterest.com/promocionesm/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img//pin.png"></a>
			</figure>
		</footer>	
</section>

<?php endwhile ?>
<?php else : ?>
<?php endif; ?>
<?php } // done the foreach statement ?>

<!-- Suscríbete -->

<section id="suscribete" data-role="page" data-theme="e">
<div>

<header data-role="header" class="ui-title ui-bar-e"> 
			<h1> </h1>
		</header> 	

            <div class="mailchimp">
              <!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://promocionesmexico.us6.list-manage.com/subscribe/post?u=e9b966bcb805706b460253d14&amp;id=53e650da67" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <h2>¡Suscríbete! </h2>
    <p>¡Lo mejor en promociones para eventos sociales!</p>
<div class="mc-field-group">
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="  Tu Correo Electrónico" />
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
    </div>  <div class="clear"><input type="submit" value="¡Me quiero suscribir!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    <label for="mce-EMAIL"><span class="asterisk">*Recibirás un correo y debes confirmarlo para suscribirte completamente.</span>
    	<br />
    	<span class="asterisk">*Si el botón no genera alguna acción, da "Enter, Intro o Go" con tu teléfono cuando escribas el correo electrónico.</span>
</label>
  </form>
  </div>
<!--End mc_embed_signup-->  
	</div>
	<div class="parrafocontacto">
	<p>
		¿Necesitas apoyo para organizar tu evento social?
	</p>
	<p>
		¿Eres una empresa relacionada con la organización de eventos sociales y te interesa estar en el directorio?
	</p>
	<p>¡Contáctanos!</p>
	<br />
	<a target="_blank" href="mailto:info@promocionesmexico.net"><p style="font-weight: bold; color: white; text-decoration: underline">info@promocionesmexico.net</p></a>
              <br />
              <br />
          </div>
          </div>
</section>


<!-- JS
    ================================================== -->
	
</body>
</html>