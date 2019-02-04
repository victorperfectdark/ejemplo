
<?php
require '../modelo/UsuarioModelo.php';

$idUsuario=$_POST['idUsuario'];

$objPersona=new UsuarioModelo($idUsuario);
$objPersona->eliminarUsuario($idUsuario);
echo '<script language="javascript">alert("ELIMINADO EXITOSAMENTE");</script>';
header('Location: ../Vista/listaUsuarioView.php');
?>