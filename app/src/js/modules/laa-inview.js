module.exports = function() {
  var inviewActiveClass = "is--in-view";
  inView.threshold(0.25);

  inView("[data-appear]").on("enter", function(element) {
    return element.classList.add(inviewActiveClass);
  });
}
