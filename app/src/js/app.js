require('smoothscroll-polyfill').polyfill();

require('./modules/laa-lazyload.js')();
require('./modules/laa-toggle.js')();
require('./modules/laa-scrollwatch.js')();

var chjSmoothScroll = require('./modules/laa-smoothscroll');

var sliderEl = document.querySelector("[data-slider]");
if (sliderEl !== null) {
  var sliderObj = new Flickity("[data-slider]", {
    prevNextButtons: false,
    pageDots: false,
    setGallerySize: false,
    lazyLoad: true
  });

  sliderObj.on( 'staticClick', function( event, pointer, cellElement, cellIndex ) {
    /* Dismiss if cell was not clicked */
    if ( !cellElement ) {
      return;
    }

    if (event.x > document.documentElement.clientWidth/2) {
      sliderObj.next();
    } else {
      sliderObj.previous();
    }
  });
}

/* Waypoints */
var waypointObj = document.querySelectorAll("[data-waypoint]");
waypointObj.forEach(function(instance, index) {
  new Waypoint({
    element: instance,
    handler: function(direction) {
      document.body.classList.toggle(this.element.dataset.waypoint + "--active", direction == "down");
    }
  })
});

new Waypoint({
  element: document.querySelector("[data-waypoint='Masthead']"),
  handler: function(direction) {
    if (direction == "up") {
      document.body.classList.remove("Hud--is-active");
    }
  }
});
