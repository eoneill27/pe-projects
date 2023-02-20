
<?php
	$json = file_get_contents("data/pages/projects.json");
	$array = json_decode($json, true);


?>

<section class="project-details">
	<inner-column>

	<h1 class="heyyou-voice"><?=$pageData['title'];?></h1>

		<?php foreach($array['cards'] as $project) { 
			if ($project['id'] == $_GET['id']) { 
				$thisProject = $project; 
				
		?>

			<h2 class="attention-voice"><?=$thisProject['title']?></h2>

			<p class="info-voice"><?=$thisProject['description'];?></p>

			<?php if (isset($thisProject['sections'])) {

				foreach ($thisProject['sections'] as $section) {

					if (isset($section['content'])) {
						$textCopy = $section['content'];
					}

					if (isset($section['module'])) {
						include ('templates/modules/' . $section['module'] . '/' . $section['module'] . '.php');
						}
				} ?>

				<div class="button">
					<a class="button-voice" href="<?=$project['outUrl']?>">Check it out</a>
				</div>
			<?php } } }

			?>

	

	</inner-column>
</section>

