var body = document.querySelector('body');
var toggle = document.querySelector('button');

function toggleTheme() {
	body.classList.toggle('gradient');
}

toggle.addEventListener('click', toggleTheme);


var menuButton = document.querySelector('.menu-button');
var closeButton = document.querySelector('.close-menu');

function menuOpen() {
	body.classList.add("menu-open")
}

function menuClose() {
	body.classList.remove("menu-open")
}

menuButton.addEventListener('click', menuOpen);

closeButton.addEventListener('click', menuClose);

var darkCheck = document.querySelector('.check-toggle');

function checkToggle() {
	body.classList.remove('gradient');
	body.classList.add('dark');
}

darkCheck.addEventListener("change", function() {
	if (darkCheck.checked) {
		checkToggle();
	} else {
		body.classList.remove('gradient');
		body.classList.remove('dark');
	}
});

// function that changes the theme

function changeTheme(chosenTheme) {
	body.dataset.theme = chosenTheme;
}

document.addEventListener('click', function(click) {
	if (click.target.matches('button')) {
		changeTheme(click.target.dataset.change);
	}
})

// form - what is your name?
// user types name into box - this input becomes name variable
// when the button is clicked, the output appears
// the output is a string including the input

const form = document.querySelector('form');
const nameInput = form.querySelector('#name');
const output = document.querySelector('output');

const clearButton = document.querySelector('#clearName');

form.addEventListener('submit', function(event) {
	event.preventDefault();

	if (nameInput.value) {
		let message = `Hello ${nameInput.value}, it's nice to meet you!`;
		output.innerHTML = `<p>${message}</p>`;
	}	else {
		ouput.innerHTML = `<p>Please enter a name</p>`;
	}
});

// clear form

clearButton.addEventListener('click', function(clear) {
	nameInput.value = null;
	output.style.display = "none";
});











