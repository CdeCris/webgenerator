<?php 
	define(HOST, "localhost")
	define(USERNAME, "adm_webgenerator")
	define(PASSWORD, "webgenerator2024")
	define(NOMBREDB, "webgenerator")
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="interface.css">
</head>
<body>
	<div id="controls">
		<div id="temp">
			<div id="temp-int">00</div>
			<div id="temp-col">
				<div id="temp-unit">ºC</div>
				<div id="temp-dec">.00</div>
			</div>
		</div>
		<div id="humedad">
			<div id="humedad-int">00</div>
			<div id="humedad-col">
				<div id="humedad-unit">%</div>
				<div id="humedad-dec">.00</div>
			</div>
		</div>
		<div id="viento">
			<div id="viento-int">00</div>
			<div id="viento-col">
				<div id="viento-unit">Km/H</div>
				<div id="viento-dec">.00</div>
			</div>
		</div>
		<div id="incendio">
			<div id="incendio-int">00</div>
			<div id="incendio-col">
				<div id="incendio-unit">%</div>
				<div id="incendio-dec">.00</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="refresh.js"></script>
</body>
</html>