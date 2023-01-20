<?php include ("site-nav.php"); ?>

<?php include ("../secrets/users.php"); ?>

<h1 class="heyyou-voice">Log in</h1>

<?php

$inputUser = NULL;
$inputPass = NULL;

$message = NULL;

if (isset($_POST["submitted"])) {

	$inputUser = $_POST["userName"];
	$inputPass = $_POST["password"];

	$inputLogin = array($inputUser, $inputPass);

	$adminLogin = array($admin["adminName"], $admin["adminPassword"]);

	if ($inputLogin === $adminLogin) {
		header("Location: ?page=admin");
		exit;
	}

	foreach ($userArray as $user) {
		$userName = $user["userName"];
		$userPass = $user["password"];

		$userLogin = array($userName, $userPass);

		// print_r($userLogin);
	 
		// if (in_array($inputUser, $userLogin) === true) {
		// 	echo "great";
		// } else {
		// 	echo "not great";
		// }

		if ($inputLogin === $userLogin) {
			header("Location: ?page=home");
			exit;
		} elseif ($inputLogin == NULL) {
			$message = NULL;
		} else {
			$message = "incorrect user name or password";
		}
	}
}



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