<?php require "inc/htmlHomeHead.php"; ?>

    <div id="pageWrap" class="flexContainerRow fullHeight">
      <!-- first section on mobile / left side of screen on desktops -->
      <div id="heroDiv" class="flexItem60 fullHeight">

        <div id="logoImg">
          <!-- double wings logo -->
          <img src="img/ew-doublewingblk.svg" id="logo" alt="Emily Wing">
        </div> <!-- ends #logoImg -->

        <div id="heroTitle">
          <h1>Hi! My name is Emily Wing.</h1>
          <p>I'm an Artist, Storyteller, and Designer with a passion for sequential&nbsp;art, new&nbsp;technology, and creative problem&#8209;solving.</p>
          <button type="button" id="btnAbout" class="btnControl"><a href="/about">About Me</a></button>
          <button type="button" id="btnNavOpen" class="btnControl">Menu</button>
        </div> <!-- ends #heroTitle -->

      </div> <!-- ends #heroDiv .flexSection60 -->

      <!-- slide-out menu on mobile / right side of screen on desktops -->
      <div id="rightNav" class="flexItem40">
        <div id="navContainer" class="navContainer">
          <label for="btnNavClose"><i id="btnNavClose" class="fa fa-times fa-3x"></i></label>
          <a href="/webdesign" class="rightNavLink">
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
          </a>
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
          <footer class="homeFoot">
            <?php require "inc/footerSocialLinks.php"; ?>
            <!-- excludes footerReturnTopBtn.php -->
            </div>
            <?php require "inc/footerCopyright.php"; ?>
          </footer>
        </div> <!-- ends #navContainer -->
      </div> <!-- ends #rightNav .flexItem40 -->
    </div> <!-- ends #pageWrap -->

    <?php
      require "inc/htmlEndScripts-links-home.php";
      require "inc/htmlEndScripts-endHtml.php";
    ?>
