// Initialize Splide
document.addEventListener("DOMContentLoaded", function () {
  const splide = new Splide("#myServices", {
    type: "loop", // Infinite loop
    perPage: 3, // Default desktop: Show 3 slides
    gap: "40px", // Space between slides
    drag: false, // Disable drag on desktop
    autoplay: false,
    breakpoints: {
      991: {
        perPage: 2, // Show partial slides on mobile
        drag: true, // Enable drag
        autoplay: true, // Autoplay on mobile
        interval: 5000, // Autoplay interval
        gap: "10px", // Smaller gap for mobile
      },
      768: {
        perPage: 1, // Show partial slides on mobile
        padding: "1.5rem",
      },
    },
  });

  splide.mount();
});
