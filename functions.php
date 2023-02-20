<?php 

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting(); // turn it on

// error_reporting(0);

function show($things) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($things);
		echo '</pre>';
	echo '</code>';
}

// get file path - but always from the root
function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}
// usage:  include( getFile("templates/components/thing.php") );


// output query string
function queryString () {
	return $_SERVER['QUERY_STRING'];
}

// return current page
function currentPage() {
	if (isset($_GET['page'])) {
		return $_GET['page'];
	} else {
		return 'home';
	}
}

// currentPage is passed into function to get page template
function getPageTemplate() {
	$filePath = "templates/pages/" . currentPage() . ".php";
	if (file_exists($filePath)) {
		include($filePath);
	} else {
		include('templates/pages/404.php');
	}
}

//if querystring is ?form=$form, get $form
function currentForm() {
	if(isset($_GET['form'])) {
		return $_GET['form'];
	} else {
		return 'index';
	}
}

//create file path and include form - file path is projects/e4p/$form.php
function getFormTemplate() {
	$filePath = "projects/e4p/" . currentForm() . ".php";
	if (file_get_contents($filePath)) {
		include($filePath);
	} else {
		include('templates/pages/404.php');
	}
}


// function getProjectTemplate($project) {
// 	$filePath = "projects/" . $project; 
// 	if (file_get_contents($filePath)) {
// 		include($filePath);
// 	} else {
// 		include('pages/404.php');
// 	}
// }

?>