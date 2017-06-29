<div class="homeslider">

	<?php
	if( have_rows('slider') ):
	    while ( have_rows('slider') ) : the_row();
	?>
		<div class="slider-items" sty;e="height:">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HEADER1.png">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HEADER2.png">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HEADER3.png">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HEADER1.png">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HEADER2.png">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HEADER3.png">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

	<?php  
		endwhile;
	endif;
	?>

</div>