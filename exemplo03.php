<?php 
	$data = '06 de março de 2024'; //string
	$salario = 850.00;
	$cargo = "Estagiario";
	$idade = 21;
	$resultado = true;

		if ($resultado) {
			echo('Verdadeiro');
		}


		echo("<br /> Arquivo criado em $data"); 

		printf("<br/>salario minimo: R$ %.2f <br />", $salario);

		$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario * 2);

		echo($texto);


 ?>