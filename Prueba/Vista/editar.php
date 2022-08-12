<?php

require_once('../conexion.php');
require_once('../Modelo/ModeloCliente.php');
require_once('../Modelo/CrudCliente.php');

$CrudClientes = new crudCliente();
$Cliente = new Cliente();
$Cliente = $CrudClientes->ObtenerCliente($_GET["IdCliente"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <script src=" ../Js/jquery.js"></script>
</head>

<body>
    <h1 align="center">Editar Categorias</h1>
    <div>
        <form align="center" action="../Controlador/controladorCliente.php" method="POST">

            <div class="form-group">
                <label">IdCliente:</label>
                    <td><input type="number" readonly="readonly" name="IdCliente" Id="IdCliente" value="<?php echo $Cliente->getIdCliente(); ?>"></td>
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                <td><input type="text" name="NombreCliente" Id="NombreCliente" value="<?php echo $Cliente->getNombre(); ?>"></td>
            </div>

            <div class="form-group">
                <label>Apellido:</label>
                <td><input type="text" maxlength="10" name="ApellidoCliente" Id="ApellidoCliente" value="<?php echo $Cliente->getApellido(); ?>"></td>
            </div>

            <input type="hidden" name="editar">
            <button  type="submit" align="center">Editar</button>

        </form>
</body>
<script src=" ../Js/funciones.js"></script>

</html>