<!DOCTYPE html>
<html>
	<head>
		<title>PHP Doc</title>
	</head>
	<body>
		<?php
			/*$txt = "Hello World!";
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
			}*/
			function msg(){
				echo "Hello World!<br>";
			}
			msg();
			function sobrenome($prnome){
				echo "$prnome Poranga<br>";
			}
			sobrenome(Bianca);
			sobrenome(Elaine);
			sobrenome(Carlos);
			sobrenome(Fatima);

			$cores = array("vermelho","azul","amarelo");
			foreach ($cores as $valor) {
				echo "$valor<br>";
			}
			function soma($x, $y){
				$z = $x + $y;
				return $z;
			}
			echo "5 + 20 = " . soma(5,20) . "<br>";
			echo count($cores) . "<br>";
			$idade = array("Leandro" => "23", "Bianca" => "19","Paulo" => "13");
			echo "Leandro tem " . $idade['Leandro'] . " anos<br>";
		?>

		<form action="<?php echo "$_POST[nome]"?>" method="post">
			Nome: <input type="text" name="nome"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
			<!--Pode ser declarado o método na linha ou de um arquivo .php-->
		</form>
		<form action="validate.php" method="post">
			Nome: <input type="text" name="nome"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
			<!--Pode ser declarado o método na linha ou de um arquivo .php-->
		</form>
		<?php
			echo "Hoje é " . date("d/m/Y") . "<br>";
			echo "Hoje é " . date("d.m.Y") . "<br>";
			echo "Hoje é " . date("d-m-Y") . "<br>";
			echo "Hoje é " . date("l");
		?>
	</body>
</html>