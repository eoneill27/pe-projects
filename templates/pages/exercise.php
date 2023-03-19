<?php
	$json = file_get_contents('data/exercises.json');
	$array = json_decode($json, true);
?>

<div class="page-heading">
	<?php 
		foreach($array['cards'] as $card) {

			if($card["slug"] == $_GET["slug"]) {
				$slug = $card["slug"];
				$title = $card['title'];

				include("templates/modules/page-header/page-header.php");
	?>
		<!-- <h1 class="heyyou-voice"><?=$title;?></h1> -->

	<?php }; }; ?>
</div>

<div class="page-content">

	<fieldset class="code-toggles">
		<input type="checkbox" id="switch" class="checkbox">
		<label for="switch" class="toggle"></label>
		<p class="reading-voice">PHP | JS</p>
	</fieldset>

	<div class="exercise-form">
		<?php 
			include("projects/e4p/" . $slug . ".php"); 
		?>
	</div>

</div>