const myCarouselElement = document.querySelector("#michelCarousel")

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 15000,
  touch: false
})

$("#toggleButton").click(function () {
    $(".myDiv").slideToggle();
  });