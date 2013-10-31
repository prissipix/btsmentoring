<?php

//Haystack Function 
  $first = 'Priscilla';
  $partial = 'Pris';
  $pos = strpos($first, $partial);

if ($pos === false) {
    echo "The string '$partial' was not found in the string '$first'";
} else {
    echo "The string '$partial' was found in the string '$first'";
    echo " and exists at position $pos";
}

$numbers=array(1, 2, 3, 4, 5, 6, 7);

	rsort ($numbers);
	echo join (", ", $numbers);




?>  