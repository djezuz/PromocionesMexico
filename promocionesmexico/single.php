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
<!-- inline 1 example -->
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
        <img src="<?php bloginfo('template_directory'); ?>/img/dianaflower.png" />    
    </div>
    <div class="descripcionempresa">
        <h2>Hola Mundo</h2>
        <p>Entre las cosas que me han parecido interesantes</p>
    </div>
</div>