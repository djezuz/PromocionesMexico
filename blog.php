<?php
/*
Template Name: Blog
*/
?>

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
                        <?php $i = 0; ?>
                        <?php query_posts('category_name=blog'); ?>
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php 
                $i++;
                        $counter = get_the_ID(); 
                        $hola = "#text";
                        ?>  
                            <li class="cuadros">
                                    <a href="<?php echo $hola . $i ?>" rel="inline"><?php the_post_thumbnail() ?></a>
                    <div><?php the_title(); ?></div>
                            </li>
                            <?php endwhile ?>
                <?php else : ?>
                <?php endif; ?>
                    </ul>
        </div>
    </div>
</div>

<?php $i = 0; ?>
<?php query_posts('category_name=blog'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php 
$i++;
$counter = get_the_ID(); 
$hola = "text";
?>
<div id="<?php echo $hola . $i ?>">
	<div class="imagenempresa">
		<div class="imagen">
			<?php the_post_thumbnail() ?>
			<?php echo $i ?>
			<p><b>Fecha: </b><?php echo the_date(); ?></p>
			<p><b>Por: </b><?php the_author(); ?></p>
			<!-- AddThis Button BEGIN -->
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>"
                    addthis:title="<?php the_title(); ?>"
                    addthis:description:"the_excerpt();">
                    <br />
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<br />
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d926e16f47b2bf"></script>
<!-- AddThis Button END -->
		</div>
    		
	</div>
    	<div class="descripcionempresa">
		<h2><?php the_title(); ?></h2>
        		<br />
		<p><?php the_content(); ?></p>
	</div>
    	<div class="comments">
	</div>
</div>
<?php endwhile ?>
<?php else : ?>
<?php endif; ?>

<!-- JS
    ================================================== -->


</body>
</html>