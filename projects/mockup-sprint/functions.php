<?php

	function enableErrorReporting() {
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
	}

	enableErrorReporting(); // turn it on

	function getPHP($jsonFile) {
		$json = file_get_contents("data/" . $jsonFile . ".json");
		$pageData = json_decode($json, true);
		return $pageData;
	}

	// return current page
	function currentPage() {
		if (isset($_GET['page'])) {
			return $_GET['page'];
		} else {
			return 'home';
		}
	}

	function currentSlug() {
		if (isset($_GET['slug'])) {
			return $_GET['slug'];
		}
	}

	// currentPage is passed into function to get page template
	function getPageTemplate() {
		$filePath = "templates/pages/" . currentPage() . ".php";
		if (file_exists($filePath)) {
			include($filePath);
		} else {
			include('index.php');
		}
	}
	

?>
