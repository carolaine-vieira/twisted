$(document).ready(function () {
  initMasonry();
  initSlide();
  initAccordion();
});

// Init masonry elements
const initMasonry = () => {
  $(function () {
    $(".grid").masonry({
      isFitWidth: true,
      itemSelector: ".grid-item",
    });
  });
};

// Change style of header
window.onscroll = myFunction = () => {
  const windowOffset = window.pageYOffset;

  windowOffset >= 500
    ? $("header").addClass("scrolled")
    : $("header").removeClass("scrolled");
};

// Set things to use the slide
const initSlide = () => {
  const slideContainer = document.querySelectorAll(".slide-container");
  const slides = document.querySelectorAll(".slide-container .slide");

  $(slides[0]).addClass("active");

  $(slideContainer).append(`<div class="navigation"></div>`);
  slides.forEach((slide, index) => {
    $(".slide-container .navigation").append(
      `<a class="navigation-button navigation-button-${index}"></a>`
    );
  });
  $(".navigation-button").eq(0).addClass("active-button");

  $(".slide-container .navigation-button").click(function (e) {
    e.preventDefault();
    const selectedIndex = parseInt(
      e.target.classList[1].replace("navigation-button-", "")
    );

    $(".slide-container .slide").removeClass("active"); // Clear active in the tag list
    $(slides[selectedIndex]).addClass("active");

    $(".navigation-button").removeClass("active-button"); // Clear active in the tag list
    $(".navigation-button").eq(selectedIndex).addClass("active-button");
  });
};

// Single post accordion
const initAccordion = () => {
  const items = document.querySelectorAll("#post-options .item");
  items.forEach((item, index) => {
    $(item).addClass(`item-${index}`);
  });

  $("#post-options .item-title").click(function (e) {
    const element = e.target.parentNode;
    const elementId = element.classList[1];

    $(`.${elementId} .item-content`).slideToggle("fast", function () {
      // Animation complete.
    });
  });
};
