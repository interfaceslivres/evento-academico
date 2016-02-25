<?php    
acf_form_head();
get_header();
?>



	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
	
			 <?php
			    $args = array(
			        'post_id' => 'new',
			        'field_groups' => array( 23 ),
			        'submit_value' => 'Registrar',
			        'return' => "http://localhost/evento-academico-old" // return url
			    );
			    acf_form( $args );
			?>


			 <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
