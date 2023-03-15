var body = document.querySelector('body');
var toggle = document.querySelector('button');

function toggleTheme() {
	body.classList.toggle('gradient');
}

toggle.addEventListener('click', toggleTheme);


var menuButton = document.querySelector('.menu-button');
var closeButton = document.querySelector('.close-menu');

function menuOpen() {
	body.classList.add("menu-open")
}

function menuClose() {
	body.classList.remove("menu-open")
}

menuButton.addEventListener('click', menuOpen);

closeButton.addEventListener('click', menuClose);

var darkCheck = document.querySelector('.check-toggle');

function checkToggle() {
	body.classList.remove('gradient');
	body.classList.add('dark');
}

darkCheck.addEventListener("change", function() {
	if (darkCheck.checked) {
		checkToggle();
	} else {
		body.classList.remove('gradient');
		body.classList.remove('dark');
	}
});

// function that changes the theme

function changeTheme(chosenTheme) {
	body.dataset.theme = chosenTheme;
}

document.addEventListener('click', function(click) {
	if (click.target.matches('button')) {
		changeTheme(click.target.dataset.change);
	}
})

// form - what is your name?
// user types name into box - this input becomes name variable
// when the button is clicked, the output appears
// the output is a string including the input

const form = document.querySelector('#hello');
const nameInput = form.querySelector('#name');
const output = document.querySelector('#hello-output');

const clearButton = document.querySelector('#clearName');

form.addEventListener('submit', function(event) {
	event.preventDefault();

	if (nameInput.value) {
		let message = `Hello ${nameInput.value}, it's nice to meet you!`;
		output.style.display = "block";
		output.innerHTML = `<p>${message}</p>`;
	}	else {
		ouput.innerHTML = `<p>Please enter a name</p>`;
	}
});

// clear form

clearButton.addEventListener('click', function(clear) {
	nameInput.value = null;
	output.style.display = "none";
});


// form - simple calculator

const calculatorForm = document.querySelector('#simple-math');
const numberOneInput = calculatorForm.querySelector('#number1');
const numberTwoInput = calculatorForm.querySelector('#number2');
const mathOutput = document.querySelector('#math-output');

calculatorForm.addEventListener('submit', function(event) {
	event.preventDefault();

	if (numberOneInput.value && numberTwoInput.value) {

		const numberOne = Number(numberOneInput.value);
		const numberTwo = Number(numberTwoInput.value);
		const add = numberOne + numberTwo;
		const subtract = numberOne - numberTwo;
		const multiply = numberOne * numberTwo;
		const divide = numberOne / numberTwo;

		let message1 = `The first number you entered was ${numberOne}.`;
		let message2 = `The second number you entered was ${numberTwo}.`;
		let message3 = `${numberOne} + ${numberTwo} = ${add}`;
		let message4 = `${numberOne} - ${numberTwo} = ${subtract}`;
		let message5 = `${numberOne} * ${numberTwo} = ${multiply}`;
		let message6 = `${numberOne} / ${numberTwo} = ${divide}`;

		mathOutput.style.display = "block";
		mathOutput.innerHTML = "<p>" + message1 + "</p><p>" + message2 + "</p><p>" + message3 + "</p><p>" + message4 + "</p><p>" + message5 + "</p><p>" + message6 + "</p>";

	} else {
		mathOutput.innerHTML = "<p>Please enter some numbers</p>";
	}
});

const clearMath = document.querySelector("#clear-math");

clearMath.addEventListener('click', function(clear) {
	numberOneInput.value = "";
	numberTwoInput.value = "";
	mathOutput.style.display = "none";
});

// form - shopping cart
// user enters item quantities and prices
// multiply each quantity by price to get item subtotal
// add item subtotals to get overall subtotal
// multiply subtotal by tax rate to get tax amount
// add subtotal to tax amount to get total

const shoppingForm = document.querySelector('#shopping-cart');
const item1PriceInput = shoppingForm.querySelector('#item1Price');
const item1QuantInput = shoppingForm.querySelector('#item1Quant');
const item2PriceInput = shoppingForm.querySelector('#item2Price');
const item2QuantInput = shoppingForm.querySelector('#item2Quant');
const item3PriceInput = shoppingForm.querySelector('#item3Price');
const item3QuantInput = shoppingForm.querySelector('#item3Quant');

const calculate = shoppingForm.querySelector('#calculate');

const subOutput = shoppingForm.querySelector('#subtotalOutput');
const taxOutput = shoppingForm.querySelector('#taxOutput');
const totalOutput = shoppingForm.querySelector('#totalOutput');
const receipt = shoppingForm.querySelector('#receipt');

