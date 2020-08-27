<?php
	$u = $_POST["ultimo"];
	$s = 0;
	$t = 1;
	
	echo "Projeto sequencia de fibonacci da sequencia do 1 a sequencia do $u eh:
	</br>";
	
	echo "0 </br> 1 </br>";
		  
	for ($i=1; $i<=$u-2; i++){
		$t=$s + $t;
		$s=$t - $s;
		echo "$t. "</br>";
	}
?>