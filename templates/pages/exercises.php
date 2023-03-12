<?php

	$json = file_get_contents("data/exercises.json");
	$array = json_decode($json, true);
?>

	<div class="page-heading">
		<?php include('templates/modules/page-header/page-header.php'); ?>
	</div>


	<div class="exercises">
		<?php 

			include ('templates/modules/card-grid/card-grid.php'); 
			
		?>
	</div>




