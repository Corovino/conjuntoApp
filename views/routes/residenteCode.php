<?php

include '../../controller/UserController.php';
/

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["apto"]) && isset($_POST["vehiculo"]) ) {

           $data =[
             "nombre" => $_POST['nombre'],
             "nombre" => $_POST['apto'],
             "nombre" => $_POST['vehiculo']
           ];

        
        

        if (UserController::postUsuarios()) {
            $usuario   = UserController::getResidente($txtUsuario, $txtPassword);
           
            $resultado = array("estado" => "true", "data" => $usuario );
            return print(json_encode($resultado));
            //header("location:dashboard/admin.php");
        }

    }
} 

$resultado = array("estado" => "false");
return print(json_encode($resultado));