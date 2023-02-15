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
		
		<?php 

		$logo = "EMILY O'Neill";
		$homeLink = getFile('index.php');
		$link1 = getFile('about.php');
		$link1Title = "About";
		$link2 = "?page=projects";
		$link2Title = "Projects";
		$link3 = "'https://oneillemily.substack.com' target='_blank'";
		$link3Title = "Writing";
		$link4 = "?page=contact";
		$link4Title = "Contact";


		include('templates/modules/mast-head/mast-head.php'); 

		?>

	</inner-column>
</header>

<main class="page-content">
