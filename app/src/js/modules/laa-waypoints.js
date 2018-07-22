module.exports = function() {
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

  var sliderEl = document.querySelector("[data-slider]");
  if (sliderEl !== null) {
    new Waypoint({
      element: sliderEl,
      handler: function(direction) {
        var sliderEnd = window.sliderObj.selectedIndex == window.sliderObj.cells.length - 1;

        if (sliderEnd) {
          document.body.classList.toggle("Slider--end", direction == "down");
        }

        if (direction == "down") {
          window.sliderObj.unpausePlayer();
        } else {
          window.sliderObj.pausePlayer();
        }
      }
    });
  }
}
