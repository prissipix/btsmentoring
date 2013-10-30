<?php

	$entero = 7;
	$cadena = "foo bar";
	$flotante = 3.141516;
	$boleano = true;
 
 	echo is_int($entero);
 	echo is_string($cadena);
 	echo is_null($entero);
 	echo is_object($entero);

 	echo "<$entero> es entero: " . is_int($entero);
 	echo "<$cadena> es cadena" . is_string($cadena);

 	$intA = 7;
	$intB = 3;
	$fakeInt = '3';

	echo "the sum is" . $intA + $intB;

	$fakeInt2 = '2b';
	echo "PI: " . intval(3.1416);

	?>