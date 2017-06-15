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
      responsive:{
        0:{
            items:2,
            nav:false,
            dots: false,
            autoplay: false,
        },
        800:{
            items:4,
            nav:false,
            dots: false,
        },
        1000:{
            items:6,
            nav:false,
            dots: true,
            autoplay: true,
        },
      },
      margin: 10,
      loop: false,
      center: false,
      autoWidth: false,

      stageElement: 'ul',
      itemElement: 'li',
    })
  },
};
