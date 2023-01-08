<?php include('header.php'); ?>	

<inner-column>
	<section class="projects">
		<h2 class="attention-voice">Projects</h2>

		<div class="project-grid">

			<?php include('data/projects.php'); 

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

			};

			?>


		</div>
		
	</section>
</inner-column>


<?php include('footer.php'); ?>