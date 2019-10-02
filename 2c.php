<?php
function calcula($a,$b){
	$r=null;
	$r=$r. "Suma:".$a."+".$b."=".($a+$b).'</br>';
	$r=$r."Resta:".$a."-".$b."=".($a-$b).'</br>';
	$r=$r. "Multiplicar:".$a."*".$b."=".($a*$b).'</br>';
	$r=$r. "Division:".$b."/".$a."=".($b/$a).'</br>';
	return $r;
}
$r=calcula(7,2);
echo $r;
$r= calcula(4,6);
echo $r;
?>