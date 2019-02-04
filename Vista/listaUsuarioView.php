<html>
<head>
<meta charset='utf-8'>
<title>lista de usuarios</title>
</head>

<?php
     require '../Controlador/ConsultaRegistro.php';
 ?>
<body>
<center><h1>Lista de Usuarios</h1></center>
<br>
<?php
	  $mostrar = new UsuarioControlador();
	  $lista = $mostrar->ConsultaRegistro();
	  echo $lista;
?>
<center><a href="../index.html"><button type="button" class="btn btn-danger">Pagina Principal</button></a>&nbsp;&nbsp;<a href="nuevoUsuarioView.php"><button type="button" class="btn btn-info">Nuevo Registro</button></a>
</center>
</body>
</html>
