
const retirementForm = document.querySelector('#retirement-form');
const submitButton = document.querySelector('#submit');
const currentAge = document.querySelector('#current-age');
const retireAge = document.querySelector('#retire-age');
const output = document.querySelector('#js-output');
let currentYear = new Date().getFullYear();



submitButton.addEventListener('click', function(event) {
	event.preventDefault();

	if (currentAge.value && retireAge.value) {
		const ageInput = Number(currentAge.value);
		const retireInput = Number(retireAge.value);

		const yearsLeft = retireInput - ageInput;
		const retireYear = currentYear + yearsLeft;

		console.log(currentYear);

		output.innerHTML = `<div class="form-output">
			<p class="reading-voice">You are ${ageInput} years old.</p>
			<p class="reading-voice">You want to retire at age ${retireInput}</p>
			<p class="reading-voice">You can retire in ${retireYear}.</p>
			<p class="reading-voice">You have ${yearsLeft} before you can retire.</p>
		</div>`

		output.style.display = "block";

	} else {
		output.innerHTML = `<div class="form-output"><p class="reading-voice">Please fill in the form</p></div>`;
		output.style.display = "block";
	}

});

const reset = document.querySelector('#reset');

reset.addEventListener('click', function(reset) {
	currentAge.value = '';
	retireAge.value = '';
	output.innerHTML = '';

});