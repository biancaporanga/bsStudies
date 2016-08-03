<!DOCTYPE html>
<html>
<head>
	<title>PHP Doc</title>
</head>
<body>
	<?php
		$txt = "Hello World!";
		$txt2 = "Bianca";
		echo "$txt $txt2";
		$x = 5;
		$y = 10;
		function myTest() {
    		$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		} 
		myTest();
		echo $y;

		print "<h2>PHP is Fun!</h2>";
		print "Hello world!<br>";
		print "I'm about to learn PHP!";
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!";
		$x = 10.365;
		var_dump($x);
		$cars = array("Volvo","BMW","Toyota");
		$i;
		foreach($colors as $value){
			echo "$cars";
		}
		echo strlen("Hello World!");
		echo strrev("Hello World!");
		echo strops("Hello World!");
		//define("msg", "Olá!", true);
		//echo msg;

		$t = date("H");
		if ($t < "20") {
    		echo "Have a good day!";
		} else{
			echo "Have a good night!";
		}
		?>
</body>
</html>