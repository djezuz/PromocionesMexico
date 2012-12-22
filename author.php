<?php get_header(); ?>
		<div id="contenedorcentral grid_16"> 
		  <?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
		  	 <div class="grid_11 redaccion alpha omega">
		  	
		  	 	
		  	<div class="imagenprincipal grid_3 omega">
		  	 	<?php echo get_avatar( $curauth->ID, $size = '120'); ?>

      </div>
	   
<div class="resumen grid_8 alpha omega">
            <div class="grid_7 alpha">
                <p><a class="autorcolor" href="#" title="<?php echo $curauth->display_name ?>"><?php echo $curauth->display_name ?></a></p>
          </div>
        
        <div class="clear"></div>
<p class="grid_7 fuentegris bio alpha"><?php echo the_author_meta('descripcion', $curauth->ID)?>  </p>
<div class="clear"></div>

<?php
$facebook = get_the_author_meta('facebook',$curauth->ID);
$bloginfo = get_bloginfo('template_directory');
if($facebook){
echo "<a href='" . $facebook . "'>
  <img class='socialautor' src='" . $bloginfo . "/images/face.png'  alt='facebook'></a>";
}
 ?>

<?php
$twitter = get_the_author_meta('twitter',$curauth->ID);
$bloginfo = get_bloginfo('template_directory');
if($twitter){
echo "<a href='" . $twitter . "'>
  <img class='socialautor' src='" . $bloginfo . "/images/twitter.jpg'  alt='twitter'></a>";
}
 ?>

<?php
$pinterest = get_the_author_meta('pinterest',$curauth->ID);
$bloginfo = get_bloginfo('template_directory');
if($pinterest){
echo "<a href='" . $pinterest . "'>
  <img class='socialautor' src='" . $bloginfo . "/images/pinterest.png'  alt='pinterest'></a>";
}
 ?>

<?php
$linkedin = get_the_author_meta('linkedin',$curauth->ID);
$bloginfo = get_bloginfo('template_directory');
if($linkedin){
echo "<a href='" . $linkedin . "'>
  <img class='socialautor' src='" . $bloginfo . "/images/linkedin.jpg'  alt='linkedin'></a>";
}
 ?>

<?php
$behance = get_the_author_meta('behance',$curauth->ID);
$bloginfo = get_bloginfo('template_directory');
if($behance){
echo "<a href='" . $behance . "'>
  <img class='socialautor' src='" . $bloginfo . "/images/behance.gif'  alt='behance'></a>";
}
 ?>

<?php
$github = get_the_author_meta('github',$curauth->ID);
$bloginfo = get_bloginfo('template_directory');
if($github){
echo "<a href='" . $github . "'>
  <img class='socialautor' src='" . $bloginfo . "/images/github.png'  alt='github'></a>";
}
 ?>

        </div>
<div class="clear"></div>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style compartearriba">
</div>
<!-- AddThis Button END -->


			   	<div class="fuentegris grid_10">
			   		<div class="posts">

              <?php 
              $noautor = $curauth->ID;
              query_posts('author=' . $noautor . '&showposts=15');
               ?>
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="blockinsideleft">
          <?php 
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('thumbnail');} 
          ?>
              <!-- AddThis Button BEGIN -->
            <div style="margin-left: 50px;
            margin-top: 15px;" class="addthis_toolbox addthis_default_style"
                    addthis:url="<?php the_permalink(); ?>"
                    addthis:title="<?php the_title(); ?>"
                    addthis:description:"the_excerpt();">
            <a class="addthis_counter addthis_pill_style"></a>
            </div>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
            <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ffeec446ec42960"></script>
          <!-- AddThis Button END -->                

          </div>
        <div class="blockinsideright">
            <div class="titulo">
                <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
          </div>
          <div class="entrada">
                <?php
              $textoLargo= get_the_excerpt();
              $permalink = get_permalink($post->ID);
              $textoCorto=limitar_palabras($textoLargo, 28,'...' );
              echo '<p class="fuentegris">' . $textoCorto . '</p>';
            ?>
          </div>
        </div>
        <?php endwhile ?> 
    <?php else : ?>
    <?php endif; ?>
      </div>

					
			   </div>
		      

		    </div>
		    
		    
	    
     	<?php get_sidebar("single"); ?>
</div>
	<?php get_footer(); ?>