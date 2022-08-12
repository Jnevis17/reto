<?php
require_once('../conexion.php');

class CrudCliente{
    //creacion del constructor
    public function __construct(){}

    public function InsertarCliente($Cliente) //insertar Cliente
    {

        $Db = Db::Conectar();
        $Sql =  $Db->prepare('INSERT INTO datoscliente VALUES(:IdCliente,:Nombre,:Apellido)');

        $Sql->bindValue('IdCliente', $Cliente->getIdCliente());
        $Sql->bindValue('Nombre', $Cliente->getNombre());
        $Sql->bindValue('Apellido', $Cliente->getApellido());

       
        try {
            $Sql->execute(); // ejecuta el Query
            echo "registro exitoso";
        } catch (Exception $e) { //captura el error en el momento de insertar
            echo $e->getMessage();
            die();
        }
    }


    public function EditarCliente($cliente)/// funtion editar cliente
    {
        $Db = Db::conectar();
        $sql = $Db->prepare('UPDATE datoscliente SET Nombre=:Nombre, Apellido=:Apellido
        WHERE  IdCliente=:IdCliente');

        $sql->bindValue('IdCliente', $cliente->getIdCliente());
        $sql->bindValue('Nombre', $cliente->getNombre());
        $sql->bindValue('Apellido', $cliente->getApellido());

        try {
            $sql->execute();
            echo "Inserción Exitosa";
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function Eliminardatos($clientes)//funtion eliminar 
    {
        $Db = Db::conectar();
        $sql = $Db->prepare('DELETE FROM datoscliente WHERE  IdCliente=:IdCliente');
        $sql->bindValue('IdCliente', $clientes);

        try {
            $sql->execute();
            echo " Eliminación Exitosa";
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function ListarCliente(){ //funcion listar Clientes
        $Db = Db::conectar();
        $ListarClientes = [];
        if($Db != null ){   
            $var = 0;
            $sql = $Db->query('SELECT * FROM datoscliente');
            $sql->execute();
            foreach ($sql->fetchAll() as $clientes) {
                $cliente = new cliente();
                $cliente->setIdCliente($clientes['IdCliente']);
                $cliente->setNombre($clientes['Nombre']);
                $cliente->setApellido($clientes['Apellido']);

                $ListarClientes[] = $cliente;
            }

        }
        
       
        return $ListarClientes;
    }

    public function ObtenerCliente($IdCliente)
    {
        $Db = Db::conectar();
        $sql = $Db->prepare('SELECT * FROM datoscliente WHERE IdCliente=:IdCliente');
        $sql->bindValue('IdCliente', $IdCliente);
        //$dato = new datos();
        $MyCliente = new Cliente();
        try {
            $sql->execute();
            $Clientes = $sql->fetch();
            $MyCliente->setIdCliente($Clientes['IdCliente']);
            $MyCliente->setNombre($Clientes['Nombre']);
            $MyCliente->setApellido($Clientes['Apellido']);
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        return $MyCliente;
    }
}
?>