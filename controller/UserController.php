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

	public function postUsuarios($data)
	{
         
		 $data = [
		 	"nombre" => $data['nombre'],
		 	"numero_apto" => $data['numero_apto'],
		 	"vehiculo" => $data['vehiculo'],

		 ]

         $result = Resedente::postResidente($usuario);

         if($result){
            $response = true;
         }else{
            $response = false;
         }

         return $response;

	}

}

