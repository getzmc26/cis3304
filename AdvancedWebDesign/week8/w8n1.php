
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>w8n1 Interest Calculator</title>
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
        <h1>Matt's Simple Interest Calculator</h1>
	<?php
	$principle = $_GET['principle'];
	$interest_rate = $_GET['rate'] / 100.0;
	$interest = $principle * $interest_rate;
	echo "<p>Principle: $$principle";
	echo "<br>Interest rate: $interest_rate";
	echo "<br>Yearly interest: $$interest</p>";
	echo "<p>We can also use printf to format the text";
	printf("<br><br>Investing $%1.2f at %1.4f%% results in a yearly interest of $%1.2f\n",
		$principle, $interest_rate*100, $interest);
	?>
    </body>
</html>
