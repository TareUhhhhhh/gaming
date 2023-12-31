<?php
get_header();

if (is_page('home')) {
		include('pages/home.php');
	}

if (is_page('games')) {
	 $args = array(  
	     'post_type' => 'game',
	 );

	 $loop = new WP_Query( $args ); 
	     
	 while ( $loop->have_posts() ) : $loop->the_post(); 
	     include('pages/game-card.php');
	 endwhile;

	 wp_reset_postdata(); 
}

if (is_singular('game')) {
		include('pages/game-detail.php');
	}

if (is_singular('updates')) {
		include('pages/update-detail.php');
	}

get_footer();
?>