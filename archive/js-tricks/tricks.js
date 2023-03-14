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

const form = document.querySelector('#hello');
const nameInput = form.querySelector('#name');
const output = document.querySelector('#hello-output');

const clearButton = document.querySelector('#clearName');

form.addEventListener('submit', function(event) {
	event.preventDefault();

	if (nameInput.value) {
		let message = `Hello ${nameInput.value}, it's nice to meet you!`;
		output.style.display = "block";
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


// form - simple calculator

const calculatorForm = document.querySelector('#simple-math');
const numberOneInput = calculatorForm.querySelector('#number1');
const numberTwoInput = calculatorForm.querySelector('#number2');
const mathOutput = document.querySelector('#math-output');

calculatorForm.addEventListener('submit', function(event) {
	event.preventDefault();

	if (numberOneInput.value && numberTwoInput.value) {

		const numberOne = Number(numberOneInput.value);
		const numberTwo = Number(numberTwoInput.value);
		const add = numberOne + numberTwo;
		const subtract = numberOne - numberTwo;
		const multiply = numberOne * numberTwo;
		const divide = numberOne / numberTwo;

		let message1 = `The first number you entered was ${numberOne}.`;
		let message2 = `The second number you entered was ${numberTwo}.`;
		let message3 = `${numberOne} + ${numberTwo} = ${add}`;
		let message4 = `${numberOne} - ${numberTwo} = ${subtract}`;
		let message5 = `${numberOne} * ${numberTwo} = ${multiply}`;
		let message6 = `${numberOne} / ${numberTwo} = ${divide}`;

		mathOutput.style.display = "block";
		mathOutput.innerHTML = "<p>" + message1 + "</p><p>" + message2 + "</p><p>" + message3 + "</p><p>" + message4 + "</p><p>" + message5 + "</p><p>" + message6 + "</p>";

	} else {
		mathOutput.innerHTML = "<p>Please enter some numbers</p>";
	}
});

const clearMath = document.querySelector("#clear-math");

clearMath.addEventListener('click', function(clear) {
	numberOneInput.value = "";
	numberTwoInput.value = "";
	mathOutput.style.display = "none";
});




