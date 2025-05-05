<?php 
	$n = 10; //entrada do número
	$maior = 0;
	$menor = 0;

	
	
	while($n != 0){
		if($n > $maior){
			$maior = $n;
		}elseif($n == 0){
			break;
		}
	}

	echo ("O maior número digitado foi " . $maior);
	

 ?>