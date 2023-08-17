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
// Silence is golden.
get_footer();
?>
