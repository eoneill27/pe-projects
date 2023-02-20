
<?php include('functions.php'); ?>

<?php include('header.php'); ?>

<?php

	$pageData = null;
	$page = currentPage();

	$pageDataFilePath = "data/pages/$page.json";

	//if there is a data file for a particular page
	//get the data
	if (file_exists($pageDataFilePath)) {
		$json = file_get_contents($pageDataFilePath);
		$pageData = json_decode($json, true);
	}

	if (!isset($pageData['template'])) {
		include('templates/pages/standard/php');
	} else {
		include("templates/pages/$pageData[template].php");
	}


	if (queryString() == "page=e4p") {
		include ("projects/e4p/index.php");
	} else {
		if (isset($_GET['page'])) {
		getPageTemplate();	
		}
	}

	if (isset($_GET['form'])) {
		getFormTemplate();
	}
	
?>

<?php include('footer.php'); ?>
		