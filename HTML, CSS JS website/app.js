// Get necessary elements
const menu = document.querySelector('#mobile-menu');
const navbarMenu = document.querySelector('.navbar__menu');
const mainImage = document.getElementById('main__img');

// Function to handle menu toggle
function toggleMenu() {
  menu.classList.toggle('is-active');
  navbarMenu.classList.toggle('active');
}

// Function to resize the main image based on screen width
function resizeMainImage() {
  const screenWidth = window.innerWidth;
  if (screenWidth <= 768) {
    mainImage.style.width = '80%'; // Make it smaller but not too small
    mainImage.style.maxWidth = '300px'; // Set a max width for smaller screens
  } else {
    mainImage.style.width = '100%'; // Use full width for larger screens
    mainImage.style.maxWidth = '600px'; // Set a max width for larger screens
  }
}

// Event listeners
menu.addEventListener('click', toggleMenu);
window.addEventListener('resize', resizeMainImage);

// Call the resizeMainImage function initially
resizeMainImage();