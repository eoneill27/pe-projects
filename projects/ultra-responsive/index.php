<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Super Ultra Responsive Layout Challenge</title>
		<meta name="description" content="[[insert description]]">

		<meta property="og: image" content="[[meta image source]]">
		<link rel="icon" href="[[insert favicon source]]">

		<link rel="stylesheet" href="css/site.css">
	</head>

	<body>

		<header>
			<inner-column>
				
				<?php include("masthead.php"); ?>

			</inner-column>
		</header>

		<main>

			<section class="diptych-section">
				<inner-column>
					<?php include("diptych.php"); ?>
				</inner-column>
			</section>

			<section class="action-section1">
				<inner-column>
					<?php include("action.php"); ?>
				</inner-column>
			</section>

			<section class="article-section">
				<inner-column>
					<?php include("article-grid.php"); ?>
				</inner-column>
			</section>

			<section class="action-section2">
				<inner-column>
					<?php include("action.php"); ?>
				</inner-column>
			</section>
		</main>

		<footer>
			<inner-column>
				<?php include("site-footer.php"); ?>
			</inner-column>
		</footer>

	</body>

</html>