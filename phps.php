<!DOCTYPE html>
<html>
<head>
	<title>PHP Doc</title>
</head>
<body>
	<?php
		$x = 5;
		$y = 10;
		function myTeste{
			$txt = "Hello World!";
			$txt2 = "Bianca";
			echo "$txt $txt2";
		}
		function myTest() {
   			$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		myTest();
		echo "$y"; // outputs 15
	?>
</body>
</html>