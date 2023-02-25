
<?php
	$json = file_get_contents("data/pages/projects.json");
	$array = json_decode($json, true);


?>

<section class="project-details">
	<inner-column>
	
	<?php include('templates/modules/page-header/page-header.php'); ?>

		<?php foreach($array['cards'] as $project) { 
			if ($project['id'] == $_GET['id']) { 
				$thisProject = $project; 
				
		?>

			<h2 class="attention-voice"><?=$thisProject['title']?></h2>

			<h3 class="info-voice"><?=$thisProject['subtitle'];?></h3>

			<?php if (isset($thisProject['sections'])) {

				foreach ($thisProject['sections'] as $section) {

					if (isset($section['content'])) {
						$content = $section['content'];
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

