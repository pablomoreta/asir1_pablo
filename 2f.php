<?php
$a = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'octubre',
	'Noviembre',
	'Diciembre',
	
];
function mes($n){
$a = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'octubre',
	'Noviembre',
	'Diciembre',
	
];
return $a($n-1);
};
echo mes(1).'<br>';
echo mes(2).'<br>';
echo mes(3).'<br>';
echo mes(4).'<br>';


for($i=0;$i<12;$i++)
echo $a[$i];
foreach($a as $mes)
echo($mes);