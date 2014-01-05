<!DOCTYPE html>
<?php 
include 'config.php';
include 'pioneer.lib.php'; ?>
<html>
  <head>
    <title>Pioneer VSX-822-K Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
		<form method="post" action="index.php">
			Power:
				<input name="PT" type="submit" value="Power Toggle" />
			<br>
			Function:
				<input name="FU" type="submit" value="Function Next" />
				<input name="FD" type="submit" value="Function Last" />
				<input name="GF" type="submit" value="Get Function" />
				<a href="functions.php" onclick="window.open('functions.php','Function','width=800,height=600').focus();return false">Open Function Menu</a>

			<br>
			Volume:
				<input name="MT" type="submit" value="Mute" />
				<input name="VU" type="submit" value="+1" />
				<input name="VD" type="submit" value="-1" />
				<input name="VU5" type="submit" value="+5" />
				<input name="VD5" type="submit" value="-5" />
				<input name="GV" type="submit" value="Get Volume" />
			<br>
			Tuner:
				<a href="presets.php" onclick="window.open('presets.php','Preset','width=800,height=600').focus();return false">Presets</a>
			<br>
			Surround:
				<input name="SR1" type="submit" value="Advanced Surround" />
				<input name="SR2" type="submit" value="Auto/Direct" />
				<input name="SR3" type="submit" value="ALC/Standard" />
			<br>
			Media:
				<a href="media.php" onclick="window.open('media.php','Preset','width=800,height=600').focus();return false">Media Functions</a>
		</form>
	</body>
	<?php include 'pioneer.check.php'; ?>
</html>