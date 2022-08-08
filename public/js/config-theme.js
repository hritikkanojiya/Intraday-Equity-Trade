/* --------------------------------------------------------------------------
 * File        : config-theme.js
 * Author      : indonez
 * Author URI  : http://www.indonez.com
 *
 * Indonez Copyright 2020 All Rights Reserved.
 * -------------------------------------------------------------------------- 
 * javascript handle initialization
    1. Slideshow
    2. Counter
    3. Mobile nav button
    4. Modal iframe
 * -------------------------------------------------------------------------- */

"use strict";

const HomepageApp = {
  //----------- 1. Slideshow -----------
  theme_slideshow: function () {
    UIkit.slideshow(".in-slideshow", {
      autoplay: true,
      autoplayInterval: 7000,
      pauseOnHover: false,
      animation: "slide",
      minHeight: 480,
      maxHeight: 700,
    });
  },
  //---------- 2. Counter -----------
  theme_counter: function () {
    const counter = new counterUp({
      selector: ".count",
      start: 0,
      duration: 3200,
      intvalues: true,
      interval: 50,
    });
    counter.start();
  },
};

document.addEventListener("DOMContentLoaded", function () {
  HomepageApp.theme_init();
});
