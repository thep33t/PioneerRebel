<!DOCTYPE html>
<?php 
include 'config.php';
include 'pioneer.lib.php'; ?>
<html>
  <head>
    <title>Pioneer VSX-822-K Presets</title>
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
    <form method="post" action="presets.php">
    <table>
      <tr>
        <td><input name="P1" type="submit" value="Preset 1" /></td>
      </tr>
      <tr>
        <td><input name="P2" type="submit" value="Preset 2" /></td>
      </tr>
      <tr>
        <td><input name="P3" type="submit" value="Preset 3" /></td>
      </tr>
      <tr>
        <td><input name="P4" type="submit" value="Preset 4" /></td>
      </tr>
    </table>
    </form>
    <button type="button" onclick="javascript:window.close()">Close</button>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
  <?php
    if(isset($_POST['P1'])){
      PioneerCtrl_setPreset($ip,'01');
    }
    if(isset($_POST['P2'])){
      PioneerCtrl_setPreset($ip,'02');
    }
    if(isset($_POST['P3'])){
      PioneerCtrl_setPreset($ip,'03');
    }
    if(isset($_POST['P4'])){
      PioneerCtrl_setPreset($ip,'04');
    }
    ?>
</html>