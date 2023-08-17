<section class="game-card">
	<h2 class="game_name"><?php the_field('game_name') ?></h2>
	<picture class="game_image">
		<img src="<?php the_field('game_image') ?>" alt="">
	</picture>
	<h2 class="esrb_rating"><?php the_field('esrb_rating') ?></h2>
	<p class="genre"><?php the_field('genre')?></p>
	<p class="game_teaser"><?php the_field('game_teaser')?></p>
</section>
