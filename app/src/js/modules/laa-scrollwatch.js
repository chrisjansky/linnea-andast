module.exports = function() {
  var lastKnownScrollY = 0;
  var currentScrollY = 0;
  var ticking = false;

  const classes = {
    scrolled: "Body--scrolled",
    top: "Body--top"
  }

  function onScroll() {
    currentScrollY = window.pageYOffset;
    requestTick();
  }

  function requestTick() {
    if (!ticking) {
      requestAnimationFrame(update);
    }
    ticking = true;
  }

  function update() {
    if (currentScrollY > 0) {
      bodyScrolled();
    } else {
      bodyTop();
    }

    lastKnownScrollY = currentScrollY;
    ticking = false;
  }

  function bodyScrolled() {
    if (!document.body.classList.contains(classes.scrolled)) {
      document.body.classList.add(classes.scrolled);
      document.body.classList.remove(classes.top);
    }
  }

  function bodyTop() {
    if (!document.body.classList.contains(classes.top)) {
      document.body.classList.add(classes.top);
      document.body.classList.remove(classes.scrolled);
    }
  }

  document.addEventListener("scroll", onScroll, false);
}
