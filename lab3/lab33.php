<Html>
<head>
<title>Laboratorio 3.3</title>
</head>
<Body>
<?PHP

if(array_key_exists('enviar', $_POST)){
	if ($_REQUEST['Apellido'] != "" )
	{
		echo "El apellido Ingresado es : $_REQUEST[Apellido]";
	}
	else
	{
		echo "Favor coloque el apellido";
	}
	
	echo "<BR>";
	
	if ($_REQUEST['Nombre'] != "" )
	{
	 echo "El nombre Ingresado es : $_REQUEST[Nombre]";
	}
	else
	{
		echo "Favor coloque el nombre";
	}
}
else{
	?>
	<FORM ACTION = "lab33.php" METHOD = "POST">
	Nombre: <INPUT TYPE =  "TEXT" NAME="Nombre"><br>
	Apellido: <INPUT TYPE =  "TEXT" NAME="Apellido"><br>
<INPUT TYPE = "SUBMIT" NAME="enviar" VALUE="Enviar datos">
</FORM>
<?PHP 
}
?>
</BODY>
</HTML>


	
		


