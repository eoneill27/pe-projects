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

	let item = {
		id: `B${count++}`,
		listNo: listNo++,
		content: checkInput
	}

	checkItems.push(item);

	let listItem = document.createElement('li');
	listItem.setAttribute('id', item.id);

	listItem.innerHTML = item.content;

	printCheck(`Add ${checkInput}`);
	console.log(listItem);

	checkList.appendChild(listItem);
	console.log(checkList);
}



function removeCheck() {
	// event.preventDefault();


	// user input is list number 
	// 

	let index = (Number(document.querySelector("#check-removeNo").value)) - 1;

	console.log(index);

	let listItemID = checkItems[index].id;

	console.log(listItemID);

	let listItem = document.getElementById(`${listItemID}`);
	console.log(listItem);

	let checkList = document.getElementById("#checkoff-list");

	checkList.removeChild(listItem);

	checkItems.splice(index, 1);

	printCheck(`Remove ${checkItems[index].content}`);
}



const checkRemove = document.querySelector("#checkoff-remove");

checkAdd.addEventListener('submit', addCheck);

checkRemove.addEventListener('submit', removeCheck);


// if there is a checkbox
// add event listener for check
// 

let checkBox = document.querySelector("#check-add");


// function completeCheck() {
// 	event.preventDefault();

// 	let checkBox = document.querySelector("#check-add");
// 	console.log(checkBox);
// 	if(checkBox.checked === true) {
// 		checkBox.style.textDecoration = "line-through";
// 	}
// }

// checkBox.addEventListener('change', completeCheck);

// task app

const taskApp = {

	tasks: [],
	idMaker: 0,

	addTask: function(content) {
		let task = {
			idMaker: `A${this.idMaker++}`,
			content: content,
			complete: false
		}
		this.tasks.push(task);

		console.log(this.tasks);
	},

	removeTask: function(id) {
		this.tasks.splice(id, 1);

		console.log(this.tasks);
	},

	editTask: function(id, newContent) {
		this.tasks[id].content = newContent;

		console.log(this.tasks);
	},

	completeTask(id) {
		this.tasks[id].complete = true;

		console.log(this.tasks);
	}
}

taskApp.addTask("buy cheese");


taskApp.completeTask(0);














































// book list app

function message(note) {
	console.log(`---${note}`);
}


const booklistApp = {

	books: [],
	idGenerator: 0,

	add: function(title, author, whenRead) {
		let book = {
			id: `B${this.idGenerator++}`,
			title: title,
			author: author,
			whenRead: whenRead
		}

		this.books.push(book);

		console.log(this.books);
		message(`added ${book.title}`);

		let cardList = document.querySelector("#book-cards");

		let card = document.createElement('li');

		card.innerHTML = `<li class="book-card"><h2>${title}</h2><h3>${author}</h3><h4>${whenRead}</h4></li>`;


		cardList.appendChild(card);
	},

	editTitle: function(index, title) {
		this.books[index].title = title;
		console.log(this.books);

		message(`edited ${title}`);
	},

	editAuthor: function(index, author) {
		this.books[index].author = author;

		message(`edited ${author}`);
	},

	editWhenRead: function(index, whenRead) {
		this.books[index].whenRead = whenRead;

		message(`edited ${whenRead}`);
	},

	remove: function(index) {
		this.books.splice(index, 1);
		console.log(this.books);

		message(`removed ${index}`);
	}
}

booklistApp.add("Everything is Illuminated", "Jonathan Safran Foer", "March 2020");

booklistApp.add("Winnie the Pooh", "A.A. Milne", "June 2017");

booklistApp.editTitle(1, "Minnie the Pooh");

















