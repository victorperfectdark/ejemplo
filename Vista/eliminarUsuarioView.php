<?php
$codigo=$_REQUEST['idUsuario'];

?>
<html>
<head>
<title>Eliminar</title>
    <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Required meta tags -->

	 <!-- Bootstrap CSS y logos con font-awesome-->
	<link rel="stylesheet" href="Recursos/css/bootstrap.css" >
	<link rel="stylesheet" href="Recursos/css/font-awesome.css" >
    <!-- Bootstrap CSS -->
</head>

<body class="bg-secondary">
<form action="../Controlador/ControladorEliminarUsuario.php" method="post" name="form1" id="form1">

<ul class="nav nav-pills"><li class="nav-item"><a class="nav-link active" href="listaUsuarioView.php"><i aria-hidden="true" class="fa fa-arrow-left fa-2x" style="color:#e7f1fb">Cancelar</i></a></li></ul>

<center>
<table><tr><td>
<input type='hidden' name='idUsuario' readonly='readonly' value="<?php echo $codigo ?>">
<center>
<div class="alert alert-primary align-items-center" role="alert" >
 Esta seguro que desea Eliminar este Registro
 <br><br><input type="submit" class="btn btn-danger" name="eliminar" value="eliminar"/>
</div>
</form>
</center>
</td></tr></table>
</center>

<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script languaje="JavaScript" src="Recursos/js/jquery-3.2.1.min.js" ></script>
		<script languaje="JavaScript" src="Recursos/js/popper.min.js"></script>
		<script languaje="JavaScript" src="Recursos/js/bootstrap.js"></script>
 
</body>
</html>


