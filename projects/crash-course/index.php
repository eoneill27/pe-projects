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
				
				<a href="https://http://localhost:8888/projects/crash-course/?order=descending">Click here to view in descending order</a>

				<?php

					function sortFunction() {

						include("videoData.php");

						$videos = [$video001, $video002, $video003, $video004, $video005, $video006, $video007, $video008, $video009, $video010, $video011, $video012, $video014, $video015, $video016, $video017, $video018, $video019, $video020, $video021, $video022, $video023, $video024, $video025, $video026, $video027, $video028, $video029, $video030, $video031, $video032, $video033, $video034, $video035, $video036, $video037, $video038, $video039, $video040];

						$check = isset($_GET['descending']);

						if ($check != true) {
							sort($videos);
 						} else {
 							rsort($videos);
 						}	

 						print_r($videos);
					}
				?>

				<?php include("videoCardMaker.php");?>
 						}
		
			</inner-column>
		</main>


	</body>

</html>