<?php
include_once '../../models/VehiculoModel.php';

class VehiculoController
{
    public static function postVehiculo($data)
    {
        $data = [

            "modelo" => $data["modelo"],
            "marca" => $data["marca"],
            "placa" => $data["placa"],
            "apto_vehiculo" => $data["apto_vehiculo"],
            "tipo" => $data["tipo"]

        ];

        $response = Vehiculo::postVehiculo($data);

        return $response;

    }


    public static function getAllVehiculos()
    {

        $response = Vehiculo::getAllVehiculos();

        return $response;

    }
}
