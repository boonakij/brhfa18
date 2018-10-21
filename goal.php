<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
include('includes/init.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <link rel="stylesheet" type="text/css" href="styles/jquery-ui.min.css" media="all" />
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui.min.js" type="text/javascript"></script>
  <script src="scripts/activity.js" type="text/javascript"></script>
  <script src="scripts/calculatedamt.js" type="text/javascript"></script>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

  <title>GiveGrow- Goal</title>
</head>

<body>
  <img src = "images/step3.png" alt = "Step 3" class = "step"/>

  <h1 class = "step"> Set a Charitable Giving Goal </h1>

  <div class = "bar"></div>
    <div class = "information">

  <!-- <div class = "selectbar">
    <label for="annual" class = "option" id = "annuallabel">Annual</label>
    <input type="radio" id="annual" name="annual">
    <label for="weekly" class = "option" id = "weeklylabel">Weekly</label>
    <input type="radio" id="weekly" name="weekly">
  </div> -->

  <div class="container">
  <div class="segmented">
    <label for="annual" class = "option" id = "annuallabel"><input type="radio" name="segmented" id = "annual"/> Annual</label>
    <label for="weekly" class = "option" id = "weeklylabel"><input type="radio" name="segmented" id = "weekly"/> Weekly</label>
  </div>
</div>

  <?php
  if (!$current_user) {
    ?>
    <form action="index.php" method="post">
      <label for = "income" class = "title"> Income </label>
      <input type="number" name="income" placeholder="Income" required id = "income" value="0">
    </form>
    <?php
  }
  else {
    ?>
    <form action="index.php" method="post" id="logout-form">
      <input type="submit" name="logout" value="Log out" id="logout-btn">
    </form>
    <?php
  }
  ?>
  </div>
  <p> What percentage of your income would you like to set <br/> aside for charitable giving? </p>
  <div class="slidecontainer">
    <input type="range" min="1" max="20" value="10" step = ".01" class="slider" id="slider">
    <p class = "slideramt"><div id="sliderAmount"></div></p>
  </div>
  <p> That's </p>
  <div id = "calculatedamt"></div>
  <p> each day! </p>

  <a href "dashboard.php"> All Set! </a>

  <img src = "images/boi4.png" alt = "succulent" class = "goal"/>

</body>
</html>
