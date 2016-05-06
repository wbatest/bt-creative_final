<?php
/**
 * Template Name: Resume Page
 *
 * 
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div class="content-area">
			
		<?php if( have_rows('jobs') ): ?>

	<section class="jobs">
	<?php $count = 0; ?>
	<?php while( have_rows('jobs') ): the_row(); 

		// vars
			$job = get_sub_field('job_image');
			$job_color = get_sub_field('job_image_color');
			$employer = get_sub_field('employer');
			$location = get_sub_field('employer_location');
			$employment_description = get_sub_field('employment_description');

		?>

		<article data-job="jobDesc-<?php echo $count; ?>" class="tiles">
			<section class="hover job-toggle job-color" style="background-image: url(<?php echo $job_color['url'] ;?>);">
			<img class="jobImage" src="<?php echo $job['url']; ?>" alt="<?php echo $job['alt'] ?>" />
			</section>
			
			<section class="dropdown-<?php echo $count; ?> jobDesc item-<?php echo $count; ?>" data-job="jobDesc-<?php echo $count; ?>">
				<div class="job-loc">
					<h3 class="employer"><?php echo $employer; ?></h3>
					<h4><?php echo $location; ?></h4>
				</div>

				<p class="desc"><?php echo $employment_description; ?></p>
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