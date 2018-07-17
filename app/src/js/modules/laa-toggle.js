module.exports = function() {
  /* Generic toggle class handler */
  var toggleObj = document.querySelectorAll("[data-toggle]");
  for (var i = 0; i < toggleObj.length; i++) {
    toggleObj[i].onclick = function() {
      var classAttr = this.getAttribute("data-toggle");
      var classSplit = classAttr.split(",");

      classSplit.forEach(function(value) {
        document.body.classList.toggle(value + "--is-active");
      });
    }
  }
}
