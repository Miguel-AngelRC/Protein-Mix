document.addEventListener('DOMContentLoaded', () => {
  const elementosCarousel = document.querySelectorAll('.carousel');
  M.Carousel.init(elementosCarousel, {
    duration: 250,
    dist: -50,
    shift: 10,
    padding: 60,
    numVisible: 3,
    noWrap: false
  });
});