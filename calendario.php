<?php
function Meses ($p){
	$b= [[
		
		'Meses'=>'Enero',
		'Dias'=>'31',
		'Estaciones'=>'Invierno'
		
	],
	[
		'Meses'=>'Febrero',
		'Dias'=>'28',
		'Estaciones'=>'Invierno'
	],
	[	
		'Meses'=>'Marzo',
		'Dias'=>'31',
		'Estaciones'=>'Primavera'
		
		
	],
	[	
		'Meses'=>'Abril',
		'Dias'=>'30',
		'Estaciones'=>'Primavera'
	],
	[	
	
		'Meses'=>'Mayo',
		'Dias'=>'31',
		'Estaciones'=>'Primavera'
	],
	[
	
		'Meses'=>'Junio',
		'Dias'=>'30',
		'Estaciones'=>'Verano'
	],
	[	
		'Meses'
		=>'Julio',
		'Dias'=>'31',
		'Estaciones'=>'Verano'
	],
	[
	
	
		'Meses'=>'Agosto',
		'Dias'=>'31',
		'Estaciones'=>'Verano'
	],
	[	
	
		'Meses'=>'Septiembre',
		'Dias'=>'30',
		'Estaciones'=>'Otoño'
	],
	[	
	
		'Meses'=>'Octubre',
		'Dias'=>'31',
		'Estaciones'=>'Otoño'
	],
	[
	
		'Meses'=>'Noviembre',
		'Dias'=>'30',
		'Estaciones'=>'Otoño'
	],
	[	
	
		'Meses'=>'Diciembre',
		'Dias'=>'31',
		'Estaciones'=>'Invierno'
	],
	];
	$r=null;
	$r=$r.$b[$p-1]['Meses']."<br>";
	$r=$r.$b[$p-1]['Dias']."<br>";
	$r=$r.$b[$p-1]['Estaciones']."<br>";
	return $r;
}
echo Meses(1).'¿Enero?<br>';
echo Meses(2).'¿Febrero?<br>';
echo Meses(3).'¿Marzo?<br>';
echo Meses(4).'¿Abril?<br>';
echo Meses(5).'¿Mayo?<br>';
echo Meses(6).'¿Junio?<br>';
echo Meses(7).'¿Julio?<br>';
echo Meses(8).'¿Agosto?<br>';
echo Meses(9).'¿Septiembre?<br>';
echo Meses(10).'¿Octubre?<br>';
echo Meses(11).'¿Noviembre?<br>';
echo Meses(12).'¿Diciembre?<br>';
?>