<html>
<body>
Hola <?php echo $_POST["nombre"]; ?> </br>
Su DNI es: <?php echo $_POST["DNI"];?></br>
Su e-mail es: <?php echo $_POST["email"];?></br>
</body>
</html>

<?php
$f=fopen ('suscripcion_santander.txt','a');
fwrite ($f,$_POST['nombre']."\r\n");
fwrite ($f,$_POST['DNI']."\r\n");
fwrite ($f,$_POST['email']."\r\n");

fclose ($f)
?>