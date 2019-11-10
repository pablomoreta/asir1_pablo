<?php
function mes ($n){
	$a= [[
		
		'mes'=>'Enero',
		'dias'=>'31',
		'estacion'=>'Invierno'
	],
	[
		'mes'=>'Febrero',
		'dias'=>'28',
		'estacion'=>'Invierno'
	],
	[	
		'mes'=>'Marzo',
		'dias'=>'31',
		'estacion'=>'Primavera'
	],
	[	
		'mes'=>'Abril',
		'dias'=>'30',
		'estacion'=>'Primavera'
	],
	[	
		'mes'=>'Mayo',
		'dias'=>'31',
		'estacion'=>'Primavera'
	],
	[
		'mes'=>'Junio',
		'dias'=>'30',
		'estacion'=>'Verano'
	],
	[	
		'mes'=>'Julio',
		'dias'=>'31',
		'estacion'=>'Verano'
	],
	[
		'mes'=>'Agosto',
		'dias'=>'31',
		'estacion'=>'Verano'
	],
	[	
		'mes'=>'Septiembre',
		'dias'=>'30',
		'estacion'=>'Otoño'
	],
	[	
		'mes'=>'Octubre',
		'dias'=>'31',
		'estacion'=>'Otoño'
	],
	[
		'mes'=>'Noviembre',
		'dias'=>'30',
		'estacion'=>'Otoño'
	],
	[	
		'mes'=>'Diciembre',
		'dias'=>'31',
		'estacion'=>'Invierno'
	],
	];
	$r=null;
	$r=$r.$a[$n-1]['mes']."<br>";
	$r=$r.$a[$n-1]['dias']."<br>";
	$r=$r.$a[$n-1]['estacion']."<br>";
	return $r;
}
echo mes(1)."<br>";
echo mes(5)."<br>";
echo mes(8)."<br>";
echo mes(12)."<br>";
?>