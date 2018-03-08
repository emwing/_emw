<?php
  require "../inc/htmlStartHead.php";
  require "comicsArrayList.php";
?>

    <div id="pageWrap" class="flexContainer">
      <!-- main navigation -->
      <?php require "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="leftHeroSection" class="flexSection60">
        <div id="artContainerLayered" class="artContainer">
          <!-- full images -->
          <div id="test" class="leftImage leftHero">
            <div id="picContent" class="picContent">
              <img src="img/iconComics.svg" title="Mini-Comics" alt="Mini-Comics Icon">
            </div> <!-- ends .picContent -->
            <div class="introContent">
              <h1>Mini-Comics</h1>
              <h3>Traditionally and Digitally created Mini-Comics.</h3>
              <p>(click on the covers to see the next pages)</p>
            </div> <!-- ends .introContent -->
          </div> <!-- ends .leftImage .leftHero -->

          <?php
            include "comicsImages.php";
          ?>


        </div> <!-- ends #artContainer .artContainer -->
      </div> <!-- ends #leftHeroSection .flexSection -->

      <div id="rightThumbSection" class="flexSection40 whiteBg">
        <div id="thumbContainer">
          <div class="rightThumb"></div>
          <div class="rightThumb"></div>
          <div class="rightThumb"></div>
          <div class="rightThumb"></div>
          <div class="rightThumb"></div>
          <div class="rightThumb"></div>
          <div class="rightThumb"></div>
        </div>
        <!-- footer -->
        <?php require "../inc/footer.php"; ?>
