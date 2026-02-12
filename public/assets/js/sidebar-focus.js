(function () {
  "use strict";

  function getScroller() {
    var wrap = document.querySelector("#scrollbar .simplebar-content-wrapper");
    return wrap || document.getElementById("scrollbar");
  }

  function focusActiveMenu() {
    var active = document.querySelector("#navbar-nav a.nav-link.active, #navbar-nav a.menu-link.active");
    var scroller = getScroller();
    if (!active || !scroller) return;

    var scrollerRect = scroller.getBoundingClientRect();
    var activeRect = active.getBoundingClientRect();
    var targetTop = activeRect.top - scrollerRect.top + scroller.scrollTop - scroller.clientHeight * 0.35;

    scroller.scrollTo({
      top: Math.max(0, targetTop),
      behavior: "smooth"
    });
  }

  window.addEventListener("load", function () {
    setTimeout(focusActiveMenu, 180);
  });
})();
