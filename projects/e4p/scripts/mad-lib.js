const form = document.querySelector('#madlib-form');
const submit = document.querySelector('#submit');

const reset = document.querySelector('#formReset');

const adjective1 = document.querySelector('#adjective1');
const verb1 = document.querySelector('#verb1');
const adjective2 = document.querySelector('#adjective2');
const noun1 = document.querySelector('#noun1');
const verb2 = document.querySelector('#verb2');
const adjective3 = document.querySelector('#adjective3');
const noun2 = document.querySelector('#noun2');
const adjective4 = document.querySelector('#adjective4');
const adjective5 = document.querySelector('#adjective5');
const noun3 = document.querySelector('#noun3');
const noun4 = document.querySelector('#noun4');
const allInputs = [adjective1, verb1, adjective2, noun1, verb2, adjective3, noun2, adjective4, adjective5, noun3, noun4];

const output = document.querySelector('output');

var formSection = document.querySelector('.form-fields');
var toggle = document.querySelector('#switch');

function toggleJS() {
	formSection.classList.toggle('using-js');
}

toggle.addEventListener('click', toggleJS);


form.addEventListener('submit', function(event) {

	if (toggle.checked === true) {
		event.preventDefault();

		output.style.display = "block";

		output.innerHTML = `<p class="reading-voice">Our school cafeteria has really <span style='color: red'>${adjective1.value}</span> food. Just thinking about it makes my stomach <span style='color: red'>${verb1.value}</span>. The spaghetti is <span style='color: red'>${adjective2.value}</span> and tastes like <span style='color: red'>${noun1.value}</span>. One day, I swear one of my meatballs started to <span style='color: red'>${verb2.value}</span>! The turkey tacos are totally <span style='color: red'>${adjective3.value}</span> and look kind of like old <span style='color: red'>${noun2.value}</span>. My friend Dana actually likes the meatloaf, even though it's <span style='color: red'>${adjective4.value}</span> and <span style='color: red'>${adjective5.value}</span>. I call it 'mystery meatloaf' and think it's really made out of <span style='color: red'>${noun3.value}</span>. My dad said he'd make my lunches, but the first day, he made me a sandwich out of <span style='color: red'>${noun4.value}</span> and peanut butter! I think I'd rather take my chances with the cafeteria!</p>`;
	}
});

reset.addEventListener('click', function(reset) {
	allInputs.forEach(function(input){
		input.value = '';
	})
	output.style.display = 'none';
});
