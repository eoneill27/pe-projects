<?php
	$header = "Exercises for Programmers";
	$subheader = "A collection of forms based on Brian P. Hogan's book";
	$json = file_get_contents("data/exercises.json");
	$array = json_decode($json, true);
?>

<section class="exercises">
	<inner-column>
	
	<?php 

		include ('templates/modules/card-grid/card-grid.php'); 
		
	?>

	</inner-column>
</section>




