<!DOCTYPE html>
<!-- ICS2O-Unit5-01-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Random Number Guesser, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.orange-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Random Number Guesser, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Random Number Guesser, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/dice.gif" alt="dice" />
      </div>
      <div class="page-content">Please enter a number between 1 and 6:</div>
      <br />
      <!-- Simple Textfield for integers-->
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input
            class="mdl-textfield__input"
            type="text"
            pattern="-?[0-9]*(\.[0-9]+)?"
            name="user-number"
            step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input">Number...</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Check
        </button>
      </form>
      <br />
      <div class="page-content">
        <div id="result"></div>
      </div>
    </main>
  </div>
</body>

</html>
