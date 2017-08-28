<!DOCTYPE html>
<html>
	<head>
		<link type = "text/css" rel = "stylesheet" href = "style.css"/>
		<title>Trabalho de Redes</title>
	</head>

	<body>

		<h1>Paridade Dupla</h1><br><br>


		<form action = "paridade_dupla.php" method = "post">
			Bits 1: <input type = "text" name = "bits1" size = "1" length = "7"><br>
			Bits 2: <input type = "text" name = "bits2" size = "1" length = "7"><br>
			Bits 3: <input type = "text" name = "bits3" size = "1" length = "7"><br>
			Bits 4: <input type = "text" name = "bits4" size = "1" length = "7"><br>
			<input type = "submit" name = "addSubmit" value = "Enviar">
			<input type = "reset" name = "reset" value = "Limpar"><br><br>
			<input type = "button" value = "Pagina Inicial" onclick = "location. href = 'pagina_inicial.php'"/><br><br>
		</form><br><br>

		<div>
			<?php

				if(!empty($_POST['addSubmit'])) {
					$bits1 = $_POST['bits1'];
					$bits2 = $_POST['bits2'];
					$bits3 = $_POST['bits3'];
					$bits4 = $_POST['bits4'];

					$contador1 = array(0, 0, 0, 0);
					$bp1 = array(0, 0, 0, 0);

					$contador2 = array(0, 0, 0, 0, 0, 0, 0);
					$bp2 = array(0, 0, 0, 0, 0, 0, 0);

					$teste = array(4, 5, 2, 9);

					$ctBP1 = 0;
					$ctBP2 = 0;

					for($i = 0; $i < strlen($bits1); $i++) {
						if($bits1[$i] == 1){
							$contador1[0]++;
						}

						if($bits2[$i] == 1){
							$contador1[1]++;
						}

						if($bits3[$i] == 1){
							$contador1[2]++;
						}

						if($bits4[$i] == 1){
							$contador1[3]++;
						}
					}

					for($i = 0; $i < 8; $i++) {
						if($bits1[$i] == 1){
							$contador2[$i]++;
						} 
						if($bits2[$i] == 1){
							$contador2[$i]++;
						}
						if($bits3[$i] == 1){
							$contador2[$i]++;
						}
						if($bits4[$i] == 1){
							$contador2[$i]++;
						}
					}

					for($i = 0; $i < count($contador1); $i++) {
						if($contador1[$i] % 2 == 0){
							$bp1[$i] = 0;
						}else if($contador1[$i] % 2 == 1){
							$bp1[$i] = 1;
						}
					}

					for($i = 0; $i < count($contador2); $i++) {
						if($contador2[$i] % 2 === 0){
							$bp2[$i] = 0;
						}else if($contador2[$i] % 2 === 1){
							$bp2[$i] = 1;
						}
					}

					for($i = 0; $i < count($bp1); $i++) {
						if($bp1[$i] == 1){
							$ctBP1++;
						}

					}

					for($i = 0; $i < count($bp2); $i++) {
						if($bp2[$i] == 1){
							$ctBP2++;
						}
						
					}

					echo $bits1 . '|' . $bp1[0] . "<br>";
					echo $bits2 . '|' . $bp1[1] . "<br>";
					echo $bits3 . '|' . $bp1[2] . "<br>";
					echo $bits4 . '|' . $bp1[3] . "<br>";
					echo '---------------------' . "<br>";
					echo $bp2[0].$bp2[1].$bp2[2].$bp2[3].$bp2[4].$bp2[5].$bp2[6].'|';
						
				}
			?>
		</div>
	</body>
</html>