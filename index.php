<?php include('header.php'); ?>	
		<section class="home-grid">
			<inner-column>

				<section class="home-intro">
					<h2 class="attention-voice">Hello!</h2>
					<p class="reading-voice">In my first career, I spent 15 years working as a professional librarian. In my second career, I hope to focus on helping small businesses build beautiful, functional, accessible web sites. Whether you need a site built from scratch or you have an existing site that needs a bit of TLC, I can help you achieve your goals and build your business.</p>

					<p class="reading-voice">I draw on my experience as a librarian and my expertise in my web design work to fine-tune the information architecture supporting your website, making your content easily findable and accessible to all of your users.</p>

					<div class="button">
						<a class="info-voice" href="about.php">Find out more</a>
					</div>
				</section>

				<section class="home-svg">
					<picture class="home-pic">
						<img src="images/target.svg" alt="">
					</picture>
				</section>

				<section class="home-projects">

					<h2 class="attention-voice">Projects</h2>

						<?php include('projectData.php'); ?>

						<?php

							$projectsArray = [$bethElectric, $researchEmploy];

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
									<img src="images/be-tile.jpg" alt="https://peprojects.dev/alpha-6/emily/projects/beth-electric/">
								</picture>
								<picture class="overlay project">
									<img src="images/be-tile-over.jpg" alt="https://peprojects.dev/alpha-6/emily/projects/beth-electric/">
								</picture>
							</a>


							<a href="https://peprojects.dev/alpha-6/emily/projects/research-employ/" target="_blank">
								<picture class="tile-img project">
									<img src="images/employ-tile.jpg" alt="Screenshot of the project Research & Employ.">
								</picture>
								<picture class="overlay project">
									<img src="images/employ-tile-over.jpg" alt="Screenshot of the project Research & Employ.">
								</picture>
							</a> -->
			
		
					<div class="button">
						<a class="info-voice" href="projects.php">Find out more</a>
					</div>

				</section>

			</inner-column>
		</section>

<?php include('footer.php'); ?>




