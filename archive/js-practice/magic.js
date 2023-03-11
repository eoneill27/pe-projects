
var name = "Emily";
console.log(name);

var bookClub = ["Ann", "Emily", "Kimmy", "Dana", "Jenn", "Allison", "Ang", "Robyn", "Julia"];
console.log("Book Club Members: ", bookClub);

console.log("Founding Book Club members: ", bookClub[0], bookClub[1], bookClub[2], bookClub[3], bookClub[4], bookClub[5]);

function shoutName(name) {
	console.log("I am " + name + "!!!!!!");
}

shoutName("Emily");

// function whisperName(name) {
// 	console.log("oh hi, i'm " + name + ".");
// 	alert("oh hi, i'm " + name + ".");
// }

// whisperName("emily");

for (var member = 0; member < bookClub.length; member++) {
	console.log("Member: ", bookClub[member]);

}

var kidArray = ["Ellie", "Natalie", "Matthew", "Ryan", "Leah", "Jamie", "Aurora"];

for (var kid = 0; kid < kidArray.length; kid++) {
	console.log("Kid: ", kidArray[kid]);
}

function doThings(anArray, aFunction) {
	for (var i = 0; i < anArray.length; i++) {
		aFunction(anArray[i], i, anArray);
	}
}

// doThings(bookClub, shoutName);

function printItem(item, index) {
	var listItem = document.createElement('li');
	listItem.textContent = index + " " + item;
	listItem.classList.add('item');
	document.body.appendChild(listItem);
}

// printItem("So much to learn!");

doThings(kidArray, printItem);

function renderItem(item, index) {
	console.log(index, item);
}

kidArray.forEach(renderItem);

console.log(10*8.43349389);
console.log(Math.round(10*8.3433439));


var headingTwo = document.createElement('h2');
headingTwo.textContent = "Kids I Know";
document.body.appendChild(headingTwo);

var kidArray = [
	{
		name: "Ellie",
		age: 7,
		inSchool: true,
		grade: 2,
		mom: "Ann",
		dad: "John",
	},
	{
		name: "Natalie",
		age: 5,
		inSchool: true,
		grade: "kindergarten",
		mom: "Ann", 
		dad: "John",
	},
	{
		name: "Matthew",
		age: 10,
		inSchool: true,
		grade: 5,
		mom: "Jenn", 
		dad: "Aaron",
	},
	{
		name: "Ryan",
		age: 8,
		inSchool: true,
		grade: 3,
		mom: "Jenn", 
		dad: "Aaron"
	},
	{
		name: "Leah", 
		age: 8,
		inSchool: true,
		grade: 2,
		mom: "Dana",
		dad: "Adam",
	},
	{
		name: "Jamie",
		age: 5,
		inSchool: true,
		grade: "kindergarten",
		mom: "Dana",
		dad: "Adam",
	},
	{
		name: "Aurora",
		age: 6,
		inSchool: true,
		grade: 1, 
		mom: "Kimmy",
		dad: "Myles",
	},
	{
		name: "Adrian",
		age: 4,
		inSchool: false,
		grade: "pre-k",
		mom: "Julia",
		dad: "Rob",
	},
	{
		name: "Kyle",
		age: 1,
		inSchool: false,
		grade: "daycare",
		mom: "Julia",
		dad: "Rob",
	},
	{
		name: "Mabel",
		age: 7,
		inSchool: true,
		grade: 1,
		mom: "Robyn",
		dad: "Will",
	},
	{
		name: "Claire",
		age: 4,
		inSchool: false,
		grade: "pre-k",
		mom: "Robyn",
		dad: "Will",
	},
	{
		name: "Craig",
		age: 8,
		inSchool: true,
		grade: 3,
		mom: "Allison",
		dad: "Tim",
	},
	{
		name: "Scott",
		age: 5,
		inSchool: false,
		grade: "pre-k", 
		mom: "Allison",
		dad: "Tim"
	},
	{
		name: "Niall",
		age: 10,
		inSchool: true,
		grade: 5,
		mom: "Angela",
		dad: "Damien",
	},
	{
		name: "Faye",
		age: 8,
		inSchool: true,
		grade: 3,
		mom: "Angela",
		dad: "Damien",
	}
];

kidArray.forEach(
	function (kid, id) {

		var box = document.createElement('div');
		box.classList.add('kid-box');
		box.style.border = '2px solid salmon';
		box.style.padding = "20px";
		box.style.marginTop = "20px";
		box.style.maxWidth = "600px";

		var boxHeading = document.createElement('h3');
		boxHeading.classList.add('kid-name');
		boxHeading.textContent = kid.name;

		var infoList = document.createElement('ul');
		infoList.classList.add('kid-details');
		var age = document.createElement('li');
		age.textContent = "Age: " + kid.age;
		var grade = document.createElement('li');
		grade.textContent = "Grade: " + kid.grade;

		infoList.appendChild(age);
		infoList.appendChild(grade);

		box.appendChild(boxHeading);
		box.appendChild(infoList);

		if (kid.inSchool == true) {
			box.style.backgroundColor = "lemonchiffon";
		} else {
			box.style.backgroundColor = "pink";
		}

		document.body.appendChild(box);

	}

);

