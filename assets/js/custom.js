const heading = document.getElementById("chanage-text-contaact");
const originalHTML = heading.innerHTML; // Store original content

function updateHeadingText() {
  if (window.innerWidth <= 991) {
    heading.innerHTML = "Contact Our Team";
  } else {
    heading.innerHTML = originalHTML;
  }
}

// Run on page load and window resize
window.addEventListener("load", updateHeadingText);
window.addEventListener("resize", updateHeadingText);

// Initialize Splide
document.addEventListener("DOMContentLoaded", function () {
  const splide = new Splide("#mySplide", {
    type: "loop", // Infinite loop
    perPage: 3, // Default desktop: Show 3 slides
    gap: "20px", // Space between slides
    drag: false, // Disable drag on desktop
    autoplay: false,
    start: 1, // Default: Start at slide 2 (index 1 for zero-based indexing)
    breakpoints: {
      991: {
        perPage: 1, // Show partial slides on mobile
        drag: true, // Enable drag
        autoplay: true, // Autoplay on mobile
        interval: 5000, // Autoplay interval
        gap: "10px", // Smaller gap for mobile
        start: 1, // Start at Slide 2 for mobile
      },
    },
  });

  splide.mount();
});
