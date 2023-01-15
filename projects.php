<?php include('header.php'); ?>	

<inner-column>
	<section class="projects">
		<h1 class="heyyou-voice">Projects</h1>

		<div class="project-grid">

			<?php include('data/projects.php'); 

			echo "<ul >";

			foreach($projectsArray as $project) {
				$id = $project["id"];
				$img = $project["img"];
				$imgOver = $project["imgOver"];
				$url = $project["url"];
				$alt = $project["alt"];
				$title = $project["title"];
				$description = $project["description"];

			?>

			<li class="form" style='list-style-type: none'>
				<a href="<?=$url?>">
					<div class="project-tile">
						<h3 class="info-voice"><?=$title?></h3>
						<p class="reading-voice"><?=$description?></p>
					</div>
				</a>
				
			</li>

		


			<?php }; ?>


		</div>
		
	</section>
</inner-column>


<?php include('footer.php'); ?>

	<!--  echo "<li id='" . $id . "' style='list-style-type: none'>
						<a href='" . $link . "' target='_blank'>
							<picture class='tile-img project'>
								<img src='" . $img . "' alt='" . $alt . "'>
							</picture>

							<picture class='overlay project'>
								<img src='" . $imgOver. "' alt='" . $alt . "'>
							</picture>";

			echo "</a> </li>";

			echo "</ul>"; -->