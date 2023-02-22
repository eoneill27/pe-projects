

<?php 

	$json = file_get_contents('data/pages/404-page.json');
	$pageData = json_decode($json, true);

	foreach ($pageData['sections'] as $section) {
		$module = $section['module'];

		if(isset($section['class'])) {
			$class = $section['class'];
		}

		if(isset($section['title'])) {
			$title = $section['title'];
		}

		if(isset($section['content'])) {
			$content = $section['content'];
		}
	?>

	<section class="<?=$class?>">
		<inner-column>
			<?php include("templates/modules/$module/$module.php"); ?>
		</inner-column>
	</section>

<?php } ?>





