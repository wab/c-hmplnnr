/* eslint no-unused-vars: 0, no-console: 0 */
// import external dependencies
import 'jquery';

/* global ajaxurl */
import imagesLoaded from 'imagesloaded';
import Isotope from 'isotope-layout';
import lightGallery from 'lightgallery';
import 'lg-fullscreen';
import 'lg-share';

// init Isotope
const grid = document.querySelector('.gallery--items');
const filtersElem = document.querySelector('.gallery--filters');

let iso = {};
let filterValue = [];

function determineIfElementMatches(element, selector) {
  return element.matches(selector);
}

function radioButtonGroup(buttonGroup) {
  buttonGroup.addEventListener('click', (event) => {
    // only work with buttons
    if (!determineIfElementMatches(event.target, 'button')) {
      return;
    }
    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}

// JavaScript to be fired on the home page, after the init JS
if (document.body.contains(grid)) {

  imagesLoaded(grid).on('progress', () => {
    // layout Isotope after each image loads
    iso = new Isotope(grid, {
      itemSelector: '.gallery--item',
      percentPosition: true,
      stagger: 30,
      // slow transitions
      transitionDuration: '0.8s',
      masonry: {
        columnWidth: '.grid-sizer',
      },
    });
  });

  $('.gallery--items').lightGallery({
    selector: '.gallery--item--overlay',
    cssEasing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
    speed: 1000,
    subHtmlSelectorRelative: true,
    share: true,
  });

  // bind filter button click
  filtersElem.addEventListener('click', (event) => {
    // only work with buttons
    if (!determineIfElementMatches(event.target, 'button')) {
      return;
    }
    filterValue = event.target.getAttribute('data-filter');
    iso.arrange({ filter: filterValue });
    $('.gallery--items').data('lightGallery').destroy(true);
    const filterClass = `${filterValue} .gallery--item--overlay`
    $('.gallery--items').lightGallery({
      selector: filterClass,
      cssEasing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
      speed: 1000,
      subHtmlSelectorRelative: true,
      share: true,
    });
  });

  // change is-checked class on buttons

  const buttonGroups = document.querySelectorAll('.gallery--filters');

  for (let i = 0; i < buttonGroups.length; i += 1) {
    const buttonGroup = buttonGroups[i];
    radioButtonGroup(buttonGroup);
  }

}
