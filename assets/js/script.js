$(document).ready(function () {
  reviewsAnimation();
  initMasonry();
  initSlide();
  initAccordion();
  openSidebar();

  // showing first two itens on header menu
  const navigate = document.querySelectorAll("header .twisted-home-menu li");
  $(navigate[0]).css("display", "inline-flex");
  $(navigate[1]).css("display", "inline-flex");
});

// Init masonry elements
const initMasonry = () => {
  setTimeout(() => {
    $(function () {
      $(".grid").masonry({
        isFitWidth: true,
        itemSelector: ".grid-item",
        gutter: 10,
      });
    });
  }, 500);
};

// Change style of header
$(window).scroll(
  (stickHeader = () => {
    const windowPos = window.pageYOffset;
    windowPos >= 500
      ? $("header").addClass("scrolled")
      : $("header").removeClass("scrolled");
  })
);

// Scroll to top
$(window).scroll(
  (scrollTop = () => {
    const windowPos = window.pageYOffset;
    if (windowPos >= 500) {
      $("#scroll-top").show();

      $("#scroll-top").click(function (e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
    } else {
      $("#scroll-top").hide();
    }
  })
);

// Set up things to use the slide
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

// Reviews animation
const reviewsAnimation = () => {
  const reviews = document.querySelectorAll(".review");
  reviews.forEach((review, index) => {
    setTimeout(() => {
      review.style.top = 0;
    }, 200 * index);
  });
};

// On scroll page sections animation
window.onscroll = pageAnimation = () => {
  const elSelector = ".pgScroll";
  const elements = document.querySelectorAll(elSelector);
  const windowOffset = window.pageYOffset;

  const offset = (el) => {
    let rect = el.getBoundingClientRect(),
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop };
  };

  elements.forEach((element) => {
    let elementOffset = offset(element);

    windowOffset >= elementOffset.top - 630 ? (element.style.top = 0) : {};
  });
};

// Adding open sidebar menu link
const openSidebar = () => {
  $("header nav").append(`<a class="sidebar-button open-sidebar"></a>`);

  $("header nav .sidebar-button").click(function (e) {
    e.preventDefault();

    $(".review").toggleClass("hidded");
    $("header").toggleClass("sdb-open");

    $("header nav .sidebar-button").toggleClass("open-sidebar");
    $("header nav .sidebar-button").toggleClass("close-sidebar");
    $("header").toggleClass("sdb-open-pd");

    const container = document.querySelector("#controls");
    $(container).toggleClass("sidebar-opened");
  });
};
