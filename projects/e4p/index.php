<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Emily O'Neill • Web Design</title>
		<meta name="description" content="I am a web designer and developer. Take a look at my site to see my past work and to get in touch about your project.">

		<meta property="og:image" content="https://peprojects.dev/alpha-6/emily/images/meta-share.jpg">
		<link rel="icon" href="https://peprojects.dev/alpha-6/emily/images/favicon.png">

		<link rel="stylesheet" href="css/style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	</head>

	<body>

		<header class="site-header">
			<inner-column>
				<h1 class="logo"><a href="../../index.php">EMILY O'Neill</a></h1>

				<nav class="header-nav nav-voice">
					<a href="../../about.php">About</a>
					<a href="../../projects.php">Projects</a>
					<a href="https://oneillemily.substack.com" target="_blank">
					Writing</a>
					<a href="../../contact.php">Contact</a>
				</nav>
			</inner-column>
		</header>

		<main class="page-content">
			<section class="e4p">

				<inner-column>
					
					<h1 class="heyyou-voice">Exercises for Programmers</h1>
					<h2 class="info-voice">A collection of forms based on <a class="book-link" href="https://pragprog.com/titles/bhwb/exercises-for-programmers/" target="_blank">Brian P. Hogan's book</a></h2>

					<div class="form-grid">

						<?php include("data/forms.php")?>
						
						<ul>

							<?php

							foreach ($forms as $form) {

								$title = $form["title"];
								$description = $form["description"];
								$url = $form["url"];
								$img = $form["img"];

							?>

								<li class="form" style='list-style-type: none'>
									<a href="<?=$url?>">
										<div class="form-tile">
											<h3 class="info-voice"><?=$title?></h3>
											<p class="reading-voice"><?=$description?></p>
										</div>
									</a>
									
								</li>

							<?php } ?>

						</ul>

					</div>
					
				</inner-column>
			</section>

<?php include("../../footer.php"); ?>