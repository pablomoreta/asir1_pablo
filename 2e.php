<?php
for ($n=1;$n<11;$n++){
	echo '<div style="
		float:left;
		margin:20px;
		background-color:yellow;
		">';
	for($i=1;$i<=10;$i=$i+1)
		echo $n. ' x '.$i. ' = '.($i*$n). '<br>';
	echo '</div>';
}

