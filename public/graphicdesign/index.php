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
              <img src="img/iconGraDesign.svg" title="Graphic Design" alt="Graphic Design Icon">
            </div> <!-- ends .picContent -->
            <div class="introContent">
              <h1>Graphic Design</h1>
              <h3>Coming Soon!</h3>
            </div> <!-- ends .introContent -->
          </div> <!-- ends .leftImage .leftHero -->

        </div> <!-- ends #artContainer .artContainer -->
      </div> <!-- ends #leftHeroSection .flexSection -->

      <!-- slide-out menu on mobile / right side of screen on desktops -->
      <div id="rightInfoSection" class="flexSection40 whiteBg">
        <div id="infoContainer">
          <article id="backgroundInfo" class="rightInfo whiteBg showSection">
            <div class="rightTextContent">
              <h3>Something fun this way comes...</h3>
            </div>
          </article>
      <!-- footer -->
      <?php require "../inc/footer.php"; ?>
