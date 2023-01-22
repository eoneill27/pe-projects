<div class="sticky-header">
<header class="site-header">
	<inner-column>
		<nav class="site-nav">
			<a class="nav-voice <?php if($page=="home") {echo "active";} ?>"" href="?page=home">Home</a>
			<a class="nav-voice <?php if($page=="meetings") {echo "active";} ?>"" href="?page=meetings&order=ascending">Meetings</a>
			<a class="nav-voice <?php if($page=="photos") {echo "active";} ?>"" href="?page=photos">Photos</a>
			<a class="nav-voice <?php if($page=="recipes") {echo "active";} ?>"" href="?page=recipes">Recipes</a>
		</nav>
	</inner-column>
</header>
</div>

<main class="page-content"> <!-- outlet - what is getting changed on the page depending on the route-->
	<inner-column>