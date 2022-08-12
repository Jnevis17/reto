<?php

require_once('../conexion.php');
require_once('../Modelo/ModeloCliente.php'); //Lamado del modelo
require_once('../Modelo/CrudCliente.php');


$Cliente = new Cliente(); //crear un objeto de la clase cliente
$CrudCiente = new crudCliente(); //crear un objeto de la clase Crud cliente

// si existe el resgitrar 
if (isset($_POST["Registar"])) {

    //$Cliente ->setIdCliente($_POST["IdCliente"]);
    $Cliente->setNombre($_POST["NombreCliente"]);
    $Cliente->setApellido($_POST["ApellidoCliente"]);

    $CrudCiente->InsertarCliente($Cliente);

    header("Location:../Vista/Listar.php");
    echo "Cliente registrado..";

/*if($NombreCliente!="" && $ApellidoCliente!=""){
    echo "Registro exitoso";
}
else{
    echo "problemas con el registro";
}*/


} else if (isset($_POST["editar"])) {

    $Cliente->setIdCliente($_POST["IdCliente"]);
    $Cliente->setNombre($_POST["NombreCliente"]);
    $Cliente->setApellido($_POST["ApellidoCliente"]);

    $CrudCiente->EditarCliente($Cliente);

    header("Location:../Vista/Listar.php");

    echo "Modificado ...";


}elseif ($_GET['Accion'] == "Eliminardatos") { 
    $CrudCiente->Eliminardatos($_GET["IdCliente"]);
 
    header("Location:../Vista/Listar.php");
}
?>