<?php
	
	class UsuarioControlador{
		
		public function ConsultaRegistro(){
			require '../Modelo/UsuarioModelo.php';
			$objetoCliente=new UsuarioModelo();
			$lista=$objetoCliente->mostrarUsuario();
			echo"<html lang='es'>
			<head>
				<title>Document</title>
				<!-- Required meta tags -->
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
		<!-- Required meta tags -->

	 <!-- Bootstrap CSS y logos con font-awesome-->
	<link rel='stylesheet' href='../Vista/Recursos/css/bootstrap.css' >
	<link rel='stylesheet' href='../Vista/Recursos/css/font-awesome.css' >
    <!-- Bootstrap CSS -->
			</head>
			<body>";
			echo"<center><table class='table table-striped table-bordered table-hover table-condensed'>
			<tr>
			<th>idUsuario</th>
			<th>NombreUsuario</th>
			<th>contrasena</th>
			<th>email</th>
			<th>fechaDeCreacion</th>
			<th>estado</th>
			<th>eliminar</th>
			<th>actualizar</th>
			
			
			</tr>
			";
			for($i=0; $i<count($lista);$i++){	
				$cod=$lista[$i]['idUsuario'];
				echo"<tr bgcolor='#b9b9c8'>
				<td>".$cod."</td>
				<td>".$lista[$i]['NombreUsuario']."</td>
				<td>".$lista[$i]['contrasena']."</td>
				<td>".$lista[$i]['email']."</td>
                <td>".$lista[$i]['fechaDeCreacion']."</td>
				<td>".$lista[$i]['estado']."</td>
				
				
				
				<td><ul class='nav nav-pills'><li class='nav-item'><a class='nav-link active' href='../Vista/eliminarUsuarioView.php?idUsuario=$cod'>eliminar</a></li></ul></td>
				<td><ul class='nav nav-pills'><li class='nav-item'><a class='nav-link active' href='../Vista/actualizarUsuario.php?idUsuario=$cod'>actualizar</a></li></ul></td>
				</tr>";
			}
			echo"</table></center>
			
			<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script languaje='JavaScript' src='../Vista/Recursos/js/jquery-3.2.1.min.js' ></script>
		<script languaje='JavaScript' src='../Vista/Recursos/js/popper.min.js'></script>
		<script languaje='JavaScript' src='../Vista/Recursos/js/bootstrap.js'></script>
			</body></html>";
			
		}
	}
?>