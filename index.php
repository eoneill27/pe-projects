
<?php include('functions.php'); ?>

<?php include('header.php'); ?>

<?php

	// ROUTER
	
	$page = currentPage();

	//if there is a data file for a particular page
	// Get the page data
	$pageDataFilePath = "data/pages/$page.json";
	$pageData = null;
	if (file_exists($pageDataFilePath)) {
		$pageJson = file_get_contents($pageDataFilePath);
		$pageData = json_decode($pageJson, true);
	}
?>

<?php 


	

	 

	if (queryString() == "page=e4p") {
		include ("projects/e4p/index.php");
 	}

	if($pageData) {
		if(!isset($pageData["template"])) {
			include("templates/pages/default.php");
		} else {
			include("templates/pages/$pageData[template].php");
		}
	} else {
		include('templates/pages/404.php');
	}

	// } elseif (isset($_GET['page']) AND !isset($pageData['template'])) {
	// 	getPageTemplate();
	// } else {
	// 	include("templates/pages/" . $pageData['template'] . ".php");
	// }




		// if (isset($_GET['form'])) {
		// 	getFormTemplate();
		// }

	
	// } else {
	// 	if (isset($_GET['page'])) {
	// 	getPageTemplate();	
	// 	}
	// }


	
?>

<?php include('footer.php'); ?>
		