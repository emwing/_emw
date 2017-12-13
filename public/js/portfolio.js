$(document).ready(function() {
  // when viewing on desktop, set the thumbnail bg image to match the fullsized version; referenced from http://html-tuts.com/div-background-image-from-img-src-jquery/
  /* *********** TO DO: figure out how to streamline this!! *********** */
    // get the fullsized image source
    var getImgSrc05 = $(".art05 .frame img").attr("src");
    var getImgSrc06 = $(".art06 .frame img").attr("src");
    var getImgSrc07 = $(".art07 .frame img").attr("src");
    var getImgSrc08 = $(".art08 .frame img").attr("src");
    var getImgSrc09 = $(".art09 .frame img").attr("src");
    var getImgSrc10 = $(".art10 .frame img").attr("src");
    var getImgSrc11 = $(".art11 .frame img").attr("src");
    var getImgSrc12 = $(".art12 .frame img").attr("src");

    // set the background image of the thumb to the corresponding image source
    $("#thumb05").css("background-image", "url(" + getImgSrc05 + ")");
    $("#thumb06").css("background-image", "url(" + getImgSrc06 + ")");
    $("#thumb07").css("background-image", "url(" + getImgSrc07 + ")");
    $("#thumb08").css("background-image", "url(" + getImgSrc08 + ")");
    $("#thumb09").css("background-image", "url(" + getImgSrc09 + ")");
    $("#thumb10").css("background-image", "url(" + getImgSrc10 + ")");
    $("#thumb11").css("background-image", "url(" + getImgSrc11 + ")");
    $("#thumb12").css("background-image", "url(" + getImgSrc12 + ")");


  // "slideshow" controls for #leftHeroSection divs (referenced from http://jsfiddle.net/TrueBlueAussie/aVJBY/468/ )
  // when viewing on desktop, click on thumbnail on right side will change image on left side to fullsized view of thumbnail image
    // define the variables for this function
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

  // run updateItems function to add/remove .showSection to each article based on updated index
    // initial selection on page load
    showPortfolio(0);

  // clicking each thumbnail changes the leftHeroSection (referenced from https://stackoverflow.com/questions/23524122/get-last-character-from-id-attribute)
  $(".rightThumb").click(function() {
    $currentId = this.id.slice(-2); // get the clicked thumbnail's id#
    $hideContent = $(".leftImage");
    $showContent = $(".art" + $currentId); // get the corresponding fullsized image
    $hideContent.removeClass('showSection');
    $showContent.addClass('showSection');
  });

}); // ends document ready
