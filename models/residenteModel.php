<?php
include_once 'conexion.php';
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

		try{

            $query = "INSERT INTO `residente`( `nombre`, `numero_apto`, `vehiculo`) VALUES (:nombre,:numero_apto,:vehiculo)";

            self::getConexion();

            $resultado = self::$cnx->prepare($query);

            $resultado->bindParam(":nombre", $usuario['nombre']);
            $resultado->bindParam(":numero_apto", $usuario['numero_apto']);
            $resultado->bindParam(":vehiculo", $usuario['vehiculo']);


            ($resultado->execute()) ? $response = true : $response = false;

            return $response;

		}catch (PDOException $e){

            $response  = ["status" => "false", "err"=> $e];
			return $e;

		}




	}

	public static function getResidente()
	{

		$res = "SELECT * FROM `residente` ORDER BY `id` DESC LIMIT 1";

        self::getConexion();

        $response = self::$cnx->prepare($res);

        $response->execute();

        return $response;
	}

	public static function getAllResidentes(){

		$res = "SELECT * FROM `residente`";

		self::getConexion();

		$response = self::$cnx->prepare($res);

		$response->execute();

		return $response;

    }

    public  static  function getAptoResidente()
	{
		  $res = "SELECT `id`, `numero_apto` FROM `residente`";

			self::getConexion();

			$response = self::$cnx->prepare($res);

			$response->execute();

			return $response;
	}

}

