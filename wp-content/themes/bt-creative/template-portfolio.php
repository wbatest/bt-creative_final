<?php
/**
 * Template Name: Portfolio Page
 *
 * 
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div class="content-area">
			
		<?php if( have_rows('portfolio_repeater') ): ?>

	<section class="jobs">
	<?php $count = 0; ?>
	<?php while( have_rows('portfolio_repeater') ): the_row(); 

		// vars
			$project_image = get_sub_field('main_image');
			$client = get_sub_field('client');
			$client_description = get_sub_field('client_description');
			$project_description = get_sub_field('project_description');

		?>

		<article data-job="jobDesc-<?php echo $count; ?>" class="tiles">
			<section class="job-toggle portfolio-image">
			<img class="jobImage" src="<?php echo $project_image['url']; ?>" alt="<?php echo $project_image['alt'] ?>" />
			</section>
			
			<section data-job="jobDesc-<?php echo $count; ?>" class="dropdown-<?php echo $count; ?> jobDesc item-<?php echo $count; ?>">
				<div class="job-loc">
					<h3><?php echo $client; ?></h3>
					<h4><?php echo $client_description; ?></h4>
				</div>
				<p class="desc"><?php echo $project_description; ?></p>
			</section>
		</article>
		<?php $count++; ?>
	<?php endwhile; ?>

	</section>

<?php endif; ?>

	</div>

</div><!-- #main-content -->

<?php

get_footer();?>

<!-- 
$job = get_sub_field('job_image');
					$job_color = get_sub_field('job_image_color');
					$employer = get_sub_field('employer');
					$location = get_sub_field('employer_location');
					$employment_description = get_sub_field('employment_description');


 -->