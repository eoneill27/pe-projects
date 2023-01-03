<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>PBS Crash Course - Computer Science</title>
		<meta name="description" content="[[insert description]]">

		<meta property="og: image" content="[[meta image source]]">
		<link rel="icon" href="[[insert favicon source]]">

		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<header class="site-header">
			<a href="https://www.pbs.org" class="logo">PBS</a>
			<!-- <span>&#124;</span> -->

			
		</header>

		<main>
			<inner-column>

				<a class="crash-link" href="https://www.pbs.org/show/crash-course-computer-science/">Crash Course Computer Science</a> 

				<h1 class="heyyou-voice">Season 1</h1>

				<p class="reading-voice">Starting February 22nd, Carrie Anne Philbin will be hosting Crash Course Computer Science! In this series, we're going to trace the origins of our modern computers, take a closer look at the ideas that gave us our current hardware and software, discuss how and why our smart devices just keep getting smarter, and even look towards the future!</p>

			<!-- 	<form method="post">
					<input class="sort-choice" type="checkbox" name="sort-choice" value="1">Sort in descending order</input>
				</form> -->

				<?php include("videoCardMaker.php");?>
				<?php
					$sort = "sort-choice";

					if(isset($_POST["sort-choice"]) && !empty($_POST["sort-choice"]) && in_array($sort, $_POST["sort-choice"])) {
						arsort($videos);
					} else {
						asort($videos);
					}
				?>

		
			</inner-column>
		</main>


	</body>

</html>