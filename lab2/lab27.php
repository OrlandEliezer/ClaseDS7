<!DOCTYPE html> 
<html>
<head>
   <meta charset="UTF-8">
   <title></title>
   </head>
   <body>
     <?php
	 $posicion = "arriba";
	 
	 switch($posicion) {
		 case "arriba": //Bloque 1
		 echo "la variable contiene";
		 echo " el valor arriba";
		 break;
		 case "abajo": //Bloque 2
		 echo "la variable contiene";
		 echo " el valor abajo";
		 break;
		 default: //Bloque 3
		 echo "la variable contiene otro valor";
		 echo " distinto de arriba y abajo";
	 }
	 ?>
	 </body>
	 </html>
		 