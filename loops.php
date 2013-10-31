<?php

	$makeup = array("Kryolan", "Mac", "Kiko Milan", "Urban Decay");


		$length = count($makeup);
		for ($i = 0; $i < $length; $i++){
			echo $makeup[$i];
		}


	$employees = array(
		array('name'=>'Priscilla', 'age' => 28, 'position'=> 'UI Design'),
		array('name'=>'Ismael', 'age' => 30, 'position'=> 'Software Developer'),
		array('name'=>'Lucio', 'age' => 40, 'position'=> 'Software Developer')		
		);
	echo '<pre>';
	print_r($employees);







		//$i = 0 
		//while ($i < count($makeup)) {
		//	echo $makeup[$i];
		//}

		?>