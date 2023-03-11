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