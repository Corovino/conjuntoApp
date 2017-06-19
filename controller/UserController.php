<?php
include_once '../../models/UsuarioDao.php';
include_once '../../models/residenteModel.php';
/**
* 
*/
class Usuario 
{
    private $response;

	public function getUsuarios()
	{
     
        $result = UsuarioDao::getAllUsers(); 

		return $result;        
	}

	public static function postUsuarios($data)
	{
         
		 $data = [

		 	"nombre" => $data['nombre'],
		 	"numero_apto" => $data['numero_apto'],
		 	"vehiculo" => $data['vehiculo']
		 ];

         $response = Residente::postResidente($data);

         if ( $response ) {
		     return self::getResidente();
         }else{

             return $response;
         }

	}

	public static function getResidente()
    {
        $response =  Residente::getResidente();
        return $response;
    }

    public static function getAllResidentes()
    {
         $response = Residente::getAllResidentes();
         return $response;
    }

    public static function getAptoResidente()
    {
        $response = Residente::getAptoResidente();
        return $response;
    }



}

