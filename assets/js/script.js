// get a reference to the menu toggle button and the menu itself
const toggleButton = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');

// add an event listener to the toggle button that toggles the "active" class on the menu when clicked
toggleButton.addEventListener('click', () => {
  menu.classList.toggle('active');
});


