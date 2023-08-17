<!doctype html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title><?php echo wp_get_document_title(); ?></title>
		<meta name='description' content='Gaming for Turra'>
		<meta property='og:image' content='images/default.png'>
		<?php wp_head() ?>
	</head>

	<body <?php body_class();?> >
		<header>
			<div class="inner-column">
				<div class="site-header">
					<svg height="50" width="50">
					  <circle cx="25" cy="25" r="20" stroke="cyan" stroke-width="2" fill="black"/>
					</svg>

					<?php include('site-menu.php'); ?>
				</div>
			</div>
		</header> 

		<main>
		<div class="inner-column">