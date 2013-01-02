<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 */

?>

<?php get_header(); ?>

<?php setup_postdata( $post ); ?>

<div class="container">
	<div class="row" id="main-content">
		<div class="span8">
			<div class="well">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>