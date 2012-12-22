<script type="text/javascript">
<!--
if (screen.width <= 600) {
window.location = "<?php echo site_url() ?>/mobile";
}
//-->
</script>
<?php get_header(); ?>

<script>
jQuery(function() {

jQuery('#allinone_contentSlider_imposing').allinone_contentSlider({
skin: 'imposing',
width: 918,
height: 300,
autoHideBottomNav:false,
showPreviewThumbs:false,
autoPlay: 3.5,

}); 


});
</script>

<section class="slider">

<div id="allinone_contentSlider_imposing">
<!-- CONTENT -->
<ul class="allinone_contentSlider_list">
<?php query_posts('category_name=sliderhome&showposts=10'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php
             $counter = get_the_ID();
             $hola = "allinone_contentSlider_photoText" . $counter;
             ?>	
<li data-text-id="#<?php echo $hola ?>"><?php the_post_thumbnail() ?></li> 
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
		
</div> 

	<?php endwhile ?> 
	<?php else : ?>
	<?php endif; ?>
<!-- --> 

</div>

 

</section>

<!-- JS
    ================================================== -->

<?php get_footer(); ?>