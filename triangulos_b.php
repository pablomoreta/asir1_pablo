<?php
function angulos ($a,$b,$c) {
	$r='Rectangulo';
		if ($a>90 || $b>90 || $c>90) {
			$r='Obtusangulo';
		} 
		if($b<90 and $a<90) {
			$r='Acutangulo';
	}
	return $r;
}
echo angulos(120,20,40)."<br>";
echo angulos(60,60,60)."<br>";
echo angulos(90,30,60)."<br>";
?>