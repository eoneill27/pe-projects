
<!-- <head> -->

<!-- </head> -->

	<section class="e4p">
		<inner-column>
			
		<?php 

			$header = "Exercises for Programmers";
			$subHeader = "A collection of forms based on Brian P. Hogan's book";
			$json = file_get_contents("projects/e4p/data/forms.json");
			$array = json_decode($json, true);

			include ('templates/modules/card-grid/card-grid.php');

		?>
			
		</inner-column>
	</section>
	