export let splashScreen = `
	<div id="splash">
		<picture class="screen-img">
		<img src="images/shelves.jpg" alt="">
		</picture>
		<div class="button-row">
		<button class="reading-voice" data-route="loginScreen" id='login-button' type='button'>Log in</button>
		<button class="reading-voice" data-route="signupScreen" id='signup-button' type='button'>Sign up</button>
		</div>
	</div>`

export let loginScreen = `
	<form data-route="homeScreen" id="login-form" action="">
		<label class="reading-voice" for="login-email">Email address</label>
		<input id="login-email" type="email">

		<label class="reading-voice" for="login-password">Password</label>
		<input id="login-password" type="password">

		<button class="reading-voice" id="login-submit" type="submit">
			Submit
		</button>
	</form>`

export let signupScreen = `
	<form data-route="bookForm" id="signup-form" action="">
		<label class="reading-voice" for="signup-name">Name</label>
		<input id="signup-name" type="text">

		<label class="reading-voice" for="signup-id">User ID</label>
		<input id="signup-id" type="text">

		<label class="reading-voice" for="signup-email">Email address</label>
		<input id="signup-email" type="email">

		<label class="reading-voice" for="signup-password">Password</label>
		<input id="signup-password" type="password">

		<label class="reading-voice" for="signup-password-again">Re-enter password</label>
		<input id="signup-password-again" type="password">

		<button class="reading-voice" id="signup-submit" type="submit">
			Submit
		</button>
	</form>`

export let bookForm = `
	<form data-route="homeScreen" id="book-form" action="">
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

export let homeScreen = `<div class="standard-screen"><p class="reading-voice">Book array goes here</p>
	<button data-route="bookDetails" class="reading-voice" id="sample-book">Sample book</button></div>`

export let bookDetails = `
	<div class="flex-box-row">
		<div id="fake-cover"></div>
		<div id="book-details">
			<h2 class="attention-voice">Title</h2>
			<h3 class="info-voice">Author</h3>
		</div>
	</div>`

export let searchScreen = `
<form data-route="searchResults" id="search" action="">
	<input id="search-box" type="text">
	<button class="reading-voice" id="search-submit" type="submit">Search</button>
</form>`

export let searchResults = `
	<p>List of results</p>
	<button data-route="bookDetails" class="reading-voice" id="sample-book">Sample book</button>`

export let chooseScreen = `
	<p id="choose-text" class="reading-voice">Try your luck - press the button to randomly select an unread book from your collection!</p>
	<button data-route="bookDetails" id="choose-button">Choose a book for me!</button>
`

export let profileScreen = `
	<form data-route="profileScreen" id="profile-form" action="">
		<label class="reading-voice" class="reading-voice" for="profile-name">Name</label>
		<input id="profile-name" type="text">

		<label class="reading-voice" class="reading-voice" for="profile-id">User ID</label>
		<input id="profile-id" type="text">

		<label class="reading-voice" class="reading-voice" for="profile-email">Email address</label>
		<input id="profile-email" type="email">

		<label class="reading-voice" class="reading-voice" for="profile-password">Password</label>
		<input id="profile-password" type="password">

		<button class="reading-voice" id="save-button" type="submit">Save changes</button>

		<button data-route="splashScreen" class="reading-voice" id="log-out" type="button">Log out</button>
	</form>`

export const screens = {
	"splashScreen": splashScreen,
	"loginScreen": loginScreen,
	"signupScreen": signupScreen,
	"bookForm": bookForm,
	"homeScreen": homeScreen,
	"bookDetails": bookDetails,
	"searchScreen": searchScreen,
	"searchResults": searchResults,
	"chooseScreen": chooseScreen,
	"profileScreen": profileScreen
}

export const headers = {
	"splashScreen": "Shelves",
	"loginScreen": "Log in",
	"signupScreen": "Sign up",
	"bookForm": "Add a book",
	"homeScreen": "Your collection",
	"bookDetails": "Book details",
	"searchScreen": "Search",
	"searchResults": "Search results",
	"chooseScreen": "What to read?",
	"profileScreen": "Your profile"
}
