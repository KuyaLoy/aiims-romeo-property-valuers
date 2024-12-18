// Initialize Splide for reviews
document.addEventListener("DOMContentLoaded", function () {
  const splide = new Splide("#myReviews", {
    type: "loop", // Infinite loop
    perPage: 1, // Show 1 slide at a time
    autoplay: true, // Enable autoplay
    interval: 5000, // 3-second interval
    drag: true, // Enable drag
    arrows: false, // Disable arrows
    pagination: true, // Enable navigation dots
    pauseOnHover: false, // Autoplay continues when hovered
    gap: "10px",
  });

  splide.mount();
});

// Initialize Splide for Services
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

// accordian
function toggleAccordion(element) {
  const allItems = document.querySelectorAll(".custom-accordion-content");
  const allIcons = document.querySelectorAll(".custom-accordion-title .right");
  const content = element.nextElementSibling;
  const icon = element.querySelector(".right");

  if (content.classList.contains("open")) return;

  allItems.forEach((item) => item.classList.remove("open"));
  allIcons.forEach((icon) => {
    icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
  <path d="M10.7683 11.5701V2.65283M10.7683 11.5701H19.6855M10.7683 11.5701V20.4873M10.7683 11.5701H1.85107" stroke="#257093" stroke-width="3.42971" stroke-linecap="round"/>
</svg>`;
  });

  content.classList.add("open");
  icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="4" viewBox="0 0 22 4" fill="none">
  <path d="M19.6855 1.74268H10.7683H1.85107" stroke="white" stroke-width="3.42971" stroke-linecap="round"/>
</svg>`;
}

document.addEventListener("DOMContentLoaded", () => {
  const defaultOpen = document.querySelector(".default-open");
  const defaultIcon =
    defaultOpen.previousElementSibling.querySelector(".right");
  defaultOpen.classList.add("open");
  defaultIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="4" viewBox="0 0 22 4" fill="none">
  <path d="M19.6855 1.74268H10.7683H1.85107" stroke="white" stroke-width="3.42971" stroke-linecap="round"/>
</svg>`;
});
