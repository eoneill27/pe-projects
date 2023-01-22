<!doctype html>

<?php

	/* router */

	$page = NULL;

	if (isset($_GET["page"])) {
		$page = $_GET["page"];  // url?page=string
	} else {
		$page = "landing"; //default
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

		<link rel="stylesheet" href="css/site.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	</head>

	<body>

				<?php

					// router part two 
					// which template to include

					
					if ($page == "landing") {
						include ("landing.php");
					}
					if ($page == "login") {
						include ("login.php");
					}
					if ($page == "admin") {
						include ("admin.php");
					}
					if ($page == "home") {
						include ("home.php");
					}
					if ($page == "meetings") {
						include ("meetings.php");
					}
					if ($page == "photos") {
						include ("photos.php");
					}
					if ($page == "recipes") {
						include ("recipes.php");
					}
					if ($page == "detail") {
						include ("detail.php");
					}
					if ($page =="addMeeting") {
						include ("addMeeting.php");
					}

				?>





