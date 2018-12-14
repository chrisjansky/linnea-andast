module.exports = {
  init: (function instance() {
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
        if (window.sliderObj !== undefined) {
          var sliderEnd = window.sliderObj.selectedIndex == window.sliderObj.cells.length - 1;
          if (sliderEnd) {
            document.body.classList.remove("Slider--end");
            window.sliderObj.select(0); /* Go to first slide */
          }
        }

        if (direction == "up") {
          document.body.classList.remove("Hud--is-active");
          window.pauseVideo();
        }
      }
    });

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
