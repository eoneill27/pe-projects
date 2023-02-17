
<?php include('functions.php'); ?>

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
	
?>

<?php include('footer.php'); ?>
		