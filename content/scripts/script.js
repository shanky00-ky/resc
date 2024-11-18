// counter.js

// Function to animate counters
const counters = document.querySelectorAll('.counter');

const animateCounters = () => {
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-count'); // Get the target count from the data-count attribute
    const current = +counter.innerText; // Get the current count value (initially 0)

    // Only animate if the counter has not already reached the target
    if (current < target) {
      const increment = target / 100; // The increment value for each step
      const interval = setInterval(() => {
        if (current < target) {
          counter.innerText = Math.ceil(current + increment); // Increment the counter
        } else {
          clearInterval(interval); // Stop the interval when the target is reached
          counter.innerText = target; // Ensure the counter reaches the target value
        }
      }, 20); // Speed of animation (lower value = faster)
    }
  });
};

// Trigger animation when the counter section is in view
const counterSection = document.querySelector('.counter-section');
const sectionObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCounters(); // Start the animation when the section is in view
      observer.disconnect(); // Stop observing once animation starts
    }
  });
}, { threshold: 0.5 });

sectionObserver.observe(counterSection); // Watch for visibility of the counter section



$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 3000,
      dots: true,          // Make sure dots are enabled
      dotsEach: true,      // Optional: Each dot corresponds to an item
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });
  });
  
  // Dark Mode Toggle
const checkbox = document.getElementById("checkbox");

checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode", checkbox.checked);
});
