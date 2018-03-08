<?php

  foreach ($comicsAll as $comic) {

    // generate each comic's parent container (contains both pages and text)
    echo "<div id='" . $comic["id"] ."Comic' class='leftImage book'>";
      // generate each comic's page container (set to relative so images is absolute while text can flow)
      echo "<div class='pageContainer'>";
        // single out first image
        echo "<img src='img/" . $comic["id"] . "_0.jpg' class='first showSection'>";
        // generate all the other pages except the last one
        for($x = 1; $x < ($comic["pages"] - 1); $x++) {
          echo "<img src='img/" . $comic["id"] . "_" . $x . ".jpg' class='hiddenPage'>";
        }
        // single out last image
        echo "<img src='img/" . $comic["id"] . "_" . ($comic["pages"] - 1) . ".jpg' class='last hiddenPage'>";

      echo "</div><!-- ends .pageContainer --> ";
      echo "<div class='leftTextContent'>";
        echo "<h2>" . $comic["title"] . "</h2>";
        echo "<p>" . $comic["description"] . "</p>";
      echo "</div>";

    echo "</div>";
  }

?>
