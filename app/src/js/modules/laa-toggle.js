module.exports = {
  init: (function instance() {
    /* Generic toggle class handler */
    var toggleObj = document.querySelectorAll("[data-toggle]");

    for (var i = 0; i < toggleObj.length; i++) {
      toggleObj[i].onclick = function() {
        var classAttr = this.getAttribute("data-toggle");
        var classSplit = classAttr.split(",");

        classSplit.forEach(function(value) {
          document.body.classList.toggle(value + "--is-active");
        });

        if (classAttr == "Hud") {
          var hudOpened = document.body.classList.contains("Hud--is-active");

          if (window.sliderObj !== undefined) {
            if (hudOpened) {
              window.sliderObj.pausePlayer();
            } else {
              window.sliderObj.unpausePlayer();
            }
          }
        }
      }
    }

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
