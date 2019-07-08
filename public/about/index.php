<?php require "../inc/htmlPageHead.php"; ?>

  <?php echo file_get_contents("../img/bgGradient.svg"); ?>
  <?php echo file_get_contents("../img/lines.svg"); ?>
  <?php echo file_get_contents("img/softwareIcons.svg"); ?>

  <?php require "../inc/navMain.php"; ?>

  <!-- <main id="barba-wrapper" aria-live="polite">
    <div class="barba-container" data-namespace="underLayer"> -->

      <header id="about" class="fullSection">
        <div class="contentContainer">
          <div class="textHeader">
            <h2>About Me</h2>
            <h3>I love learning and creating</h3>

            <?php include "../inc/scrollDown.php"; ?>

            <!-- <a href="mailto:emwing@emily-wing.com" class="button" target="_blank" title="Send me an E-mail">contact me</a> -->
          </div>
          <div id="aboutImg" class="imgHeader"></div>
        </div>
      </header> <!-- ends #aboutContainer -->

      <section id="contentBegins" class="fullSection infoSection">
        <div class="titleContainer">
          <svg class="lineHzSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 4" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <title>decorative lines</title>
            <use href="#lineHz" xlink:href="#lineHz" x="0" y="0"/>
          </svg>
          <h3 class="contentH3"><span class="numberH3">01 </span>who I am</h3>
        </div>
        <div id="whoIAm" class="contentContainer infoContainer">
          <article class="articleContainer">
            <p>Hi! My name is Emily Wing, and I'm&nbsp;a storyteller on the web. I&nbsp;love learning new creative methods and mediums to tell compelling stories, and the ever-evolving web is a wonderful environment to&nbsp;experiment.</p>
          </article>
          <div id="myPic" class="articleImg">
            <img src="img/EmilyWing.jpg" alt="Emily Wing walking through a tunnel of Tori gates during a visit to Japan">
          </div>
        </div>
      </section>

      <section class="longSection infoSection">
        <div class="titleContainer">
          <svg class="lineHzSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 4" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <title>decorative lines</title>
            <use href="#lineHz" xlink:href="#lineHz" x="0" y="0"/>
          </svg>
          <h3 class="contentH3"><span class="numberH3">02 </span>my passions</h3>
        </div>
        <div id="myPassions" class="contentContainer infoContainer">
          <article class="articleContainer">
            <div class="iconContainer">
              <svg id="storiesIcon" class="iconsSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208.53 157.31" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>stories icon</title>
                <path id="cover" class="fillWh" d="M206,51.5c-16.2-1.6-74.8-6.1-95.8,9.4a4.9,4.9,0,0,0-2.2,3.6,4.9,4.9,0,0,0-2.2-3.6c-21-15.5-79.6-11-95.8-9.4A4.6,4.6,0,0,0,5.7,56V176.4a4.7,4.7,0,0,0,4.7,4.5l86.2.3,1.3,2.4a2.2,2.2,0,0,0,1.7,1.1h16.8a2.2,2.2,0,0,0,1.7-1.1l1.3-2.4,86.2-.3a4.7,4.7,0,0,0,4.7-4.5V56A4.6,4.6,0,0,0,206,51.5Z" transform="translate(-3.7 -29.3)"/>
                <g id="rightPageGroup">
                  <path id="rightPageBot" class="fillWh" d="M199.7,44.3V173.4s-85.5-6.7-91.7,5.9V61.9C129.9,42.3,199.7,44.3,199.7,44.3Z" transform="translate(-3.7 -29.3)"/>
                  <path id="rightPageMid" class="fillWh" d="M191.3,38.3V165.7S137,158.6,108,175.8V56.2C127.9,36.3,191.3,38.3,191.3,38.3Z" transform="translate(-3.7 -29.3)"/>
                  <path id="rightPageTop" class="fillWh" d="M183.5,31.4V157.3s-58.3-5.1-75.5,13.9V49.3C126,29.4,183.5,31.4,183.5,31.4Z" transform="translate(-3.7 -29.3)"/>
                  <path id="RP6" class="fillNone" d="M174.5,144.4c-4.9-.1-11.2-.2-18.2.1V116c6.9-.4,13.2-.4,18.2-.6Z" transform="translate(-3.7 -29.3)"/>
                  <path id="RP5" class="fillNone" d="M133.3,147a134.6,134.6,0,0,1,16.9-2.2V116.5a159.8,159.8,0,0,0-16.9,2.4Z" transform="translate(-3.7 -29.3)"/>
                  <path id="RP4" class="fillNone" d="M127.1,120.3a52.9,52.9,0,0,0-12.1,5v27.5a55.5,55.5,0,0,1,12.1-4.7Z" transform="translate(-3.7 -29.3)"/>
                  <path id="RP3" class="fillNone" d="M174.5,109.4a188.2,188.2,0,0,0-28.4,1.4V82.5a254.8,254.8,0,0,1,28.4-2.1Z" transform="translate(-3.7 -29.3)"/>
                  <path id="RP2" class="fillNone" d="M139.2,111.5c-9.3,1.4-17.3,3.7-24.2,7.3V91.3c6.9-4,14.9-6.5,24.2-8.1Z" transform="translate(-3.7 -29.3)"/>
                  <path id="RP1" class="fillNone" d="M174.5,74.2c-14.9-.4-43.3,2-59.5,10.4V57.2c16.1-9.5,44.2-11.6,59.5-11.9Z" transform="translate(-3.7 -29.3)"/>
                </g>
                <g id="leftPageGroup">
                  <path id="leftPageBot" class="fillWh" d="M16.3,44.3V173.4s85.5-6.7,91.7,5.9V61.9C86.1,42.3,16.3,44.3,16.3,44.3Z" transform="translate(-3.7 -29.3)"/>
                  <path id="leftPageMid" class="fillWh" d="M24.7,38.3V165.7S79,158.6,108,175.8V56.2C88.1,36.3,24.7,38.3,24.7,38.3Z" transform="translate(-3.7 -29.3)"/>
                  <path id="leftPageTop" class="fillWh" d="M32.5,31.4V157.3s58.3-5.1,75.5,13.9V49.3C90,29.4,32.5,31.4,32.5,31.4Z" transform="translate(-3.7 -29.3)"/>
                  <path id="LP4" class="fillNone" d="M41.5,144.4c14.9-.4,43.3,0,59.5,8.4V109.3c-16.1-9.4-44.2-9.5-59.5-9.9Z" transform="translate(-3.7 -29.3)"/>
                  <path id="LP3" class="fillNone" d="M101,79.2c-6.5-3.7-20.2-7-31.8-8.7V94.6c11.5,1.3,23.3,3.8,31.8,8.2Z" transform="translate(-3.7 -29.3)"/>
                  <path id="LP2" class="fillNone" d="M101,57.2c-8.6-5.1-20.2-8-31.8-9.7V64.6c10.9,1.5,23.4,4.3,31.8,8.2Z" transform="translate(-3.7 -29.3)"/>
                  <path id="LP1" class="fillNone" d="M63,46.6c-7.7-.8-16-1.2-21.5-1.3V93.4a205.9,205.9,0,0,1,21.5.5Z" transform="translate(-3.7 -29.3)"/>
                </g>
              </svg>
            </div>
            <h4>stories</h4>
            <p>I hold a BFA in Comic Art. Don't let the words and social stigma deceive you because it's so much more than just superheroes and cartoons. It's crafting stories that are engaging and memorable by combining great design and beautiful art with human experiences and feelings. It's creating immersive and compelling environments that captivate minds, and it can be leveraged in any&nbsp;medium.</p>
          </article>
          <article class="articleContainer">
            <div class="iconContainer">
              <svg id="creativityIcon" class="iconsSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206.5 158.9" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>creativity icon</title>
                <g id="brushGroup">
                  <path class="fillWh" d="M113,182.9a13.9,13.9,0,0,0,8,.4c4-.8,10.6-5.9,10.6-5.9s-2,4.7-5.2,7.1a30.8,30.8,0,0,0,15.5-3.7c4.4-2.5,7.2-8.8,6.2-13.3-.3,0,.4-.5,1-.9,3.3-1.8,9.5-6.9,17.6-15,18.3-18.3,47.4-48.7,43.1-52.9s-34.6,24.8-52.9,43.1c-8,8-13.1,14.1-15,17.5a5.4,5.4,0,0,0-.5,1.1,19.3,19.3,0,0,0-7.6-.7c-5.5.5-7.6,3.7-9.7,8.8C122.2,170.7,121.3,177.3,113,182.9Z" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M149.1,166.6s-2.9,1.8-5.9-1.3-1.3-6-1.3-6" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M158.9,159s-3,1.5-7-2.4-2.3-7.1-2.3-7.1" transform="translate(-5.7 -27.7)"/>
                </g>
                <path id="brushStroke" class="fillGold2" d="M53.9,173.8c-16.9-5.3-30.8-16.9-28.3-30.9a19.9,19.9,0,0,1,6-11c5.4-1.3,9.6-4.8,11.1-10,2.9-9.6-4.3-21.4-16-26.3-7.9-3.3-15.7-2.7-21,.8a26.1,26.1,0,0,1,14,1.9c11.7,5,18.9,16.8,16,26.4a13.6,13.6,0,0,1-4.6,6.8c-8.4,2.1-14.7,7.9-16.2,16.3-2.5,14,9.8,27.2,32.3,32.3,14.1,3.1,42.7,6.4,62.9,3.1C88.4,181.7,71.7,179.4,53.9,173.8Z" transform="translate(-5.7 -27.7)"/>
                <g id="pencilGroup">
                  <path class="fillWh" d="M188.6,60.6c.8-.8,4.4-.5,7.7,2.9s3.7,6.9,2.9,7.7l-73.4,73.4-8.4,3.5s-2.9-.4-4.1-1.6-1.7-4.2-1.7-4.2l3.6-8.3Z" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M179.8,69.4a13.9,13.9,0,0,0,3.9,6.6,14.1,14.1,0,0,0,6.6,4" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M173.3,75.9a13.9,13.9,0,0,0,3.9,6.6,14.1,14.1,0,0,0,6.6,4" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M117.5,131.7a21.1,21.1,0,0,0,4,6.6,20,20,0,0,0,6.6,3.9" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M116.7,147.7a14.5,14.5,0,0,1-2.8-1.8A12,12,0,0,1,112,143s-2.1,5.1-1.2,6S116.7,147.7,116.7,147.7Z" transform="translate(-5.7 -27.7)"/>
                </g>
                <path id="pencilLine" class="fillNone" d="M29.7,29.7c8.9,60.2,30.9,91,74.3,120.1" transform="translate(-5.7 -27.7)"/>
                <g id="stylusGroup">
                  <path class="fillWh" d="M109.4,84.1a25.2,25.2,0,0,0-5.3,10.4c-.1.2-5.2,8.8-2.7,11.3s11.2-2.6,11.4-2.6a25.8,25.8,0,0,0,10.3-5.4c.1-.1,39.8-44.8,49.6-55.4a3.9,3.9,0,0,0,1.1-2.7c3.5-3.5,5-6.3,2.5-8.8s-5.2-1-8.7,2.5a4.5,4.5,0,0,0-2.8,1.2C154.2,44.4,109.5,84.1,109.4,84.1Z" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M109.4,84.1c-1.7,1.8-.1,6.3,3.7,10s8.3,5.5,10,3.7" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M113.7,103c-1.4.3-4.3-1.4-6.2-3.3h0c-1.9-1.9-3.5-4.7-3.2-6.2" transform="translate(-5.7 -27.7)"/>
                  <path class="fillNone" d="M164.8,34.6c1-1.1,2.5.2,5.1,2.8s3.8,4,2.8,5" transform="translate(-5.7 -27.7)"/>
                </g>
                <g id="pixelsGroup" class="fillGold2">
                  <rect x="97.5" y="14.8" width="12.8" height="12.8"/>
                  <rect x="84.7" y="2" width="12.8" height="12.8"/>
                  <rect x="68.7" y="62" width="8.2" height="8.16"/>
                  <rect x="68.7" y="48.2" width="8.2" height="8.16"/>
                  <rect x="76.9" y="70.2" width="5.6" height="5.63"/>
                  <rect x="81.6" y="56.4" width="5.6" height="5.63"/>
                  <rect x="87.2" y="50.7" width="5.6" height="5.63"/>
                  <rect x="76.9" y="37.9" width="10.3" height="10.3"/>
                  <rect x="51.1" y="16.3" width="5.6" height="5.63"/>
                  <rect x="51.1" y="5.1" width="5.6" height="5.63"/>
                  <rect x="48.1" y="2" width="3.1" height="3.06"/>
                  <rect x="82.5" y="75.8" width="3.1" height="3.06"/>
                  <rect x="85.6" y="75.8" width="3.1" height="3.06"/>
                  <rect x="88.6" y="78.9" width="3.1" height="3.06"/>
                  <rect x="67.1" y="9.2" width="12.8" height="12.8"/>
                  <rect x="67.1" y="32.3" width="5.6" height="5.63"/>
                  <rect x="56.8" y="22" width="10.3" height="10.3"/>
                  <rect x="87.2" y="27.6" width="10.3" height="10.3"/>
                </g>
              </svg>
            </div>
            <h4>creativity</h4>
            <p>At any given time I&nbsp;have at least 3&nbsp;personal projects going on. From crafting a comic to patterning a costume for my dog, from 3D modelling a custom display case to designing animated web graphics, I'm always creating something. And if I&nbsp;happen to be taking a break, you'll probably find me reading or watching tutorials about software shortcuts, "DRY" coding, or prop&#8209;making. Digital or analog mediums? I&nbsp;dabble in&nbsp;both!</p>
          </article>
          <article class="articleContainer">
            <div class="iconContainer">
              <svg id="learningIcon" class="iconsSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208.5 158.9" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>learning icon</title>
                <path id="stand" class="fillWh" d="M118.3,151.1H97.7S88.4,175,68.3,175v9.6h79.4V175C127.6,175,118.3,151.1,118.3,151.1Z" transform="translate(-3.7 -27.7)"/>
                <rect id="monitor" class="fillWh" x="2" y="2" width="204.5" height="129.44" rx="8.3"/>
                <rect id="screen" class="fillNone" x="13.7" y="14.6" width="181" height="95.49"/>
                <g id="webdev">
                  <line class="fillNone" x1="90.1" y1="91.3" x2="118.4" y2="33.3"/>
                  <polyline class="fillNone" points="125.1 48.7 148.4 62.7 125.1 76"/>
                  <polyline class="fillNone" points="83.4 48.7 60.1 62.7 83.4 76"/>
                </g>
              </svg>
            </div>
            <h4>learning</h4>
            <p>I'm a lifelong learner who never lets the limitations of my current knowledge base stifle my creativity. When designing my portfolio site, I&nbsp;refused to settle for a premade template. Instead I&nbsp;learned how to code my own designs, and, along the way, I&nbsp;picked up a post&#8209;baccalaureate certificate in Interactive Design and Marketing. Now I'm&nbsp;fully armed with a range of art, design, and development skills in my&nbsp;toolbelt.</p>
          </article>
        </div>
      </section>

      <section class="longSection infoSection">
        <div class="titleContainer">
          <svg class="lineHzSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 4" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
            <title>decorative lines</title>
            <use href="#lineHz" xlink:href="#lineHz" x="0" y="0"/>
          </svg>
          <h3 class="contentH3"><span class="numberH3">03 </span>windows &amp; mac savvy</h3>
        </div>
        <div id="mySkills" class="contentContainer infoContainer">
          <article class="articleContainer"> <!-- web software -->
            <!-- <h4 class="contentH4">web</h4> -->
            <div class="softwareSkills"> <!-- html/css -->
              <svg id="#htmcsslSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>HTML and CSS Icons</title>
                <use href="#htmlcssSymbol" xlink:href="#htmlcssSymbol" x="0" y="0"/>
              </svg>
              <h5>
                <abbr title="HyperText Markup Language">HTML</abbr> &amp; <abbr title="Cascading Style Sheets">CSS</abbr>
              </h5>
            </div>
            <div class="softwareSkills"> <!-- javascript -->
              <svg id="#javascriptSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>JavaScript Icon</title>
                <use href="#javascriptSymbol" xlink:href="#javascriptSymbol" x="0" y="0"/>
              </svg>
              <h5>JavaScript</h5>
            </div>
            <div class="softwareSkills"> <!-- jquery -->
              <svg id="#jquerySVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>jQuery Icon</title>
                <use href="#jquerySymbol" xlink:href="#jquerySymbol" x="0" y="0"/>
              </svg>
              <h5>jQuery</h5>
            </div>
            <div class="softwareSkills"> <!-- php -->
              <svg id="#phpSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>PHP Icon</title>
                <use href="#phpSymbol" xlink:href="#phpSymbol" x="0" y="0"/>
              </svg>
              <h5>
                <abbr title="HyperText Preprocessor">PHP</abbr>
              </h5>
            </div>
            <div class="softwareSkills"> <!-- wordpress -->
              <svg id="#wordpressSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>WordPress Icon</title>
                <use href="#wordpressSymbol" xlink:href="#wordpressSymbol" x="0" y="0"/>
              </svg>
              <h5>WordPress</h5>
            </div>
            <div class="softwareSkills"> <!-- github -->
              <svg id="#githubSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>GitHub Icon</title>
                <use href="#githubSymbol" xlink:href="#githubSymbol" x="0" y="0"/>
              </svg>
              <h5>GitHub</h5>
            </div>
            <div class="softwareSkills"> <!-- sass -->
              <svg id="#sassSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>SASS Icon</title>
                <use href="#sassSymbol" xlink:href="#sassSymbol" x="0" y="0"/>
              </svg>
              <h5>
                <abbr title="Syntactically Awesome Style Sheets">SASS</abbr>
              </h5>
            </div>
          </article>
          <article class="articleContainer"> <!-- design software -->
            <!-- <h4 class="contentH4">design</h4> -->
            <div class="softwareSkills"> <!-- photoshop -->
              <svg id="#photoshopSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>PhotoShop Icon</title>
                <use href="#photoshopSymbol" xlink:href="#photoshopSymbol" x="0" y="0"/>
                <h5>Photoshop</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- illustrator -->
              <svg id="#illustratorSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>Illustrator Icon</title>
                <use href="#illustratorSymbol" xlink:href="#illustratorSymbol" x="0" y="0"/>
                <h5>Illustrator</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- indesign -->
              <svg id="#indesignSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>InDesign Icon</title>
                <use href="#indesignSymbol" xlink:href="#indesignSymbol" x="0" y="0"/>
                <h5>InDesign</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- acrobat -->
              <svg id="#acrobatSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>Acrobat Icon</title>
                <use href="#acrobatSymbol" xlink:href="#acrobatSymbol" x="0" y="0"/>
                <h5>Acrobat</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- clip studio paint -->
              <svg id="#clipstudiopaintSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>Clip Studio Paint Icon</title>
                <use href="#clipstudiopaintSymbol" xlink:href="#clipstudiopaintSymbol" x="0" y="0"/>
                <h5>Clip Studio Paint</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- sketchup -->
              <svg id="#sketchupSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>SketchUp Icon</title>
                <use href="#sketchupSymbol" xlink:href="#sketchupSymbol" x="0" y="0"/>
                <h5>SketchUp</h5>
              </svg>
            </div>
          </article>
          <article class="articleContainer"> <!-- office software -->
            <!-- <h4 class="contentH4">office</h4> -->
            <div class="softwareSkills"> <!-- word -->
              <svg id="#wordSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>Word Icon</title>
                <use href="#wordSymbol" xlink:href="#wordSymbol" x="0" y="0"/>
                <h5>Word</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- excel -->
              <svg id="#excelSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>Excel Icon</title>
                <use href="#excelSymbol" xlink:href="#excelSymbol" x="0" y="0"/>
                <h5>Excel</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- powerpoint -->
              <svg id="#powerpointSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>PowerPoint Icon</title>
                <use href="#powerpointSymbol" xlink:href="#powerpointSymbol" x="0" y="0"/>
                <h5>PowerPoint</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- googledrive -->
              <svg id="#googledriveSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>Google Drive Icon</title>
                <use href="#googledriveSymbol" xlink:href="#googledriveSymbol" x="0" y="0"/>
                <h5>Google Drive</h5>
              </svg>
            </div>
            <div class="softwareSkills"> <!-- mailchimp -->
              <svg id="#mailchimpSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                <title>MailChimp Icon</title>
                <use href="#mailchimpSymbol" xlink:href="#mailchimpSymbol" x="0" y="0"/>
                <h5>MailChimp</h5>
              </svg>
            </div>
          </article>
        </div>
      </section>

      <?php include "../inc/gradientSec.php"; ?>

    <!-- </div> ends .barba-container -->
  <!-- </main> -->

  <?php
    require "../inc/htmlEndScripts-links-page.php";
    require "../inc/htmlEndScripts-endHtml.php";
  ?>
