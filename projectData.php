<?php

$bethElectric = [
	"id" => "beth",
	"img" => "images/be-tile.jpg",
	"imgOver" => "images/be-tile-over.jpg",
	"link" => "https://peprojects.dev/alpha-6/emily/projects/beth-electric/",
	"alt" => "Screenshot of the mock client project Beth Electric.",
];

$koalas = [
	"id" => "koalas",
	"img" => "images/koala-tile.jpg",
	"imgOver" => "images/koala-tile-over.jpg",
	"link" => "https://peprojects.dev/alpha-6/emily/projects/responsive-challenge/",
	"alt" => "Screenshot of the responsive layout challenge project.",
];

$researchEmploy = [
	"id" => "employ",
	"img" => "images/employ-tile.jpg",
	"imgOver" => "images/employ-tile-over.jpg",
	"link" => "https://peprojects.dev/alpha-6/emily/projects/research-employ/",
	"alt" => "Screenshot of the project Research & Employ.",
];

$layoutGarden = [
	"id" => "garden",
	"img" => "images/garden-tile.jpg",
	"imgOver" => "images/garden-tile-over.jpg",
	"link" => "https://peprojects.dev/alpha-6/emily/projects/layout-garden/",
	"alt" => "Screenshot of the responsive layout garden project.",
];

$projectsArray = [$bethElectric, $koalas, $researchEmploy, $layoutGarden];

echo "<ul >";

foreach($projectsArray as $project) {
	$id = $project["id"];
	$img = $project["img"];
	$imgOver = $project["imgOver"];
	$link = $project["link"];
	$alt = $project["alt"];


	 echo "<li id='" . $id . "' style='list-style-type: none'>
				<a href='" . $link . "' target='_blank'>
					<picture class='tile-img project'>
						<img src='" . $img . "' alt='" . $alt . "'>
					</picture>

					<picture class='overlay project'>
						<img src='" . $imgOver. "' alt='" . $alt . "'>
					</picture>";

	echo "</a> </li>";

	echo "</ul>";
}

?>

<!-- <a href="https://peprojects.dev/alpha-6/emily/projects/beth-electric/" target="_blank">
								<picture class="tile-img project">
									<img src="images/be-tile.jpg" alt="">
								</picture>
								<picture class="overlay project">
									<img src="images/be-tile-over.jpg" alt="">
								</picture>
							</a>
 -->
	