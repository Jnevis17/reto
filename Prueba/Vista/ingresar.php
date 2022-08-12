<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Cliente</title>
    <script src=" ../Js/jquery.js"></script>
</head>

<body>

    <h1 align="center"> Ingresar Cliente </h1>

    <form action="../Controlador/ContoladorCliente.php" name="FrmCliente" id="FrmCliente" method="POST">

        Nombre Cliente: <input type="text" name="NombreCliente" id="NombreCliente">
        <br>
        Apellido Cliente: <input type="text" name="ApellidoCliente" id="ApellidoCliente">

       <br>
 
        <input type="hidden" name="Registar">
        <button type="submit">Registar</button>

    </form>

    <p align="center" id="mensaje"> mensaje </p>

</body>
<script src=" ../Js/funciones.js"></script>

</html>
