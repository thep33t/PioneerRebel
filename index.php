<!DOCTYPE html>
<?php 
$ip = '192.168.2.4';
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
				<input name="PO" type="submit" value="Power On" />
				<input name="PF" type="submit" value="Power Off" />
				<input name="PT" type="submit" value="Power Toggle" />
				<input name="GP" type="submit" value="Get Power" />
			<br>
			Function:
				<input name="FU" type="submit" value="Function Next" />
				<input name="FD" type="submit" value="Function Last" />
				<input name="GF" type="submit" value="Get Function" />
			<a href="">Open Extended Menu</a>
			<br>
			Volume:
				<input name="VU" type="submit" value="+1" />
				<input name="VD" type="submit" value="-1" />
				<input name="VU5" type="submit" value="+5" />
				<input name="VD5" type="submit" value="-5" />
				<input name="GV" type="submit" value="Get Volume" />
			<br>
			Tuner:
				<input name="tune" type="submit" value="Tune" />
		</form>
	</body>
	<?php include 'pioneer.check.php'; ?>
</html>