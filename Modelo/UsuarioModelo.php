<?php
class UsuarioModelo{
private $idUsuario;
private $NombreUsuario;
private $contrasena;
private $email;
private $fechaDeCreacion;
private $estado;


	public function _construct($idUsuario,$NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado){
    $this->idUsuario=$idUsuario;
	$this->NombreUsuario=$NombreUsuario;
	$this->contrasenaUsuario=$contrasenaUsuario;
	$this->emailUsuario=$emailUsuario;
    $this->fechaDeCreacion=$fechaDeCreacion;
	$this->estado=$estado;
	
	}
	/*public function setIdUsuario($idUsuario){
	$this->idUsuario=$idUsuario;
	}
	public function getIdUsuario(){
	return $this->idUsuario;
	}
	public function setNombreUsuario($NombreUsuario){
	$this->NombreUsuario=$NombreUsuario;
	}
	public function getNombreUsuario(){
	return $this->NombreUsuario;
	}
	public function setcontrasenaUsuario($contrasenaUsuario){
	$this->contrasenaUsuario=$contrasenaUsuario;
	}
	public function getcontrasenaUsuario(){
	return $this->contrasenaUsuario;
	}
	public function setEmailUsuario($emailUsuario){
	$this->emailUsuario=$emailUsuario;
	}
	public function getEmailUsuario(){
	return $this->emailUsuario;
	}
	public function setFechaDeCreacion($fechaDeCreacion){
	$this->fechaDeCreacion=$fechaDeCreacion;
	}
	public function getFechaDeCreacion(){
	return $this->fechaDeCreacion;
	}
	public function setEstado($estado){
	$this->estado=$estado;
	}
	public function getEstado(){
	return $this->estado;
	}*/
	
	public function insertarUsuario($NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado){
	require '../Modelo/Conexion.php';
    $sql="INSERT INTO usuario(NombreUsuario,contrasena,email,fechaDeCreacion,estado) values('$NombreUsuario','$contrasena','$email','$fechaDeCreacion','$estado')";	
	$objConexion=new Conexion();
	$conexion=$objConexion->conectar();
	$consultaPreparada=$conexion->prepare($sql);
	$consultaPreparada->bind_param ($NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado);
	$consultaPreparada->execute();
	}
	public function actualizarUsuario($idUsuario,$NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado){
	require '../Modelo/conexion.php';
    $sql="UPDATE usuario SET NombreUsuario='$NombreUsuario',contrasena='$contrasena',email='$email',fechaDeCreacion='$fechaDeCreacion',estado='$estado' WHERE idUsuario='$idUsuario'";
	$objConexion=new Conexion();
	$conexion=$objConexion->conectar();
	$consultaPreparada=$conexion->prepare($sql);
	$consultaPreparada->bind_param ($idUsuario,$NombreUsuario,$contrasena,$email,$fechaDeCreacion,$estado);
	$consultaPreparada->execute();
	}
	
	public function eliminarUsuario($idUsuario){
		require '../Modelo/Conexion.php';
		$sql="UPDATE usuario SET estado='inactivo' WHERE idUsuario='$idUsuario'";
		$objConexion=new Conexion();
		$conexion=$objConexion->conectar();
		$consultaPreparada=$conexion->prepare($sql);
		$consultaPreparada->bind_param($idUsuario);
		$consultaPreparada->execute();
		}
	
	public function mostrarUsuario(){
	require 'conexion.php';
	$sql= 'Select * From usuario';
	$objConexion=new Conexion();
	$conexion=$objConexion->conectar(); 
	$consultaPreparada=$conexion->prepare($sql);
	$consultaPreparada->execute();
	$consultaPreparada->bind_result($idUsuario,$NombreUsuario,$contrasenaUsuario,$emailUsuario,$fechaDeCreacion,$estado);
		while($consultaPreparada->fetch()){
		$this->listado[]=['idUsuario'=>$idUsuario,'NombreUsuario'=>$NombreUsuario,'contrasena'=>$contrasenaUsuario,'email'=>$emailUsuario,'fechaDeCreacion'=>$fechaDeCreacion,'estado'=>$estado];
		}
		return $this->listado;
	}
	
}
 
?>