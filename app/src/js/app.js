require('smoothscroll-polyfill').polyfill();

/* Store for later and initialize inside */
var
  laaFlickity = require('./modules/laa-flickity'),
  laaHandlers = require('./modules/laa-handlers'),
  laaInview = require('./modules/laa-inview'),
  laaLazy = require('./modules/laa-lazyload'),
  laaSmoothScroll = require('./modules/laa-smoothscroll'),
  laaToggle = require('./modules/laa-toggle'),
  laaWaypoints = require('./modules/laa-waypoints');

Barba.Pjax.start();
Barba.Prefetch.init();

var barbaClicked = false;

Barba.Dispatcher.on("linkClicked", function() {
  barbaClicked = true;
});

addEventListener("popstate", function (event) {
  barbaClicked = false;
});

/* Event based here */
Barba.Dispatcher.on("newPageReady", function(currentStatus, oldStatus, container, newPageRawHTML) {
  /* Update body class according to fetched page */
  let regexp = /\<body.*\sclass=["'](.+?)["'].*\>/gi,
      match = regexp.exec(newPageRawHTML);
  if(!match || !match[1]) return;
  document.body.setAttribute("class", match[1]);

  laaHandlers.init();
  laaLazy.init();
  laaToggle.init();
  laaSmoothScroll.init();
  laaInview.init();
});

/* Direct DOM manupulation here */
Barba.Dispatcher.on("transitionCompleted", function() {
  /* Destroy previous flickity instance if exists */
  if (window.sliderObj !== undefined) {
    window.sliderObj.destroy();
  }
  /* Destroy previous Waypoints */
  Waypoint.destroyAll();

  laaFlickity.init();
  laaWaypoints.init();

  /* Don't change scroll position if back button pressed */
  if (barbaClicked) {
    window.scroll({
      top: 0,
      behaviour: "smooth"
    });
  }
});
