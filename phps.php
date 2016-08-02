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
		echo $y; // outputs 15

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
		//for(i=0;i<3;i++){
			echo "$cars";
		//}
	?>
</body>
</html>