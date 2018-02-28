<?php require "../inc/htmlStartHead.php"; ?>

    <div id="pageWrap" class="flexContainer">
      <!-- main navigation -->
      <?php require "../inc/navMain.php"; ?>

      <!-- first section on mobile / left side of screen on desktops -->
      <div id="leftHeroSection" class="flexSection60">
        <div id="heroContainer" class="heroContainer">
          <div id="picContent" class="picContent">
            <img src="../img/site/suki.jpg" title="My Furry Assistant, Suki" alt="Suki the Shiba Inu" id="picProfile">
          </div> <!-- ends .picContent -->
          <div class="leftTextContent aboutCenterP">
            <h1>Emily Wing</h1>
            <p>(Just kidding! This is a picture of my dog, Suki.)</p>
            <h3>Nice to meet you!</h3>
          </div> <!-- ends .textContent -->
        </div>  <!-- ends .heroContainer -->
      </div> <!-- ends #leftHeroSection .flexSection -->

      <div id="rightInfoSection" class="flexSection40 whiteBg">
        <!-- side navigation -->
        <nav id="sideNav" class="sideNav">
          <ul id="sideList">
            <li id="first"><a href="#backgroundInfo"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>
            <li id="prev"><a href="#"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>
            <!-- need to figure out js controls
            <li><a href="#backgroundInfo"><input type="radio" name="radio" id="radio1" class="radio" value="a1"></a></li>
            <li><a href="#skillsDesign"><input type="radio" name="radio" id="radio2" class="radio" value="a2"></a></li>
            <li><a href="#skillsWeb"><input type="radio" name="radio" id="radio3" class="radio" value="a3"></a></li>
            <li><a href="#skillsOffice"><input type="radio" name="radio" id="radio4" class="radio" value="a4"></a></li>
            need to figure out js controls -->
            <li id="next"><a href="#"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li>
            <li id="last"><a href="#skillsOffice"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>
          </ul>
        </nav>
        <!-- articles -->
        <div id="infoContainer">
          <article id="backgroundInfo" class="rightInfo whiteBg">
            <div class="rightTextContent">
              <h3>A Bit About Me</h3>
              <p>The goal of my work is to show and share its stories. I've always had a fascination with storytelling: the choices of characters, subject, scene-framing, and pacing all play a part in creating a cohesive and memorable journey. I believe there's a story to tell in any medium, be it a comic or a&nbsp;website.</p>
              <p>Born and currently based in the suburbs outside of Boston, Massachusetts, with my furry assistant, Suki, by my&nbsp;side.</p>
            </div>
          </article>
          <article id="skillsDesign" class="rightSkill rightInfo silverBg">
            <div class="rightTextContent skillChart">
              <h3>Design Software Skills</h3>
              <div class="skillBox">
                <p>Photoshop CC</p>
                <p>Proficient</p>
                <div class="skillBar">
                  <div class="skillLevel percent80"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Illustrator CC</p>
                <p>Proficient</p>
                <div class="skillBar">
                  <div class="skillLevel percent80"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Indesign CC</p>
                <p>Proficient</p>
                <div class="skillBar">
                  <div class="skillLevel percent80"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Adobe Acrobat</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Clip Studio Paint</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>SketchUp</p>
                <p>Novice</p>
                <div class="skillBar">
                  <div class="skillLevel percent20"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
            </div> <!-- ends .rightTextContent .skillChart -->
          </article>
          <article id="skillsWeb" class="rightSkill rightInfo silverBg">
            <div class="rightTextContent skillChart">
              <h3>Web Skills</h3>
              <div class="skillBox">
                <p>HTML5</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>CSS3</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>JavaScript</p>
                <p>Novice</p>
                <div class="skillBar">
                  <div class="skillLevel percent20"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>JQuery</p>
                <p>Novice</p>
                <div class="skillBar">
                  <div class="skillLevel percent20"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Sass</p>
                <p>Novice</p>
                <div class="skillBar">
                  <div class="skillLevel percent20"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>GitHub</p>
                <p>Novice</p>
                <div class="skillBar">
                  <div class="skillLevel percent20"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
            </div> <!-- ends .rightTextContent .skillChart -->
          </article>
          <article id="skillsOffice" class="rightSkill rightInfo silverBg">
            <div class="rightTextContent skillChart">
              <h3>Office Software Skills</h3>
              <div class="skillBox">
                <p>Microsoft Excel</p>
                <p>Proficient</p>
                <div class="skillBar">
                  <div class="skillLevel percent80"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Microsoft Word</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Microsoft Powerpoint</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Google Drive</p>
                <p>Competent</p>
                <div class="skillBar">
                  <div class="skillLevel percent60"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>Netsuite</p>
                <p>Advanced Beginner</p>
                <div class="skillBar">
                  <div class="skillLevel percent40"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
              <div class="skillBox">
                <p>MailChimp</p>
                <p>Novice</p>
                <div class="skillBar">
                  <div class="skillLevel percent20"></div> <!-- ends .skillLevel -->
                </div> <!-- ends .skillBar -->
              </div> <!-- ends .skillBox -->
            </div> <!-- ends .rightTextContent .skillChart -->
          </article>
        </div> <!-- ends #infoContainer -->
        <!-- footer -->
        <?php require "../inc/footer.php"; ?>
