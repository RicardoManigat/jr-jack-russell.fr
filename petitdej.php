<?php
session_start();
ob_start();
?>
<?php
header("Content-Type: text/html; charset=utf-8");
header("Access-Control-Allow-Origin: *"); /* Ne fonction pas sur IE .... */
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-language" content="fr">
	
	<title>P'titdej - Jack Russell</title>
	
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
	
<!-- CSS PROJECT -->
	<style type="text/css" media="screen">
		
		/* ---------------- */
		*, *::before, *::after {
		  box-sizing: inherit;
		}
		html {
		  box-sizing: border-box;
		}
		/* ---------------- */

		/* ---------------- */
		html{
			height: 100%;
		}
		body{
			height: 100%;
			font-family: "Roboto", arial , sans-serif;
		}
		/* ---------------- */
		
		body
		{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}
		
		#test-iframe
		{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;
			width: 100%;
			height: 100%;
		}
		
		#test-iframe iframe
		{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;
			width: 100%;
			height: 100%;
			border: 0px solid black;
		}
	</style>
</head>

<body data-dui-version="1.0">
	<div id="test-iframe">
		<iframe src="http://petitdej.acm-interactif.com"></iframe>
	</div>
</body>
</html>
<?php
ob_end_flush();
?>