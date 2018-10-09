<?php
  require_once "../inc/htmlPageHead.php";
  require_once "graphicDesignArrayList.php";
?>

    <div id="pageWrap">
      <!-- main navigation -->
      <?php require_once "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="heroWrap" class="flexContainerRow artWrap showSection">

        <div id="heroDiv" class="flexItem60 fullHeight">

          <div id="heroImg">
            <img src="img/iconGraDesign.svg" title="Graphic Design" alt="Graphic Design Icon" id="logo">
          </div> <!-- ends #heroImg -->

          <div id="heroTitle">
            <h1>Graphic Design</h1>
            <h3>Print & Digital Designs</h3>
          </div> <!-- ends #heroTitle -->

        </div> <!-- ends #heroDiv .flexItem60 -->

        <div class="flexItem40 flexContainerColumn whiteBg">
          <p>Whenever I start working on a graphic design project, I like to say to myself, "Think outside the box so everything can fit inside the box." Graphic design can be a fun puzzle where the finished piece can represent a balance between beauty and business; form and function can augment and enhance one another in a yin-yang relationship. Color, pattern, texture, and typography work together like the four sections of a symphony orchestra. I love testing different variations and discovering how emphasizing one element can create a whole different feel and tell a completely different story.</p>

          <nav class="sideNav">
            <ul class="sideList">
              <li class="invisible"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></li>
              <li class="invisible"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></li>

              <li class="sideLink next"><a href="#BCNC-CNYB"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
              <li class="sideLink last"><a href="#"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
            </ul>
          </nav>
        </div> <!-- ends .flexItem40 -->

      </div> <!-- ends #heroWrap -->

      <?php
        $imageArrays = $graphicDesignAll;

        require_once "../inc/imagesFunctions.php";
        require_once "../inc/footer.php";
      ?>
