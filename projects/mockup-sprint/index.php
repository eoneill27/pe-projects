<!-- 
3 templates 
json files for each
array of modules 
foreach modules as module - insert module
module files need to include if statements & php variables in place of content

-->

<?php include('functions.php'); ?>

<?php include('header.php'); ?>





	<?php

	// goal is to see if page is set to template - 
	// if it is, include template file

	$page = currentPage();
	// currentPage is passed into function to get page template
	getPageTemplate();



	?>
	




<?php if ($page !== 'home') {
	include('footer.php'); 
}?>