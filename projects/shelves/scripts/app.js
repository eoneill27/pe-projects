//first screen - login and signup buttons
// click login - replace screen with login screen
// click reset - replace whatever the screen is with splash screen
//


let screen = document.getElementById('screen');
let header = document.querySelector('header');
let reset = document.getElementById('reset');

let splashScreen = `
	<div id="splash">
		<button class="reading-voice" id='login-button' type='button'>Log in</button>
		<button class="reading-voice" id='signup-button' type='button'>Sign up</button>
	</div>`;

let loginScreen = `
	<form id="login-form" action="">
		<label class="reading-voice" for="login-email">Email address</label>
		<input id="login-email" type="email">

		<label class="reading-voice" for="login-password">Password</label>
		<input id="login-password" type="password">

		<button class="reading-voice" id="login-submit" type="submit">
			Submit
		</button>
	</form>`;

let signupScreen = `
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
	</form>`;

let bookForm = `
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

		<button class="reading-voice" id="book-submit" type="submit">Submit</button>`;

let homeScreen = `<p class="reading-voice">Book array goes here</p>
	<p class="reading-voice" id="sample-book">Sample book</p>`;

let bookDetails = `
	<div class="flex-box-row">
		<div id="fake-cover"></div>
		<div id="book-details">
			<h2 class="attention-voice">Title</h2>
			<h3 class="info-voice">Author</h3>
		</div>
	</div>`;

let searchScreen = `
<form id="search" action="">
	<input id="search-box" type="text">
	<button class="reading-voice" id="search-submit" type="submit">Search</button>
</form>`;

let searchResults = `
	<p>List of results</p>
	<p class="reading-voice" id="sample-book">Sample book</p>`;

let chooseScreen = `
	<p class="reading-voice">Try your luck - press the button to randomly select an unread book from your collection!</p>
	<button id="choose-button">Choose a book for me!</button>
`;

let profileScreen = `
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
	</form>`;

function initialize() {
	screen.innerHTML = splashScreen;
	header.innerHTML = `<h1 class="heyyou-voice">Shelves</h1>`;
}

initialize();

window.addEventListener('click', function(theEvent) {
	console.clear();
	console.log('event', theEvent.target);

	if(theEvent.target.matches('#login-button')) {
		screen.innerHTML = loginScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Log in</h1>`;
	}

	if(theEvent.target.matches('#signup-button')) {
		screen.innerHTML = signupScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Sign up</h1>`;
	}

	if(theEvent.target.matches('#reset') || theEvent.target.matches('#log-out')) {
		screen.innerHTML = splashScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Shelves</h1>`;
	}

	if(theEvent.target.matches('#sample-book') || theEvent.target.matches('#choose-button')) {
		screen.innerHTML = bookDetails;
		header.innerHTML = `<h1 class="heyyou-voice">Book title</h1><p class="reading-voice" id="delete">Delete</p><p class="reading-voice" id="edit">Edit</p>`;
	}

	if(theEvent.target.matches('#nav-home')) {
		screen.innerHTML = homeScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Home collection</h1>`;
	}

	if(theEvent.target.matches('#nav-search')) {
		screen.innerHTML = searchScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Search</h1>`;
	}

	if(theEvent.target.matches('#nav-add')) {
		screen.innerHTML = bookForm;
		header.innerHTML = `<h1 class="heyyou-voice">Add a book</h1>`;
	}

	if(theEvent.target.matches('#nav-choose')) {
		screen.innerHTML = chooseScreen;
		header.innerHTML = `<h1 class="heyyou-voice">What to read?</h1>`;
	}

	if(theEvent.target.matches('#nav-you')) {
		screen.innerHTML = profileScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Your profile</h1>`;
	}
});


window.addEventListener('submit', function(theEvent) {
	console.clear();
	console.log('event', theEvent.target);

	if(theEvent.target.matches('#signup-form')) {
		theEvent.preventDefault();
		screen.innerHTML = bookForm;
		header.innerHTML = `<h1 class="heyyou-voice">Welcome!</h1><h2 class="attention-voice">Add your first book</h2>`;
	}

	if(theEvent.target.matches('#book-form')) {
		theEvent.preventDefault();
		screen.innerHTML = homeScreen;
		header.innerHTML = `<h1 class="heyyou-voice">Home collection</h1>`;
	}

	if(theEvent.target.matches('#search')) {
		theEvent.preventDefault();
		screen.innerHTML = searchResults;
		header.innerHTML = `<h1 class="heyyou-voice">Search results</h1>`;
	}

	if(theEvent.target.matches('#profile-form')) {
		theEvent.preventDefault();
		screen.innerHTML = profileScreen;
		// this will need to be changed - needs to save new data
		header.innerHTML = `<h1 class="heyyou-voice">Your profile</h1>`;
	}

});







