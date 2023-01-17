<?php include ("header.php"); ?>

<main class="page-content"> <!-- outlet - what is getting changed on the page depending on the route-->
	<inner-column>

		<?php

			// router part two 
			// which template to include

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

			if ($page == "detail") {
				include ("detail.php");
			}

		// 	if (isset($_GET["id"])) {
		// 		$id = $_GET["id"];
		// 	} else {
		// 		$id = "empty";
		// 	}

		// 	if ($id == $meetingId) {
		// 		echo $meetingId;
		// 	}

		// }

		?>

	</inner-column>
</main>

<?php include ("footer.php"); ?>



