<?php include ("site-nav.php"); ?>

<?php include ("../secrets/users.php"); ?>

<h1 class="heyyou-voice">Log in</h1>
<!-- test -->

<?php
	//goal is to match user inputs (user name & password)
	//with existing user names and passwords in user name DB
	//if an exact match exists, redirect user to appropriate page

	//initialize user input variables
	$inputUser = NULL;
	$inputPass = NULL;

	//initialize validation message
	$message = NULL;

	if (isset($_POST["submitted"])) {

	//if the form has been submitted, 
	//assign the user inputs (user name & password) to variables
		$inputUser = $_POST["userName"];
		$inputPass = $_POST["password"];

	//create inputLogin array for later matching 
	//with data from saved users.php file
		$inputLogin = array($inputUser, $inputPass);

	//separate array for admin log in info,
	//since admin is directed to different page on login
		$adminLogin = array($admin["adminName"], $admin["adminPassword"]);

	//if the adminLogin in the users.php file 
	//exactly matches the inputLogin,
	//send admin to admin page
		if ($inputLogin === $adminLogin) {
			header("Location: ?page=admin");
			exit;
		}

	//for each user name & password object in users.php data file
	//assign variables and create userLogin array - 
	//for matching with inputLogin array
		foreach ($userArray as $user) {
			$userName = $user["userName"];
			$userPass = $user["password"];

			$userLogin = array($userName, $userPass);

	//if the $inputLogin exactly matches the $userLogin, 
	//redirect user to home page
	//otherwise, provide validation message
			if ($inputLogin === $userLogin) {
				header("Location: ?page=home");
				exit;
			} elseif ($inputLogin == NULL) {
				$message = NULL;
			} else {
				$message = "Incorrect user name or password";
			}
		}
	}



		// print_r($userLogin);
	 
		// if (in_array($inputUser, $userLogin) === true) {
		// 	echo "great";
		// } else {
		// 	echo "not great";
		// }
// }

		// if (strcasecmp($inputUser, $userName) == 0) {
		// 	echo "great";
		// } else {
		// 	echo "not great";
		// }
	

	// if ($validateUser == 0) {
	// 	echo "great";
	// } else {
	// 	echo "not great";
	// }


	

	// foreach ($userArray as $user) {
	// 	$userName = $user["userName"];
	// 	$password = $user["password"];
	// 	$validateArray = array($userName => $password);
	 // var_dump ($validateArray);

	// 	echo $userName;
	// }
	// print_r($userArray);

	// if (isset ($_POST["submitted"])) {
	// 	if (isset($_POST["userName"])) {
	// 		if (isset($_POST["password"])) {
	// 			$un = $_POST["userName"];
	// 			$pw = $_POST["password"];

				// echo $un;
				// echo $pw;

				// array_values($userArray);

				// if (in_array($un, $userArray) == true) {
				// 	echo "great";
				// } else {
				// 	echo "not great";
				// }

	// 		foreach ($userArray as $user => $pass) {
	// 			if (in_array($un, $userArray)) {
	// 				echo "great";
	// 			} else {
	// 				echo "not great";
	// 			}
	// }

	// 		}
	// 	}
	// }

	// if ($login == $validate) {
	// 	echo "great"; 
	// 	} else {
	// 		echo "not great";
	// 	}
	


	// if (isset ($_POST["submitted"])) {
	// 	if (isset ($_POST["userName"]) == $userName) {
	// 		if (isset ($_POST["password"]) == $password) {
	// 			echo "great";
	// 		} else {
	// 			echo "not great";
	// 		}
	// 	} 


?>

<form class="login-form" action="" method="POST">
	
	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="userName">User name</label>
		<input class="reading-voice" style="font-family: Avenir, sans-serif" type="text" name="userName" id="userName" required>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="password">Password</label>
		<input class="reading-voice" style="font-family: Avenir, sans-serif" type="password" name="password" id="password" required>
	</form-field>

	<button class="reading-voice" style="font-family: Avenir, sans-serif" type="submit" name="submitted">
		Log in
	</button>

	<p class="reading-voice error"><?=$message?></p>

</form>

<?php include ("footer.php"); ?>