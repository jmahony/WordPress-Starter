<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 *
 */

?><?php get_header(); ?>

<section class="container">
	<div class="row" id="main-content">
		<div class="span8">
			<div class="well">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>