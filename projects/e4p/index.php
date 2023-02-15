<?php include('../../functions.php'); ?>
<?php getFile('../header.php'); ?>
<!-- <head> -->
	<link rel="stylesheet" href="../../css/style.css">
<!-- </head> -->

	<section class="e4p">
		<inner-column>
			
		<?php 

			$header = "Exercises for Programmers";
			$subHeader = "A collection of forms based on Brian P. Hogan's book";
			$json = file_get_contents("data/forms.json");
			$array = json_decode($json, true);

			include ('../../templates/modules/card-grid/card-grid.php');

		?>
			
		</inner-column>
	</section>

<?php include("../../footer.php"); ?>