<section class="game-detail">
	<h2 class='game_name'><?php the_field('game_name') ?></h2>
	<picture class="game_image">
		<img src="<?php the_field('game_image') ?>" alt="">
	</picture>
	<p class="esrb_rating"><span class="label">ESRB Rating: </span><?php the_field('esrb_rating') ?></p>
	<p class="genre"><span class="label">Genre: </span> <?php the_field('genre')?></p>
	<p class="game_description"><?php the_field('game_description')?></p>
</section>