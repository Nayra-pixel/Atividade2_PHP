<?php 

	$grao = 1;
	$cont = 0;
	$graocasa = 0;

	while($cont <= 64){

		$grao = $grao + ($grao * 2);
		$cont++;

	}

	echo "O monge esperava receber: " . $grao;
 ?>