<?php

  $keys = array_keys($illustrationsAll);
  for($i = 0; $i < count($illustrationsAll); $i++) {
    $count = count($illustrationsAll);
    $last = $count - 1;

  // generate each illustration's parent container (contains both "page" and text)
    echo "<div id='" . $illustrationsAll[$i]["id"] ."' class='flexContainerRow artWrap'>";

      // generate each illustration's art container
      echo "<div class='flexItem60 flexContainerColumn artwork'>";
        echo "<img src='" . $illustrationsAll[$i][0] . "' alt='" . $illustrationsAll[$i]["alt"] . "' class='art'>" ;
      echo "</div>";

      // generate each illustration's text container
      echo "<div class='flexItem40 flexContainerColumn whiteBg'>";
        echo "<h3>" . $illustrationsAll[$i]["title"] . "</h3>";
        echo "<p>" . $illustrationsAll[$i]["description"] . "</p>";

        // generate each illustration's sideNav container
        echo '<nav class="sideNav">';
          echo '<ul class="sideList">';
            echo '<li class="sideLink first"><a href="#heroWrap"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>';
          if ($i > 0) {
            echo '<li class="sideLink prev"><a href="#' . $illustrationsAll[$i - 1]['id'] . '"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          } else {
            echo '<li class="sideLink prev"><a href="#heroWrap"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          }

          if ($i < $last) {
            echo '<li class="sideLink next"><a href="#' . $illustrationsAll[$i + 1]['id'] . '"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li>';
            echo '<li class="sideLink last"><a href="#' . $illustrationsAll[$last]['id'] . '"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>';
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
