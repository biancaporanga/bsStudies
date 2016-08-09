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
			$carros = array("Volvo","BMW","Toyota");
			$i;
			foreach($colors as $value){
				echo "$carros";
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
			<!--Pode ser declarado o método na lin ou de um arquivo .php-->
		</form>
		<form action="validate.php" method="post">
			Nome: <input type="text" name="nome"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
			<!--Pode ser declarado o método na lin ou de um arquivo .php-->
		</form>
		<?php
			echo "Hoje é " . date("d/m/Y") . "<br>";
			echo "Hoje é " . date("d.m.Y") . "<br>";
			echo "Hoje é " . date("d-m-Y") . "<br>";
			echo "Hoje é " . date("l<br><br>");

		/*$carros = array(
			array("Volvo",22,18);
			array("BMW",15,13);
			array("Saab",5,2);
			array("Land Rover",17,15);
		)
		for ($lin = 0; $lin < 4; $lin++) {
	  		echo "<p><b>Número de linhas $lin</b></p>";
	  		echo "<ul>";
	  		for ($col = 0; $col < 3; $col++) {
	    		echo "<li>".$carros[$lin][$col]."</li>";
	  		}
	  		echo "</ul>";
		}*/
		$myfile = fopen("oi.txt", "r") or die("Não foi possível abrir o arquivo.");
		echo fread($myfile,filesize("oi.txt"));
		fclose($myfile);

		$myfile = fopen("newfile.txt", "w") or die("Não foi possível abrir o arquivo.");
		$txt = "Mickey Mouse\n";
		fwrite($myfile, $txt);
		$txt = "Minnie Mouse\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		?>
		<br><br>
		<form action="
		<?php
			$target_dir = "/uploads";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if(isset($_POST["submit"])){
				$check = getimagesize($_POST["fileToUpload"]["name"]);
				if(check !== false){
					echo "O arquivo é uma imagem - " . $check["mime"] . ".";
					$uploadOk = 1;
				}
				else{
					echo "O arquivo não é uma imagem";
					$uploadOk = 0;
				}
			}
			if (file_exists($target_file)) {
				echo "Desculpe, arquivo já existente :(";
				$uploadOk= 0;
			}
			if ($_FILES["fileToUpload"]["size"] > 500000) {
	    		echo "Desculpe, seu arquivo é muito grande :O";
	    		$uploadOk = 0;
    		}
    		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
				echo "Desculpe, apenas JPG, JPEG, PNG e GIF são permitidos.";
				$uploadOk = 0;
			}
			if ($uploadOk == 0) {
    			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
    			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        			echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi carregado.";
    			} else {
    			    echo "Desculpe, ocorreu um erro.";
    			}
			}
		?>
		" method="post" enctype="multipart/form-data">
	    	<label>Selecione a imagem:<br></label>
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <input type="submit" value="Enviar" name="submit">
		</form>
	</body>
</html>