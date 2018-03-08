<?php require "../inc/htmlStartHead.php"; ?>

    <div id="pageWrap" class="flexContainer">
      <!-- main navigation -->
      <?php require "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="leftHeroSection" class="flexSection60">
        <div id="artContainer" class="artContainer">
          <!-- full images -->
          <div id="test" class="leftImage leftHero">
            <div id="picContent" class="picContent">
              <img src="img/iconIllustrations.svg" title="Illustrations &amp; Icons" alt="Illustrations Icon">
            </div> <!-- ends .picContent -->
            <div class="introContent">
              <h1>Illustrations &amp; Icons</h1>
              <h3>Traditional and Digital artwork.</h3>
            </div> <!-- ends .introContent -->
          </div> <!-- ends .leftImage .leftHero -->

          <?php
            include "illustrationsArrayList.php";
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
          <div class="rightThumb"></div>
        </div> <!-- ends #thumbContainer -->
        <!-- footer -->
        <?php require "../inc/footer.php"; ?>
