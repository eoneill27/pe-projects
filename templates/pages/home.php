
		<section class="home-grid">
			<inner-column>

				<section class="home-welcome">
					<?php 
						$textCopy = "<h1 class='heyyou-voice'>Hello!</h1> <p class='reading-voice'>In my first career, I spent 15 years working as a professional librarian. In my second career, I hope to focus on helping small businesses build beautiful, functional, accessible web sites. Whether you need a site built from scratch or you have an existing site that needs a bit of TLC, I can help you achieve your goals and build your business.</p> 
						<p class='reading-voice'>I draw on my experience as a librarian and my expertise in my web design work to fine-tune the information architecture supporting your website, making your content easily findable and accessible to all of your users.</p>";

						include('templates/modules/generic-text/generic-text.php'); 
					?>
				</section>

				<section class="home-svg">
					<picture class="home-pic">
						<img src="images/target.svg" alt="">
					</picture>
				</section>

				<section class="home-projects">

					<?php 

						$header = "Projects";
						$json = file_get_contents("data/pages/projects.json");
						$array = json_decode($json, true);

						include('templates/modules/featured-cards/featured-cards.php'); 
					?>

				</section>

			</inner-column>
		</section>






