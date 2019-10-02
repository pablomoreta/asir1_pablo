<?php
function notas ($a){
	if($a<5)
		$r='Pendiente';
	if($a>5)
		$r ='Aprobado';

	if($a>7)
		$r ='Notable';
	if($a>8.5)
		$r ='Sobresaliente';
		return $r;
}
echo notas(5.5)."<br>";
echo notas(8.4)."<br>";
echo notas(8.6)."<br>";
echo notas(4)."<br>";


?>