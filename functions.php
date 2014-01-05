<!DOCTYPE html>
<?php 
include 'config.php';
include 'pioneer.lib.php'; ?>
<html>
  <head>
    <title>Pioneer VSX-822-K Inputs</title>
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
    <form method="post" action="functions.php">
    <table>
      <tr>
        <td><input name="FN1" type="submit" value="CD" /></td>
      </tr>
      <tr>
        <td><input name="FN2" type="submit" value="Tuner" /></td>
      </tr>
      <tr>
        <td><input name="FN4" type="submit" value="DVD" /></td>
      </tr>
      <tr>
        <td><input name="FN5" type="submit" value="TV" /></td>
      </tr>
      <tr>
        <td><input name="FN6" type="submit" value="Sat/Cbl" /></td>
      </tr>
      <tr>
        <td><input name="FN10" type="submit" value="Video" /></td>
      </tr>
      <tr>
        <td><input name="FN15" type="submit" value="DVR/BDR" /></td>
      </tr>
      <tr>
        <td><input name="FN17" type="submit" value="iPod/USB" /></td>
      </tr>
      <tr>
        <td><input name="FN25" type="submit" value="BD" /></td>
      </tr>
      <tr>
        <td><input name="FN33" type="submit" value="Adapter" /></td>
      </tr>
      <tr>
        <td><input name="FN38" type="submit" value="Netradio" /></td>
      </tr>
      <tr>
        <td><input name="FN41" type="submit" value="Pandora" /></td>
      </tr>
      <tr>
        <td><input name="FN44" type="submit" value="Media Server" /></td>
      </tr>
      <tr>
        <td><input name="FN45" type="submit" value="Favorites" /></td>
      </tr>
      <tr>
        <td><input name="FN49" type="submit" value="Game" /></td>
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
    if(isset($_POST['FN1'])){
      PioneerCtrl_setSource($ip,'01');
    }
    if(isset($_POST['FN2'])){
      PioneerCtrl_setSource($ip,'02');
    }
    if(isset($_POST['FN4'])){
      PioneerCtrl_setSource($ip,'04');
    }
    if(isset($_POST['FN5'])){
      PioneerCtrl_setSource($ip,'05');
    }
    if(isset($_POST['FN6'])){
      PioneerCtrl_setSource($ip,'06');
    }
    if(isset($_POST['FN10'])){
      PioneerCtrl_setSource($ip,'10');
    }
    if(isset($_POST['FN15'])){
      PioneerCtrl_setSource($ip,'15');
    }
    if(isset($_POST['FN17'])){
      PioneerCtrl_setSource($ip,'17');
    }
    if(isset($_POST['FN25'])){
      PioneerCtrl_setSource($ip,'25');
    }
    if(isset($_POST['FN33'])){
      PioneerCtrl_setSource($ip,'33');
    }
    if(isset($_POST['FN38'])){
      PioneerCtrl_setSource($ip,'38');
    }
    if(isset($_POST['FN41'])){
      PioneerCtrl_setSource($ip,'41');
    }
    if(isset($_POST['FN44'])){
      PioneerCtrl_setSource($ip,'44');
    }
    if(isset($_POST['FN45'])){
      PioneerCtrl_setSource($ip,'45');
    }
    if(isset($_POST['FN49'])){
      PioneerCtrl_setSource($ip,'49');
    }
    ?>
</html>