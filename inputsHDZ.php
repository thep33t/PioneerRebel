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
                <div align="center" class="button3"><a href="index.php">Back</a></div><br><br><br><br>
		<h1 href="#" class="big">HDZ Inputs</h1>
			<table>
				<div class="button-holder">
					<div align="center" class="button3 HDZATV">Apple TV</div>
                                        <div align="center" class="button3 HDZHTPC">MediaCenter PC</div>
                                        <div align="center" class="button3 HDZBLURAY">Bluray</div>
                                        <div align="center" class="button3 HDZCOMP">COMP</div>
                                        <div align="center" class="button3 HDZXBONE">Xbox One</div>
                                        <div align="center" class="button3 HDZHDMI5">HDMI5/MHL</div>
                                        <div align="center" class="button3 HDZBD">Input BD</div>
                                        <div align="center" class="button3 gHDZin">Get HDZ Input</div>
                                        <div align="center" class="button3 ZEC">HDZ Input +</div>
                                        <div align="center" class="button3 ZEB">HDZ Input -</div>
                                </div>
                        </table>
		<div class="statusdiv"></div>
		<script src="js/parallax.js"></script>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/exec.js"></script>
	</body>
</html>
