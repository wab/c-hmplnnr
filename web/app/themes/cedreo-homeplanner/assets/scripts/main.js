/** import external dependencies */
import 'jquery';

// Import npm dependencies
import 'svgxuse';
import 'foundation-sites/js/foundation.core';
import 'foundation-sites/js/foundation.util.mediaQuery';
import 'foundation-sites/js/foundation.util.keyboard';
import 'foundation-sites/js/foundation.util.box';
import 'foundation-sites/js/foundation.util.nest';
import 'foundation-sites/js/foundation.util.triggers';
import 'foundation-sites/js/foundation.util.motion';
import 'foundation-sites/js/foundation.util.timerAndImageLoader';
import 'foundation-sites/js/foundation.responsiveToggle';
import 'foundation-sites/js/foundation.sticky';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import galerie from './routes/gallery';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  /** About Us page, note the change from about-us to aboutUs. */
  aboutUs,
  galerie,
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());
