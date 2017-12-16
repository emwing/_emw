$(document).ready(function() {
  // when viewing on desktop, set the thumbnail bg image to match the fullsized version; referenced from http://html-tuts.com/div-background-image-from-img-src-jquery/
    // get each fullsized img source and create as an array (referenced from https://stackoverflow.com/questions/2355025/jquery-get-img-source-attributes-from-list-and-push-into-array)
    var $arrayOfFull = $("img.first").map(function() {
      return $(this).attr("src");
    });
    // get the index# for each thumb
    // set the background image to the source img from the corresponding array by index number
    var $thumbnail = $(".rightThumb");
      $thumbnail.each(function( index ) {
        $(this).css("background-image", "url(" + $arrayOfFull[index] + ")");
      });


  // image controls for #leftHeroSection divs (referenced from http://jsfiddle.net/TrueBlueAussie/aVJBY/468/ )
  // when viewing on desktop:
    // click on thumbnail on right side triggers image on left side to change to corresponding fullsized image of thumbnail
    /* define the variables for this function */
    function showPortfolio(delta) {
      var $images = $('.leftImage'); /* get all the left divs */
      var $show = $images.filter('.showSection'); /* count number of divs with .showSection */
      $show = $show.length ? $show : $images.first(); /* if a number of divs.showSection exists, then leave alone, otherwise give the first div .showSection */
      var index = $show.index() + delta;
      // Range check the new index
      index = (index < 0) ? 0 : ((index > $images.length) ? $images.length : index); /* if index is <0, set to 0; if index is > the number of divs, set to the number of divs, otherwise leave alone */
      $show.removeClass('showSection'); /* remove .showSection from div that currently has it */
      $show = $images.eq(index).addClass('showSection'); /* add .showSection to div that matches the index number */
    } /* end definition of updateItems function */

  // run showPortfolio function to add/remove .showSection to each image based on updated index
    // show the page hero image and info (index 0) on page load
    showPortfolio(0);

  // clicking each thumbnail changes the leftHeroSection (referenced from https://stackoverflow.com/questions/23524122/get-last-character-from-id-attribute)
    $(".rightThumb").click(function() {
      $currentId = this.id.slice(-2); // get the clicked thumbnail's id#
      $hideContent = $(".leftImage");
      $showContent = $(".art" + $currentId); // get the corresponding fullsized image
      $showPage = $showContent.find("img.first");
      $hideContent.removeClass('showSection');
      $showContent.addClass('showSection');
      $showPage.removeClass('hiddenPage');
      $showPage.addClass('showSection');
    });


  // cycle through the pages (referenced: https://www.youtube.com/watch?v=Xwq1Hj1DyDM)
    var $hiddenPages = $("#artContainerLayered"); /* use the parent container to target its children */
    $hiddenPages.click(turnPage);

    function turnPage(event) {
      var $target = $(event.target);
      if ((event.target !== event.currentTarget) && ($target.is("img"))) {
        $target.removeClass('showSection');
        $target.addClass('hiddenPage');
        $target.next().removeClass('hiddenPage');
        $target.next().addClass('showSection');

        if ($target.hasClass("last") && (event.target !== event.currentTarget)) {
          var $firstPage = $target.siblings("img.first");
          $firstPage.removeClass('hiddenPage');
          $firstPage.addClass('showSection');
          }
      }
      event.stopPropagation();
    }


}); // ends document ready
