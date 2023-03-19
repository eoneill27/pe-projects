const form = document.querySelector('#simple-math');
const submitButton = document.querySelector('#submit');

const input1 = document.querySelector('#num1');
const input2 = document.querySelector('#num2');

const jsOutput = document.querySelector('#js-output');
const phpOutput = document.querySelector('#php-output');

const reset = document.querySelector('#reset');

var formSection = document.querySelector('.form-fields');
var toggle = document.querySelector('#switch');

function toggleJS() {
	formSection.classList.toggle('using-js');
}
toggle.addEventListener('click', toggleJS);

form.addEventListener('submit', function(event) {

	if (toggle.checked === true) {

		event.preventDefault();

		if(input1.value && input2.value) {

			const num1 = Number(input1.value);
			const num2 = Number(input2.value);

		 	const add = (num1 + num2);
		 	const subtract = (num1 - num2);
		 	const multiply = (num1 * num2);
		 	const divide = (Number(num1 / num2));

			jsOutput.innerHTML = 
		 	`<h2 class='info-voice'>RESULTS:</h2>
		 	<p>Number 1 + Number 2 = ${add}</p>
		 	<p>Number 1 - Number 2 = ${subtract}</p>
		 	<p>Number 1 * Number 2 = ${multiply}</p>
		 	<p>Number 1 / Number 2 = ${divide}</p>`

			console.log("you did it");

			jsOutput.style.display = 'block';

		} else {
			jsOutput.innerHTML = `<div class="form-output"><p class="reading-voice">Please enter some numbers.</p></div>`;
			jsOutput.style.display = "block";
		}
	}
});

form.addEventListener ('input', function(clear) {
	jsOutput.innerHTML = '';
	// phpOutput.innerHTML = '';
	jsOutput.style.display = 'none';
});

reset.addEventListener('click', function(reset) {
	input1.value = '';
	input2.value = '';
	jsOutput.innerHTML = '';
	jsOutput.style.display = 'none';
});




