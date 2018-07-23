module.exports = {
  init: (function instance() {
    var inviewActiveClass = "is--in-view";
    inView.threshold(0.25);

    inView("[data-appear]").on("enter", function(element) {
      return element.classList.add(inviewActiveClass);
    });

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
