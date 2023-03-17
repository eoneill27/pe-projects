const form = document.querySelector('form');

const input1 = document.querySelector('#num1');
const input2 = document.querySelector('#num2');

const output = document.querySelector('output');


//create a simple calculator
//ask user to input two numbers
//use those numbers to perform 4 mathematical operations
//output the results



form.addEventListener('submit', function(event) {

	event.preventDefault();

	const num1 = Number(input1.value);
	const num2 = Number(input2.value);

 	const add = (num1 + num2);
 	const subtract = (num1 - num2);
 	const multiply = (num1 * num2);
 	const divide = (Number(num1 / num2));

	output.innerHTML = 
 	`<h2 class='info-voice'>RESULTS:</h2>
 	<p>Number 1 + Number 2 = ${add}</p>
 	<p>Number 1 - Number 2 = ${subtract}</p>
 	<p>Number 1 * Number 2 = ${multiply}</p>
 	<p>Number 1 / Number 2 = ${divide}</p>`

	console.log("you did it");

	output.style.display = 'block';

});

const reset = document.querySelector('#reset-button');

reset.addEventListener('click', function(reset) {
		input1.value = '';
		input2.value = '';
		output.innerHTML = '';
		output.style.display = 'none';
	});