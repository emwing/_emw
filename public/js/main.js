$(document).ready(function() {
// chrome mobile vh fix (prevent resizing vh when url bar disappears on scroll) (referenced from https://stackoverflow.com/questions/39384154/calculating-viewport-height-on-chrome-android-with-css)
// used the last suggestion on the reference page  for mobile contingency
  (function() {
    function size() {
      // test for mobile device
      if (/android|webos|iphone|ipad|ipod|blackberry|nokia|opera mini|opera mobi|skyfire|maemo|windows phone|palm|iemobile|symbian|symbianos|fennec/i.test(navigator.userAgent.toLowerCase())) {
        // calculate the screen height
        var theminheight = Math.min(document.documentElement.clientHeight, window.screen.height, window.innerHeight);
        // now apply height
        $('html body #heroContainer').css('height', theminheight);
        $('html body #heroImg').css('height', theminheight);
        $('#picContent').css('height', theminheight*0.5);
        $('#pageWrap').css( { 'background-size': 'auto ' + theminheight + 'px' } );
        $('html body #test').css('height', theminheight);
      }
    }
    window.addEventListener('resize orientationchange', function() {
      size();
    }, false);
    size();
  }());

/* index page-only menu controls
    listens for click on portfolio button to open side menu */
  $("#btnNavOpen").click (function() {
    $("#rightNav").animate ( {
      "right": "0"
    }, 600, "linear");
  });
  $("#btnNavClose").click (function() {
    $("#rightNav").animate ( {
      "right": "-100%"
    }, 600, "linear");
  });

// animate return to top mobile (referenced code from https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/)
  $("#btnTop").click (function(event) {
    event.preventDefault();
    $("html, body").animate( { scrollTop: 0 }, "slow");
    return false;
  });


});  // ends document ready
