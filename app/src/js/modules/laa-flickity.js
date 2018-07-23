var slideActiveClass = "Slide--is-active";

module.exports = {
  init: (function instance() {
    var sliderEl = document.querySelector("[data-slider]");

    if (sliderEl !== null) {
      window.sliderObj = new Flickity("[data-slider]", {
        prevNextButtons: false,
        pageDots: false,
        setGallerySize: false,
        lazyLoad: 2,
        autoPlay: 5000
      });
      window.sliderObj.pausePlayer();
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

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
