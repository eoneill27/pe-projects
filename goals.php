<?php include('header.php'); ?>	

<inner-column>
	<section class="goals">
		<h1 class="attention-voice">Goals</h1>

		<?php include('data/goals.php');

			foreach($goals as $goal) {
				echo "<h2 class='info-voice'>" . $goal["heading"] . "</h2>
					<ul class='reading-voice'>";

					foreach($goal["items"] as $item) {
						echo "<li class='reading-voice'>" . $item . "</li>";
					};
				echo "</ul>";
			};

		?>
		
	</section>
</inner-column>

<?php include('footer.php'); ?>