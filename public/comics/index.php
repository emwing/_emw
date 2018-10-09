<?php
  require "../inc/htmlPageHead.php";
  require "comicsArrayList.php";
?>

    <div id="pageWrap">
      <!-- main navigation -->
      <?php require "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="heroWrap" class="flexContainerRow artWrap showSection">

        <div id="heroDiv" class="flexItem60 fullHeight">

          <div id="heroImg">
            <img src="img/iconComics.svg" title="Mini-Comics" alt="Mini-Comics Icon" id="logo">
          </div> <!-- ends #heroImg -->

          <div id="heroTitle">
            <h1>Mini-Comics</h1>
            <h3>Traditional & Digital Short Stories</h3>
          </div> <!-- ends #heroTitle -->

        </div> <!-- ends #heroDiv .flexItem60 -->

        <div class="flexItem40 flexContainerColumn whiteBg">
          <p>In the 1990's I was a huge fan of the X-Men and would wander through local comic shops looking for stories about my favorite character, Storm. Unfortunately, in that era, most comic stores and publishers didn't really cater to a young female fan, and far too often I'd leave empty-handed. Rather than being discouraged, I started doodling my own comics to tell the stories that I couldn't find on the shelf. When anime and manga entered my world, my life would forever change. Anime and manga opened up a whole new perspective of what comics were and could be. The genres, art style, and pacing were so different than what I'd grown up with&mdash;not only did I need to learn more, I needed to be a part of it. My journey into the world of storytelling through comics has only just begun!</p>

          <nav class="sideNav">
            <ul class="sideList">
              <li class="invisible"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></li>
              <li class="invisible"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></li>

              <li class="sideLink next"><a href="#theFoldsOfFlowers"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
              <li class="sideLink last"><a href="#kindnessInAJar"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
            </ul>
          </nav>
        </div> <!-- ends .flexItem40 -->

      </div> <!-- ends #heroWrap -->

      <?php
        $imageArrays = $comicsAll;

        require_once "../inc/imagesFunctions.php";
        require_once "../inc/footer.php";
      ?>
