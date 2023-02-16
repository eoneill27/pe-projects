
<?php

	/* router */

	$page = NULL;

	// currentPage();

	// if (isset($_GET["page"])) {
	// 	$page = $_GET["page"];  // url?page=string
	// } else {
	// 	$page = "home"; //default
	// }

	include('functions.php');
?>

<?php include('header.php'); ?>

<?php

	

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
	
	
	

	



	// router part two 
	// which template to include

	
	// if ($page == "home") {
	// 	include ("home.php");
	// }
	// if ($page == "about") {
	// 	include ("about.php");
	// }
	// if ($page == "projects") {
	// 	include ("projects.php");
	// }
	// if ($page == "contact") {
	// 	include ("contact.php");
	// }
	// if ($page == "resume") {
	// 	include ("resume.php");
	// }
	// if ($page == "goals") {
	// 	include ("goals.php");
	// }



?>

<?php include('footer.php'); ?>