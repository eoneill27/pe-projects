<?php include('header.php'); ?>	

<?php 
	
	$json = file_get_contents("data/goals.json");
	$goals = json_decode($json, true);
?>


<section class="goals">
	<inner-column>
		<h1 class="attention-voice">Goals</h1>

		<?php 

			foreach($goals as $goal) {
				echo "<h2 class='info-voice'>" . $goal["heading"] . "</h2>
					<ul class='reading-voice'>";

					foreach($goal["items"] as $item) {
						echo "<li class='reading-voice'>" . $item . "</li>";
					};
				echo "</ul>";
			};

		?>
	</inner-column>
</section>


<?php include('footer.php'); ?>