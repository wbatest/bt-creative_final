<?php
/**
 * Template Name: Artwork Page
 *
 * 
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div class="content-area">
		<div role="main">
			<section class="clear" id="paintings">
				<div class="art-divide">
					<div class="icon-row clear">
						<div class="section-icon">
							<?php 

							$image = get_field('paintings_section_icon');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="artwork">
					<?php 

					$images = get_field('painting_gallery');

					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>
					            <li>
					                <a href="<?php echo $image['url']; ?>">
					                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </a>
					                <p><?php echo $image['caption']; ?></p>
					            </li>
					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>
				</div>
			</section>

			<section class="clear" id="photos">
				<div class="art-divide">
					<div class="icon-row">
						<div class="section-icon">
							<?php 

							$image = get_field('photos_section_icon');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="artwork">
					<?php 

					$images = get_field('photos_gallery');

					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>
					            <li>
					                <a href="<?php echo $image['url']; ?>">
					                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </a>
					                <p><?php echo $image['caption']; ?></p>
					            </li>
					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>
				</div>
			</section>

			<section class="clear" id="drawings">
				<div class="art-divide">
					<div class="icon-row">
						<div class="section-icon">
							<?php 

							$image = get_field('drawings_section_icon');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="artwork">
					<?php 

					$images = get_field('drawings_gallery');

					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>
					            <li>
					                <a href="<?php echo $image['url']; ?>">
					                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </a>
					                <p><?php echo $image['caption']; ?></p>
					            </li>
					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>
				</div>
			</section>

		</div>
	</div>

</div><!-- #main-content -->

<?php

get_footer();?>