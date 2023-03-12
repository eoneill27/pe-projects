

<?php 
	
	// $json = file_get_contents("data/pages/goals.json");
	// $goals = json_decode($json, true);

	// don't need the above anymore because 
	// router in index.php is setting $pageData;
	// resume.json data is being pulled into this page
?>


<!-- <section class="goals">
	<inner-column> -->
		<div class="page-heading">
			<?php include('templates/modules/page-header/page-header.php'); ?>
		</div>

		<div class="goals page-content">
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
		</div>
<!-- 
	</inner-column>
</section>

 -->