<section class="update-card">
	<p class="date"><?php the_field('date')?></p>
	<h3 class="headline"><?php the_field('headline') ?></h2>
	<div class="update-preview">
		<picture class="image">
			<img src="<?php the_field('image') ?>" alt="">
		</picture>
		<p class="teaser"><?php the_field('teaser')?></p>
	</div>
	<a href="<?php the_permalink(); ?>">Read More</a>
</section>
