<?php
	$header = "Projects";
	$json = file_get_contents("data/projects.json");
	$array = json_decode($json, true);
?>

<section class="projects">
	<inner-column>
	
	<?php 

		include ('templates/modules/card-grid/card-grid.php'); 
	?>

	</inner-column>
</section>





