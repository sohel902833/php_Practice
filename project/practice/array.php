<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		.maincontent{
			height:500px;
			width:600px;
			margin:0 auto;
			background:#015206;
			padding:50px;
		}
		.header,.fotter{
			height:40px;
			background:#000;
			color:#fff;
			font-size:25px;
			font-family:arial;
			text-align:center;
		}
		.body{
			height:380px;
			background:#fff;
			padding:25px;
			font-size:25px;
			text-color:#000;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<div class="maincontent">
		<div class="header">
		Md Sohrab Hossian Sohel
		</div>
		<div class="body">
		<?php
			$x=array(5,3,9,8,50);
			for($i=0; $i<=4; $i++){
				echo " $x[$i] \n";
			}
		?>
		</div>
		<div class="fotter">
		Exit: From A
		</div>

	</div>
	</body>
</html>