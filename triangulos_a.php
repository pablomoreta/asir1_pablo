<?php
function tipo($a, $b, $c) {
			$r='Escaleno';
				if ($a==$b || $a==$c) {
			$r='Isosceles';
				if($b==$c)
			$r='Equilatero';
	}
	return $r;
}
echo tipo(4,4,4)."<br>";
echo tipo(1,1,4)."<br>";
echo tipo(1,2,3)."<br>";
?>