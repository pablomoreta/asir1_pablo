  
<?php
function todos ($a,$b,$c,$d,$e,$f) {
	return angulos ($a,$b,$c). ' y '.longitudes($d,$e,$f);
	
}
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
function longitudes ($d,$e,$f) {
	$r=' Escaleno';
		if ($d==$e || $e==$f) {
			$r=' Isosceles';
		if($e==$f and $d==$f)
			$r=' Equilatero';
	}
	return $r;
}


echo todos (90,70,20,1,1,2).'¿rectangulo-isosceles?'."<br>"."<br>";
echo todos (150,10,20,2,2,2).'¿obstusangulo-equilatero?'."<br>"."<br>";
echo todos (60,60,60,1,2,3).'¿acutangulo-escaleno?'."<br>"."<br>";
echo todos (40,40,100,3,3,3).'¿acutangulo-equilatero?'."<br>"."<br>";

?>