function kidPush () {
	var name = prompt("What is the kid's name?");
	var ageInput = prompt("How old is the kid?");

	var box = document.createElement('div');
	box.classList.add('kid-box');
	box.style.border = '2px solid salmon';
	box.style.padding = "20px";
	box.style.marginTop = "20px";
	box.style.maxWidth = "600px";

	var boxHeading = document.createElement('h3');
	boxHeading.classList.add('kid-name');
	boxHeading.textContent = name;

	var infoList = document.createElement('ul');
	infoList.classList.add('kid-details');
	var age = document.createElement('li');
	age.textContent = "Age: " + ageInput;

	infoList.appendChild(age);

	box.appendChild(boxHeading);
	box.appendChild(infoList);

	document.body.appendChild(box);

}

var button = document.createElement('button');
button.textContent = "Add a kid";
button.style.marginTop = "50px";
button.style.padding = "15px";
document.body.appendChild(button);

button.addEventListener('click', kidPush);

console.log(kidArray);



var myStuff = [
	"coffee mug",
	"time timer",
	"dog sculpture",
	"desk lamp",
	"bluetooth speaker",
	"small vase",
	"black pen",
	"red pen",
	"large notebook",
	"small notebook",
	"mug rug",
];

var deskItems = [
	{
		name: "coffee mug",
		color: "white",
	},
	{
		name: "time timer",
		color: "turquoise",
	},
	{
		name: "dog scuplture",
		color: "brown",
	},
	{
		name: "desk lamp",
		color: "turquoise",
	},
	{
		name: "bluetooth speaker",
		color: "black",
	},
	{
		name: "small vase",
		color: "brown",
	},
	{
		name: "black pen",
		color: "black",
	},
	{
		name: "red pen",
		color: "red",
	},
	{
		name: "large notebook",
		color: "brown",
	},
	{
		name: "small notebook",
		color: "black",
	},
	{
		name: "mug rug",
		color: "red",
	}
];

deskItems.forEach( function(item, index, fullArray) {
	var number = index + 1;
	console.log("name: ", item.name);
	console.log("color: ", item.color);
	console.log("");
})

// if the item is brown
// put it on the list

console.log("These are the brown things:");
console.log("");

deskItems.forEach (function (item, index) {
	if (item.color == "brown") {
		console.log("name: ", item.name);
		console.log("color: ", item.color);
		console.log("");
	}
}
);

console.log("These are the red things:");
console.log("");
		
deskItems.forEach (function (item, index) {
	if (item.color == "red") {
		console.log("name: ", item.name);
		console.log("color: ", item.color);
		console.log("");
	}
}
);

deskItems.forEach (function (item, index) {
	if (item.color == "turquoise") {
		console.log("name: ", item.name);
		console.log("color: ", item.color);
		console.log("");
	} else {
		console.log("name: ", item.name);
		console.log("");
	}
}
);

var brown = deskItems.filter(function(item) {
	return item.color == "brown";
});

console.log(brown);

// create function that accepts an array and generates markup 
// must have heading, and create a list of the items

function listGenerator(array, arrayName) {

	var div = document.createElement('div');
	div.classList.add('list');

	var heading = document.createElement('h2');
	heading.textContent = arrayName;

	var list = document.createElement('ul');

	array.forEach(function(item) {
		var listItem = document.createElement('li');
		listItem.textContent = item.name;
		list.appendChild(listItem);
	});

	div.appendChild(heading);
	div.appendChild(list);

	document.body.appendChild(div);

}

listGenerator(deskItems, "Stuff on my desk");

listGenerator(kidArray, "Kids I know");

function olderThan(kid) {
	if (kid.age > 7) {
		return kid.name;
	
	}
}

// kidArray.filter(function(kid) {
// 	if (kid.age > 7) {
// 		console.log(kid.name);
// 	}
// });

var olderThanSeven = kidArray.filter(olderThan);

console.log(olderThanSeven);

listGenerator(olderThanSeven, "Which of those kids are more than seven years old?");


// Array.from()

console.log(Array.from('Emily'));

function plusOne(i) {
	for(var i; i < 10; i++) {
		console.log(i);
	}
}

var set = new Set(["New York", "London", "Paris", "Toronto"]);

console.log(Array.from(set));

// var five = plusOne(5);
// console.log(Array.from(five));

// console.log(Array.from(countFromFive));

// Array.isArray()

console.log(Array.isArray(set));
console.log(Array.isArray(kidArray));

// Array.length

console.log(kidArray.length);

// Array.push()

kidArray.push({name: 'Evelyn', age: 5, inSchool: true, grade: 'kindergarten', mom: 'Suzanne', dad: 'Matt'});
console.log(kidArray);

// Array.shift()

var favoriteCities = ["San Francisco", "New York City", "London", "Paris", "Vancouver", "Seattle"];

favoriteCities.shift();
console.log(favoriteCities);

var extraFavorite = favoriteCities.slice(2);
console.log(extraFavorite);

favoriteCities.unshift("San Francisco");
console.log(favoriteCities);

// Array.join()

console.log(bookClub.join(", "));

// Array.reverse()

console.log(bookClub.reverse());

// Array.find() - first item in array that fulfills the criteria

var numbers = [4, 85, 34, 19, 7, 102, 9, 64];

console.log(numbers.find(number => number > 40));

console.log(bookClub.find(name => name.length > 5));

// Array.map()

var map1 = numbers.map(x => (x * 2) / 4);
console.log(map1);

// Array.reduce()



