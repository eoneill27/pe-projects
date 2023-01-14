<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Emily O'Neill • Web Design</title>
		<meta name="description" content="I am a web designer and developer. Take a look at my site to see my past work and to get in touch about your project.">

		<meta property="og:image" content="https://peprojects.dev/alpha-6/emily/images/meta-share.jpg">
		<link rel="icon" href="https://peprojects.dev/alpha-6/emily/images/favicon.png">

		<link rel="stylesheet" href="css/style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	</head>

	<body>

		<header class="site-header">
			<inner-column>
				<h1 class="logo"><a href="index.php">EMILY O'Neill</a></h1>

				<nav class="header-nav nav-voice">
					<a href="../../about.php">About</a>
					<a href="../../projects.php">Projects</a>
					<a href="https://oneillemily.substack.com" target="_blank">
					Writing</a>
					<a href="../../contact.php">Contact</a>
				</nav>
			</inner-column>
		</header>

		<main class="page-content">

<inner-column>
	
	<h1 class="heyyou-voice">Exercises for Programmers</h1>
	<h2 class="info-voice">A collection of forms based on <a href="https://pragprog.com/titles/bhwb/exercises-for-programmers/" target="_blank">Brian P. Hogan's book</a></h2>


	<details>
		<summary><h3 class="reading-voice">Simple Math</h3></summary>
		<p class="nav-voice">This is a simple calculator - enter two numbers, and four different mathematical operations will be performed for you.</p>
		<?php

$number1 = 0;
$number2 = 0;

if (isset($_POST["submitted"])) {

	if (isset($_POST["number1"])) {
		$number1 = $_POST["number1"];
	}

	if (isset($_POST["number2"])) {
		$number2 = $_POST["number2"];
	}
}

$add = $number1 + $number2;

$subtract = $number1 - $number2;

$multiply = $number1 * $number2;

if ($number2 == 0) {
	$divide = NULL;
	$validateDivide = "You can't divide by 0. Please enter a number other than 0.";
} else {
	$divide = $number1 / $number2;
	$validateDivide = NULL;
}


?>

<a href="?"><h1>Simple calculator</h1></a>

<form method="POST" action="">
	<div class="form-fields reading-voice">
		<label for="">Number 1</label>
		<input name="number1" type="number" value="<?=$number1?>" step="0.0000001"/>

		<label for="">Number 2</label>
		<input name="number2" type="number" value="<?=$number2?>" step="0.0000001"/>

		<button name="submitted" type="submit">
			Submit
		</button>
	</div>

	<div class="form-output reading-voice">
		<h2 class="attention-voice">RESULTS:</h2>
		<p>Number 1 + Number 2 = <?=$add?></p>
		<p>Number 1 - Number 2 = <?=$subtract?></p>
		<p>Number 1 * Number 2 = <?=$multiply?></p>
		<p>Number 1 / Number 2 = <?=$divide?></p>
		<p><?=$validateDivide?></p>

	</div>



</form>


	</details>

</inner-column>





<?php include("../../footer.php"); ?>