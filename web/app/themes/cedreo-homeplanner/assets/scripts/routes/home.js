import 'imports?jQuery=jquery!owl.carousel';
export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('.main-carousel').owlCarousel({
      items: 1,
      stagePadding: 0,
      loop: true,
    });
    $('.users-carousel').owlCarousel({
      items: 8,
      stagePadding: 0,
      loop: true,
    });
  },
};
