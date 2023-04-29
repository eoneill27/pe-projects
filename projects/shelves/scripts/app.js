// create log out function 
// tie book arrays to particular users - make key user name?
// figure out array overwrite problem
// mark book as read
// book chooser - randomly select among unread books
// search
// profile updating


import {
	screens,
	headers,
	splashScreen, 
	loginScreen, 
	signupScreen, 
	firstBook,
	bookForm, 
	homeScreen,
	// bookDetails, 
	searchScreen, 
	searchResults, 
	chooseScreen, 
	profileScreen,
} 
from '/alpha-6/emily/projects/shelves/scripts/screens.js';
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
}

function renderHeader(headerName) {
	header.innerHTML = `<h1 class="heyyou-voice">${headers[headerName]}</h1>`;
}

// event listeners 

window.addEventListener('click', function(theEvent) {
	console.clear();
	console.log('event', theEvent.target);

	if(theEvent.target.matches('[data-route]')) {
		let route = event.target.dataset.route;

		if (route == "homeScreen") {
			if(localStorage.getItem('loggedIn') === 'true') {
				let books = JSON.parse(localStorage.getItem('book array'));
				renderBooks(books);
			} else {
				alert('Please log in or sign up');
			}
		} else if (route == "loginScreen") {
			renderScreen('loginScreen');
			renderHeader('loginScreen');
		} else if (route == "signupScreen") {
			renderScreen('signupScreen');
			renderHeader('signupScreen');
		} else if (route == "splashScreen") {
			renderScreen('splashScreen');
			renderHeader('splashScreen');
		} else {
			if(localStorage.getItem('loggedIn') === 'true') {
			renderScreen(route);
			} else {
				alert('Please log in or sign up');
			} 
		}
	}

	if(theEvent.target.matches('#log-out')) {
		localStorage.setItem('loggedIn', 'false');
	}
	// create log out function


	if(theEvent.target.matches('.show-password')) {
		let getPassword = document.querySelector('input[class="password-input"]');

		if(getPassword.type === 'password') {
			getPassword.type = "text";
		} else {
			getPassword.type = "password";
		}
	};
});

window.addEventListener('submit', function(theEvent) {
	theEvent.preventDefault();
	let submit = event.target.dataset.submit;

	console.log('event', theEvent.target);
	
	// if(theEvent.target.matches('form[data-route')) {
	// 	let route = event.target.dataset.route;
	// 	renderScreen(route);
	// }

	if(theEvent.target.matches("#signup-form")) {
		signUp();
		userArray.forEach(function(user) {
			let userId = user.userName;
			screen.innerHTML = firstBook;
			header.innerHTML = `<h1 class="heyyou-voice">Welcome ${userId}! Add your first book</h1>`;
		})

	}

	if(theEvent.target.matches("#login-form")) {
		logIn();
		console.log(userArray);
	
	}

	if(theEvent.target.matches("#book-form")) {


			addBook();
		
	}
});

// sign up & log in

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
	localStorage.setItem('userEmail', userEmail);
	localStorage.setItem('userPassword', userPassword);
	localStorage.setItem('loggedIn', true)

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

	// for (let i = 0; i < userArray.length; i++) {
	// 	if (loginEmail === userArray[i].userEmail) {
	// 		let match = true;
	// 		console.log("match");
	// 		let password = userArray[i].userPassword;
	// 		console.log(password);

	// 		if(loginPassword === password) {
	// 			let login = true;
	// 			renderScreen("homeScreen");
	// 		} else {
	// 			alert("The password you have entered is incorrect");
	// 		}

	// 		localStorage.setItem('email', loginEmail);
	// 		localStorage.setItem('password', loginPassword);
	// 	} else {
	// 		let match = false;
	// 		console.log("no match");
	// 		alert("The user name you have entered is incorrect");
	// 	}
	// }

	// for (let i = 0; i < localStorage.length; i++) {
		if (loginEmail === localStorage.getItem(`userEmail`)) {
			let match = true; 
			console.log('match');

			let password = localStorage.getItem('userPassword');

			if(loginPassword === password) {
				// renderScreen('homeScreen');
				localStorage.setItem('loggedIn', true)

				let books = JSON.parse(localStorage.getItem('book array'));
				renderBooks(books);
			} else {
				alert('The password you have entered is incorrect');
			}
		} else {
			let match = false;
			alert('The user name you have entered is incorrect');
		}


	// }
}

// on sign up - user name and password stored in local storage
// need to retrieve that and match to log in input

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


// add and render books

function addBook() {
	let bookForm = document.querySelector('#book-form');
	let title = bookForm.querySelector('input[id="title"]').value;
	let author = bookForm.querySelector('input[id="author"]').value;
	// let read = bookForm.querySelector('input[id=""]').value;
	// let rating = bookForm.querySelector('input[id=""]').value;
	let notes = bookForm.querySelector('textarea[id="notes"]').value;
	let id = `B-${count++}`;

	let book = {
		id,
		title,
		author,
		notes
	};

	console.log(book);

	if (localStorage.getItem('loggedIn') === 'true') {
		localStorage.setItem(`B-${count++}`, JSON.stringify(book));
		bookArray.push(book);

		localStorage.setItem('book array', JSON.stringify(bookArray));

		let books = JSON.parse(localStorage.getItem('book array'));
		// localStorage.setItem('book array', JSON.stringify(books));
		renderBooks(books);
	}
}

function renderBook(book) {
	return `
		<li class='book-item'>
			<book-card data-bookid='${book.id}'> 
				<h2 class="info-voice">${book.title}</h2>
				<h3 class="reading-voice">${book.author}</h3>
			</book-card>
		</li>
	`;
}

function renderBooks(bookArray) {
	var template = "<ul class='book-list'>";

	bookArray.forEach(function(book) {

		template += renderBook(book);

		renderBookDetails(book);

	});

	template += "</ul>";

	screen.innerHTML = template;
	header.innerHTML = `<h1 class="heyyou-voice">${headers['homeScreen']}</h1>`
	console.log('hi');
}

function renderBookDetails(book) {
	window.addEventListener('click', function(event) {

		if(event.target.matches('[data-bookid]')) {
			header.innerHTML = `<h1 class="heyyou-voice">${headers['bookDetails']}</h1>`;

			let bookId = event.target.dataset.bookid;

			if (bookId == book.id) {

				screen.innerHTML = `
				<div class="flex-box-row standard-screen">
					<div id="fake-cover"></div>
						<div id="book-details">
							<h2 class="attention-voice">${book.title}</h2>
							<h3 class="info-voice">${book.author}</h3>
						</div>
					</div>
				</div>`

			}
		}
	});
}


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