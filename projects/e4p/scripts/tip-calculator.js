
const tipForm = document.querySelector('#tip-form');
const submitButton = document.querySelector('#js-submit');
const phpSubmitButton = document.querySelector('#submit');
const subtotal = document.querySelector('#subtotal');
const tipRate = document.querySelector('#tip');
const output = document.querySelector('#js-output');
const phpOutput = document.querySelector('#php-output');

const phpRadio = document.querySelector('#php-toggle');
const jsRadio = document.querySelector('#js-toggle');

const reset = document.querySelector('#reset');

var formSection = document.querySelector('#form-fields');
var toggle = document.querySelector('#switch');

function toggleJS() {
	formSection.classList.toggle('using-js');
}

toggle.addEventListener('click', toggleJS);

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

jsRadio.addEventListener('click', function(event) {

	submitButton.style.display = "block";
	reset.style.display = "block";
	phpSubmitButton.style.display = "none";
	phpOutput.style.display = "none";
});

submitButton.addEventListener('click', function(event) {

	if (jsRadio.checked === true) {

		event.preventDefault();

		if (subtotal.value && tip.value) {
			const tipPercent = Number(tipRate.value/100);
			const tip = (Number(subtotal * tipPercent)).toFixed(2);
			const total = Number(tip + subtotal);

			output.style.display = "block";

			output.innerHTML = `<p class="reading-voice">Your subtotal was $${subtotal}</p>
				<p class="reading-voice">You left a ${tipRate}% tip.</p>
				<p class="reading-voice">Your tip is $${tip}.</p>
				<p class="reading-voice">Your total, including the tip, is $${total}.</p>`;

		} else {
			output.innerHTML = `<div class="form-output"><p class="reading-voice">Please fill in the form</p></div>`;
			output.style.display = "block";
		}
	}
});

reset.addEventListener('click', function(reset) {
	subtotal.value = '';
	tip.value = '';
	output.style.display = 'none';

});