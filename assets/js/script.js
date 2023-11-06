// script.js
const testimonials = document.querySelectorAll(".testimonial");
let currentIndex = 0;

function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
        testimonial.style.display = i === index ? "block" : "none";
    });
}

function changeTestimonial(direction) {
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = testimonials.length - 1;
    } else if (currentIndex >= testimonials.length) {
        currentIndex = 0;
    }
    showTestimonial(currentIndex);
}

showTestimonial(currentIndex);
