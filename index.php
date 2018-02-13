<?php
// シェルスクリプト
define("STOP_WEBSOCKET_RELAY", 'sudo pkill -9 -f websocket-relay.sh');
define("START_WEBSOCKET_RELAY", 'sudo /var/www/html/jsmpeg_finder/websocket-relay.sh &');
define("STOP_MPEG1PUSH", 'sudo pkill -9 -f mpeg1push.py');
define("START_MPEG1PUSH", 'sudo python /var/www/html/jsmpeg_finder/mpeg1push.py &');

$output=shell_exec(STOP_WEBSOCKET_RELAY);
$output=shell_exec(START_WEBSOCKET_RELAY);
$output=shell_exec(STOP_MPEG1PUSH);
$output=shell_exec(START_MPEG1PUSH);
?>

<!DOCTYPE html>
<html>
<head>
	<title>JSMpeg Stream Client</title>
	<style type="text/css">
		html, body {
			background-color: #111;
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="../jquery.mobile-1.3.2.min.css" />
  <script src="../jquery-1.11.3.min.js "></script>
  <script src="../custom-scripting.js"></script>
  <script src="../jquery.mobile-1.3.2.min.js"></script>

	
</head>
<body>

<div data-role="page">
	  
<div data-role="header" data-position="fixed">
    <h1><?= TITLE ?></h1>
    <a href="../reset.php">戻る</a>
</div>

<div data-role="content" data-theme="c" class="no-cache">

	<canvas id="video-canvas"></canvas>
	<script type="text/javascript" src="jsmpeg/jsmpeg.min.js"></script>
	<script type="text/javascript">
		var canvas = document.getElementById('video-canvas');
		var url = 'ws://'+document.location.hostname+':8082/';
		var player = new JSMpeg.Player(url, {canvas: canvas});
	</script>
</div>
<div data-role="footer" data-position="fixed" data-disable-page-zoom="false">
    <h4>© Atelier UEDA <img src="../favicon.ico"></h4>
</div>
</div> <!-- page -->

</body>
</html>
