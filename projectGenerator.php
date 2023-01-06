<?php

include('projectData.php');

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