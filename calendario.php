<?php
function mes ($n){
	$mes= [[
		
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
	return $mes[$n-1];
}
echo mes (2)['mes']."<br>";
echo mes (12)['dias']."<br>";
echo mes (4)['estacion']."<br>";
?>