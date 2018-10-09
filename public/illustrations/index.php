<?php
  require "../inc/htmlPageHead.php";
  require "illustrationsArrayList.php";
?>

    <div id="pageWrap">
      <!-- main navigation -->
      <?php require "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="heroWrap" class="flexContainerRow artWrap showSection">

        <div id="heroDiv" class="flexItem60 fullHeight">

          <div id="heroImg">
            <img src="img/iconIllustrations.svg" title="Illustrations &amp; Icons" alt="Illustrations Icon" id="logo">
          </div> <!-- ends #heroImg -->

          <div id="heroTitle">
            <h1>Illustrations &amp; Icons</h1>
            <h3>Traditional &amp; Digital Art</h3>
          </div> <!-- ends #heroTitle -->

        </div> <!-- ends #heroDiv .flexItem60 -->

        <div class="flexItem40 flexContainerColumn whiteBg">
          <p>I love to draw and paint with watercolors. Nothing beats the tactile texture of pencil on paper or the abstracted mixing of watercolors, but technology is quickly catching up. Exploring a variety of tools and compositions to convey an abstract idea is the most exciting part of the creative&nbsp;process.</p>

          <nav class="sideNav">
            <ul class="sideList">
              <li class="invisible"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></li>
              <li class="invisible"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></li>

              <li class="sideLink next"><a href="#rageOfInferno"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
              <li class="sideLink last"><a href="#inevitablePostcard"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
            </ul>
          </nav>
        </div> <!-- ends .flexItem40 -->

      </div> <!-- ends #heroWrap -->

      <?php
        $imageArrays = $illustrationsAll;

        require_once "../inc/imagesFunctions.php";
        require_once "../inc/footer.php";
      ?>
