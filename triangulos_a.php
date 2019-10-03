<?php
function tipo($a, $b, $c) {
	$r='escaleno';
		if ($a==$b || $a==$c) {
			$r='isosceles';
		if($b==$c)
			$r='equilatero';
	}
	return $r;
}
echo tipo(1,1,1)."<br>";
echo tipo(1,1,6)."<br>";
echo tipo(2,3,4)."<br>";
?>