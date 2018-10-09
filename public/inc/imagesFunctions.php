<?php

$keys = array_keys($imageArrays);

// search main multidimensional array to find if an array_key_exists (referenced from: http://codepad.org/GU0qG5su)
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
  for($i = 0; $i < count($imageArrays); $i++) {
    $count = count($imageArrays);
    $last = $count - 1;

  // generate each parent container (contains both pages and text)
    echo "<div id='" . $imageArrays[$i]["id"] . "' class='flexContainerRow artWrap'>";

    // generate each image's page container (set to relative so images is absolute while text can flow)
    if ((multiKeyExists($imageArrays[$i], "years") == true) || (multiKeyExists($imageArrays[$i], "pages") == true)) {
      echo "<div class='flexItem60 flexContainerColumn artwork pageContainer'>";
    } else {
      echo "<div class='flexItem60 flexContainerColumn artwork'>";
    }

    // for chronological work
      if (multiKeyExists($imageArrays[$i], "years") == true) {

      // single out most recent image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $imageArrays[$i]["years"][$i] . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art first showSection'>";

      // generate all the other images in reverse chronological order except the last one
        for($x = 1; $x < ($imageArrays[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $imageArrays[$i]["years"][$x] . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art hiddenPage'>";
        }

      // single out oldest image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . end($imageArrays[$i]["years"]) . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art last hiddenPage'>";

      // add the click hint
        echo "<div class='overlay'><h2>click image to see more</h2></div>";

    // for stacked images
  } elseif (multiKeyExists($imageArrays[$i], "pages") == true) {

      // single out first image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_0.jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art first showSection'>";

      // generate all the other pages except the last one
        for($x = 1; $x < ($imageArrays[$i]["pages"] - 1); $x++) {
          echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . $x . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art hiddenPage'>";
        }

      // single out last image
        echo "<img src='img/" . $imageArrays[$i]["id"] . "_" . ($imageArrays[$i]["pages"] - 1) . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art last hiddenPage'>";

      // add the click hint
        echo "<div class='overlay'><h2>click image to see more</h2></div>";

    // for single images
      } else {
        echo "<img src='img/" . $imageArrays[$i]["id"] . ".jpg' alt='" . $imageArrays[$i]["alt"] . "' class='art'>";
      }

    // generate each site's visit button
      if (multiKeyExists($imageArrays, "site") == true) {
        echo '<button type="button" class="btnControl"><a href="' . $imageArrays[$i]["site"] . '" target="_blank">Vist the Site</a></button>';
      }

      echo "</div> <!-- ends .pageContainer --> ";

    // generate each image's text container
      echo "<div class='flexItem40 flexContainerColumn whiteBg'>";
        echo "<h3>" . $imageArrays[$i]["title"] . "</h3>";
        echo "<p>" . $imageArrays[$i]["description"] . "</p>";

    // if it's a website, show additional info
      if (multiKeyExists($imageArrays, "site") == true) {
        echo "<div class='projectParameters'>";
          echo "<h4>Project Parameters</h4>";

          echo "<ul>";

            $goalsArray = $imageArrays[$i]["goals"];
            foreach($goalsArray as $value) {
              echo "<li>" . $value . "</li>";
            }
          echo "</ul>";

        echo "</div>";

        echo "<p>" . $imageArrays[$i]["result"] . "</p>";
      }

      // generate each image's sideNav container
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
