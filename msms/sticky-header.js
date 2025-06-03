let slides = document.querySelectorAll(".slides");
let currentSlide = 0;
let slideInterval = setInterval(nextSlide, 5000); // change every 5 seconds

function nextSlide() {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
}

function prevSlide() {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
}

// Navigation buttons
document.querySelector(".next").addEventListener("click", () => {
    clearInterval(slideInterval);
    nextSlide();
});

document.querySelector(".prev").addEventListener("click", () => {
    clearInterval(slideInterval);
    prevSlide();
});
