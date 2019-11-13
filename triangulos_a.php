<?php
function tipo($a, $b, $c) {
			$r='Escaleno';
				if ($a==$b || $a==$c ||$b==$c) {
			$r='Isosceles';
				if($a==$c and $b==$c)
			$r='Equilatero';
	}
	return $r;
}
echo tipo(1,1,1)."¿equilátero?<br>";
echo tipo(1,2,2)."¿isósceles?<br>";
echo tipo(1,2,3)."¿escaleno?<br>";
echo tipo(2,2,1)."¿isosceles?<br>";
echo tipo (4,4,1)."¿isosceles?<br>";
echo tipo(2,3,1)."¿escaleno?<br>";
echo tipo(2,1,2)."¿isosceles?<br>";
echo tipo(3,4,5)."¿escaleno?<br>";
echo tipo(2,2,2)."¿equilatero?<br>";
echo tipo(1,1,2)."¿isosceles?<br>";
echo tipo(2,2,3)."¿isosceles?<br>";
echo tipo(3,2,2)."¿isosceles?<br>";
echo tipo(2,3,2)."¿isosceles?<br>";

?>