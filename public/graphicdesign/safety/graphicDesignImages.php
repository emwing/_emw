<?php

  // search main multidimensional array to find if an array_key_exists
  // referenced from: http://codepad.org/GU0qG5su
  function multiKeyExists(array $arr, $key) {
    // is in base array?
    if(array_key_exists($key, $arr)) {
      return true;
    }
    // chech deeper arrays
    foreach ($arr as $element) {
      if(is_array($element)) {
        if(multiKeyExists($element, $key)) {
          return true;
        }
      }
    }
    return false;
  }

  // grab the array from the file calling the function

  $keys = array_keys($imageArrays);
  for($i = 0; $i < count($imageArrays); $i++) {
    $count = count($imageArrays);
    $last = $count - 1;

    // generate each parent container (contains both pages and text)
    echo "<div id='" . $imageArrays[$i]["id"] . "' class='flexContainerRow artWrap'>";

      // generate each comic's page container (set to relative so images is absolute while text can flow)
      echo "<div class='flexItem60 flexContainerColumn artwork pageContainer'>";

      // for chronological images
      if (multiKeyExists($imageArrays, "years") == true) {

        // single out most recent image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $imageArrays[$i]["years"][$i] . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art first showSection'>";

        // generate all the other images in reverse chronological order except the last one
        for($x = 1; $x < ($imageArrays[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $imageArrays[$i]["years"][$x] . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art hiddenPage'>";
        }

        // single out oldest image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . end($imageArrays[$i]["years"]) . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art last hiddenPage'>";

      // for websites with links
      } elseif (multiKeyExists($imageArrays, "site") == true) {

        // single out first site
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_0.jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art first showSection'>";

        // generate all the other sites except the last one
        for($x = 1; $x < ($imageArrays[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $x . ".jpg' alt='" . $imageArrays[$i]["alt"] . " class='art hiddenPage'>";
        }

        // single out last site
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . ($imageArrays[$i]["pages"] - 1) . ".jpg' alt='" . $imageArrays[$i]["alt"] . " class='art last hiddenPage'>";

        // generate each site's visit button
        echo '<button type="button" class="btnControl"><a href="' . $imageArrays[$i]["site"] . '" target="_blank">Vist the Site</a></button>';

      // for stacked images
      } elseif ((multiKeyExists($imageArrays, "pages") == true) && $imageArrays["pages"] > 1) {

        // single out first image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_0.jpg' alt='" . $imageArrays[$i]["alt"] . " class='art first showSection'>";

        // generate all the other pages except the last one
        for($x = 1; $x < ($imageArrays[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $x . ".jpg' alt='" . $imageArrays[$i]["alt"] . " class='art hiddenPage'>";
        }

        // single out last image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . ($imageArrays[$i]["pages"] - 1) . ".jpg' alt='" . $imageArrays[$i]["alt"] . " class='art last hiddenPage'>";

      // for single images
      } else {
        echo "<img src='" . $imageArrays[$i][0] . "' alt='" . $imageArrays[$i]["alt"] . "' class='art'>" ;
      }

      echo "</div> <!-- ends .pageContainer --> ";

      // generate each comic's text container
      echo "<div class='flexItem40 flexContainerColumn whiteBg'>";
        echo "<h3>" . $imageArrays[$i]["title"] . "</h3>";
        echo "<p>" . $imageArrays[$i]["description"] . "</p>";

      // generate each illustration's sideNav container
        echo '<nav class="sideNav">';
          echo '<ul class="sideList">';
            echo '<li class="sideLink first"><a href="#heroWrap"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>';
          if ($i > 0) {
            echo '<li class="sideLink prev"><a href="#' . $imageArrays[$i - 1]['id'] . '"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          } else {
            echo '<li class="sideLink prev"><a href="#heroWrap"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></li>';
          }

          if ($i < $last) {
            echo '<li class="sideLink next"><a href="#' . $imageArrays[$i + 1]['id'] . '"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></li>';
            echo '<li class="sideLink last"><a href="#' . $imageArrays[$last]['id'] . '"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>';
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
