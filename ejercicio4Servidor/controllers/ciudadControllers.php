<?php

function procesar(){
    include_once "./model/ciudadModel.php";
    $uri="http://localhost/DWES-UD7/ejercicio4Servidor/controllers/";
    $server = new SoapServer(null,array('uri'=>$uri));
    $server->addFunction("getCiudades");
    $server->handle();
}

?>