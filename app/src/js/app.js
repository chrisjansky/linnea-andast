require('smoothscroll-polyfill').polyfill();

require('./modules/laa-lazyload.js')();
require('./modules/laa-toggle.js')();
require('./modules/laa-scrollwatch.js')();
require('./modules/laa-inview.js')();
require('./modules/laa-waypoints.js')();

var chjSmoothScroll = require('./modules/laa-smoothscroll');

var slideActiveClass = "Slide--is-active";
var sliderEl = document.querySelector("[data-slider]");
if (sliderEl !== null) {
  window.sliderObj = new Flickity("[data-slider]", {
    prevNextButtons: false,
    pageDots: false,
    setGallerySize: false,
    lazyLoad: 2,
    autoPlay: 5000
  });
  var prevSlide;

  window.sliderObj.on( 'staticClick', function( event, pointer, cellElement, cellIndex ) {
    /* Dismiss if cell was not clicked */
    if ( !cellElement ) {
      return;
    }

    if (pointer.pageX > document.documentElement.clientWidth/2) {
      window.sliderObj.next();
    } else {
      window.sliderObj.previous();
    }
  });

  window.sliderObj.on( 'change' , function( index ) {
    var isLast = index == window.sliderObj.cells.length - 1;
    document.body.classList.toggle("Slider--end", isLast);

    if (prevSlide !== undefined) {
      prevSlide.getCellElements().forEach( function( cellElem ) {
        cellElem.classList.remove(slideActiveClass);
      });
    }
    prevSlide = window.sliderObj.slides[index];
  });

  window.sliderObj.on( 'settle', function( index ) {
    window.sliderObj.slides[index].getCellElements().forEach( function( cellElem ) {
      cellElem.classList.add(slideActiveClass);
    });
  })
}
