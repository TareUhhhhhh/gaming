<section class="home-intro">
	<h1 class="title">Turra Gaming</h1>
	<h3 class="intro">A Quick Wordpress Workup</h3>
	<p class="page-description">This is a page created to practice some Wordpress goodness.</p>
</section>

<?php
 $args = array(  
     'post_type' => 'updates',
 );

 $loop = new WP_Query( $args ); 
     
 while ( $loop->have_posts() ) : $loop->the_post(); 
     include('update-card.php');
 endwhile;

 wp_reset_postdata(); 
