<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Area of a Triangle, in PHP" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Nathan De Silva" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Assignment #2, in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Volume of a Rectangular Prism, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/area_of_trinagle.png" alt="volume-rectangle" width="250" />
        </div>
        <div class="page-content-php">
          <div id="user-info">
            <?php
            $baseOfTriangle = $_POST["base-of-triangle"];
            $heightOfTriangle = $_POST["height-of-triangle"];

            // process
            $area = $baseOfTriangle * $heightOfTriangle * 0.5;

            // output
            echo "If a Triangle has base = " . $baseOfTriangle . " cm and the height = " . $heightOfTriangle . " cm:";
            echo "<br />";
            echo "<br />";
            echo "The Volume of a Rectangular Prism is " . $volume . " cm³.";
            echo "<br />";

            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
