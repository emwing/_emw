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
        $('#picContent').css('height', theminheight*0.5);
        $('#pageWrap').css( { 'background-size': 'auto ' + theminheight + 'px' } );
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


// sideNav controls for #rightInfoSection #infoContainer articles (referenced from http://jsfiddle.net/TrueBlueAussie/aVJBY/468/ )
  // ****** TO DO: find way to hook in dot links, make sure this would work for the non-about pages ******
  function updateItems(delta) {
    var $info = $('#infoContainer').children(); /* get all the articles */
    var $show = $info.filter('.showSection'); /* count number of articles with .showSection */
    $show = $show.length ? $show : $info.first(); /* if a number of articles.showSection exists, then leave alone, otherwise give the first article .showSection */
    var index = $show.index() + delta;
    // Range check the new index
    index = (index < 0) ? 0 : ((index > $info.length) ? $info.length : index); /* if index is <0, set to 0; if index is > the number of articles, set to the number of articles, otherwise leave alone */
    $show.removeClass('showSection'); /* remove .showSection from article that currently has it */
    $show = $info.eq(index).addClass('showSection'); /* add .showSection to article that matches the index number */
  // Hide/show the first/last arrows and next/prev arrows if at first or last article
    // ****** TO DO: figure out how to do this without toggle so sideNav doesn't jump ******
    $("#prev, #first").toggle(!$show.is($info.first()));
    $("#next, #last").toggle(!$show.is($info.last()));
  // change #rightInfoSection bg  *** ABOUT PAGE ONLY *** (if any of the skill sections are visible, change the #rightInfoSection's bg to silver; if the #backgroundInfo, make #rightInfoSection's bg white)
    if ($info.hasClass("rightSkill") && $info.hasClass("showSection")) {
      $("#rightInfoSection").addClass("silverBg");
      $("#rightInfoSection").removeClass("whiteBg");
      $("footer").addClass("whiteFoot");
    }
    if ($("#backgroundInfo").hasClass("showSection")) {
      $("#rightInfoSection").addClass("whiteBg");
      $("#rightInfoSection").removeClass("silverBg");
      $("footer").removeClass("whiteFoot");
    }
  } /* end definition of updateItems function */

// run updateItems function to add/remove .showSection to each article based on updated index
  // initial selection on page load
  updateItems(0);
  // clicking next/previous
  $("#next").click(function () { updateItems(1); });
  $("#prev").click(function () { updateItems(-1); });

  // clicking first/last *** ABOUT PAGE ONLY ***
  $("#first").click(function () {
    $(".rightSkill").removeClass("showSection");
    $("#rightInfoSection").removeClass("silverBg");
    $("#rightInfoSection").addClass("whiteBg");
    updateItems(0);
  });
  $("#last").click(function () {
    if ($("#backgroundInfo").hasClass("showSection")) { updateItems(3); }
    if ($("#skillsDesign").hasClass("showSection")) { updateItems(2); }
    if ($("#skillsWeb").hasClass("showSection")) { updateItems(1); }
  });
  // ends sideNav controls (for now...)


// animate return to top mobile (referenced code from https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/)
  $("#btnTop").click (function(event) {
    event.preventDefault();
    $("html, body").animate( { scrollTop: 0 }, "slow");
    return false;
  });
});  // ends document ready
