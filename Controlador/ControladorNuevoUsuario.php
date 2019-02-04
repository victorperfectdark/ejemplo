<?php
require '../modelo/UsuarioModelo.php';

$NombreUsuario=$_POST['NombreUsuario'];
$contrasenaUsuario=$_POST['contrasena'];
$emailUsuario=$_POST['email'];
$fechaDeCreacion=$_POST['fechaDeCreacion'];
$estado=$_REQUEST['estado'];


$objPersona=new UsuarioModelo($NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado);
$objPersona->insertarUsuario($NombreUsuario,$contrasenaUsuario,$emailUsuario,$fechaDeCreacion,$estado);
echo '<script language="javascript">alert("GUARDADO EXITOSAMENTE");</script>';
header('Location: ../Vista/listaUsuarioView.php');
?>