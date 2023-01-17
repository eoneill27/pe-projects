<?php include ("header.php"); ?>

<main class="page-content">
	<inner-column>

		<?php

			if ($page == "empty") {
				include ("home.php");
			}
			if ($page == "home") {
				include ("home.php");
			}
			if ($page == "meetings") {
				include ("meetings.php");
			}
			if ($page == "photos") {
				include ("photos.php");
			}
			if ($page == "recipes") {
				include ("recipes.php");
			}
		?>

	</inner-column>
</main>

<?php include ("footer.php"); ?>