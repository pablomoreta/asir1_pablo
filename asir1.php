<style type="text/css">
  body {
    color: purple;
    background-color: <?php $color = substr(md5(time()), 0, 6); echo "#"; echo $color;?> }
  </style>
<?php
$color = substr(md5(time()), 0, 6);
echo '<a href="http://192.168.0.96/asir1_aaron/asir1.php">Pagina de aaron</a>';
echo "<br>";

echo "<br>";
echo '<a href="http://192.168.0.77/asir1_adrian/asir1.php">Página de adrian</a>';
  $archivo="visitas.txt";
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $proceso=fopen($archivo,"a") or die("basura");
  $ip=$_SERVER['REMOTE_ADDR'];
  $hoy = date('Y-m-d H:i:s');
  $datos="La ip es:".$ip." y fecha: ".$hoy." con Navegador".$user_agent."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
  ?>
