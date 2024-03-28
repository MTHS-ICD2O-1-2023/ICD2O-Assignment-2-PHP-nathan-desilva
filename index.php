<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The Volume program" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Nathan De Silva" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"
    />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Assignment #2</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="./js/script.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">The Volume of a Rectangular Prism</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/SEOBFSMSMATCON168_01.png" alt="volume_of_rectangle" />
        </div>
        <br />
        <!-- Simple Textfield for integers-->
        <p>Length</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="length">
          <label class="mdl-textfield__label" for="length">Length...</label>
        </div>
        <!-- Numeric Textfield -->
        <p>Width</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="width">
          <label class="mdl-textfield__label" for="width">Width...</label>
          <span class="mdl-textfield__error">Input is not a name!</span>
        </div>
        <br />
        <p>Height</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="height">
          <label class="mdl-textfield__label" for="height">Height...</label>
        </div>
        <br />
        <!-- Raised button with ripple -->
        <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          onclick="doMathClicked()"
        >
          Calculate
        </button>
        <br />
        <br />
        <div id="volume-rectangle">
      </main>
    </div>
  </body>
</html>
