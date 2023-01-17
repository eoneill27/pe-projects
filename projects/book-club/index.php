<!doctype html>

<?php

	/* router */

	$page = NULL;

	if (isset($_GET["page"])) {
		$page = $_GET["page"];  // url?page=string
	} else {
		$page = "home"; //default
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


		<main class="page-content"> <!-- outlet - what is getting changed on the page depending on the route-->
			<inner-column>

				<?php

					// router part two 
					// which template to include

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

				// 	if (isset($_GET["id"])) {
				// 		$id = $_GET["id"];
				// 	} else {
				// 		$id = "empty";
				// 	}

				// 	if ($id == $meetingId) {
				// 		echo $meetingId;
				// 	}

				// }

				?>

			</inner-column>
		</main>

		<footer class="site-footer">
			<inner-column>
				
			</inner-column>
		</footer>

	</body>
</html>



