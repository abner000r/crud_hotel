<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Nuevos Clientes</h1>
        <div class="row">
                <div class="col col-4">

                    <form action="agregar_clientes" method="post">
                        <div class="mb-3">
                            <label for="txtCliente" class="form-label">Cliente Id:</label>
                            <input type="text" id="txtCliente" name="txtCliente" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido:</label>
                            <input type="text" id="txtApellido" name="txtApellido" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtNit" class="form-label">Nit:</label>
                            <input type="text" id="txtNit" name="txtNit" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Telefono:</label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtCorreo" class="form-label">Correo Electronico:</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Dirección:</label>
                            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtContra" class="form-label">Contraseña:</label>
                            <input type="text" id="txtContra" name="txtContra" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" id="btnGuardarClientes" name="btnGuardarClientes" class="form-control"
                                value="GuardarClientes">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>