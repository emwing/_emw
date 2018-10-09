<?php

  $keys = array_keys($comicsAll);
  for($i = 0; $i < count($comicsAll); $i++) {
    $count = count($comicsAll);
    $last = $count - 1;

    // generate each comic's parent container (contains both pages and text)
    echo "<div id='" . $comicsAll[$i]["id"] . "' class='flexContainerRow artWrap'>";

      // generate each comic's page container (set to relative so images is absolute while text can flow)
      echo "<div class='flexItem60 flexContainerColumn artwork pageContainer'>";

        // single out first image
        echo "<img src='img/" . $comicsAll[$i]["id"] . "_0.jpg' alt='" . $comicsAll[$i]["alt"] . " class='art first showSection'>";

        // generate all the other pages except the last one
        for($x = 1; $x < ($comicsAll[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $comicsAll[$i]["id"] . "_" . $x . ".jpg' alt='" . $comicsAll[$i]["alt"] . " class='art hiddenPage'>";
        }

        // single out last image
        echo "<img src='img/" . $comicsAll[$i]["id"] . "_" . ($comicsAll[$i]["pages"] - 1) . ".jpg' alt='" . $comicsAll[$i]["alt"] . " class='art last hiddenPage'>";

      echo "</div> <!-- ends .pageContainer --> ";

      // generate each comic's text container
      echo "<div class='flexItem40 flexContainerColumn whiteBg'>";
        echo "<h3>" . $comicsAll[$i]["title"] . "</h3>";
        echo "<p>" . $comicsAll[$i]["description"] . "</p>";

      // generate each illustration's sideNav container
        echo '<nav class="sideNav">';
          echo '<ul class="sideList">';
            echo '<li class="sideLink first"><a href="#heroWrap"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>';
          if ($i > 0) {
            echo '<li class="sideLink prev"><a href="#' . $comicsAll[$i - 1]['id'] . '"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          } else {
            echo '<li class="sideLink prev"><a href="#heroWrap"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          }

          if ($i < $last) {
            echo '<li class="sideLink next"><a href="#' . $comicsAll[$i + 1]['id'] . '"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li>';
            echo '<li class="sideLink last"><a href="#' . $comicsAll[$last]['id'] . '"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>';
          } else {
            echo '<li class="invisible"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></li>';
            echo '<li class="invisible"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></li>';
          }
          echo "</ul>";
        echo "</nav>";

      echo "</div>";

    echo "</div>";
  }

?>
