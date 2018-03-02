<?php

  $comicsAll = array(
    // the Folds of Flowers
    array(
      "id"=>"theFoldsOfFlowers",
      "title"=>"The Folds of Flowers",
      "description"=>"A four-page mini-comic featuring the feathered robot, Zing, using origami to re-blossom a rose&nbsp;bush.",
      "0"=>"img/z-ff_00.jpg",
      "1"=>"img/z-ff_01.jpg",
      "2"=>"img/z-ff_02.jpg",
      "3"=>"img/z-ff_03.jpg",
      "last"=>"img/z-ff_04.jpg"
    ),

    // Over Cast
    array(
      "id"=>"overCast",
      "title"=>"Over Cast",
      "description"=>"A four-page mini-comic featuring the feathered robot, Zing, with his cat-friend, Alfred, as they fish up more than they bargained&nbsp;for.",
      "0"=>"img/z-oc_00.jpg",
      "1"=>"img/z-oc_01.jpg",
      "2"=>"img/z-oc_02.jpg",
      "3"=>"img/z-oc_03.jpg",
      "last"=>"img/z-oc_04.jpg"
    ),

    // Lost
    array(
      "id"=>"lost",
      "title"=>"Lost",
      "description"=>"A fourteen-page mini-comic whose story is based on a real-life event that happened to the&nbsp;artist.",
      "0"=>"img/lt_00.jpg",
      "1"=>"img/lt_01.jpg",
      "2"=>"img/lt_02.jpg",
      "3"=>"img/lt_03.jpg",
      "4"=>"img/lt_04.jpg",
      "5"=>"img/lt_05.jpg",
      "6"=>"img/lt_06.jpg",
      "7"=>"img/lt_07.jpg",
      "8"=>"img/lt_08.jpg",
      "9"=>"img/lt_09.jpg",
      "10"=>"img/lt_10.jpg",
      "11"=>"img/lt_11.jpg",
      "12"=>"img/lt_12.jpg",
      "13"=>"img/lt_13.jpg",
      "last"=>"img/lt_14.jpg"
    ),

    // Lucky Cat
    array(
      "id"=>"luckyCat",
      "title"=>"Lucky Cat",
      "description"=>"A ten-page mini-comic story based on the origin of the Japanese Lucky Cat figurines. Style inspired by Japanese woodblock&nbsp;prints.",
      "0"=>"img/lc_00.jpg",
      "1"=>"img/lc_01.jpg",
      "2"=>"img/lc_02.jpg",
      "3"=>"img/lc_03.jpg",
      "4"=>"img/lc_04.jpg",
      "5"=>"img/lc_05.jpg",
      "6"=>"img/lc_06.jpg",
      "7"=>"img/lc_07.jpg",
      "8"=>"img/lc_08.jpg",
      "9"=>"img/lc_09.jpg",
      "last"=>"img/lc_10.jpg"
    ),

    // Inevitable
    array(
      "id"=>"Inevitable",
      "title"=>"Inevitable",
      "description"=>"An eleven-page mini-comic following a hunted unicorn forlorn attempts to elude death. Experimental pacing and high&#8209;contrast&nbsp;style.",
      "0"=>"img/ine_01.jpg",
      "1"=>"img/ine_02.jpg",
      "2"=>"img/ine_03.jpg",
      "3"=>"img/ine_04.jpg",
      "4"=>"img/ine_05.jpg",
      "5"=>"img/ine_06.jpg",
      "6"=>"img/ine_07.jpg",
      "7"=>"img/ine_08.jpg",
      "8"=>"img/ine_09.jpg",
      "9"=>"img/ine_10.jpg",
      "last"=>"img/ine_11.jpg"
    ),

    // Drifting Doom
    array(
      "id"=>"driftingDoom",
      "title"=>"Drifting Doom",
      "description"=>"An eight-page experimental mini-comic about the drowning of a whale. Uses single-panel pages and expressive&nbsp;linework.",
      "0"=>"img/dd_01.jpg",
      "1"=>"img/dd_02.jpg",
      "2"=>"img/dd_03.jpg",
      "3"=>"img/dd_04.jpg",
      "4"=>"img/dd_05.jpg",
      "5"=>"img/dd_06.jpg",
      "6"=>"img/dd_07.jpg",
      "last"=>"img/dd_08.jpg"
    ),

    // Kindness in a Jar
    array(
      "id"=>"KindnessInAJar",
      "title"=>"Kindness in a Jar",
      "description"=>'A three-page mini-comic that focuses on the effects of a "mask". In this story, the mask is the&nbsp;jar.',
      "0"=>"img/kiaj_01.jpg",
      "1"=>"img/kiaj_02.jpg",
      "last"=>"img/kiaj_03.jpg"
    )

  ); // end of $comicsAll array

  foreach ($comicsAll as $comic) {
    $comicPages = array_slice($comic, 4);
    $comicFirst = array_slice($comic, 3, 1);
    $comicText = array_slice($comic, 0, 3);

    echo "<div id='" . $comicText["id"] ."Comic' class='leftImage illustration'>";
      echo "<img src='" . $comicFirst[0] . "' class='frame first'>" ;

      foreach ($comicPages as $key => $value) {
          echo "<img src='" . $value . "' class='frame hiddenPage " . $key . "'>" ;
      }
      echo "<div class='leftTextContent'>";
        echo "<h2>" . $comicText["title"] . "</h2>";
        echo "<p>" . $comicText["description"] . "</p>";
      echo "</div>";

  echo "</div>";
  }
?>
