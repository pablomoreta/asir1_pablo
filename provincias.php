<?php // Vamos a realizar las consultas del entrenador en php
$conn = new mysqli('localhost','root','','provincias');
$conn->query("SET NAMES utf8;");
$provincias=$conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);
if(0){
	echo '<pre>';
	print_r($provincias);
	echo '</pre>';
}
if(1){ // provincias de Galicia
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}

if(2){//listado de provincias
	foreach($provincias as $p){
		echo $p['autonomia'];
		echo '<br/>';

	}
}

if(3){//suma de 2 y 3
	$a=2;
	$b=3;
	echo $a+$b;
}

if(4){//densidad de población de las provincias
	foreach($poblacion as $p){
		echo $p['poblacion'];
		echo '<br/>';
	}
}
if(5){//listado del nombre de las provincias que tiene cada autonomía
	foreach($provincias as $p){
		echo $p['autonomia'];
		echo '<br/>';
	}
}
if(6){//Caracteres que tiene cada nombre de provincia
	foreach($provincia as $p){
		echo $p[
	}