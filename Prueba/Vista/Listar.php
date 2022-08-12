<?php

require_once('../conexion.php');
require_once('../Modelo/ModeloCliente.php');
require_once('../Modelo/CrudCliente.php');

$CrudClientes = new CrudCliente();
$Cliente = new Cliente();

echo $Cliente->getNombre();
$ListarClientes  = $CrudClientes->ListarCliente();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar cliente</title>
</head>

<body>
    <table class="table table-hover" id="dev-table">
        <thead>
            <tr>
                <th scope="col"><small class="font-weight-bold">IdCliente</th>
                <th scope="col"><small class="font-weight-bold">Nombre </th>
                <th scope="col"><small class="font-weight-bold">Apellido</th>
                <th scope="col"><small class="font-weight-bold">Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            foreach ($ListarClientes as $Cliente) {
            ?>
                <tr>
                    <td><?php echo $Cliente->getIdCliente(); ?> </td>
                    <td><?php echo $Cliente->getNombre(); ?> </td>
                    <td><?php echo $Cliente->getApellido(); ?> </td>
                    <td><a href="editar.php?IdCliente=<?php echo $Cliente->getIdCliente(); ?>" >Editar</a>
                        <a href="../Controlador/controladorCliente.php?IdCliente=<?php echo $Cliente->getIdCliente(); ?>
                        &Accion=Eliminardatos" >Eliminar</a>
                    </td>
                </tr>
            <?php 
            
        }

            ?>

        </tbody>

    </table>
    </div>
    </div>
    </div>

</body>

</html>