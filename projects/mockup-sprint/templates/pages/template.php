

<?php
	// if slug name matches template name
	// get the corresponding data file

	$slug = currentSlug();

	// if (isset($_GET['page'])) {
	// 	return $_GET['page'];
	// } else {
	// 	return 'home';
	// }

	// if there is a data file for a particular page
	// Get the page data
	$pageDataFilePath = "data/$slug.json";
	$pageData = null;

	if (file_exists($pageDataFilePath)) {
		$pageJson = file_get_contents($pageDataFilePath);
		$pageData = json_decode($pageJson, true);
	}

	if($pageData) {		
		foreach($pageData['modules'] as $module) {
			$moduleName = $module['module']; ?>

			<section class="<?=$module['section']?>">
				<inner-column>
			<?php include("templates/modules/$moduleName/$moduleName.php"); ?>
				</inner-column>
			</section>
	<?php
		} 
	}
?>
