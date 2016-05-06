<?php 
/**
 * Template Name: Custom Post Paintings
 *
 *
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">
<?php while ( have_posts() ) : the_post(); ?>
	
<div id="paintings">
	<div class="sectionHeader">
		<div><img src="<?php get_field('section_icon'); ?>"></div>
		<div class="sectionBreak"></div>
	</div>

	<section class="paintings">

		<?php while( have_rows('artwork') ): the_row(); ?>
		<article>
			<img src="<?php get_sub_field('art'); ?>">
		</article>
		<?php endwhile; ?>
	</section>
</div>
<?php endwhile;?>
</div><!-- #main-content -->
	



<?php

get_footer();?>