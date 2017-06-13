/* eslint no-unused-vars: 0, no-console: 0 */
import owlCarousel from 'owl.carousel';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    const carousel = $('.owl-carousel');
    carousel.owlCarousel({
      items: 6,
      margin: 10,
      loop: false,
      center: false,
      autoWidth: false,
      dots: true,
      autoplay: true,
      stageElement: 'ul',
      itemElement: 'li',
    })
  },
};
