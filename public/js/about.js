$(document).ready(function() {
  // sideNav controls for #rightInfoSection #infoContainer articles (referenced from http://jsfiddle.net/TrueBlueAussie/aVJBY/468/ )
    // ****** TO DO: find way to hook in radio buttons? Try to make this would work for the non-About pages if needed ******
    // define the variables for this function
    var $prev = $("#prev");
    var $first = $("#first");
    var $next = $("#next");
    var $last = $("#last");
    var $ris = $("#rightInfoSection");
    var $bgInfo = $("#backgroundInfo");

    function updateItems(delta) {
      var $foot = $("footer");
      var $info = $('#infoContainer').children(); /* get all the articles */
      var $show = $info.filter('.showSection'); /* count number of articles with .showSection */
      $show = $show.length ? $show : $info.first(); /* if a number of articles.showSection exists, then leave alone, otherwise give the first article .showSection */
      var index = $show.index() + delta;
      // Range check the new index
      index = (index < 0) ? 0 : ((index > $info.length) ? $info.length : index); /* if index is <0, set to 0; if index is > the number of articles, set to the number of articles, otherwise leave alone */
      $show.removeClass('showSection'); /* remove .showSection from article that currently has it */
      $show = $info.eq(index).addClass('showSection'); /* add .showSection to article that matches the index number */
    // Hide/show the first/last arrows and next/prev arrows if at first or last article
      if ($bgInfo.hasClass("showSection")) {
        $prev.add($first).css("visibility", "hidden");
      } else { $prev.add($first).css("visibility", ""); }
      
      if ($("#skillsOffice").hasClass("showSection")) {
        $next.add($last).css("visibility", "hidden");
      } else { $next.add($last).css("visibility", ""); }
    // change #rightInfoSection bg  *** ABOUT PAGE ONLY *** (if any of the skill sections are visible, change the #rightInfoSection's bg to silver; if the #backgroundInfo, make #rightInfoSection's bg white)
      if ($info.hasClass("rightSkill") && $info.hasClass("showSection")) {
        $ris.addClass("silverBg");
        $ris.removeClass("whiteBg");
        $foot.addClass("whiteFoot");
      }
      if ($bgInfo.hasClass("showSection")) {
        $ris.addClass("whiteBg");
        $ris.removeClass("silverBg");
        $foot.removeClass("whiteFoot");
      }
    } /* end definition of updateItems function */

  // run updateItems function to add/remove .showSection to each article based on updated index
    // initial selection on page load
    updateItems(0);
    // clicking next/previous
    $next.click(function (event) {
      event.preventDefault();
      updateItems(1);
    });
    $prev.click(function (event) {
      event.preventDefault();
      updateItems(-1);
    });

  // clicking first/last *** ABOUT PAGE ONLY ***
    $first.click(function (event) {
      event.preventDefault();
      $(".rightSkill").removeClass("showSection");
      $ris.removeClass("silverBg");
      $ris.addClass("whiteBg");
      updateItems(0);
    });
    $last.click(function (event) {
      event.preventDefault();
      if ($bgInfo.hasClass("showSection")) { updateItems(3); }
      if ($("#skillsDesign").hasClass("showSection")) { updateItems(2); }
      if ($("#skillsWeb").hasClass("showSection")) { updateItems(1); }
    });    // ends sideNav controls (for now...) ... try using a slideshow code for reference to update (https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_dots2)?


}); // ends document ready
