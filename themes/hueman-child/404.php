<?php get_header(); ?>

<div class="notebox">
  <?php get_search_form(); ?>
  <div id="main-fof">
    	<div class="fof">
        		<h1>Error 404</h1>
            <div class="entry">
  <p><?php _e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'hueman' ); ?></p>
</div>
    	</div>
</div>

</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>