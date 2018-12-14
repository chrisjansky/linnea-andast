module.exports = {
  init: (function invoke() {
    var videoObj = document.querySelectorAll("[data-video]");

    videoObj.forEach(function(instance) {
      /* Add controls for touch devices */
      if ("ontouchstart" in document.documentElement) {
        instance.setAttribute("controls", true);
      }

      instance.addEventListener("click", function() {
        var isPaused = instance.paused;

        if (isPaused) {
          instance.play();
        } else {
          instance.pause();
        }
      })

      instance.onplay = function() {
        instance.classList.add("is--playing");
      }
      instance.onpause = function() {
        instance.classList.remove("is--playing");
      }
    });

    return invoke;
  })()
}
