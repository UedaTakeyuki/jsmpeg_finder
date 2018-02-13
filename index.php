<?php
// シェルスクリプト
define("STOP_WEBSOCKET_RELAY", 'pkill -9 -f websocket-relay.sh');
define("START_WEBSOCKET_RELAY", '/var/www/html/jsmpeg_finder/websocket-relay.sh &');
define("STOP_MPEG1PUSH", 'pkill -9 -f mpeg1push.py');
define("START_MPEG1PUSH", 'python /var/www/html/jsmpeg_finder/mpeg1push.py &');

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
	
</head>
<body>
	<canvas id="video-canvas"></canvas>
	<script type="text/javascript" src="jsmpeg/jsmpeg.min.js"></script>
	<script type="text/javascript">
		var canvas = document.getElementById('video-canvas');
		var url = 'ws://'+document.location.hostname+':8082/';
		var player = new JSMpeg.Player(url, {canvas: canvas});
	</script>
</body>
</html>
