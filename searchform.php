<form class="form-search search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/img/lupa.png" type="submit"></img>
        <input type="text" class="" value="<?php the_search_query(); ?>" value="" name="s" id="s">
    </form>