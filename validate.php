<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="UTF-8">
	<title>Valida</title>
</head>
<body>
	<?php
		$nome = $email = "";
		$nomeErro = $emailErro = "";
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$nome = teste_input($_POST["nome"]);
			$email = teste_input($_POST["email"]);
			if(empty($_POST["email"]){
			$emailErro = "E-mail necessário.";
			}
			else if(empty($_POST["nome"]){
				$nomeErro = "Nome necessário.";
			}
		}

		teste_input($info){
			$info = trim($info); //Tira os espaços
			$info = stripslashes($info); //Tira as barras
			$info = htmlspecialchars($info); //Tira caracteres próprios do HTML
			return $info;
		}
		echo "$nome";
	?>
</body>
</html>