<html>
<head>
<title>Santander</title>
 <style>
  #imagen1 {
	width: 15%;
	display:block;
  margin-left: auto;
  margin-right: auto;
		}
		
  #imagen2 {
	  width: 17%;
	  display:block;
  margin-left: auto;
  margin-right: auto;
	
	
		}
		
  #imagen3 {
	  width: 31%;
	  display:block;
  margin-left: auto;
  margin-right: auto;
		}
		
  #tabla1 	{
	border: 2px solid orangered;
	  width: 40%;
	  text-align: center;
	
	
        }
	
	.celdas {
		background-color: orange;
		
	}
	
	.centradotabla {
     text-align:center;

	}		
	
	#parrafo1 {
	font-size: 15px;
	color: red;
	font-face: Comic Sans MS;
	text-align:center;
	font-weight: bold;
}

	#font1 {
	 font-face: cambria;
	 font-size: 15px;
	 color: red;
	 text-align: center;
	 	
}

	#parrafo2{
		text-align: center;
		font-weight: bold;
		text-decoration: underline red;
		
	}


    .formulario2{
	text-align: center;
	font-weight: bold;
		
	}
	#h2 {
		text-align: center;
		color:green;
	}
	
	#h4 {
		text-align: center;
		font-weight: bold;
		text-decoration: underline red;
	}
	
	#h1 {
		text-align: center;
	}
	
	#body{
		background-color: aquamarine;
	}
	
	
  </style>
</head>
<body id="body">
<h1 id="h1">Santander</h1>
<h2 id="h2">(Cantabria)</h2>
<h4 id="h4">Lugares de interés</h4>
<p id="parrafo1">
Palacio De la Magdalena<br>El Sardinero,Playa,Casino y Surf<br>Península De la Magdalena<br>Centro Botín<br>Catedral De Santander<br>Jardines De Piquío<br>Faro De Cabo Mayor<br>Parque y Playa De Mataleñas<br>Playa De la Maruca<br>Muralla Medieval<br>Ruta Del Incendio<br>
</p>
<p id="parrafo2">Localización</p>
<font id="font1">
<p>La ciudad de Santander se sitúa al norte de España bañada por el mar Cantábrico y pertenece a la comunidad autónoma de Cantabria.</p>
</font>
</br>
<img id="imagen1"src="localizacion.png" width="200">
<img id="imagen2" src="santander.jpg" width="230">
<img id="imagen3"src="centro.jpg" width="420">
<table id="tabla1">
  <tr class="centradotabla">
    <td class="celdas">Autonomía</td>
    <td class="celdas">Provincia</td>
  </tr>
<tr class="centradotabla">
	<td>Cantabria</td>
	<td>Santander</td>
</tr>
<tr class="centradotabla">
	<td>Galicia</td>
	<td>La Coruña</td>
</tr>
<tr class="centradotabla">
	<td>Galicia</td>
	<td>Lugo</td>
</tr>
<tr class="centradotabla">
	<td>Asturias</td>
	<td>Gijón</td>
</tr>
<tr class="centradotabla">
	<td>País Vasco</td>
	<td>Bilbao</td>
</tr>
<tr class="centradotabla">
	<td>País Vasco</td>
	<td>San Sebastián</td>
</tr>
</table>
<p id="parrafo2">Formulario De Suscripción:</p>
<form class="formulario2" action="santander.php" method="post">
	Nombre: <input type="text" name="nombre"> </br>
	DNI: <input type="text" name="DNI"> </br>
	Email: <input type="email" name="email"> </br>
	<input type="submit" value="Enviar">
</form>
</body>
</html>