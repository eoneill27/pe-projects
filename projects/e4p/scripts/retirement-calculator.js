
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

var formSection = document.querySelector('#form-fields');

var toggle = document.querySelector('#switch');

function toggleJS() {
	formSection.classList.toggle('using-js');
}
toggle.addEventListener('click', toggleJS);

submitButton.addEventListener('click', function(event) {

	if (toggle.checked === true) {

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
				<p class="reading-voice">You have ${yearsLeft} years before you can retire.</p>`;

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