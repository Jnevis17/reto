$(document).ready(function () {
    $("#FrmCliente").submit(function (event) { //Cuando se activa el evento Submit del formulario
        event.preventDefault(); //evitar el envio al servidor de la peticion
        if ($("#NombreCliente").val().length == 0) { //Nombre cliente
            alert("Todos los campos son obligarios");
        }
        else {
            // document.NombreCliente.submit(); //se envie la información su esta llena
            var url = "../Vista/ingresar.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $("#FrmCliente").serialize(),
                success: function (data) {
                    $("#mensaje").html(data);
                }
            })
        }
    });
});

