<featured-cards>
	<h2 class="heyyou-voice">Projects</h2>

	<ul>

		<?php include('data/projects.php'); 

			$totalShown = 2;
			$projects = array_slice($projectsArray, 0, $totalShown);

			foreach($projects as $project) {
				$id = $project["id"];
				$img = $project["img"];
				$imgOver = $project["imgOver"];
				$url = $project["url"];
				$alt = $project["alt"];
				$title = $project["title"];
				$description = $project["description"];

		?>

			<li class="project" style='list-style-type: none'>
				<a href="<?=$url?>">
				<div class="project-tile">
					<h3 class="info-voice"><?=$title?></h3>
					<p class="reading-voice"><?=$description?></p>
				</div>
				</a>

			</li>

			<?php } ?>

			</ul>

	<div class="button">
		<a class="button-voice" href="projects.php">Find out more</a>
	</div>
</featured-cards>