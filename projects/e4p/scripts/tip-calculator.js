
const tipForm = document.querySelector('#tip-form');
const submitButton = document.querySelector('#submit');

const subtotal = document.querySelector('#subtotal');
const tipRate = document.querySelector('#tipRate');
const output = document.querySelector('output');

const reset = document.querySelector('#reset');

var formSection = document.querySelector('.form-fields');
var toggle = document.querySelector('#switch');

function toggleJS() {
	formSection.classList.toggle('using-js');
}

toggle.addEventListener('click', toggleJS);

tipForm.addEventListener('submit', function(event) {

	if (toggle.checked === true) {

		event.preventDefault();

		if (subtotal.value && tipRate.value) {
			const tipPercent = (Number(tipRate.value))/100;
			const tip = (Number(subtotal.value * tipPercent)).toFixed(2);
			const total = (Number(tip)) + (Number(subtotal.value));

			output.style.display = "block";

			output.innerHTML = `<p class="reading-voice">Your subtotal was $${subtotal.value}.</p>
				<p class="reading-voice">You left a ${tipRate.value}% tip.</p>
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
	tipRate.value = '';
	output.style.display = 'none';

});