<?php
  require "../inc/htmlPageHead.php";
  require "webArrayList.php";
?>

    <div id="pageWrap">
      <!-- main navigation -->
      <?php require "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="heroWrap" class="flexContainerRow artWrap showSection">

        <div id="heroDiv" class="flexItem60 fullHeight">

          <div id="heroImg">
            <img src="img/iconWebDevelopment.svg" title="Web Design Development" alt="Web Design Development Icon" id="logo">
          </div> <!-- ends #logoImg -->

          <div id="heroTitle">
            <h1>Web Design &amp; Development</h1>
            <h3>Exploring Web Experiences</h3>
          </div> <!-- ends #heroTitle -->

        </div> <!-- ends #heroDiv .flexItem60 -->

        <div class="flexItem40 flexContainerColumn whiteBg">
          <p>In 2016 I had the opportunity to pursue a post-baccalaureate certificate in Interactive Design and Marketing from the Minneapolis College of Art&nbsp;&amp;&nbsp;Design. When I was in high school, I had taken a basic web design course but found that the technology of the late 90's was incapable of creating the designs and interactions I envisioned. Now, I'm up-to-date on some of the web's coding and scripting languages, and I have been practicing and experimenting with them in various web design and development projects. In each one I challenged myself to learn a new technique or technology in order to implement a feature unique to the site.</p>

          <nav class="sideNav">
            <ul class="sideList">
              <li class="invisible"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></li>
              <li class="invisible"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></li>

              <li class="sideLink next"><a href="#ystFanzine"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
              <li class="sideLink last"><a href="#chinaStarRestaurant"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li> <!-- update link if last image changes -->
            </ul>
          </nav>
        </div> <!-- ends .flexItem40 -->

      </div> <!-- ends #heroWrap -->

      <?php
        $imageArrays = $webAll;

        require_once "../inc/imagesFunctions.php";
        require_once "../inc/footer.php";
      ?>
