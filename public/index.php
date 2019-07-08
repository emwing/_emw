<?php require "inc/htmlHomeHead.php"; ?>

  <?php echo file_get_contents("img/bgGradient.svg"); ?>
  <?php echo file_get_contents("img/lines.svg"); ?>

  <input type="checkbox" name="cntrlCurtain" id="cntrlCurtain" class="cntrlCurtain">
  <div id="curtainContainer" class="curtainContainer">
    <noscript>
      <p>enable javascript for a better experience or
        <br>
        <label for="cntrlCurtain" id="label-cntrlCurtain">click here to enter</label>
      </p>
    </noscript>
    <div id="curtain" class="curtain"></div>
  </div>

  <?php require "inc/navMain.php"; ?>
  <?php include "inc/scrollHint.php" ?>

  <!-- <main id="barba-wrapper" aria-live="polite">
    <div class="barba-container" data-namespace="home"> -->
      <div id="fullpage">

        <header id="intro" class="section" data-anchor="welcome">
          <div class="contentContainer">
            <div id="introSVG" class="svgContainer">
              <?php require ("img/moon.php"); ?>
            </div> <!-- ends .svgContainer -->
            <div id="introText" class="textContainer">
              <h1>Emily Wing</h1>
              <svg class="decoHzLines" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 15" preserveAspectRatio="xMinYMin meet" aria-hidden="true">
                <title>decorative lines</title>
                <use href="#lineHz2" xlink:href="#lineHz" x="0" y="0" class="strokeGold2"/>
              </svg>
              <h3>storyteller, artist, designer</h3>
            </div> <!-- ends #introText .textContainer -->
          </div> <!-- ends .contentContainer -->
        </header> <!-- ends #intro .fullSection -->

        <section id="work" class="section" data-anchor="myWork">
          <div id="ystProject" class="contentContainer">
            <div class="textContainer">
              <h2>Samurai Troopers</h2>
              <h3>30<sup>th</sup> Anniversary Project</h3>
              <a href="/testing123/samuraitroopers" class="button">project details</a>
            </div>
            <div id="ystProjectImg" class="imgContainer">
              <div class="colorBlock"></div>
            </div>
          </div> <!-- ends #ystProject .projectContainer -->
        </section>

        <section id="about" class="section" data-anchor="aboutMe">
          <div class="contentContainer">
            <div class="textContainer">
              <h2>About Me</h2>
              <h3>I love learning and creating</h3>
              <a href="/testing123/about" class="button">learn more</a>
            </div>
            <div id="aboutImg" class="imgContainer">
              <div class="colorBlock"></div>
            </div>
          </div>
        </section> <!-- ends #aboutContainer -->

        <section id="contact" class="section" data-anchor="contactMe">
          <div class="contentContainer">
            <div class="textContainer">
              <h2>Get In Touch</h2>
              <?php include "inc/socialLinks.php"; ?>
            </div>
            <div id="contactImg" class="imgContainer">
              <div class="colorBlock"></div>
            </div>
          </div>
        </section> <!-- ends #contactContainer .projectContainer -->

      </div> <!-- ends #fullpage -->
    <!-- </div> ends .barba-container -->
  <!-- </main> -->

<?php
  require "inc/htmlEndScripts-links-home.php";
  require "inc/htmlEndScripts-endHtml.php";
?>
