import ScrollReveal from 'scrollreveal';
/* eslint no-undef: 0, no-console: 0 */
export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $(document).foundation();

    window.sr = ScrollReveal({
      reset: true,
      duration: 400,
      distance: '30px',
      viewOffset: { top: 60, right: 0, bottom: 0, left: 0 },
      viewFactor: 0.2,
      opacity: 0.3,
    });

    sr.reveal('.section-title span');
    sr.reveal('.section--title span');
    sr.reveal('.section-thumbnail');

    // loader images
    const imagesElem =  $('img');
    imagesElem.addClass('invisible');
    Foundation.onImagesLoaded(imagesElem, () => {
      imagesElem.removeClass('invisible');
    });

    // navigation mobile
    $('.menu-link').click(() => {
      $('.navigation-menu').toggleClass('opened');
    });

    // Scroll animation speed
    const speed = 200;
    // Cashing objects
    const $root = $('html, body');
    const $selector = $('a[href*="#"]:not([href="#"])');

    $selector.on('click', function scroll(event) {
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
          location.hostname === this.hostname) {
        // Prevent default link behavior
        event.preventDefault();

        // Store target object
        let target = $(this.hash);
        target = target.length ? target : $(`[name='${target.slice(1)}`);

        // Animate scroll
        if (target.length) {
          $root.animate({
            scrollTop: target.offset().top,
          }, speed, () => {
            // Update URL witch correct hash
            window.location.hash = target.selector;
          });
        }
      }
    });
  },
};
