const form = document.querySelector('form');

const input1 = document.querySelector('#num1');
const input2 = document.querySelector('#num2');

const submitButton = document.querySelector('#js-submit');
const phpSubmitButton = document.querySelector('#submit');

const jsOutput = document.querySelector('#js-output');
const phpOutput = document.querySelector('#php-output');

const phpRadio = document.querySelector('#php-toggle');
const jsRadio = document.querySelector('#js-toggle');

const reset = document.querySelector('#reset');


//create a simple calculator
//ask user to input two numbers
//use those numbers to perform 4 mathematical operations
//output the results

if (phpRadio.checked === true) {
	// console.log('yes');

	jsOutput.style.display = "none";
	reset.style.display = "none";
	phpOutput.style.display = "block";
	phpSubmitButton.style.display = "block";
	submitButton.style.display = "none";
}

phpRadio.addEventListener('click', function(event) {
	// console.log('switch');

	jsOutput.style.display = "none";
	reset.style.display = "none";
	phpOutput.style.display = "block";
	phpSubmitButton.style.display = "block";
	submitButton.style.display = "none";
});

if (jsRadio.checked === true) {

	submitButton.style.display = "block";
	reset.style.display = "block";
	phpSubmitButton.style.display = "none";
	phpOutput.style.display = "none";
}

jsRadio.addEventListener('click', function(event) {

	submitButton.style.display = "block";
	reset.style.display = "block";
	phpSubmitButton.style.display = "none";
	phpOutput.style.display = "none";
});

submitButton.addEventListener('click', function(event) {

	event.preventDefault();

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

});

reset.addEventListener('click', function(reset) {
		input1.value = '';
		input2.value = '';
		jsOutput.innerHTML = '';
		jsOutput.style.display = 'none';
	});