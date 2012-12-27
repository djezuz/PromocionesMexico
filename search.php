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
                        <?php
                        if(!$wp_query) global $wp_query;
                        query_posts( array_merge( array( 'category__not_in' => array(4,22) ) , $wp_query->query ) );
                        ?>
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
        </div>
            <div class="sitioweb">
                    <a target="_blank" href="<?php echo rwmb_meta( 'rw_direccionweb' ); ?>" target="_blank"><p><?php echo rwmb_meta( 'rw_direccionweb' ); ?></p></a>
            </div>
            <div class="red">
                    <a target="_blank" href="<?php echo rwmb_meta( 'rw_facebookweb' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/fb-circ.png" /></a>
                    <a target="_blank" href="<?php echo rwmb_meta( 'rw_twitterweb' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/twit-circ.png" /></a>
            </div>    
    </div>
        <div class="descripcionempresa">
        <h2><?php the_title(); ?></h2>
        <div class="basicos">
            <img src="<?php bloginfo('template_directory'); ?>/img/casita.jpg" /><p><?php echo rwmb_meta( 'rw_establecimiento' ); ?></p>
            </br>
            <img src="<?php bloginfo('template_directory'); ?>/img/telefonito.jpg" /><p><?php echo rwmb_meta( 'rw_telefono' ); ?></p>
        </div>
        <p><?php the_content(); ?></p>
                <br />
                <?php 
                $promociones = rwmb_meta('rw_promociones', 'type=text');
                foreach ( $promociones as $promocion )
{
    echo '<p><blockquote>' . $promocion . '</blockquote></p>';
}
                ?>
    </div>
        <div class="mapa">
                <?php echo rwmb_meta( 'rw_mapa' ); ?>
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