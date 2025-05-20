<?php 

	$grao = 1;
	$cont = 2;
	$graosoma = 1;

	while($cont <= 64){
		$grao = $grao * 2;
		$graosoma = $grao + $graosoma;
		$cont++;
	}

	echo "O monge esperava receber: " . $graosoma;

 ?>