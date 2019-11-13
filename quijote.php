<?php

	// Abro el fichero
	$fichero = fopen('quijote.txt', 'r');
	$contadormolino = 0;
	$contadorMolino = 0;
	$contadorMOLINO = 0;
	$contadorTotal = 0;

	while (!feof($fichero)) {

		//Leo el fichero línea por línea
		$linea = fgets($fichero);

		
		if (substr_count($linea, "molino") != 0) {
			$contadormolino = substr_count($linea, "molino");
		}

		if (substr_count($linea, "Molino") != 0) {
			$contadorMolino = substr_count($linea, "Molino");
		}

		if (substr_count($linea, "MOLINO") != 0) {
			$contadorMOLINO = substr_count($linea, "MOLINO");
		}
	

		echo $linea;
	}

	echo "\n" . "La palabra molino aparece en el texto " . $contadormolino . " veces." . "\n";
	echo "\n" . "La palabra Molino aparece en el texto " . $contadorMolino . " veces." . "\n";
	echo "\n" . "La palabra MOLINO aparece en el texto " . $contadorMOLINO . " veces." . "\n";

	$contadorTotal = $contadormolino + $contadorMolino + $contadorMOLINO;
	echo "\n" . "\n" . "La palabra Molino, molino o MOLINO aparece en el texto " . $contadorTotal . " veces." . "\n";

?>