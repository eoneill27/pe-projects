export let splashScreen = `
	<div id="splash">
		<button class="reading-voice" id='login-button' type='button'>Log in</button>
		<button class="reading-voice" id='signup-button' type='button'>Sign up</button>
	</div>`
	
export let loginScreen = `
	<form id="login-form" action="">
		<label class="reading-voice" for="login-email">Email address</label>
		<input id="login-email" type="email">

		<label class="reading-voice" for="login-password">Password</label>
		<input id="login-password" type="password">

		<button class="reading-voice" id="login-submit" type="submit">
			Submit
		</button>
	</form>`

export let signupScreen = `
	<form id="signup-form" action="">
		<label class="reading-voice" for="signup-name">Name</label>
		<input id="signup-name" type="text">

		<label class="reading-voice" for="signup-id">User ID</label>
		<input id="signup-id" type="text">

		<label class="reading-voice" for="signup-email">Email address</label>
		<input id="signup-email" type="email">

		<label class="reading-voice" for="signup-password">Password</label>
		<input id="signup-password" type="password">

		<label class="reading-voice" for="signup-password-again">Reenter password</label>
		<input id="signup-password-again" type="password">

		<button class="reading-voice" id="signup-submit" type="submit">
			Submit
		</button>
	</form>`

export let bookForm = `
	<form id="book-form" action="">
		<label class="reading-voice" for="title">Title</label>
		<input id="title" type="text">

		<label class="reading-voice" for="author">Author</label>
		<input id="author" type="text">

		<fieldset>
			<legend class="reading-voice">Read?</legend>
				<div>
					<label class="reading-voice" for="yes">Yes</label>
					<input type="radio" id="yes" name="yes">
				</div>
				<div>
					<label class="reading-voice" for="no">No</label>
					<input type="radio" id="no" name="no">
				</div>
		</fieldset>

		<fieldset>
			<legend class="reading-voice">Rating</legend>
			<div>
				<input type="checkbox" id="star1" name="star1">
				<input type="checkbox" id="star2" name="star2">
				<input type="checkbox" id="star3" name="star3">
				<input type="checkbox" id="star4" name="star4">
				<input type="checkbox" id="star5" name="star5">
			</div>		
		</fieldset>

		<label class="reading-voice" for="notes">Notes:</label>
		<textarea name="notes" id="notes" cols="30" rows="10"></textarea>

		<button class="reading-voice" id="book-submit" type="submit">Submit</button>`

export let homeScreen = `<p class="reading-voice">Book array goes here</p>
	<p class="reading-voice" id="sample-book">Sample book</p>`

export let bookDetails = `
	<div class="flex-box-row">
		<div id="fake-cover"></div>
		<div id="book-details">
			<h2 class="attention-voice">Title</h2>
			<h3 class="info-voice">Author</h3>
		</div>
	</div>`

export let searchScreen = `
<form id="search" action="">
	<input id="search-box" type="text">
	<button class="reading-voice" id="search-submit" type="submit">Search</button>
</form>`

export let searchResults = `
	<p>List of results</p>
	<p class="reading-voice" id="sample-book">Sample book</p>`

export let chooseScreen = `
	<p class="reading-voice">Try your luck - press the button to randomly select an unread book from your collection!</p>
	<button id="choose-button">Choose a book for me!</button>
`

export let profileScreen = `
	<form id="profile-form" action="">
		<label class="reading-voice" class="reading-voice" for="profile-name">Name</label>
		<input id="profile-name" type="text">

		<label class="reading-voice" class="reading-voice" for="profile-id">User ID</label>
		<input id="profile-id" type="text">

		<label class="reading-voice" class="reading-voice" for="profile-email">Email address</label>
		<input id="profile-email" type="email">

		<label class="reading-voice" class="reading-voice" for="profile-password">Password</label>
		<input id="profile-password" type="password">

		<button class="reading-voice" id="save-button" type="submit">Save changes</button>

		<button class="reading-voice" id="log-out" type="button">Log out</button>
	</form>`


