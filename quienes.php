<?php
/*
Template Name: Quienes Somos
*/
?>
<?php get_header(); ?>


<style type="text/css">

.allinone_contentSlider img
{
	max-width: 380px;
	max-height: none;
	margin-left: 0;
}

</style>
	<script>
		jQuery(function() {

			jQuery('#allinone_contentSlider_surprise').allinone_contentSlider({
				skin: 'surprise',
				width: 960,
				height: 300,
				autoHideBottomNav:true,
				showPreviewThumbs:false,
				autoHideNavArrows:true,
				autoplay: false


			});		
			
			
		});
	</script>

<section class="slider">


            <div id="allinone_contentSlider_surprise">
                <!-- CONTENT -->
                <ul class="allinone_contentSlider_list">
		<?php query_posts('category_name=sliderquienes&showposts=10'); ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php
		$counter = get_the_ID();
		$hola = "allinone_contentSlider_photoText" . $counter;
		?>	
		<li data-text-id="#<?php echo $hola ?>"></li> 
		<?php endwhile ?> 
		<?php else : ?>
		<?php endif; ?>
                </ul>    
                
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php
                $counter = get_the_ID();
                  $hola = "allinone_contentSlider_photoText" . $counter;
                ?>

                <!-- TEXTS -->
              <div id="<?php echo $hola ?>" class="allinone_contentSlider_texts">                  
                    <div class="allinone_contentSlider_text_line" data-initial-left="120" data-initial-top="10" data-final-left="42" data-final-top="10" data-duration="0.5" data-fade-start="0" data-delay="1.1">
                    	<?php the_post_thumbnail() ?>
                    </div>
                    	
                    <div class="allinone_contentSlider_text_line textElement13_surprise" data-initial-left="520" data-initial-top="40" data-final-left="490" data-final-top="40" data-duration="0.5" data-fade-start="0" data-delay="0.5">
                    	<?php
              the_content();
            ?></div> 
                   
               </div>                      
               
               <?php endwhile ?> 
                <?php else : ?>
                <?php endif; ?>
              
               
           </div>  
           
  
</section>

<!-- JS
    ================================================== -->


</body>
</html>