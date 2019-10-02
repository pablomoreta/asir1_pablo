<?php 
$a1=$_GET['a1']; 
$a2=$_GET['a2']; 
$a3=$_GET['a3']; 
$suma=$a1+$a2+$a3; 

if ($suma!=180) { 
       
    echo "<p>No se corresponde a un triángulo</p>"; 
} else {  
    if ($a1==$a2 && $a2==$a3) { 
        
        echo "<p>El triángulo es equilátero</p>"; 
    } else { 
                   if ($a1==$a2 || $a2==$a3 || $a1==$a3) { 
                      
                echo "<p>El triángulo es isósceles</p>"; 
        } else {  
					if ($a1!=a2!=a3){
                echo "<p>El triángulo es escaleno</p>"; 
	     } else {
            }  
        } 
    } 
?>