import 'imports?jQuery=jquery!owl.carousel';
export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('.owl-carousel').owlCarousel({
      items: 1,
      stagePadding: 0,
      loop: true,
    });
  },
};
