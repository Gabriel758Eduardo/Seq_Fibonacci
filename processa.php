<?php
	$u = $_POST["ultimo"];
	$s = 0;
	$t = 1;
	
	echo "Sequência de Fibonacci da condição de 1 a condição de $u é:
	</br>";
	
	echo "0 </br>
		  1 </br>";
		  
	for($i=1; $i<=$u-2; $i++) {
		$t = $s + $t;
		$s = $t - $s;
		echo $t. "</br>";
	}
?>