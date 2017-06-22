<?php
include_once 'conexion.php';
class Vehiculo
{
    protected static $cnx;


    private static function getConexion()
    {
        self::$cnx = Conexion::conect();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    public  static function postVehiculo($vehiculo)
    {



        try{

            $query = "INSERT INTO `vehiculo` ( `modelo`, `marca`, `placa`, `apto_vehiculo`, `id_tipo`) VALUES (:modelo,:marca,:placa, :apto_vehiculo,:tipo)";

            self::getConexion();

            $resultado = self::$cnx->prepare($query);

            $resultado->bindParam(":modelo", $vehiculo['modelo']);
            $resultado->bindParam(":marca", $vehiculo['marca']);
            $resultado->bindParam(":placa", $vehiculo['placa']);
            $resultado->bindParam(":apto_vehiculo", $vehiculo['apto_vehiculo']);
            $resultado->bindParam(":tipo", $vehiculo['tipo']);


            ($resultado->execute()) ? $response = true : $response = false;

            return $response;

        }catch (PDOException $e){

            $response  = ["status" => "false", "err"=> $e];
            return $response;

        }




    }

    public static function getAllVehiculos(){

        $res = "SELECT * FROM `vehiculo`";

        self::getConexion();

        $response = self::$cnx->prepare($res);

        $response->execute();

        return $response;

    }
}