// 	let divSplash = document.createElement('div');
// 	divSplash.setAttribute('id', 'splash');
// 	// let loginButton = document.createElement('button');
// 	// loginButton.setAttribute('id', 'login-button');
// 	divSplash.innerHTML = `<button class="reading-voice" id='login-button' type='button'>Log in</button>`;

// 	console.log(divSplash);

// function initialize() {
// 	screen.innerHTML = divSplash;
// }






// function initialize() {
// 	screen.innerHTML = splashScreen;


// }

// initialize();

// reset.addEventListener('click', function(event) {
// 	// initialize();
// 	// screen.innerHTML = splashScreen;
// 	// let login = document.getElementById('login-button');
// 	// let signupButton = document.getElementById('signup-button');
// 	screen.innerHTML = '';
// 	initialize();
// 	console.log(1);

// });

// function createLogin() {

// }

// let signupButton = document.getElementById('signup-button');

// let splash = document.getElementById('splash');

// let login = document.getElementById('login-button');

// if(login) {
// 	login.addEventListener('click', function(event) {
// 		// event.preventDefault();
// 		// screen.innerHTML = `<form id="login-form" action="">
// 		// 		<label class="reading-voice" for="email">Email address</label>
// 		// 		<input id="email" type="email">

// 		// 		<label class="reading-voice" for="password">Password</label>
// 		// 		<input id="password" type="password">

// 		// 		<button class="reading-voice" id="login-submit" type="submit">
// 		// 			Submit
// 		// 		</button>
// 		// 	</form>`;
// 		// screen.innerHTML = '';
// 		screen.innerHTML = loginScreen;
// 		console.log('hello');
		
// 	});
// }


// let signupButton = document.querySelector('#signup-button');

// function showSignup() {
// 	let signupScreen = screen.innerHTML = `
// 		<form id="signup-form" action="">
// 			<label for="name">Name</label>
// 			<input id="name" type="text">

// 			<label for="userID">User ID</label>
// 			<input id="userID" type="text">

// 			<label for="emailSignup">Email adddress</label>
// 			<input id="emailSignup" type="email">

// 			<label for="passwordSignup">Password</label>
// 			<input id="passwordSignup" type="password">

// 			<label for="passwordAgain">Reenter password</label>
// 			<input id="passwordAgain" type="password">

// 			<button class="reading-voice" id="signup-submit" type="submit">
// 				Submit
// 			</button>
// 		</form>
// 	`;

// 	return signupScreen;
// }




// let loginForm = document.querySelector("#login-form");
// let loginSubmit = document.querySelector("#login-submit");

// const data = localStorage;

// if(loginForm) {
// 	loginForm.addEventListener('submit', function(event) {
// 		event.preventDefault();

// 		let email = document.querySelector('#email');
// 		let password = document.querySelector('#password');
// 		console.log(email.value);

// 		data.setItem('email address', email.value);
// 		data.setItem('password', password.value);

// 		//function match(user);

// 		console.log('hello');

// 	})

// }






// need to add a user's signup information to db
// array of users 
// match user id and password to allow person to log in
// addUser function
// matchUser function


// let signupForm = document.querySelector("#signup-form");
// let signupSubmit = document.querySelector("#signup-submit");
// let bookForm = '../book-entry.php';

// if(signupForm) {
// 	signupForm.addEventListener('submit', function(event) {
// 		event.preventDefault();

// 		let signupName = (document.querySelector("#name")).value;
// 		let userID = (document.querySelector("#userID")).value;
// 		let signupEmail = (document.querySelector("#emailSignup")).value;
// 		let signupPassword = (document.querySelector("#passwordSignup")).value;
// 		let signupPasswordCheck = (document.querySelector("#passwordAgain")).value;

// 		let user = {
// 			signupName,
// 			userID,
// 			signupEmail,
// 			signupPassword,
// 			signupPasswordCheck,
// 		}
		
		//function add(user);

// 		console.log(user);

// 		data.setItem("User info", JSON.stringify(user));

// 		window.location = bookForm;

// 	});
// }

// add book
// event listener on book form submit
// add submitted book object to books array
// render book
// render books



// functions needed:

// add user
// match user
// add book
// edit book
// delete book
// render book
// render book list
// filter book list
// filter search





















// window.localStorage.setItem("key", "value");
// window.localStorage.getItem

// don't need to write window because it's global - everything is in the window

// localStorage.setItem(key, value);
// localStorage.getItem(key)
// localStorage.removeItem(key)
// localStorage.clear();

// localStorage value is a string
// Can't store super-complicated programming language in there unless it's a string

// localStorage is a property on the window
// setItem, getItem, etc. are functions

// localStorage.setItem('favoriteColor', 'blue');

// const color = localStorage.getItem('favoriteColor');

// const message = `My favorite color is ${color}`;

// document.body.textContent = message;

// const data = localStorage; [this just makes it easier to type out]
// data.setItem('favoriteColor', 'green');