<?php 

	$nome = "Mariana";
	$peso = 63.00;
	$altura = 1.67;


		function imc ($peso, $altura){
			$imc = $peso / ($altura * $altura);

			return $imc;

		}


		$resp = imc ($peso, $altura);

		printf ("Olá! $nome seu peso é $peso kg , sua altura é $altura m e seu IMC é: %.2f <br /> " , $resp);


		if ($resp <= 18.5) {

			echo "Abaixo do peso";

		} elseif ($resp >= 18.6 && $resp <= 25.9) {

			echo "Peso ideal (parabéns)";

		} elseif ($resp >= 25.0 && $resp <= 29.9) {

			echo "Levemente acima do peso";

		} elseif ($resp >= 30.0 &&  $resp <= 34.9) {
			echo "Obesidade grau I (severa)";
		} elseif ($resp >= 35.0 && $resp <= 39.9) {
			echo "Obesidade grau II (severa)";
		} elseif ($resp > 40) {
			echo "obesidade III (mórbida)";
		} ;



 ?>