shoppingForm.addEventListener('submit', function(event) {
	event.preventDefault();

	if(item1QuantInput.value && item1PriceInput.value) {

		const item1Price = Number(item1PriceInput.value);
		const item1Quant = Number(item1QuantInput.value);
		const item2Price = Number(item2PriceInput.value);
		const item2Quant = Number(item2QuantInput.value);
		const item3Price = Number(item3PriceInput.value);
		const item3Quant = Number(item3QuantInput.value);

		const item1Sub = item1Quant * item1Price;
		const item2Sub = item2Quant * item2Price;
		const item3Sub = item3Quant * item3Price;

		const subtotal = item1Sub + item2Sub + item3Sub;
		const tax = Number((subtotal * 0.075).toFixed(2));
		const total = subtotal + tax;

		subOutput.textContent = "$" + subtotal;
		taxOutput.textContent = "$" + tax;
		totalOutput.textContent = "$" + total;

		receipt.style.display = "block";
		receipt.style.color = "black";
		receipt.innerHTML = `<p>Item 1: ${item1Quant} at $${item1Price} each</p>
		<p>Item 2: ${item2Quant} at $${item2Price} each</p>
		<p>Item 3: ${item3Quant} at $${item3Price} each</p>`;


	} else if (item1QuantInput.value <= 0 && item1PriceInput <= 0) {
		let message = "Please enter the item quantity and price.";
		receipt.style.display = "block";
		receipt.innerHTML = "<p>" + message + "</p>";
		receipt.style.color = "red";

	}
});

// add an item
// on click - form-field added
// form-field includes label & input for quantity, and label & input for price
// label for quant needs to say "Item [#] quantity"
// item number needs to start at 4 and count one for every row added
// should these rows be an array???
// should form start with only one row?


// let label1 = document.createElement("label");
// let input1 = document.createElement("input");
// let label2 = document.createElement("label");
// let input2 = document.createElement("input");

// console.log(formField);

// label1.htmlFor = "itemQuant";
// label1.textContent = "Item quantity";
// input1.type = "number";
// input1.id = "itemQuant";
// label2.htmlFor = "itemPrice";
// label2.textContent = "Price";
// input1.type = "number";
// input2.id = "itemPrice";


// formField.appendChild(label1);
// formField.appendChild(input1);
// formField.appendChild(label2);
// formField.appendChild(input2);

// function createFormField() {
// 	formField.appendChild(label1);
// formField.appendChild(input1);
// formField.appendChild(label2);
// formField.appendChild(input2);
// }

const addItem = document.querySelector("#add-item");
const formFields = document.querySelector(".form-fields");
let formField = document.createElement("form-field");

addItem.addEventListener('click', function(addItem) {

	formFields.appendChild(formField);
	formField.innerHTML = "<label for='itemQuant'>Item quantity</label><input type='number' id='item-quant'><label for='itemPrice'>Price</label><input type='number' id='itemPrice'>";

	console.log(formField);
	console.log(formFields);
});


const clearShopping = document.querySelector("#clear-shopping");

clearShopping.addEventListener('click', function(clear) {

	let inputs = document.querySelectorAll('input');
	inputs.forEach(function(input) {
		input.value = "";
	});
	subOutput.textContent = "";
	taxOutput.textContent = "";
	totalOutput.textContent = "";
	receipt.style.display = "none";
	formFields.innerHTML = "";
});

const priceArray = [5, 6, 10, 34, 2];

function reducer(accumulator, currentValue, index) {
	const returns = accumulator + currentValue;
	// console.log(
	// 	`accumlator: ${accumulator}, currentValue: ${currentValue}, index: ${index}, returns: ${returns}`,);
	return returns;
}

let subtotal = priceArray.reduce(reducer);
console.log(subtotal);

// const elementArray = [
// 	{
// 		label: "Quantity",
// 		for: "item1Quant",
// 		inputType: "number",
// 		inputID: "item1Quant",
// 	},
// 	{
// 		label: "Price",
// 		for: "item1Price",
// 		inputType: "number",
// 		inputID: "item1Price",
// 	},
// 	{
// 		label: "Quantity",
// 		for: "item2Quant",
// 		inputType: "number",
// 		inputID: "item2Quant",
// 	},
// 	{
// 		label: "Price",
// 		for: "item2Price",
// 		inputType: "number",
// 		inputID: "item2Price",
// 	}
// ];


// ANOTHER SHOPPING CART

const shoppingCart2 = document.querySelector('#shopping-take2');
const shoppingOutlet = document.querySelector('#shopping-outlet');
const cartAddButton = document.querySelector('#add-rows');
const cartClearRow = document.querySelector('#clear-row');
const cartClearAll = document.querySelector('#clear-all');
const cartCalculate = document.querySelector('#calculate-total');

function renderItem() {
	return `
	<li id="item">
		<fieldset>
			<form-field>
				<label for="itemQuant">Item quantity</label>
				<input type="number" id="itemQuant">

				<label for="itemPrice">Price per item </label>
				<input type="number" id="itemPrice">
			</form-field>
		</fieldset>
	</li>
	`;
}

cartAddButton.addEventListener('click', function(event) {
	event.preventDefault();

	shoppingOutlet.insertAdjacentHTML ('beforeend', renderItem());

	console.log(shoppingOutlet);
});

function removeItem() {
	let list = shoppingCart2.querySelector("#shopping-outlet");
	let listItems = list.getElementsByTagName("li");
	let lastItem = listItems[listItems.length-1];
	list.removeChild(lastItem);
}

cartClearRow.addEventListener('click', removeItem);

cartClearAll.addEventListener('click', function(event) {
	event.preventDefault();

	return shoppingOutlet.innerHTML = '';
});







