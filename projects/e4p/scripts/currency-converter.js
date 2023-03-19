
const form = document.querySelector('#currency-converter');
const submitButton = document.querySelector('#submit');

const usdRadio = document.querySelector('#usd');
const cadRadio = document.querySelector('#cad');
const startAmt = document.querySelector('#startAmount');
const startAmtLabel = document.querySelector('#startAmountLabel');
const rate = document.querySelector('#rate');
const submit = document.querySelector('button');

const output = document.querySelector('#output');

const reset = document.querySelector('#reset');

var formSection = document.querySelector('.form-fields');
var toggle = document.querySelector('#switch');

function toggleJS() {
	formSection.classList.toggle('using-js');
}
toggle.addEventListener('click', toggleJS);

if (usdRadio.checked === true) {
	startAmtLabel.textContent = "How much money do you have in U.S. dollars?";
}

if (cadRadio.checked === true) {
	startAmtLabel.textContent = "How much money do you have in Canadian dollars?";
}

usdRadio.addEventListener('click', function(event) {
	startAmtLabel.textContent = "How much money do you have in U.S. dollars?";
});

cadRadio.addEventListener('click', function(event) {
	startAmtLabel.textContent = "How much money do you have in Canadian dollars?";
});

form.addEventListener('submit', function(event) {

	if (toggle.checked === true) {
		event.preventDefault();

		conversion = (Number(startAmt.value) * Number(rate.value)).toFixed(2);
		console.log(conversion);

		if (usdRadio.checked === true) {
			output.innerHTML = `<p>You started with $${startAmt.value} U.S. dollars.</p>
			<p>The exchange rate is ${rate.value}.</p>
			<p>${startAmt.value} U.S. dollars at a rate of ${rate.value} is $${conversion} Canadian dollars.</p>`;
		} else if (cadRadio.checked === true) {
			output.innerHTML = `<p>You started with $${startAmt.value} Canadian dollars.</p>
			<p>The exchange rate is ${rate.value}.</p>
			<p>$${startAmt.value} Canadian dollars at a rate of ${rate.value} is $${conversion} U.S. dollars.</p>`;
		}

	}
});

reset.addEventListener('click', function(reset) {
	output.style.display = 'none';
});

