module.exports = {
  init: (function invoke() {
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

      window.sliderObj.on( 'staticClick', function( event, pointer, cellElement, cellIndex ) {
        var target = pointer.target.tagName;
        /* Dismiss if something clickable */
        if ( target == "A" || target == "VIDEO" ) {
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

        if (document.body.classList.contains("Masthead--active")) {
          document.body.classList.toggle("Slider--end", isLast);
        }

        window.pauseVideo();
        window.playVideo();
      });

      new Waypoint({
        element: sliderEl,
        handler: function(direction) {
          if (direction == "down") {
            window.sliderObj.focus();
            window.sliderObj.unpausePlayer();

            window.playVideo();
          } else {
            window.sliderObj.pausePlayer();
          }
        }
      });
    }

    /* Return to make later calls possible */
    return invoke;
  /* Auto run */
  })()
}

window.pauseVideo = function() {
  /* Pause previously playing video */
  if (window.currentVideo) {
    window.currentVideo.pause();
    window.currentVideo.currentTime = 0;
  }
}

window.playVideo = function() {
  var slide = window.sliderObj.selectedElement;

  window.currentVideo = slide.querySelector("[data-video]");
  if (window.currentVideo) {
    window.currentVideo.play();
  }
}
