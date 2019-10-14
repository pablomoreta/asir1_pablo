<?php
function longitudes ($d,$e,$f) {
	$r=' Escaleno';
		if ($d==$e || $e==$f) {
			$r=' Isosceles';
		if($e==$f and $d==$f)
			$r=' Equilatero';
	}
	return $r;
}
function angulos($a,$b,$c) {
	$r='Acutangulo';
	if ($a>90 || $b>90 || $c>90) {
		$r='Obtusangulo';
	} 
	if($b==90 or $a==90 or $c==90) {
		$r='Rectángulo';
	}
	return $r;
}
function triangulo($l){
	$a=$l[0];
	$b=$l[1];
	$c=$l[2];
	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=round(atan($h/($c-$x))*360/(2*pi()),3);
	$B=round(atan($h/$x)*360/(2*pi()),3);
	$C=round(180-($A+$B),3);
	return [
		'angulos'=>[$A,$B,$C],
		'tipo_lados'=>longitudes($a,$b,$c),
		'tipo_angulos'=>angulos($A,$B,$C),
	];
};
$r=triangulo([1,1,1]);
$r=triangulo([1,1,sqrt(2)]);
echo '<pre>';
print_r($r);
echo '</pre>';