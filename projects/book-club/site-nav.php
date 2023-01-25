<?php
	session_start();
	
?>


<div class="sticky-header">
<header class="site-header">
	<inner-column>
		<nav class="site-nav">
			<a class="nav-voice <?php if($page=="home") {echo "active";} ?>"" href="?page=home">Home</a>
			<a class="nav-voice <?php if($page=="meetings") {echo "active";} ?>"" href="?page=meetings&order=ascending">Meetings</a>
			<a class="nav-voice <?php if($page=="photos") {echo "active";} ?>"" href="?page=photos">Photos</a>
			<a class="nav-voice <?php if($page=="recipes") {echo "active";} ?>"" href="?page=recipes">Recipes</a>

			
			<p class="nav-voice"><?php if (isset($_SESSION['a'])) {echo $_SESSION['a'];} else {echo NULL;};?></p>

			<?php 
				if (isset($_SESSION['a'])) {
			?>
			
			<form class="logout" method="POST">
				<button type="submit" name="logOut" value="logOut">
					<a href="?page=landing" class="logout nav-voice">Log out</a>
				</button>
			</form>

		<?php } else { ?>
			<form class="login" method="POST">
				<button type="submit" name="logIn" value="logIn">
					<a href="?page=login" class="login nav-voice">Log in</a>
				</button>
			</form>
		<?php };?>
		

		

			<a href="" class="nav-voice"></a>
		</nav>
	</inner-column>
</header>
</div>

<main class="page-content"> <!-- outlet - what is getting changed on the page depending on the route-->
	<inner-column>