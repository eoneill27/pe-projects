import {
	screens,
	headers,
	splashScreen, 
	loginScreen, 
	signupScreen, 
	bookForm, 
	homeScreen, 
	bookDetails, 
	searchScreen, 
	searchResults, 
	chooseScreen, 
	profileScreen
} from '/alpha-6/emily/projects/shelves/scripts/screens.js';
// from '/scripts/screens.js';



let screen = document.getElementById('screen');
let header = document.querySelector('header');

function initialize() {
	screen.innerHTML = splashScreen;
	header.innerHTML = `<h1 class="heyyou-voice">Shelves</h1>`;
}

initialize();

function renderScreen(screenName) {
	screen.innerHTML = screens[screenName];
	header.innerHTML = `<h1 class="heyyou-voice">${headers[screenName]}</h1>`;
}

window.addEventListener('click', function(theEvent) {
	console.clear();
	console.log('event', theEvent.target);

	if(theEvent.target.matches('button[data-route]')) {
		let route = event.target.dataset.route;
		renderScreen(route);
	}
});


// window.addEventListener('submit', function(event) {
// 	event.preventDefault();

// 	if(event.target.matches('#signup-form')) {
// 		signUp();
// 	}
// });

let userArray = [];
let bookArray = [];
let count = 0;

function signUp() {

	let signupForm = document.querySelector('#signup-form');
	let userName = signupForm.querySelector('input[id="signup-name"]').value;
	let userId = signupForm.querySelector('input[id="signup-id"]').value;
	let userEmail = signupForm.querySelector('input[id="signup-email"]').value;
	let userPassword = signupForm.querySelector('input[id="signup-password"]').value;
	let repeatPassword = signupForm.querySelector('input[id="signup-password-again"]').value;

	let user = {
		userName,
		userId,
		userEmail,
		userPassword,
	};

	console.log(user);
	localStorage.setItem(`U-${count++}`, JSON.stringify(user));
	userArray.push(user);
	console.log(userArray);
}

// if login email address input matches an email address in the user array - user exists
// if no match - alert them - they need to sign up
// take that user and match password in user array to password input
// if it matches - they are logged in
// if it doesn't - alert them

function logIn() {
	let loginForm = document.querySelector('#login-form');
	let loginEmail = loginForm.querySelector('input[id="login-email"]').value;
	let loginPassword = loginForm.querySelector('input[id="login-password"]').value;

	for (let i = 0; i < userArray.length; i++) {
		if (loginEmail === userArray[i].userEmail) {
			let match = true;
			console.log("match");
			let password = userArray[i].userPassword;
			console.log(password);

			if(loginPassword === password) {
				let login = true;
				renderScreen("homeScreen");
			} else {
				alert("The password you have entered is incorrect");
			}
		} else {
			let match = false;
			console.log("no match");
			alert("The user name you have entered is incorrect");
		}
	}
}
	// 	if (match === true) {
	// 		for (let i = 0; i < userArray.length; i++) {
	// 			if(loginPassword === userArray[i].userPassword) {
	// 				let login = true;
	// 				renderScreen(splashScreen);
	// 			}
	// 		}
	// 	} else {
	// 		alert("The password you have entered is incorrect");
	// 	}
	// }



// function removeBook(id) {
// 	// return all of the books with ids that do not match the submitted id
// 	const filtered = bookList.filter(function(book) {
// 		return book.id != id;
// 	});

// 	bookList = [...filtered];
// 	renderBooks(bookList);

// }

// function completeBook(id) {
// 	for (let i = 0; i < bookList.length; i++) {
// 		if(bookList[i].id == id) {
// 			bookList[i].complete = true;
// 		}
// 	};

function addBook() {
	let bookForm = document.querySelector('#book-form');
	let title = bookForm.querySelector('input[id="title"]').value;
	let author = bookForm.querySelector('input[id="author"]').value;
	// let read = bookForm.querySelector('input[id=""]').value;
	// let rating = bookForm.querySelector('input[id=""]').value;
	let notes = bookForm.querySelector('textarea[id="notes"]').value;

	let book = {
		title,
		author,
		notes
	};

	console.log(book);

	localStorage.setItem(`B-${count++}`, JSON.stringify(book));
	bookArray.push(book);
	console.log(bookArray);
}


window.addEventListener('submit', function(theEvent) {
	theEvent.preventDefault();
	let route = event.target.dataset.route;

	console.log('event', theEvent.target);
	
	// if(theEvent.target.matches('form[data-route')) {
	// 	let route = event.target.dataset.route;
	// 	renderScreen(route);
	// }

	if(theEvent.target.matches("#signup-form")) {
		signUp();
		renderScreen(route);
	}

	if(theEvent.target.matches("#login-form")) {
		logIn();
		console.log(userArray);
	}

	if(theEvent.target.matches("#book-form")) {
		addBook();
		renderScreen(route);
	}
});




// class UserClass {
// 	constructor() {
// 		this.userArray = [];
// 		this.count = 0;
// 	}

// 	add(userName, userID, userEmail, userPassword) {
// 		const user = {
// 			id: this.count++,
// 			userName,
// 			userId,
// 			userEmail,
// 			userPassword,
// 		};

// 		this.userArray = [...userArray, user];
// 	}
// }

// class bookList {

// 	constructor() {
// 		this.idStart = 0;
// 		this.bookList = [];

// 	}

// 	add(title, author, whenRead) {
// 		const book = {
// 			id: this.idStart++,
// 			title: title,
// 			author: author,
// 			whenRead: whenRead,
// 			complete: false
// 		};

// 		this.bookList = [...bookList, book];
// 	}

// 	remove(id) {
// 		const filtered = this.bookList.filter(function(book) {
// 			return this.book.id != id;
// 		});
// 	}

// 	complete(id) {
// 		for (let i = 0; i < this.bookList.length; i++) {
// 			if(this.bookList[i].id == id) {
// 				this.bookList[i].complete = true;
// 			}
// 		};

// 		renderBooks(this.bookList);
// 	}






		// screen.innerHTML = bookForm;
		// header.innerHTML = `<h1 class="heyyou-voice">Welcome!</h1><h2 class="attention-voice">Add your first book</h2>`;
	







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