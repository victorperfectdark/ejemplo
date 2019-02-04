<?php
require '../modelo/UsuarioModelo.php';

$idUsuario=$_REQUEST['idUsuario'];
$NombreUsuario=$_POST['NombreUsuario'];
$contrasena=$_POST['contrasena'];
$email=$_POST['email'];
$fechaDeCreacion=$_POST['fechaDeCreacion'];
$estado=$_POST['estado'];

$objPersona=new UsuarioModelo($idUsuario,$NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado);
$objPersona->actualizarUsuario($idUsuario,$NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado);
echo '<script language="javascript">alert("ACTUALIZADO EXITOSAMENTE");</script>';
header('Location: ../Vista/listaUsuarioView.php');
?>