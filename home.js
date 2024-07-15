let index = 0;
const slides = document.querySelectorAll('.slide');

// Function to show the next slide
function showNextSlide() {
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

// Function to show the previous slide
function showPrevSlide() {
  slides[index].classList.remove('active');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('active');
}

// Change slide automatically every 4 seconds
setInterval(showNextSlide, 7000);

// Show the first slide initially
slides[index].classList.add('active');

// Add event listeners to previous and next buttons
document.querySelector('.prev').addEventListener('click', showPrevSlide);
document.querySelector('.next').addEventListener('click', showNextSlide);



