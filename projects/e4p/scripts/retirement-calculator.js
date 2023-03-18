
const retirementForm = document.querySelector('#retirement-form');
const submitButton = document.querySelector('#js-submit');
const phpSubmitButton = document.querySelector('#submit');
const currentAge = document.querySelector('#current-age');
const retireAge = document.querySelector('#retire-age');
const output = document.querySelector('#js-output');
const phpOutput = document.querySelector('#php-output');
let currentYear = new Date().getFullYear();

const phpRadio = document.querySelector('#php-toggle');
const jsRadio = document.querySelector('#js-toggle');

const reset = document.querySelector('#reset');

if (phpRadio.checked === true) {
	// console.log('yes');

	output.style.display = "none";
	reset.style.display = "none";
	phpOutput.style.display = "block";
	phpSubmitButton.style.display = "block";
	submitButton.style.display = "none";
}

phpRadio.addEventListener('click', function(event) {
	// console.log('switch');

	output.style.display = "none";
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

	if (jsRadio.checked === true) {

		event.preventDefault();

		if (currentAge.value && retireAge.value) {
			const ageInput = Number(currentAge.value);
			const retireInput = Number(retireAge.value);

			const yearsLeft = retireInput - ageInput;
			const retireYear = currentYear + yearsLeft;

			console.log(currentYear);

			output.style.display = "block";

			output.innerHTML = `<p class="reading-voice">You are ${ageInput} years old.</p>
				<p class="reading-voice">You want to retire at age ${retireInput}</p>
				<p class="reading-voice">You can retire in ${retireYear}.</p>
				<p class="reading-voice">You have ${yearsLeft} before you can retire.</p>`;

		} else {
			output.innerHTML = `<div class="form-output"><p class="reading-voice">Please fill in the form</p></div>`;
			output.style.display = "block";
		}
	}
});

reset.addEventListener('click', function(reset) {
	currentAge.value = '';
	retireAge.value = '';
	output.style.display = 'none';

});