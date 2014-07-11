<?php 
 
/**
 * Template Name: Page with ACF form
 */
 
acf_form_head();
 
get_header(); 
 
the_post(); 
 
?>
 
	<div id="primary">
		<div id="content" role="main">
			
		 <?php $acf = array(
			'post_id' => 'new',
			'field_groups' => array(15),
			'submit_value' => 'ENVIAR'
		); ?>
					
			
			<?php acf_form($acf); ?>
			
			
 
		</div><!-- #content -->
	</div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
