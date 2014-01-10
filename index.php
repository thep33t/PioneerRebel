<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>VSX-822-K Controller</title>
		<link rel="stylesheet" href="css/style.css">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	<body>
		<ul id="scene"
			class="scene unselectable"
			data-friction-x="0.1"
			data-friction-y="0.1"
			data-scalar-x="25"
			data-scalar-y="15">
			<li class="layer" data-depth="0.10"><img src="img/background.jpg"></li>
		</ul>
		<h1 href="#" class="big">Power</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button2 power">Power</div>
					<div align="center" class="button2 gp">CheckPwr</div>
				</div>
			</table>
			<br><br><br><br>
		<h1 href="#" class="big">Volume</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button4 volm5">-5</div>
					<div align="center" class="button4 volm1">-1</div>
					<div align="center" class="button4 volp1">+1</div>
					<div align="center" class="button4 volp5">+5</div>
				</div>
			</table>
			<br><br><br><br>
		<h1 href="#" class="big">Input</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button3 FU">Input +</div>
					<div align="center" class="button3 FD">Input -</div>
					<div align="center" class="button3"><a href="inputs.php">Inputs</a></div>
				</div>
			</table>
			<br><br><br><br>
		<h1 href="#" class="big">Surround</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button3 sr1">Surr</div>
					<div align="center" class="button3 sr2">Auto</div>
					<div align="center" class="button3 sr3">ALC</div>
				</div>
			</table>
			<br><br><br><br>
		<h1 href="#" class="big">Other</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button3 mute">Mute</div>
					<div align="center" class="button3"><a href="presets.php">FM</a></div>
					<div align="center" class="button3"><a href="media.php">Media</a></div>
				</div>
			</table>
		<div class="statusdiv"></div>
		<script src="js/parallax.js"></script>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/exec.js"></script>
	</body>
</html>