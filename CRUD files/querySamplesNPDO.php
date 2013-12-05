<?php

/* Query examples */

SELECT * FROM felines WHERE name = 'Kittie'

// Caso 1
$laQuery = "SELECT * FROM felines WHERE name = 'Kittie'"; //la cadena PHP es con " y las cadenas de sql estan con '

// Caso 2
$laQuery = "SELECT * FROM felines WHERE name = \"Kittie\" "; // escapar las comillas de la sentencia SQL

// Caso 3
$name = 'Kittie';
$laQuery = "SELECT * FROM felines WHERE name = $name "; // uso de magic quotes (no recomendado, apagado en algunos servidores)

// Caso 4
$name = 'Kittie';
$laQuery = "SELECT * FROM felines WHERE name ='" . $name . "'"; // se abren y cierran respectivamente ' de sql y " de cadena php

// Caso 5
$sFelineName = 'Kittie';
$laQuery = $conn->prepare('SELECT * FROM felines WHERE name = :name');
$laQuery->execute(array('name' => $sFelineName)); // PDO prepared statements

/*

PDO::FETCH_ASSOC: Returns an array.
PDO::FETCH_BOTH: Returns an array, indexed by both column-name, and 0-indexed.

PDO::FETCH_OBJ: Returns an anonymous object, with property names that correspond to the columns.


PDO::FETCH_CLASS: Returns a new instance of the specified class.

ORM ----> Object-Relational mapper




*/


?>


