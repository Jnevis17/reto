<?php
/// conexion a ala base de datos 
class  Db
{
    private static $conexion = NULL;
    private function __construct(){}

    public static function Conectar()
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=localhost;dbname=cliente', 'root', '', $pdo_options);

        if(self::$conexion != null){
            return self::$conexion;
        } else {
            echo "Error al intentar conectar la bd";
            return null;
        }

        
    }
}

$Db = Db::Conectar(); //Llamando la cadena de conexión.
$mysqli = new mysqli("localhost", "root", "", "cliente");

?>