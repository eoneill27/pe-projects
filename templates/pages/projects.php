<?php
	$json = file_get_contents("data/pages/projects.json");
	$array = json_decode($json, true);
?>

<header class="page-heading">
	<!-- <inner-column> -->
		<?php include('templates/modules/page-header/page-header.php'); ?>
	<!-- </inner-column> -->
</header>

<section class="projects">
	<!-- <inner-column> -->
	
	<?php 

		include ('templates/modules/card-grid/card-grid.php'); 
	?>

	<!-- </inner-column> -->
</section>





