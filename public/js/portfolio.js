$(document).ready(function() {
  // variables for sideNav controls
  var $artWrap = $(".artWrap");
  var $heroWrap = $("#heroWrap");
  var $sideNavLinks = $("li.sideLink a");

  // variables for stacked image controls
  var $images = $(".art"); /* get all the images */
  var $hiddenPages = $(".pageContainer"); /* use the parent container to target its children (used in turnPage())*/
  var $imgFirst = $("img.first"); /* get all the first images */

  // variables for overlay mobile controls
  var $overlay = $(".overlay");
  var $window = $(window);

  // overlay controls for mobile (referenced from: https://www.sitepoint.com/scroll-based-animations-jquery-css3/)
  $window.on("scroll", checkIfInView);

  function checkIfInView() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

  $.each($overlay, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.delay(1300).fadeOut("slow");
      }
    });
  }


  // desktop sideNav controls
    $sideNavLinks.on("click touch", function() {
      var linkID = $(this).attr("href");
      event.preventDefault();
      $(this).parents(".artWrap").removeClass("showSection");
      $(linkID + ".artWrap").addClass("showSection");
      $(linkID + ".artWrap").find(".overlay").delay(1300).fadeOut("fast");
    });


  // turn the comic pages (referenced: https://www.youtube.com/watch?v=Xwq1Hj1DyDM)
    $hiddenPages.on("click touch", turnPage);

    function turnPage(event) {
      var $target = $(event.target);
    // make sure it was the image that was clicked, then change to the next
      if ((event.target !== event.currentTarget) && ($target.is(".pageContainer img"))) {
        $target.removeClass('showSection');
        $target.addClass('hiddenPage');
        $target.next().removeClass('hiddenPage');
        $target.next().addClass('showSection');

      // and if the comic page that was clicked was the last one, return to the first page
        if ($target.hasClass("last") && (event.target !== event.currentTarget)) {
          var $firstPage = $target.siblings("img.first");
          $firstPage.removeClass('hiddenPage');
          $firstPage.addClass('showSection');
          }
      }
      event.stopPropagation();
    }


}); // ends document ready
