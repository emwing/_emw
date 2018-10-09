<?php

  $keys = array_keys($webAll);
  for($i = 0; $i < count($webAll); $i++) {
    $count = count($webAll);
    $last = $count - 1;

  // generate each parent container (contains both "page" and text)
    echo "<div id='" . $webAll[$i]["id"] ."' class='flexContainerRow artWrap'>";

      // generate each site's art container
      echo "<div class='flexItem60 flexContainerColumn artwork pageContainer'>";

        // single out first image
        echo "<img src='img/" . $webAll[$i]["id"] . "_0.jpg' alt='" . $webAll[$i]["alt"] . "' class='art first showSection'>";

        // generate all the other pages except the last one
        for($x = 1; $x < ($webAll[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $webAll[$i]["id"] . "_" . $x . ".jpg' alt='" . $webAll[$i]["alt"] . " class='art hiddenPage'>";
        }

        // single out last image
        echo "<img src='img/" . $webAll[$i]["id"] . "_" . ($webAll[$i]["pages"] - 1) . ".jpg' alt='" . $webAll[$i]["alt"] . " class='art last hiddenPage'>";

        // generate each site's visit button
        echo '<button type="button" class="btnControl"><a href="' . $webAll[$i]["site"] . '" target="_blank">Vist the Site</a></button>';
      echo "</div>";

      // generate each site's text container
      echo "<div class='flexItem40 flexContainerColumn whiteBg'>";
        echo "<h3>" . $webAll[$i]["title"] . "</h3>";
        echo "<p>" . $webAll[$i]["description"] . "</p>";

        echo "<div class='projectParameters'>";
          echo "<h4>Project Parameters</h4>";

          echo "<ul>";

            $goalsArray = $webAll[$i]["goals"];
            foreach($goalsArray as $value) {
              echo "<li>" . $value . "</li>";
            }
          echo "</ul>";

        echo "</div>";

        echo "<p>" . $webAll[$i]["result"] . "</p>";

        // generate each site's sideNav container
        echo '<nav class="sideNav">';
          echo '<ul class="sideList">';
            echo '<li class="sideLink first"><a href="#heroWrap"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>';
          if ($i > 0) {
            echo '<li class="sideLink prev"><a href="#' . $webAll[$i - 1]['id'] . '"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          } else {
            echo '<li class="sideLink prev"><a href="#heroWrap"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          }

          if ($i < $last) {
            echo '<li class="sideLink next"><a href="#' . $webAll[$i + 1]['id'] . '"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li>';
            echo '<li class="sideLink last"><a href="#' . $webAll[$last]['id'] . '"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>';
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
