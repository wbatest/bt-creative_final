<?php
/**
 * Template Name: Home Page
 *
 * 
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div class="content-area">
		<div class="main-slider" role="main">
		<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
		</div>
		
		<div class="iconHouse">
			<ul>

				<li class="icon">
					<?php 

						$paint = get_field('paint');
						$paint_color = get_field('paint_color');

						if( !empty($paint) ): ?>
					<a href="artwork" class="hover" style="background-image: url(<?php echo $paint_color['url'] ;?>)">
					
							<img src="<?php echo $paint['url']; ?>" alt="<?php echo $paint['alt']; ?>" />
					</a>
					<?php endif; ?>
				</li>

				<li class="icon">
					<?php 

						$pen = get_field('pen');
						$pen_color = get_field('pen_color');

						if( !empty($pen) ): ?>
					<a href="artwork" class="hover" style="background-image: url(<?php echo $pen_color['url'] ;?>)">
					
							<img src="<?php echo $pen['url']; ?>" alt="<?php echo $pen['alt']; ?>" />
					</a>
					<?php endif; ?>
				</li>

				<li class="icon">
					<?php 

						$photo = get_field('photo');
						$photo_color = get_field('photo_color');

						if( !empty($photo) ): ?>
					<a href="artwork" class="hover" style="background-image: url(<?php echo $photo_color['url'] ;?>)">
					
							<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
					</a>
					<?php endif; ?>
				</li>

				<li class="icon">
					<?php 

						$computer = get_field('computer');
						$computer_color = get_field('computer_color');

						if( !empty($paint) ): ?>
					<a href="design-portfolio" class="hover" style="background-image: url(<?php echo $computer_color['url'] ;?>)">
					
							<img src="<?php echo $computer['url']; ?>" alt="<?php echo $computer['alt']; ?>" />
					</a>
					<?php endif; ?>
				</li>

			</ul>
		</div>

		</div>
	</div>


<?php

get_footer();?>