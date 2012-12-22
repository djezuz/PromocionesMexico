<?php get_header(); ?>

<script type="text/javascript">
$(document).ready(	
	function() {
		//initialize slider
		$(".container1").gridSlider({
			num_cols:4,
			num_rows:2,
			tile_width:225,
			tile_height:150,
			tile_margin:5,
			tile_border:1,			
			margin:10,			
			auto_scale:true,
			auto_center:true,
			auto_rotate:false,
			delay:6000,
			mouseover_pause:false,
			effect:"h_slide",	
			duration:500,
			easing:"",
			display_panel:true,
			panel_direction:"bottom",
			display_timer:false,
			display_dbuttons:true,
			mouseover_dbuttons:true,			
			display_numinfo:true,
			display_index:true,
			display_number:true,
			display_play:true,
			display_caption:true,
			mouseover_caption:false,
			caption_effect:"fade",			
			caption_position:"inside",
			caption_align:"bottom",					
			caption_width:0,
			caption_height:0,
			cont_nav:true,
			shuffle:false,
			category_index:0,
			mousewheel_scroll:true
		});
	}
);
</script>

<div class="container1">
	<div class="g-slider">       
    	<div class="tiles">
        	<ul>
                  <li class="cuadros">
                    <a href="#text1" rel="inline"><img src="<?php bloginfo('template_directory'); ?>/img/dianaflower.png" alt=""/></a>
                    <div>Diana's Flower Design</div>
                </li>
          	</ul>


<!-- inline 1 example -->
<div id="text1">
    <div class="imagenempresa">
    	<div class="imagen">
        <img src="<?php bloginfo('template_directory'); ?>/img/dianaflower.png" />    
    </div>
    
    <div class="sitioweb">
        <a href="http://www.dianasflowersdesign.com" target="_blank"><p>www.dianasflowersdesign.com</p></a>
    </div>
    <div class="red">
        <img src="<?php bloginfo('template_directory'); ?>/img/fb-circ.png" />    
        <img src="<?php bloginfo('template_directory'); ?>/img/twit-circ.png" />    
    </div>
    

    </div>
    <div class="descripcionempresa">

        <h2>Diana's Flower Design</h2>
        <p>El diseño y elegancia en un evento social es una prioridad. Los mejores decoradores de flores en Chicago.</p>
        <br />

        <p><blockquote>50% de Descuendo en ramos hasta el 28 de Diciembre de 2012.</blockquote></p>
        <p><blockquote>70% de Descuendo en arreglos hasta el 29 de Diciembre de 2012.</blockquote></p>
        <p><blockquote>90% de Descuendo en arreglos hasta el 29 de Diciembre de 2012.</blockquote></p>
        <p><blockquote>Un arreglo gratis envíando un tweet a @dianasflowers, antes del 29 de Diciembre de 2012.</blockquote></p>

    </div>
    <div class="mapa">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=1842+s+Blue+Island++Chicago+IL+60608&amp;aq=&amp;sll=19.041349,-98.193054&amp;sspn=0.189854,0.308647&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=1842+S+Blue+Island+Ave,+Chicago,+Cook,+Illinois+60608,+Estados+Unidos&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=1842+s+Blue+Island++Chicago+IL+60608&amp;aq=&amp;sll=19.041349,-98.193054&amp;sspn=0.189854,0.308647&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=1842+S+Blue+Island+Ave,+Chicago,+Cook,+Illinois+60608,+Estados+Unidos&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>
    </div>

    <div class="comments">

    </div>

</div>

<!-- JS
    ================================================== -->


</body>
</html>