<section class="update-card">
	<h2 class="headline"><?php the_field('headline') ?></h2>
	<picture class="image">
		<img src="<?php the_field('image') ?>" alt="">
	</picture>
	<p class="date"><?php the_field('date')?></p>
	<p class="teaser"><?php the_field('teaser')?></p>
	<a href="<?php the_permalink(); ?>">More info</a>
</section>
