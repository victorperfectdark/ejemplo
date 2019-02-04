
<!doctype html>
<html lang="en">
<html lang="en">
<head>
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
	<center><h1>ingrese nuevo usuario</h1></center>
<form action="../Controlador/ControladorNuevoUsuario.php" method="post" name="form1" name="form1">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="NombreUsuario">NombreUsuario</label>
      <input type="text" class="form-control" name="NombreUsuario" placeholder="NombreUsuario" required/>
    </div>
    <div class="form-group col-md-6">
      <label for="contrasena">contrasena</label>
      <input type="password" class="form-control" name="contrasena" placeholder="contrasena" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" name="email" placeholder="email" required/>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fechaDeCreacion">fechaDeCreacion</label>
      <input type="date"  class="form-control " name="fechaDeCreacion" required/>
    </div>
    <div class="form-group col-md-6">
      <label for="estado">estado</label>
       <input type="text" class="form-control " name="estado" value="activo">

    </div>
  </div>
 <center> <input type="submit" class="btn btn-info" name="guardar" value="Guardar"/>
<a href="listaUsuarioView.php"><button class="btn btn-info">Cancelar</button></a></center>
</form>
	
</body>
<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script languaje="JavaScript" src="Recursos/js/jquery-3.2.1.min.js" ></script>
		<script languaje="JavaScript" src="Recursos/js/popper.min.js"></script>
		<script languaje="JavaScript" src="Recursos/js/bootstrap.js"></script>

</html>

