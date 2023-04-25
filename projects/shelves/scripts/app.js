//first screen - login and signup buttons
// click login - replace screen with login screen
// click reset - replace whatever the screen is with splash screen
//

let screen = document.getElementById('screen');
let reset = document.getElementById('reset');




// 	let divSplash = document.createElement('div');
// 	divSplash.setAttribute('id', 'splash');
// 	// let loginButton = document.createElement('button');
// 	// loginButton.setAttribute('id', 'login-button');
// 	divSplash.innerHTML = `<button id='login-button' type='button'>Log in</button>`;

// 	console.log(divSplash);

// function initialize() {
// 	screen.innerHTML = divSplash;
// }



let splashScreen = `
	<div id="splash">
		<button id='login-button' type='button'>Log in</button>
		<button id='signup-button' type='button'>Sign up</button>
	</div>`;

let loginScreen = `<form id="login-form" action="">
			<label for="email">Email address</label>
			<input id="email" type="email">

			<label for="password">Password</label>
			<input id="password" type="password">

			<button id="login-submit" type="submit">
				Submit
			</button>
		</form>`;

function initialize() {
	screen.innerHTML = splashScreen;
}

initialize();



reset.addEventListener('click', function(event) {
	// initialize();
	// screen.innerHTML = splashScreen;
	// let login = document.getElementById('login-button');
	// let signupButton = document.getElementById('signup-button');

	initialize();
	console.log(1);

});


let signupButton = document.getElementById('signup-button');

let splash = document.getElementById('splash');

if(splash) {
console.log('splash exists');
let login = document.getElementById('login-button');
login.addEventListener('click', function(event) {
	event.preventDefault();
	screen.innerHTML = `<form id="login-form" action="">
			<label for="email">Email address</label>
			<input id="email" type="email">

			<label for="password">Password</label>
			<input id="password" type="password">

			<button id="login-submit" type="submit">
				Submit
			</button>
		</form>`;
	// screen.innerHTML = '';
	// screen.innerHTML = loginScreen;
	console.log('hello');
	
});
} else {
	console.log('splash does not exist');
}



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

// 			<button id="signup-submit" type="submit">
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