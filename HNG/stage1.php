<?php 
$time = date("H:i:sa");
$date = date("Y/m/d");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FOOTBALL KICK OFF</title>
<!--All my CSS styling were done here-->
		<style>
			body,html {
				margin: 0px;
				height: 100%;
			}
			.bg {
		background-image: url(football_pitch.jpg);
		height: 100%;
		margin-top: 0;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		padding: 0px;
		}
			p{
				color: #fff;
				font-weight: bolder;
				font-size: 200px;
				padding: 0px;
			}
			.date {
				position: absolute;
				left: 695px;
				top: 480px;
				font-size: 70px;
				color: #ff0000;
			}
			.time {
				position: absolute;
				left: 620px;
				top: 360px;
				font-size: 100px;
				color: blue;
			}
		</style>
	</head>
<!--This is where the Body Actually Starts-->
	<body class="bg">
		<p>KICK OFF TIME:</p>
			<P class="date">
				<?php 
				echo $date ."<br />";
				?>
			</P>

			<p class="time">
				<?php
				echo $time ."<br />";
				?>
			</p>
	</body>
</html>