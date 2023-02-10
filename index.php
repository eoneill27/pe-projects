<?php include('header.php'); ?>	
		<section class="home-grid">
			<inner-column>

				<section class="home-welcome">
					<?php 
						$heading = "Hello!";
						$text1 = "In my first career, I spent 15 years working as a professional librarian. In my second career, I hope to focus on helping small businesses build beautiful, functional, accessible web sites. Whether you need a site built from scratch or you have an existing site that needs a bit of TLC, I can help you achieve your goals and build your business.";
						$text2 = "I draw on my experience as a librarian and my expertise in my web design work to fine-tune the information architecture supporting your website, making your content easily findable and accessible to all of your users.";

						include('templates/modules/heading-text/heading-text.php'); 
					?>
				</section>

				<section class="home-svg">
					<picture class="home-pic">
						<img src="images/target.svg" alt="">
					</picture>
				</section>

				<section class="home-projects">

					<?php include('templates/modules/featured-cards/featured-cards.php'); ?>

				</section>

			</inner-column>
		</section>

<?php include('footer.php'); ?>




