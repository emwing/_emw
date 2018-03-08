<?php

  $illustrationsAll = array(
    // Weather Buttons
    array(
      "id"=>"weatherButtons",
      "title"=>"Weather Buttons",
      "alt"=>"Set of Weather Icons for Pin-back Buttons",
      "description"=>"Digitally drawn with Adobe Illustrator. Each icon sports a fun expression. Featured elements in this set includes Thunder, Wind, Rain, Sun, and&nbsp;Moon.",
      "0"=>"img/weatherButtons.jpg"
    ),

    // Sushi Buttons
    array(
      "id"=>"sushiButtons",
      "title"=>"Sushi Buttons",
      "alt"=>"Set of Sushi Icons for Pin-back Buttons",
      "description"=>"Digitally drawn with Adobe Illustrator. Each piece of sushi sports a fun expression. Featured food in this set includes Salmon, Tuna, Egg, Eel, and&nbsp;Shrimp.",
      "0"=>"img/sushiButtons.jpg"
    ),

    // Kikoutei no Ryo
    array(
      "id"=>"kikouteiNoRyo",
      "title"=>"Kikoutei no Ryo",
      "alt"=>"Fanart of Ryo of Inferno from Ronin Warriors",
      "description"=>"A blend of traditional and digital drawing created this piece of Ronin Warriors fanart. The Ronin Warriors anime played a huge role in influencing and inspiring my&nbsp;art.",
      "0"=>"img/kikouteiNoRyo.jpg"
    ),

    // Confused Cloud
    array(
      "id"=>"confusedCloud",
      "title"=>"Confused Cloud",
      "alt"=>"Fanart of Cloud Strife from Final Fantasy 7",
      "description"=>"A blend of traditional and digital drawing created this fun piece of Final Fantasy&nbsp;VII fanart.",
      "0"=>"img/cloud.jpg"
    ),

    // Chaos Illustration
    array(
      "id"=>"chaosIllustration",
      "title"=>"Chaos",
      "alt"=>"Chaos Illustration",
      "description"=>"Traditional pen and ink drawing. This illustration showcases an original&nbsp;character.",
      "0"=>"img/chaos.jpg"
    ),

    // Dragon Commission
    array(
      "id"=>"dragonCommission",
      "title"=>"Dragon Commission",
      "alt"=>"Dragon Commission",
      "description"=>'Commissioned 11" x 14" digital illustration made with Adobe Illustrator. Client wanted a colorful dragon for her friend who was battling cancer. Chinese characters represent Happiness, Strength, Health, Hope, Protection, and&nbsp;Longevity.',
      "0"=>"img/dragon.jpg"
    ),

    // Inevitable Poster
    array(
      "id"=>"inevitablePoster",
      "title"=>"Inevitable Poster",
      "alt"=>"Inevitable Poster",
      "description"=>'Traditional pen and ink drawing. This 11" x 17" poster was created to promote its corresponding comic&nbsp;story.',
      "0"=>"img/inevitablePoster.jpg"
    ),

    // Inevitable Postcard
    array(
      "id"=>"inevitablePostcard",
      "title"=>"Inevitable Promotional Postcard",
      "alt"=>"Inevitable Postcard",
      "description"=>'Traditional pen and ink drawing. This postcard was created to promote its corresponding comic&nbsp;story.',
      "0"=>"img/inevitablePostcard.jpg"
    )

  ); // end of $illustrationsAll array

  foreach ($illustrationsAll as $illustration) {
    $illustrationPage = array_slice($illustration, 4);
    $illustrationText = array_slice($illustration, 0, 4);

    // generate each illustration's parent container (contains both "page" and text)
    echo "<div id='" . $illustrationText["id"] ."' class='leftImage book'>";
      // generate each illustration's page container (set to relative so images is absolute while text can flow)
      echo "<div class='pageContainer'>";
        // set add "page" with .first
        echo "<img src='" . $illustrationPage[0] . "' class='first' alt='" . $illustrationText["alt"] . "'>" ;
      echo "</div>";

      echo "<div class='leftTextContent'>";
        echo "<h2>" . $illustrationText["title"] . "</h2>";
        echo "<p>" . $illustrationText["description"] . "</p>";
      echo "</div>";

    echo "</div>";
  }

?>
