<!DOCTYPE html>
<?php 
include 'config.php';
include 'pioneer.lib.php'; ?>
<html>
  <head>
    <title>Pioneer VSX-822-K Media buttons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/graphicbuttons.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <form method="post" action="media.php">
		<input name="Last" type="submit" value="Last" />
		<input name="Next" type="submit" value="Next" />
		<input name="Play" type="submit" value="Play" />
		<input name="Pause" type="submit" value="Pause" />
		<input name="Stop" type="submit" value="Stop" />
		<input name="Enter" type="submit" value="Enter" />
		<input name="Return" type="submit" value="Return" />
		<input name="iPod" type="submit" value="iPod Control" />
		<p>implement page and line selectors later</p>
    </form>
    <button type="button" onclick="javascript:window.close()">Close</button>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
  <?php
    if(isset($_POST['Last'])){
      PioneerCtrl_pushRSkip($ip);
    }
    if(isset($_POST['Next'])){
      PioneerCtrl_pushFSkip($ip);
    }
    if(isset($_POST['Play'])){
      PioneerCtrl_pushPlay($ip);
    }
    if(isset($_POST['Pause'])){
      PioneerCtrl_pushPause($ip);
    }
    if(isset($_POST['Stop'])){
      PioneerCtrl_pushStop($ip);
    }
    if(isset($_POST['Enter'])){
      PioneerCtrl_pushEnter($ip);
    }
    if(isset($_POST['Return'])){
      PioneerCtrl_pushReturn($ip);
    }
    if(isset($_POST['iPod'])){
      PioneerCtrl_pushIpod($ip);
    }
    ?>
</html>








