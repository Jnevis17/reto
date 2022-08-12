<?php

class Cliente
{
    // atributos

    private $IdCliente;
    private $Nombre = "Yeiner";
    private $Apellido;


    // Cracion del Constructoy
    public function __construct() {
    }

    //metodo SET IdCliente para asigna el valor
    public function setIdCliente($IdCliente){
        $this->IdCliente = $IdCliente;
    }

    //metodo GET IdCliente  para optener el valor
    public function getIdCliente(){
        return $this->IdCliente;
    }

    //metodo SET nombre
    public function setNombre($Nombre){
        $this-> Nombre = $Nombre;
    }

    //metodo GET nombre
    public function getNombre(){
     return $this-> Nombre;
    }

    //metodo SET Apellido
    public function setApellido($Apellido){
        $this->Apellido = $Apellido;
    }

    //metodo GET Apellido
    public function getApellido(){
        return $this->Apellido;
    }
}


/*$Cliente = new Cliente();
$Cliente -> setIdCliente(1);
$Cliente->setNombre("Jhon");
$Cliente->setApellido("Murillo");
echo " el iD es". $Cliente->getIdCliente().
" nombre". $Cliente->getNombre().
" apelligo". $Cliente->getApellido();*/