<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
if(isset($_POST["boton_jugar"]))
{
	if($_POST["nombre"]!="Nombre" && $_POST["nombre"]!="Nombre Requerido")
	{
		$_SESSION["nombre"]=$_POST["nombre"];
		$_SESSION["inicio"]=true;
		header("location:quadronica.php");	
	}
}
?>

<body>
<center>
  <h2>Bienvenidos a QUADRONICA</h2>
  <h2>Es un simple pero  muy adictivo juego, el fin del mismo es encontrar rectángulos o cuadros; el  cual los colores de las esquinas deben coincidir. </h2>
  <p>Elaborado por Noel Hernandez V.16982586</p>
  <h3><img src="imagenes/ejemplo.jpg" alt="" width="127" height="129" /> </h3>
  <form id="form1" name="form1" method="post" action="">
    <input type="text" name="nombre" id="nombre" value="<?php 
	if(!isset($_POST["nombre"]))
		echo "Nombre";
	else
		if(isset($_POST["nombre"]) && ($_POST["nombre"]=="Nombre" || $_POST["nombre"]=="Nombre Requerido"))
			echo "Nombre Requerido";
  	?>"/>
    <input type="submit" name="boton_jugar" id="boton_jugar" value="Jugar" />
  </form>
  <p>&nbsp;</p>
</center>
</body>
</html>