const todos = [];
var count = 0;
var listNumber = 1;

function print(note = "") {
	console.log(`----- ${note}`);
	console.log('To Dos: ', todos);
}

let addForm = document.querySelector('#add-form');
let removeForm = document.querySelector('#remove-form');
let editForm = document.querySelector('#edit-form');

let todoList = document.querySelector('#todo-list');

let submitRemove = document.querySelector('#submit-remove');


function add() {

	event.preventDefault();

	let itemInput = document.querySelector('#item-add').value;

	var todo = {
		id: `A${count++}`,
		listNumber: listNumber++,
		content: itemInput
	};

	todos.push(todo);

	print(`Added ${todo.content}`);

	let listItem = document.createElement("li");
	listItem.setAttribute('id', todo.id);
	listItem.textContent = todo.content;

	todoList.appendChild(listItem);
}

function remove() {


	// user inputs id # - #item-remove
	// todo object with that id # should be deleted from todos array
	// listItem = document.querySelector()
	// todoList.removeChild()

	event.preventDefault();

	let index = (Number(document.querySelector("#item-remove").value)) - 1;

	let listItemID = todos[index].id; 
	console.log(listItemID);

	let listItem = document.getElementById(`${listItemID}`);
	console.log(listItem);

	let todoList = document.getElementById("todo-list");
	console.log(todoList);

	todoList.removeChild(listItem);

	print(`Removed ${todos[index].content}`);
	todos.splice(index, 1);


}

function edit() {
	event.preventDefault();

	// user inputs list number
	let index = (Number(document.querySelector("#item-editNumber").value)) - 1;

	// use index via list number to find item ID
	let listItemID = todos[index].id;

	// get element by item ID
	let listItem = document.getElementById(`${listItemID}`);
	console.log(listItem);

	// user input new content 
	let newContent = document.querySelector("#item-editContent").value;
	console.log(newContent);

	// change element content to user input content
	listItem.textContent = newContent;

	// change array object content to user imput content
	todos[index].content = newContent;

	print(`Edited ${todos[index]}`);
}

addForm.addEventListener('submit', add);

removeForm.addEventListener('submit', remove);

editForm.addEventListener('submit', edit);


// check list

function printCheck(note = "") {
	console.log(`----- ${note}`);
	console.log('To Dos: ', checkItems);
}

const checkAdd = document.querySelector('#checkoff-add');
const checkItems = [];

let listNo = 1;

function addCheck() {
	event.preventDefault();

	let checkInput = document.querySelector('#check-add').value;
	//form input

	const checkList = document.querySelector('#checkoff-list');
	// ordered list

	let checkItem = {
		id: `B${count++}`,
		listNo: listNo++,
		content: checkInput
	}

	checkItems.push(checkItem);

	let listItem = document.createElement('div');
	listItem.setAttribute('id', checkItem.id);

	listItem.innerHTML = `<input type="checkbox" id="checkItem" name="check-input" class="checkbox"><label for="checkItem">${checkInput}</label>`;

	printCheck(`Add ${checkInput}`);
	console.log(listItem);

	checkList.appendChild(listItem);
}

function removeCheck() {
	event.preventDefault();

	// user input is list number 
	// 

	let index = Number(document.querySelector("#check-removeNo").value) - 1;

	let listItemID = checkItems[index].id;

	let listItem = document.getItemById(`${listItemID}`);

	const checkList = document.querySelector('#checkoff-list');

	checkList.removeChild(listItem);

	checkItems.splice(index, 1);

	printCheck(`Remove ${checkInput}`);



}

const checkRemove = document.querySelector("#submit-checkRemove");

checkAdd.addEventListener('submit', addCheck);

checkRemove.addEventListener('submit', removeCheck);





// if there is a checkbox
// add event listener for check
// 



