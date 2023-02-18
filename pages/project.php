
<?php
	$json = file_get_contents("data/projects.json");
	$array = json_decode($json, true);


?>

<inner-column>

	<h1 class="heyyou-voice">Case study</h1>

	<?php foreach($array as $project) { 
		if ($project['id'] == $_GET['id']) { 
			$thisProject = $project; 
			}
		}
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
		if (isset($section['content'])) {
			$textCopy = $section['content'];
		}
	}
}


?>


</inner-column>

