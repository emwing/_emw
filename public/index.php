<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Emily Wing | Storyteller, Artist, and Designer</title>
    <meta name="author" content="Emily Wing">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="favicon.gif">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Average|Quicksand" rel="stylesheet">

    <link rel="stylesheet" href="css/css.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://use.fontawesome.com/506df0e47b.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div id="pageWrapHome" class="flexContainer">
      <!-- first section on mobile / left side of screen on desktops -->
      <div id="leftHeroSection" class="flexSection60">
        <div id="heroContainer" class="heroContainer">
          <div class="logoContent">
            <!-- double wings logo -->
            <img src="img/ew-doublewingblk.svg" id="logowing" alt="Emily Wing">
          </div> <!-- ends .logoContent -->
          <div class="introContent">
            <h1>Hi! My name is Emily Wing.</h1>
            <p>I'm a Storyteller, Artist, and Designer with a passion for sequential art and problem-solving.</p>
            <button type="button" id="btnAbout" class="btnControl"><a href="/about">About Me</a></button>
            <button type="button" id="btnNavOpen" class="btnControl"><a href="#">Menu</a></button>
          </div> <!-- ends .textContent -->
        </div>  <!-- ends .heroContainer -->
      </div> <!-- ends #leftHeroSection .flexSection -->

      <!-- slide-out menu on mobile / right side of screen on desktops -->
      <div id="rightNav" class="flexSection40">
        <div id="navContainer" class="navContainer">
          <label for="btnNavClose"><i id="btnNavClose" class="fa fa-times fa-3x"></i></label>
          <!-- <a href="/webdesign" class="rightNavLink">
            <article id="webDesign" class="rightNavProject">
              <img src="img/navWebDesignIcon.svg" alt="Web Design Nav Icon" id="webDevIcon" class="rightNavSVG">
              <div class="rightNavText">
                <h3>Web Design &amp; Development</h3>
              </div>
            </article>
          </a>
          <a href="/graphicdesign" class="rightNavLink">
            <article id="graphicDesign" class="rightNavProject">
              <img src="img/navGraphicDesignIcon.svg" alt="Graphic Design Nav Icon" id="graphicDesignIcon" class="rightNavSVG">
              <div class="rightNavText">
                <h3>Graphic Design &amp; Marketing</h3>
              </div>
            </article>
          </a> -->
          <a href="/comics" class="rightNavLink">
            <article id="comics" class="rightNavProject">
              <img src="img/navComicsIcon.svg" alt="Comics Nav Icon" id="comicsIcon" class="rightNavSVG">
              <div class="rightNavText">
                <h3>Mini-Comics</h3>
              </div>
            </article>
          </a>
          <a href="/illustrations" class="rightNavLink">
            <article id="illustrations" class="rightNavProject">
              <img src="img/navIllustrationsIcon.svg" alt="Illustrations Nav Icon" id="illustrationsIcon" class="rightNavSVG">
              <div class="rightNavText">
                <h3>Illustrations &amp; Icons</h3>
              </div>
            </article>
          </a>

          <!-- homepage-specific footer -->
          <footer class="homeFoot whiteFoot">
            <?php require "inc/footerSocialLinks.php"; ?>
            <!-- excludes footerReturnTopBtn.php -->
            </div>
            <p>&copy;2018 Emily Wing</p>
          </footer>
        </div> <!-- ends #navContainer -->
      </div> <!-- ends #rightNav .flexSection -->
    </div> <!-- ends #pageWrapHome -->

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/about.js"></script>
    <script src="js/portfolio.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
</html>
