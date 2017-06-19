<?php

require_once '../../controller/UserController.php';


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["apto"]) && isset($_POST["vehiculo"]) ) {

           $data =[
             "nombre" => $_POST['nombre'],
             "numero_apto" => $_POST['apto'],
             "vehiculo" => $_POST['vehiculo']
           ];


        $usuario = Usuario::postUsuarios($data);

        /*if($usuario){

            $resultado = array("estado" => "true", "data" => $usuario );
            return print (json_encode($resultado));
        }*/


        if ($usuario) {

            $resultado = array("estado" => "true", "data" => $usuario );
            return print(json_encode($resultado));
            //header("location:dashboard/admin.php");
        }

    }
} 

$resultado = array("estado" => "false", "data" => $data);
return print(json_encode($resultado));