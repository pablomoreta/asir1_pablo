<?php
function calcula($a,$b){
	$r=null;
	$r=$r.($a+$b)."<br>";
	$r=$r.($a-$b)."<br>";
	$r=$r.($a*$b)."<br>";
	if($b!=0) $r=$r.($a/$b)."<br>";
	return $r;
}
echo calcula(7,0).calcula(3,9);