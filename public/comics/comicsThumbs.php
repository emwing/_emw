<?php

foreach ($comicsAll as $comic) {
  $comicPages = array_slice($comic, 4);
  $comicFirst = array_slice($comic, 3, 1);
  $comicText = array_slice($comic, 0, 3);

  // generate each comic's parent container (contains both pages and text)
  echo "<div id='" . $comic["id"] ."Comic' class='leftImage book'>";
    // generate each comic's page container (set to relative so images is absolute while text can flow)
    echo "<div class='pageContainer'>";
      // set comic's first image to be .first
      echo "<img src='" . $comic["imgs"][0] . "' class='first showSection'>" ;

      foreach ($comicPages as $key => $value) {
          echo "<img src='" . $value . "' class='hiddenPage " . $key . "'>" ;
      }
    echo "</div>";
    echo "<div class='leftTextContent'>";
      echo "<h2>" . $comicText["title"] . "</h2>";
      echo "<p>" . $comicText["description"] . "</p>";
    echo "</div>";

  echo "</div>";
}

?>
