<?php
echo '<a href="http://192.168.0.77/asir1_adrian/asir1.php">Página de adrian</a>';
echo "<br>";
echo "Pablo Moreta";
echo "<br>";
echo '<a href="http://192.168.0.96/asir1_aaron/asir1.php">Pagina de aaron</a>';
  $archivo="visitas.txt";
  $proceso=fopen($archivo,"a") or die("basura");
  $ip=$_SERVER['REMOTE_ADDR'];
  $hoy = date('Y-m-d H:i:s');
  $datos="La ip es:".$ip." y fecha: ".$hoy."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
?>