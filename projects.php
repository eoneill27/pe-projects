<?php include('header.php'); ?>	

<section class="projects">
	<inner-column>
	
	<?php 
		$header = "Projects";
		$json = file_get_contents("data/projects.json");
		$array = json_decode($json, true);

		include ('templates/modules/card-grid/card-grid.php'); 
	?>

	</inner-column>
</section>



<?php include('footer.php'); ?>

