<?php
include 'conexion.php';
/**
*  Clase que permite la gestión de los residentes 
*.  
*/
class Residente 
{
	
	protected static $cnx;
	private $response = [];

	private static function getConexion()
	{
	    self::$cnx = Conexion::conect();
	}

	private static function desconectar()
	{
	    self::$cnx = null;
	}


	public  static function postResidente($usuario)
	{
		$query = "INSERT INTO residente (nombre,numero_apto, vehiculo) VALUES (:nombre,:numero_apto,:vehiculo)";
		self::getConexion();

		$resultado = self::$cnx->prepare($query);

		$resultado->bindParam(":nombre", $usuario['nombre']);
		$resultado->bindParam(":numero_apto", $usuario['numero_apto']);
		$resultado->bindParam(":vehiculo", $usuario['vehiculo']);
		

		if ($resultado->execute()) {
		    return true;
		}

		return false;

	}

}

?> 