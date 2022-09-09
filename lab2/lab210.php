<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
  <?php
    $persona = array (
	array( "nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
	array( "nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
	array( "nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
	array( "nombre" => "Rubén", "estatura" => 182, "sexo" => "M")
);

echo "<b>DATOS SOBRE EL PERSONAL<b><br><hr>";

$numPersonas = count($persona);

for ($i = 0; $i <$numPersonas; $i++) {	
   echo "Nombre: <b>", $persona[$i]['nombre'], "</br><br>";
   echo "Estatura: <b>", $persona[$i]['estatura'], "cm</br><br>";
   echo "Sexo: <b>", $persona[$i]['sexo'], "</br><br><hr>";
}
?>
</body>
</html>