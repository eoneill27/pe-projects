<!doctype html>

<?php

	$page = NULL;

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	} else {
		$page = "empty";
	}

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Poison Raisins Book Club</title>
		<meta name="description" content="A clubhouse for the Best Book Club in the Land.">

		<meta property="og: image" content="[[meta image source]]">
		<link rel="icon" href="[[insert favicon source]]">

		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<header class="site-header">
			<inner-column>
				<nav class="site-nav">
					<a class="nav-voice" href="?page=home">Home</a>
					<a class="nav-voice" href="?page=meetings">Meetings</a>
					<a class="nav-voice" href="?page=photos">Photos</a>
					<a class="nav-voice" href="?page=recipes">Recipes</a>
				</nav>
			</inner-column>
		</header>
