

<?php 
	
	// $json = file_get_contents("data/pages/goals.json");
	// $goals = json_decode($json, true);
?>


<section class="goals">
	<inner-column>
		<h1 class="attention-voice"><?=$pageData["title"];?></h1>

		<?php 
			foreach($pageData['sections'] as $section) {
				echo "<h2 class='info-voice'>" . $section["heading"] . "</h2>
					<ul class='reading-voice'>";

					foreach($section["items"] as $item) {
						echo "<li class='reading-voice'>" . $item . "</li>";
					};
				echo "</ul>";
			};
		?>

	</inner-column>
</section>

