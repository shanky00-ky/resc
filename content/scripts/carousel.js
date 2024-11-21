let currentIndex = 0;

const items = document.querySelectorAll('.carousel-item');
const indicators = document.querySelectorAll('.indicator');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');

function updateCarousel() {
  items.forEach((item, index) => {
    item.classList.remove('active');
    indicators[index].classList.remove('active');
  });

  items[currentIndex].classList.add('active');
  indicators[currentIndex].classList.add('active');
}

indicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    currentIndex = index;
    updateCarousel();
  });
});

nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % items.length;
  updateCarousel();
});

prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + items.length) % items.length;
  updateCarousel();
});

setInterval(() => {
  currentIndex = (currentIndex + 1) % items.length;
  updateCarousel();
}, 3000);

updateCarousel();