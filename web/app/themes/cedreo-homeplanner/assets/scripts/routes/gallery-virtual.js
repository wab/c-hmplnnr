/* eslint no-unused-vars: 0, no-console: 0 */
// import external dependencies
import 'jquery';

/* global ga, ajaxurl */
import imagesLoaded from 'imagesloaded';
import Isotope from 'isotope-layout';
import lightGallery from 'lightgallery';
import 'lg-fullscreen';
import 'lg-share';

// init Isotope
const grid = document.querySelector('.gallery--items');

let iso = {};

function determineIfElementMatches(element, selector) {
  return element.matches(selector);
}

// JavaScript to be fired on the home page, after the init JS
if (document.body.contains(grid)) {
  imagesLoaded(grid).on('progress', () => {
    // layout Isotope after each image loads
    iso = new Isotope(grid, {
      itemSelector: '.gallery--item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer',
      },
    });
  });

  $('.gallery--items').lightGallery({
    iframeMaxWidth: '90%',
    download: false,
    selector: '.gallery--item--overlay',
    cssEasing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
  });
}
