<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>w8n2 Pythagorean Theorem</title>
        <style type="text/css">
            body {
                background: #eeeeee;
                color: green;
                font-family: Tahoma, Geneva, sans-serif;
                font-size: large;
                padding: 10px;
            }
            h1 {
                font-size: 24pt;
                font-style: normal;
                font-weight: bolder;
                font-variant: small-caps;
            }
        </style>
    </head>
    <body>
    <center>
        <h1>Matt's Pythagorean Theorem Calculator</h1>
	<?php
	$sideA = $_GET['sideA'];
	$sideB = $_GET['sideB'];
	$sideC = sqrt(pow($sideA, 2) + pow($sideB, 2));
	echo "<p>Side A: $sideA";
	echo "<br>Side B: $sideB";
	echo "<br>Side C: $sideC</p>";
	?>
    </body>
</html>