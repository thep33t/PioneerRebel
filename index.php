<!DOCTYPE html>
<?php 
include 'config.php';
include 'pioneer.lib.php'; ?>
<html>
  <head>
    <title>Pioneer VSX-822-K Control</title>
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
  </head>
  <body>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
		<form method="post" action="index.php">
			<table>
				<tr>
					<td><input id="power" name="PT" type="submit" value="" /></td>
					<td><input id="inputnext" name="FU" type="submit" value="" /></td>
					<td><input id="inputlast" name="FD" type="submit" value="" /></td>
					<td><div id="inputmenu" onclick="window.open('functions.php','Function','width=800,height=600').focus();return false"></div></td>
				</tr>
				<tr>
					<td><input id="volumeless5" name="VD5" type="submit" value="" /></td>
					<td><input id="volumeless1" name="VD" type="submit" value="" /></td>
					<td><input id="volumemore1" name="VU" type="submit" value="" /></td>
					<td><input id="volumemore5" name="VU5" type="submit" value="" /></td>
				</tr>
				<tr>
					<td><input id="mute" name="MT" type="submit" value="" /></td>
					<td><input id="getvolume" name="GV" type="submit" value="" /></td>
					<td><input id="getinput" name="GP" type="submit" value="" /></td>
					<td><div id="presets" onclick="window.open('presets.php','Preset','width=800,height=600').focus();return false"></div></td>
				</tr>
				<tr>
					<td><input id="surround1" name="SR1" type="submit" value="" /></td>
					<td><input id="surround2" name="SR2" type="submit" value="" /></td>
					<td><input id="surround3" name="SR3" type="submit" value="" /></td>
					<td><div id="media" onclick="window.open('media.php','Preset','width=800,height=600').focus();return false"></div></td>
				</tr>
		</form>
	</body>
	<script>
		window.setTimeout(FadeOut,2000)
		function FadeOut() {document.getElementById('status').style.visibility = 'hidden';}
	</script>
	<?php include 'pioneer.check.php'; ?>
</html>