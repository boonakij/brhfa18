<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
// ini_set("allow_url_fopen", 1);
include('includes/init.php');
// echo phpInfo();
?>
<!DOCTYPE html>
<html class="uk-height-1-1">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/index.css" media="all" />
  <link rel="stylesheet" type="text/css" href="styles/jquery-ui.min.css" media="all" />
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui.min.js" type="text/javascript"></script>
  <script src="scripts/activity.js" type="text/javascript"></script>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300" rel="stylesheet">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/js/uikit-icons.min.js"></script>
  <title>Share Here- Sign In</title>
</head>


<body class="uk-height-1-1">
  <div class="content-wrapper uk-container uk-background-cover">
    <div class="title-container uk-container uk-text-center">
      <h class="uk-heading-primary";
      id="title-text"; style="font-family: Montserrat, sans-serif">
        The Fault, My Dear Brutus
    </h>
      <p class="tagline">Is not in our stars, but in ourselves</p>
    </div>
    <!-- <div class="circle uk-container"></div> -->
    <div class="button-container uk-container uk-flex">
      <button class="uk-button uk-button-default">Button 1</button>
      <button class="uk-button uk-button-default">Button 2</button>
    </div>
  <div class="footer">
    <img class="succ" data-src="images/succ1-01.png" uk-img>
    <img class="succ" data-src="images/succ2-02.png" uk-img>
    <img class="succ" data-src="images/succ3-03.png" uk-img>
    <img class="succ" data-src="images/succ4-04.png" uk-img>
  </div>
</div>
</body>
</html>
