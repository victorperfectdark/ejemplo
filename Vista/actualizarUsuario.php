<?php
$codigo=$_REQUEST['idUsuario'];
 require '../Modelo/conexion.php';
    $objConexion=new Conexion();
	$conexion=$objConexion->conectar();
	

$guardar=mysqli_query($conexion,"SELECT * FROM usuario WHERE idUsuario=$codigo");
$data=$guardar;
?>

<html>
<head>
	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Required meta tags -->

	 <!-- Bootstrap CSS y logos con font-awesome-->
	<link rel="stylesheet" href="Recursos/css/bootstrap.css" >
	<link rel="stylesheet" href="Recursos/css/font-awesome.css" >
    <!-- Bootstrap CSS -->
<body bgcolor='#CACAD9'>
<center><h1>Datos a Actualizar</h1></center>
<form action="../Controlador/ControladorActualizarUsuario.php?idUsuario=$codigo" method="post">
<center>
	
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-condensed">
<?php foreach ($data as $fila){ ?>

<tr><td>idUsuario</td> 
<td><input type="text"  name="idUsuario" readonly="readonly" value="<?php echo $codigo; ?>"/></td></tr>
<tr><tr><td>NombreUsuario</td>    
<td><input type="text" name="NombreUsuario" value="<?php echo $fila["NombreUsuario"]; ?>"/></td></tr>
<tr><tr><td>contrasena</td>  
<td><input type="text" name="contrasena" value="<?php echo $fila["contrasena"]; ?>"/></td></tr>
<tr><tr><td>email</td>
<td><input type="text" name="email" value="<?php echo $fila["email"]; ?>"/></td></tr>
<tr><tr><td>fechaDeCreacion</td>
<td><input type="text" name="fechaDeCreacion" value="<?php echo $fila["fechaDeCreacion"]; ?>" disabled/></td></tr>
<tr><tr><td>estado</td>    
<td><input type="text" name="estado" value="<?php echo $fila["estado"]; ?>"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="btn btn-info" value="actualizar"/>
	<a href="listaUsuarioView.php"><button type="button" class="btn btn-info">Cancelar</button></a>
</td></tr>

<?php } ?>
</table></div></center><br>
<center>
</center>
</form>
<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script languaje="JavaScript" src="Recursos/js/jquery-3.2.1.min.js" ></script>
		<script languaje="JavaScript" src="Recursos/js/popper.min.js"></script>
		<script languaje="JavaScript" src="Recursos/js/bootstrap.js"></script>

</body>
</html>

