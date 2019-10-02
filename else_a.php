<?php
function notas ($a){
	if($a>5)
		$r ='Apto';
	else
		$r ='No Apto';
		return $r;
}
echo notas(1)."<br>";
echo notas(9)."<br>";
?>