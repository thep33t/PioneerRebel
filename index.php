<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SC-79 Controller</title>
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
					<div align="center" class="button3 power">Power</div>
					<div align="center" class="button3 gp">CheckPwr</div>
                                        <div align="center" class="button3"><a href="sleep.php">Sleep Timer</a></div>
                                </div>
                        </table>
                        <br><br><br><br>
                <h1 href="#" class="big">HDZone</h1>
                        <table>
                                <div class="button-holder">
					<div align="center" class="button3 HDZpower">Power</div>
                                        <div align="center" class="button3 HDZgp">CheckPwr</div>
                                        <div align="center" class="button3 HDZATV">Apple TV</div>
                                        <div align="center" class="button3 gHDZin">Get Input</div>
                                        <div align="center" class="button3 ZEC">Input +</div>
                                        <div align="center" class="button3"><a href="inputsHDZ.php">Select Input</a></div>
                                </div>
                        </table>
                        <br><br><br><br><br><br><br><br>
		<h1 href="#" class="big">Volume</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button4 volm5">-5</div>
					<div align="center" class="button4 volm1">-1</div>
					<div align="center" class="button4 volp1">+1</div>
					<div align="center" class="button4 volp5">+5</div>
                                        <div align="center" class="button3 mute">Mute</div>

				</div>
			</table>
			<br><br><br><br>
		<h1 href="#" class="big">Main</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button3 FU">Input +</div>
					<div align="center" class="button3 FD">Input -</div>
					<div align="center" class="button3"><a href="inputs.php">Select Input</a></div>
				</div>
			</table>
			<br><br><br><br>
		<div class="statusdiv"></div>
		<script src="js/parallax.js"></script>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/exec.js"></script>
	</body>
</html>
